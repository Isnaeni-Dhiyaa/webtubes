@extends('layout.v_template')

@section('content')

<table class="table">
    <tr>
        <th width="100px">ID</th>
        <th width="30px">:</th>
        <th>{{ $buku->id_buku }}</th>
    </tr>
    <tr>
        <th width="100px">Judul Buku</th>
        <th width="30px">:</th>
        <th>{{ $buku->judul_buku }}</th>
    </tr>
    <tr>
        <th width="100px">Kategori</th>
        <th width="30px">:</th>
        <th>{{ $buku->kategori }}</th>
    </tr>
    <tr>
        <th width="100px">Penulis</th>
        <th width="30px">:</th>
        <th>{{ $buku->penulis }}</th>
    </tr>
    <tr>
        <th width="100px">Penerbit</th>
        <th width="30px">:</th>
        <th>{{ $buku->penerbit }}</th>
    </tr>
    <tr>
        <th width="100px">Foto</th>
        <th width="30px">:</th>
        <th><img src="{{ url('foto_buku/'.$buku->foto_buku) }}" width="400px" ></th>
    </tr>
    <tr>
        <th><a href="/buku" class="btn btn-success tbn-sm">Kembali</a></th>
    </tr>
</table>

@endsection