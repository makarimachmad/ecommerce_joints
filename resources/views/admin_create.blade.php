@extends('layout/main_admin')

@section('judul','admin| create')
@section('container')
<br><br><br>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col card">
            <form method="post" action=/admin enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" class="form-control" id="kategori" placeholder="Katgori pakaian" name="kategori">
                </div>
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1"></label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="exampleFormControlFile1">
                </div>
                <br><br>
                <button type="submit" class="btn btn-primary justify-content-md-center">Submit</button>
            </form>
            <br>
        </div>
        <br><br>
    </div>
</div>
@endsection