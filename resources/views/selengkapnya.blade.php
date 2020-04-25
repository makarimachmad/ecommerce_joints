@extends('layout/main')

@section('judul', 'Selengkapnya')
@section('container')
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ URL::to('/') }}/images/menu/{{$isi->gambar}}" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title">{{$isi->nama}}</h5>
                <h5 class="card-title">{{$isi->harga}}</h5>
                <p class="card-text">{{$isi->deskripsi}}</p>
                <a href="/{{$isi->id}}" class="btn btn-primary">Checkout</a>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection