<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2>Checkout</h2>
                <p>Order ID: {{ $order_id }}</p>
                <button id="pay-button" class="btn btn-primary btn-lg">Bayar Sekarang</button>
            </div>
        </div>
    </div>

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.client_key') }}"></script>
    <script>
        document.getElementById('pay-button').onclick = function() {
            snap.pay('{{ $snap_token }}', {
                onSuccess: function(result) {
                    console.log(result);
                    window.location.href = '{{ route("midtrans.finish") }}?order_id={{ $order_id }}&transaction_status=success';
                },
                onPending: function(result) {
                    console.log(result);
                    window.location.href = '{{ route("midtrans.unfinish") }}?order_id={{ $order_id }}&transaction_status=pending';
                },
                onError: function(result) {
                    console.log(result);
                    window.location.href = '{{ route("midtrans.error") }}?order_id={{ $order_id }}&transaction_status=error&message=' + result.status_message;
                },
                onClose: function() {
                    window.location.href = '{{ route("midtrans.unfinish") }}?order_id={{ $order_id }}&transaction_status=close';
                }
            });
        };
    </script>
</body>
</html>
