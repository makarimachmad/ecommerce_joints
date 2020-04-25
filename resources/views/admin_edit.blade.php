@extends('layout/main_admin')

@section('judul','admin| edit')
@section('container')
<br><br><br>
<div class="container">
    <div class="row">
        <form>
            <div class="form-group">
                <label for="exampleInputKategori">Kategori</label>
                <input type="email" class="form-control" id="kategori" placeholder="Katgori pakaian">
            </div>
            <div class="form-group">
                <label for="exampleInputNama">Nama</label>
                <input type="password" class="form-control" id="nama" placeholder="Nama">
            </div>
            <div class="form-group">
                <label for="exampleInputHarga">Harga</label>
                <input type="password" class="form-control" id="harga" placeholder="Harga">
            </div>
            <div class="form-group">
                <label for="exampleFormDeskripsi">Deskripsi</label>
                <textarea class="form-control" id="exampleFormDeskripsi" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1"></label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection