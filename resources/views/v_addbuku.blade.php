@extends('layout.v_template')

@section('title')
<h2>Tambah Guru</h2>
@endsection

@section('content')
<form action="/buku/insert" method="POST" enctype="multipart/form-data">
    @csrf
<div class="content">
    <div class="row">
        <div class="col-sm-6">
    <div class="form-group">
       <label>ID</label>
       <input name="id_buku" class="form-control" value="{{ old('id_buku') }}">
       <div class="text-danger">
        @error('id_buku')
            {{ $message }}
        @enderror
       </div>
    </div>
    <div class="form-group">
       <label>Judul Buku</label>
       <input name="judul_buku" class="form-control" value="{{ old('judul_buku') }}">
       <div class="text-danger">
        @error('judul_buku')
            {{ $message }}
        @enderror
       </div>
    </div>
    <div class="form-group">
       <label>Kategori</label>
       <input name="kategori" class="form-control" value="{{ old('kategori') }}">
       <div class="text-danger">
        @error('kategori')
            {{ $message }}
        @enderror
       </div>
    </div>
    <div class="form-group">
       <label>Penulis</label>
       <input name="penulis" class="form-control" value="{{ old('penulis') }}">
       <div class="text-danger">
        @error('penulis')
            {{ $message }}
        @enderror
       </div>
    </div>
    <div class="form-group">
       <label>Penerbit</label>
       <input name="penerbit" class="form-control" value="{{ old('penerbit') }}">
       <div class="text-danger">
        @error('penerbit')
            {{ $message }}
        @enderror
       </div>
    </div>
    <div class="form-group">
       <label>Foto Buku</label>
       <input type="file" name="foto_buku" class="form-control">
       <div class="text-danger">
        @error('foto_buku')
            {{ $message }}
        @enderror
       </div>
    </div>
    <div class="form-group">
       <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </div>
        </div>
    </div>
</div>
</form>

@endsection