@extends('layout.main')

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header bg-gradient-info">
                    <h2 class="d-inline">Tabel Produk</h2>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-success d-inline float-right" data-toggle="modal" data-target="#exampleModal">
                        <i class="icon-copy fi-plus"></i> Tambah
                    </button>
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
                                    <form action="/produk/store" method="POST" class="forms-sample" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Nama Menu</label>
                                            <input type="text" class="form-control" name="nama_menu" placeholder="Nama Menu">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectKategorir">Kategori</label>
                                            <select class="form-control" name="kategori_id" id="exampleSelectKategori">
                                                <option selected>-- Pilih Kategori --</option>
                                                @foreach ( $data2 as $k )
                                                <option value="{{ $k->id }}">{{$k->nama_kategori}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" id="exampleTextarea1" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="gambar[]" multiple accept="image/*" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="number" name="harga" class="form-control" placeholder="Harga">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
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
                                <th> Nama Menu </th>
                                <th> Kategori </th>
                                <th> Deskripsi </th>
                                <th> Gambar </th>
                                <th> Harga </th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            @foreach ( $data as $p )
                            <tr>
                                <td> {{ $no++}} </td>
                                <td> {{$p->nama_menu}} </td>
                                <td> {{$p->kategori->nama_kategori}} </td>
                                <td> {{$p->deskripsi}} </td>
                                <td>
                                    <img style="height: 70px;width: 70%" src="{{ $p->gambar[0] }}" alt="">
                                </td>
                                <td>Rp. {{ number_format($p->harga, 0,'', '.')}} </td>
                                <td style="width: 20%">
                                    <a href="/produk/showproduk/{{ $p->id }}" class="btn btn-sm btn-info">Edit</a>
                                    <a onclick="return confirm('Apa anda yakin ingin menghapus produk ?')" href="/produk/delete/{{$p->id}}" class="btn btn-sm btn-danger delete">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $data->links()}} --}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop
