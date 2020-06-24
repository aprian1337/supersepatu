@extends('admin.layouts.layout')
@section('title')
Kelola Barang
@endsection
@section('barangActive')
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
        <h5>Manajemen Data Barang</h5>
        <span>Data barang ini digunakan untuk menampilkan barang yang ada pada homepage.</span>

    </div>

    <div class="card-block">
        <div class="dt-responsive table-responsive">
            <button type="button" class="btn float-right btn-sm ml-3 btn-primary waves-effect" data-toggle="modal"
                data-target="#large-Modal"><i class="feather icon-upload"></i> Tambah barang</button>
            <table id="order-table" class="table table-striped table-bordered nowrap">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Foto barang</th>
                        <th>Merk</th>
                        <th>Tipe</th>
                        <th>Harga</th>
                        <th>Published</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barang as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>
                            <a href="{{URL::asset('/img/'.$data->src)}}" target="_blank">Lihat foto</a>
                        </td>
                        <td>{{$data->merk}}</td>
                        <td>{{$data->tipe}}</td>
                        <td>{{$data->harga}}</td>
                        <td>{{$data->published}}</td>
                        <td>
                            <form action="{{route('barang.destroy', $data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                <a href="{{route('barang.edit', $data->id)}}" class="btn btn-twitter btn-sm">Edit</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Foto barang</th>
                        <th>Merk</th>
                        <th>Tipe</th>
                        <th>Harga</th>
                        <th>Published</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Barang</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="main" method="post" action="{{route('barang.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Merk Sepatu</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" name="merk" id="merk"
                                placeholder="Masukkan Merk Sepatu">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tipe Sepatu</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="tipe" name="tipe"
                                placeholder="Masukkan Tipe Sepatu">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input required type="number" class="form-control" name="harga"
                                placeholder="Masukkan Harga Sepatu">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Unggah Gambar</label>
                        <div class="col-sm-10">
                            <input required type="file" name="file" class="form-control">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Published</label>
                        <div class="col-sm-10">
                            <select required name="published" class="form-control">
                                <option value="">Pilih ..</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            <span class="messages"></span>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light ">Simpan barang</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Deferred rendering for speed table end -->
@endsection
