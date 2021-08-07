@extends('layout.v_template')

@section('title')
<h2>Daftar Buru</h2>
@endsection

@section('content')
<a href="/buku/add" class="btn btn-primary btn-sm">Add</a> <br>

@if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Sukses!</h5>
        {{ session('pesan')}}.
    </div>
@endif
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Kategori</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Foto Buku</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($buku as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->id_buku }}</td>
                <td>{{ $data->judul_buku }}</td>
                <td>{{ $data->kategori }}</td>
                <td>{{ $data->penulis }}</td>
                <td>{{ $data->penerbit }}</td>
                <td><img src="{{ url('foto_buku/'.$data->foto_buku) }}" width="100px" ></td>
                <td>
                    <a href="/buku/detail/{{ $data->id_buku }}" class="btn btn-sm btn-success">Detail</a>
                    <a href="/buku/edit/{{ $data->id_buku }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_buku }}">
                        Delete
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@foreach ($buku as $data)

<div class="modal fade" id="delete{{ $data->id_buku }}">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">{{ $data->judul_buku }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
              <a href="/buku/delete/{{ $data->id_buku }}" class="btn btn-outline-light">Yes</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
@endforeach

@endsection