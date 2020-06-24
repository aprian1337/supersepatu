<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pembayaran | Super Sepatu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center mt-5">
        @if(session('failed'))
        <div class="alert alert-danger" role="alert">
            {{session('failed')}}
        </div>
        @endif
        <div class="card">
            <div class="card-body p-5">
                <h2 class="mb-4">Masukkan kode unik anda</h2>
                <form action="{{route('processConfirm')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="kode_unik" class="form-control form-control-lg"
                            placeholder="Ex : 1592931136T0CHz" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01" required>
                            <label class="custom-file-label text-left" for="inputGroupFile01">Unggah Bukti
                                Transaksi</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <a class="btn btn-lg btn-block btn-outline-dark" href="{{route('home')}}">Kembali</a>
                            </div>
                            <div class="col-8">
                                <button type="submit" class="btn btn-lg btn-dark btn-block">Confirm</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>
