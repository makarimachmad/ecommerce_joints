@extends('layout/main')

@section('judul', 'JCloth')
@section('container')
<div class="container">
    <br><br><br>
    <div class="row">
    
    </div>
    <div class="row">
        @foreach($data as $data)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ URL::to('/') }}/images/menu/{{$data->gambar}}" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title">{{$data->nama}}</h5>
                <h5 class="card-title">Rp {{$data->harga}}</h5>
                <p class="card-text">{{$data->deskripsi}}</p>
                <a href="/{{$data->id}}" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection