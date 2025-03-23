<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Checkout Form</h4>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('midtrans.create') }}" method="POST">
                            @csrf
                            <input type="hidden" name="order_id" value="ORDER-{{ time() }}">

                            <div class="mb-3">
                                <label for="customer_name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="customer_name" name="customer_name" required>
                            </div>

                            <div class="mb-3">
                                <label for="customer_email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="customer_email" name="customer_email" required>
                            </div>

                            <div class="mb-3">
                                <label for="customer_phone" class="form-label">No. Telepon</label>
                                <input type="text" class="form-control" id="customer_phone" name="customer_phone">
                            </div>

                            <div class="mb-3">
                                <label for="total_price" class="form-label">Total Pembayaran (Rp)</label>
                                <input type="number" class="form-control" id="total_price" name="total_price" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Lanjutkan ke Pembayaran</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
