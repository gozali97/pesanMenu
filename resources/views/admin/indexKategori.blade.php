@extends('layout.main')

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header bg-gradient-warning">
                    <h2 class="d-inline">Tabel Kategori</h2>
                    <div class="float-right">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-success d-inline" data-toggle="modal" data-target="#exampleModal">
                            <i class="icon-copy fi-plus"></i> Tambah
                        </button>
                    </div>
                </div>
                <div class="card-body">

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/kategori/store" method="POST" class="forms-sample">
                                        @csrf
                                        <div class="form-group">
                                            <label>Nama Kategori</label>
                                            <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $message}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @elseif (($message = Session::get('delete')))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $message}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Nama Kategori </th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1 ?>
                            @foreach ( $data as $k )
                            <tr>
                                <td> {{ $no++}} </td>
                                <td> {{$k->nama_kategori}} </td>
                                <td style="width: 30%;">
                                    <a href="/showkategori/{{ $k->id }}" class="btn btn-sm" data-bgcolor="#0078AA" data-color="#ffffff"><i class="fa fa-pencil"></i> Edit</a>
                                    {{-- <a href=" /showkategori/{{ $k->id }}" class="btn btn-sm d-inline" data-bgcolor="#0078AA" data-color="#ffffff"><i class="fa fa-pencil"></i> Edit</a> --}}
                                    <a onclick="return confirm('Apa anda yakin ingin menghapus kategori ini ?')" type="button" class="btn btn-sm d-inline" href="/kategori/delete/{{$k->id}}" data-bgcolor="#FA7070" data-color="#ffffff"><i class="fa fa-trash"></i>Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @stop
