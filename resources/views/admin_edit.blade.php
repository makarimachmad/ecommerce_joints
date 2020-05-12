@extends('layout/main_admin')

@section('judul','admin | edit')
@section('container')
<br><br><br>
<div class="container">
    <h1>Edit Data</h1>
    <div class="row justify-content-md-center">
        <div class="col card">
            <form method="post" action="/admin/update/{{$admin->id}}" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategori" placeholder="Katgori pakaian" name="kategori" required value = "{{$admin->kategori}}">
                </div>
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" name="nama" required value = "{{$admin->nama}}">
                    
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Harga" name="harga" required value = "{{$admin->harga}}">
                
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="3" name="deskripsi" required><?php echo $admin->deskripsi ?></textarea>
                
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <p>Foto lama</p>
                            <img src="{{ URL::to('/') }}/images/menu/{{$admin->gambar}}" class="card-img-top .img-responsive" width=50%>
                        </div>
                        
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"></label>
                            <input type="file" class="form-control-file @error('exampleFormControlFile1') is-invalid @enderror" id="exampleFormControlFile1" name="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
                <br><br>
                <button type="submit" class="btn btn-primary justify-content-md-center">Ubah</button>
            </form>
            <br>
        </div>
        <br><br>
    </div>
</div>
@endsection