@extends('layout/main')

@section('judul', 'kemeja')
@section('container')
<div class="container">
    <h1>Beranda</h1>
    <div class="row">
        @foreach($kemeja as $kemeja)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ URL::to('/') }}/images/menu/{{$kemeja->gambar}}" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title">{{$kemeja->nama}}</h5>
                <h5 class="card-title">{{$kemeja->harga}}</h5>
                <p class="card-text">{{$kemeja->deskripsi}}</p>
                <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection