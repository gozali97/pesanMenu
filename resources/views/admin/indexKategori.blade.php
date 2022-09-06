@extends('layout.head')

@section('content')
<div class="col-lg-10 grid-margin stretch-card">
    <div class="card">
        <div class="card-header bg-gradient-warning">
            <h2 class="">Tabel Kategori</h2>
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
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/store" method="POST" class="forms-sample">
                                @csrf
                                <div class="form-group">
                                    <label>Nama Kategori</label>
                                    <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori">
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
                        <td style="width: 15px">
                            <a href="/showkategori/{{ $k->id }}" class="btn btn-sm btn-info">Edit</a>
                            <a onclick="return confirm('Apa anda yakin ingin menghapus kategori ini ?')" href="/delete/{{$k->id}}" class="btn btn-sm btn-danger delete">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
