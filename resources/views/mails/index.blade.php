<!-- resources/views/mails/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kontak dari Website</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f6f6f6;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }
        .header {
            text-align: center;
            padding: 20px 0;
            background-color: #f9d2e1;
        }
        .header h1 {
            color: #d6336c;
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
        }
        .footer {
            text-align: center;
            padding: 15px 0;
            font-size: 12px;
            color: #666666;
            background-color: #f3f3f3;
        }
        .message-box {
            background-color: #f9f9f9;
            border-left: 4px solid #d6336c;
            padding: 15px;
            margin: 15px 0;
        }
        .field {
            margin-bottom: 10px;
        }
        .field strong {
            width: 100px;
            display: inline-block;
            color: #d6336c;
        }
        .logo {
            max-width: 150px;
            margin: 0 auto;
            display: block;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #d6336c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Pesisir Wedding Organizer</h1>
        </div>
        <div class="content">
            <h2>Pesan Kontak Baru</h2>
            <p>Anda telah menerima pesan baru dari website Pesisir Wedding Organizer.</p>

            <div class="field">
                <strong>Nama:</strong> {{ $name }}
            </div>
            <div class="field">
                <strong>Email:</strong> {{ $email }}
            </div>

            <div class="message-box">
                <p><strong>Pesan:</strong></p>
                <p>{{ $messageContent }}</p>
            </div>

            <p>Mohon untuk segera menindaklanjuti pesan ini dalam waktu 24 jam.</p>

            <div style="text-align: center;">
                <a href="mailto:{{ $email }}" class="btn">Balas Email</a>
            </div>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Pesisir Wedding Organizer. Semua Hak Dilindungi.</p>
            <p>Jl. Contoh Alamat No.123, Jakarta | +62 123 4567 890</p>
        </div>
    </div>
</body>
</html>
