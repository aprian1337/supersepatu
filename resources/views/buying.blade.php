<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian | Super Sepatu - Sepatu India Berkualitas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://kit.fontawesome.com/75841d3669.js" crossorigin="anonymous"></script>
    <style>
        .select2-selection__rendered {
            line-height: 40px !important;
        }

        .select2-container .select2-selection--single {
            height: 50px !important;
        }

        .select2-selection__arrow {
            height: 50px !important;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
        @endif
        <div class="card mb-5">
            <h5 class="card-header bg-success text-white"><i class="far fa-edit"></i>&nbsp; Form pembelian super
                sepatu</h5>
            <div class="card-body">
                <p class="card-text">Isi data di bawah ini dengan benar untuk memudahkan proses transaksi.</p>
                <form action="{{route('processBuying')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id_barang" value="{{$idBarang}}">
                    <input type="hidden" name="kode_unik" value="{{time().\Illuminate\Support\Str::random(5)}}">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama pembeli</label>
                        <input type="text" name="nama_pembeli" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukkan nama anda" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ukuran sepatu</label>
                        <select name="ukuran_pembeli" class="form-control">
                            <option value="">Pilih ukuran..</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">No. HP</label>
                        <input type="number" name="nohp_pembeli" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukkan nomor hp anda" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alamat lengkap</label>
                        <textarea name="alamat_pembeli" id="" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis bank</label>
                        <select name="bank_pembeli" class="form-control form-control-lg" id="select2">
                            <option value="">Pilih bank..</option>
                            <option value="Bank Mandiri">Bank Mandiri</option>
                            <option value="Bank BRI">Bank BRI</option>
                            <option value="Bank BNI">Bank BNI</option>
                            <option value="Bank BCA">Bank BCA</option>
                            <option value="Bank BTN">Bank BTN</option>
                            <option value="Bank BPD JATIM">Bank BPD JATIM</option>
                            <option value="Bank CIMB NIAGA">Bank CIMB NIAGA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">No. Rekening</label>
                        <input type="number" name="norek_pembeli" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukkan nomor rekening" required>
                    </div>
                    <hr class="mt-4">
                    <h3><span class="badge badge-primary">Detail transaksi</span></h3>
                    <p>Jenis sepatu yang dipesan : {{$buy->merk}} - {{$buy->tipe}}</p>
                    <p>Total harga yang harus dibayarkan : Rp. {{number_format($buy->harga, 2, ',', '.')}}</p>
                    <hr class="mt-4">
                    <div class="row">
                        <div class="col-4"><a href="{{URL::previous()}}"
                                class="btn btn-lg btn-outline-dark btn-block mt-4">Kembali</a></div>
                        <div class="col-8"><button type="submit" class="btn btn-lg btn-success btn-block mt-4">Kirim
                                Data</button></div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        $("#select2").select2({
            tags: true
        });
    </script>

</body>

</html>
