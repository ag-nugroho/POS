<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styleSales.css') }}">
    <title>Penjualan</title>
</head>
<body>
    <h1>Penjualan</h1>
    <p>Transaksi:</p>

    <p>Category: Food & Beverage</p>
    <div class="transaction-item">
        2024-09-01 | Food & Beverage | Nasi Goreng
        <span class="status-label success"> Transaksi Berhasil </span>
    </div>
    <div class="transaction-item">
        2024-09-01 | Food & Beverage | Es Teh
        <span class="status-label processing"> Proses </span>
    </div>
    <div class="transaction-item">
        2024-09-02 | Food & Beverage | Ayam Geprek
        <span class="status-label failed"> Transaksi Gagal </span>
    </div>
    <hr>
    <p>Category: Baby Kid</p>
    <div class="transaction-item">
        2024-09-03 | Baby Kid | Johnson’s Baby
        <span class="status-label success"> Transaksi Berhasil </span>
    </div>
    <div class="transaction-item">
        2024-09-05 | Baby Kid | Zwitsal
        <span class="status-label failed"> Transaksi Gagal </span>
    </div>
</body>
</html>
