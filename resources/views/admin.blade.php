@extends('layout/main_admin')

@section('judul', 'Admin')
@section('container')
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-4">
            <a href="/admin/create" class="btn btn-primary">Tambah Data</a>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
    </div>
    <br><br>
    <div class="row">
        @foreach($data as $data)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ URL::to('/') }}/images/menu/{{$data->gambar}}" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title">{{$data->nama}}</h5>
                <h5 class="card-title">Rp {{$data->harga}}</h5>
                <p class="card-text">{{$data->deskripsi}}</p>
                <a href="/admin/edit/{{$data->id}}" class="btn btn-warning">Edit</a>
                <form action="admin/destroy/{{$data->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection