<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Selesai | Super Sepatu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="bold">Kode Unik Pesanan Anda</h1>
                <h1>{{$kode_unik}}</h1>
                <h2>Bank Mandiri</h2>
                <h2>90040212318521 (an. Buwung Puyuh)</h2>
                <h3>Total tagihan : Rp. {{number_format($tagihan->harga,2,',','.')}}</h3>
                <p>Silakan bayar melalui alat pembayaran yang sudah anda pilih.</p>
                <p>Berita transfer silakan menggunakan kode unik yang sudah tertera di atas</p>
                <a href="{{route('home')}}" class="btn btn-dark btn-block">Kembali ke halaman utama</a>
            </div>
        </div>

    </div>
</body>

</html>
