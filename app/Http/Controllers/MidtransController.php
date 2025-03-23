<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Notification;
use Midtrans\Snap;

class MidtransController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('services.midtrans.server_key');
        Config::$clientKey = config('services.midtrans.client_key');
        Config::$isProduction = config('services.midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function createTransaction(Request $request)
    {
        // Validasi input
        $request->validate([
            'customer_name' => 'required|string',
            'customer_email' => 'required|email',
            'customer_phone' => 'nullable|string',
            'total_price' => 'required|numeric',
            'order_id' => 'required|string', // Bisa gunakan timestamp atau random string
        ]);

        // Buat order ID jika tidak ada
        $orderId = $request->order_id ?? 'ORDER-' . time();

        // Siapkan data transaksi
        $transactionDetails = [
            'order_id' => $orderId,
            'gross_amount' => $request->total_price,
        ];

        $customerDetails = [
            'first_name' => $request->customer_name,
            'email' => $request->customer_email,
            'phone' => $request->customer_phone,
        ];

        // Jika ada item dari form, kita bisa tambahkan
        $items = [];
        if ($request->has('items')) {
            foreach ($request->items as $item) {
                $items[] = [
                    'id' => $item['id'] ?? 'ITEM-' . rand(10000, 99999),
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'name' => $item['name'],
                ];
            }
        } else {
            // Jika tidak ada item terperinci, gunakan total sebagai satu item
            $items[] = [
                'id' => 'ITEM-' . rand(10000, 99999),
                'price' => $request->total_price,
                'quantity' => 1,
                'name' => 'Payment for order ' . $orderId,
            ];
        }

        $transactionData = [
            'transaction_details' => $transactionDetails,
            'customer_details' => $customerDetails,
            'item_details' => $items,
        ];

        try {
            // Dapatkan Snap Token
            $snapToken = Snap::getSnapToken($transactionData);

            // Simpan data transaksi di session untuk digunakan nanti
            session([
                'midtrans_order_id' => $orderId,
                'midtrans_amount' => $request->total_price,
                'midtrans_token' => $snapToken,
                'midtrans_status' => 'pending',
            ]);

            // Untuk API
            if ($request->wantsJson()) {
                return response()->json([
                    'status' => 'success',
                    'snap_token' => $snapToken,
                    'order_id' => $orderId
                ]);
            }

            // Untuk web view
            return view('payment.checkout', [
                'snap_token' => $snapToken,
                'order_id' => $orderId
            ]);
        } catch (\Exception $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'status' => 'error',
                    'message' => $e->getMessage()
                ], 500);
            }

            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function notificationHandler(Request $request)
    {
        try {
            $notif = new Notification();

            $transaction = $notif->transaction_status;
            $type = $notif->payment_type;
            $order_id = $notif->order_id;
            $fraud = $notif->fraud_status;

            // Log status transaksi
            // \Log::info('Midtrans notification received', [
            //     'order_id' => $order_id,
            //     'status' => $transaction,
            //     'payment_type' => $type,
            //     'fraud_status' => $fraud
            // ]);

            // Tentukan status pembayaran
            $paymentStatus = 'pending';

            if ($transaction == 'capture') {
                if ($type == 'credit_card') {
                    $paymentStatus = ($fraud == 'challenge') ? 'challenge' : 'success';
                } else {
                    $paymentStatus = 'success';
                }
            } else if ($transaction == 'settlement') {
                $paymentStatus = 'success';
            } else if ($transaction == 'pending') {
                $paymentStatus = 'pending';
            } else if ($transaction == 'deny') {
                $paymentStatus = 'denied';
            } else if ($transaction == 'expire') {
                $paymentStatus = 'expired';
            } else if ($transaction == 'cancel') {
                $paymentStatus = 'canceled';
            }

            // Di sini Anda bisa menyimpan status ini ke database, session, atau file
            // Contoh: simpan ke file (untuk demo)
            $transactionData = [
                'order_id' => $order_id,
                'status' => $paymentStatus,
                'amount' => $notif->gross_amount,
                'payment_type' => $type,
                'transaction_time' => $notif->transaction_time,
                'transaction_id' => $notif->transaction_id,
            ];

            // Storage::put('transactions/' . $order_id . '.json', json_encode($transactionData));

            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            // \Log::error('Midtrans notification error: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    public function finishRedirect(Request $request)
    {
        // Halaman yang muncul setelah pembayaran selesai
        return view('payment.finish', [
            'order_id' => $request->order_id,
            'status' => $request->transaction_status
        ]);
    }

    public function unfinishRedirect(Request $request)
    {
        // Halaman yang muncul jika pembayaran tidak selesai
        return view('payment.unfinish', [
            'order_id' => $request->order_id,
            'status' => $request->transaction_status
        ]);
    }

    public function errorRedirect(Request $request)
    {
        // Halaman yang muncul jika terjadi kesalahan
        return view('payment.error', [
            'order_id' => $request->order_id,
            'status' => $request->transaction_status,
            'message' => $request->message
        ]);
    }
}
