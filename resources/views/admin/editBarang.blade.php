@extends('admin.layouts.layout')
@section('barangActive')
active
@endsection
@section('content')
<h2 class="mb-4">Edit data barang</h2>
<form id="main" method="post" action="{{route('barang.update', $edit->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Merk Sepatu</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" name="merk" id="merk" placeholder="Masukkan Merk Sepatu" value="{{$edit->merk}}">
            <span class="messages"></span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tipe Sepatu</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" id="tipe" name="tipe" placeholder="Masukkan Tipe Sepatu" value="{{$edit->tipe}}">
            <span class="messages"></span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10">
            <input required type="number" class="form-control" name="harga" placeholder="Masukkan Harga Sepatu" value="{{$edit->harga}}">
            <span class="messages"></span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Published</label>
        <div class="col-sm-10">
            <select required name="published" class="form-control"">
                <option value="">Pilih ..</option>
                <option value="Yes" {{$edit->published == 'Yes' ? 'selected' : ''}}>Yes</option>
                <option value="No"{{$edit->published == 'No' ? 'selected' : ''}}>No</option>
            </select>
            <span class="messages"></span>
        </div>
    </div>
    <Button type="submit" class="btn btn-success btn-block">Ubah data barang</Button>
    <a href="{{URL::previous()}}" class="btn btn-dark btn-block">Kembali</a>
</form>
@endsection
