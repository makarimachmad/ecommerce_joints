@extends('layout/main_admin')

@section('judul','admin | create')
@section('container')
<br><br><br>
<div class="container">
    <h1>Tambah Data</h1>
    <div class="row justify-content-md-center">
        <div class="col card">
            <form method="post" action="/admin/proses" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategori" placeholder="Katgori pakaian" name="kategori" required value = "{{old('kategori')}}">
                </div>
                <div class="form-group">nam
                    <label for="Nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" name="nama" required value = "{{old('nama')}}">
                    
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Harga" name="harga" required value = "{{old('harga')}}">
                    
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="3" name="deskripsi" required value = "{{old('deskripsi')}}"></textarea>
                    
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1"></label>
                    <input type="file" class="form-control-file @error('exampleFormControlFile1') is-invalid @enderror" id="exampleFormControlFile1" name="exampleFormControlFile1">
                    
                </div>
                <br><br>
                <button type="submit" class="btn btn-primary justify-content-md-center">Simpan</button>
            </form>
            <br>
        </div>
        <br><br>
    </div>
</div>
@endsection