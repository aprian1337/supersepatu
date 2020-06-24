@extends('admin.layouts.layout')
@section('title')
Transaksi
@endsection
@section('transaksiActive')
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
        <h5>Manajemen Data Transaksi</h5>
        <span>Data transaksi ini digunakan untuk menampilkan semua transaksi baik yang sudah dibayar maupun belum.</span>

    </div>

    <div class="card-block">
        <div class="dt-responsive table-responsive">
            <table id="order-table" class="table table-striped table-bordered nowrap">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID Barang</th>
                        <th>Nama Pembeli</th>
                        <th>Ukuran</th>
                        <th>No. HP</th>
                        <th>Alamat</th>
                        <th>Bank</th>
                        <th>No. Rek</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transaksi as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->id_barang}}</td>
                        <td>{{$data->nama_pembeli}}</td>
                        <td>{{$data->ukuran_pembeli}}</td>
                        <td>{{$data->nohp_pembeli}}</td>
                        <td>{{$data->alamat_pembeli}}</td>
                        <td>{{$data->bank_pembeli}}</td>
                        <td>{{$data->norek_pembeli}}</td>
                        <td>{{$data->status}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>ID Barang</th>
                        <th>Nama Pembeli</th>
                        <th>Ukuran</th>
                        <th>No. HP</th>
                        <th>Alamat</th>
                        <th>Bank</th>
                        <th>No. Rek</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<!-- Deferred rendering for speed table end -->
@endsection
