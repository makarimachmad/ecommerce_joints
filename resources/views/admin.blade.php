@extends('layout/main_admin')

@section('judul', 'Admin')
@section('container')
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-4">
            <a href="/admin/create" class="btn btn-primary">Tambah Data</a>
        </div>
        
    </div>
    <br><br>
    <div class="row">
        @foreach($data as $data)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ URL::to('/') }}/images/menu/{{$data->gambar}}" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title">{{$data->nama}}</h5>
                <h5 class="card-title">{{$data->harga}}</h5>
                <p class="card-text">{{$data->deskripsi}}</p>
                <a href="/admin/edit/{{$data->id}}" class="btn btn-warning">Edit</a>
                <a href="/admin/destroy/{{$data->id}}" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection