@extends('admin.layouts.layout')
@section('title')
Konfirmasi Pembayaran
@endsection
@section('konfirmasiActive')
active
@endsection
@section('head')
<!-- Data Table Css -->
<link rel="stylesheet" type="text/css"
    href="{{asset('files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('files\assets\pages\data-table\css\buttons.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('files\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css')}}">
@endsection
@section('javascript')
<!-- data-table js -->
<script src="{{asset('files\bower_components\datatables.net\js\jquery.dataTables.min.js')}}"></script>
<script src="{{asset('files\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js')}}"></script>
<script src="{{asset('files\assets\pages\data-table\js\jszip.min.js')}}"></script>
<script src="{{asset('files\assets\pages\data-table\js\pdfmake.min.js')}}"></script>
<script src="{{asset('files\assets\pages\data-table\js\vfs_fonts.js')}}"></script>
<script src="{{asset('files\bower_components\datatables.net-buttons\js\buttons.print.min.js')}}"></script>
<script src="{{asset('files\bower_components\datatables.net-buttons\js\buttons.html5.min.js')}}"></script>
<script src="{{asset('files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('files\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js')}}"></script>
<script
    src="{{asset('files\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js')}}"></script>

<script src="{{asset('files\assets\pages\data-table\js\data-table-custom.js')}}"></script>
<!-- Validation js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script type="text/javascript" src="{{asset('files\assets\pages\form-validation\validate.js')}}"></script>
<script type="text/javascript" src="{{asset('files\assets\pages\form-validation\form-validation.js')}}"></script>
@endsection
@section('content')

@if(session('success'))
<div class="alert alert-success" role="alert">
    {{session('success')}}
</div>
@endif

<div class="card">
    <div class="card-header">
        <h5>Manajemen Data Konfirmasi</h5>
        <span>Data konfirmasi ini digunakan untuk menampilkan semua data yang telah melakukan konfirmasi.</span>

    </div>

    <div class="card-block">
        <div class="dt-responsive table-responsive">
            <table id="order-table" class="table table-striped table-bordered nowrap myTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Pembeli</th>
                        <th>Barang Yang Dibeli</th>
                        <th>No. Rekening</th>
                        <th>Total Bayar</th>
                        <th>Bukti Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach($konfirmasi as $data)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->nama_pembeli}}</td>
                        <td>{{$data->merk}} - {{$data->tipe}} // Ukuran : {{$data->ukuran_pembeli}}</td>
                        <td>{{$data->norek_pembeli}} - {{$data->bank_pembeli}}</td>
                        <td>{{$data->harga}}</td>
                        <td><a href="{{URL::asset('img/konfirmasi/'.$data->src)}}" target="_blank">Lihat bukti
                                pembayaran</a></td>
                        <td>
                            <form action="{{route('confirmed', $data->id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Konfirmasi Pembayaran</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nama Pembeli</th>
                        <th>Barang Yang Dibeli</th>
                        <th>No. Rekening</th>
                        <th>Total Bayar</th>
                        <th>Bukti Pembayaran</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>


<!-- Deferred rendering for speed table end -->
@endsection

