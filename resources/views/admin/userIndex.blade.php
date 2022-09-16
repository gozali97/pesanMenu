@extends('layout.main')

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="card-header bg-white pb-4">
                    <h4 class="text-blue h4 d-inline">Tabel User</h4>
                    <button type="button" class="btn btn-sm btn-success d-inline float-right" data-toggle="modal" data-target="#exampleModal">
                        <i class="icon-copy fi-plus"></i> Tambah
                    </button>
                </div>
                <div class="card-body mt-3">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1 ?>
                                @foreach ($data as $user)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <a type="button" class="btn btn-info d-inline" href="">Edit</a>
                                        <a type="button" class="btn btn-danger d-inline" href="">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
