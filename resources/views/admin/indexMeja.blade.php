@extends('layout.main')

@section('content')
<style>
    .img-kotak {
        border-radius: 0% !important;
        width: 60% !important;
        height: 60% !important;
    }

</style>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah No Meja</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/nomeja/insert" method="POST" class="forms-sample">
                                        @csrf
                                        <div class="form-group">
                                            <label>No Meja</label>
                                            <input type="number" class="form-control" name="no_meja" placeholder="No Meja">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
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
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> No </th>
                                    <th> No Meja </th>
                                    <th> QR Code </th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1 ?>
                                @foreach ( $data as $m )
                                <tr>
                                    <td> {{ $no++}} </td>
                                    <td> {{$m->no_meja}} </td>
                                    <td> <img class="img-kotak" src={{__('https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=').url('/scan?code=').$m->qr_code}}> </td>
                                    <td style="width: 30%">
                                        <a href="/shownomeja/{{ $m->id }}" class="btn btn-sm btn-info">Edit</a>
                                        <a href="/print?code={{$m->qr_code}}" class="btn btn-sm btn-warning">print</a>
                                        <a onclick="return confirm('Apa anda yakin ingin menghapus no meja ?')" href="/nomeja/delete/{{$m->id}}" class="btn btn-sm btn-danger delete">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @stop
