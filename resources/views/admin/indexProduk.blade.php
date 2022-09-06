@extends('layout.head')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header bg-gradient-info">
            <h2 class="text-light">Tabel Produk</h2>
        </div>
        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="mr-2 mdi mdi-library-plus"></i>Tambah
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/store" method="POST" class="forms-sample" enctype="multipart/form-data">
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
                                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                        {{-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div> --}}
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $message}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @elseif (($message = Session::get('delete')))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                            <td style="width: 15px">
                                <a href="/showproduk/{{ $p->id }}" class="btn btn-sm btn-info">Edit</a>
                                <a onclick="return confirm('Apa anda yakin ingin menghapus produk ?')" href="/delete/{{$p->id}}" class="btn btn-sm btn-danger delete">Hapus</a>
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
@stop
