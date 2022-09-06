@extends('layout.head')

@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Menu</h4>
            <form action="/update/{{$data->id}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama Menu</label>
                    <input type="text" class="form-control" name="nama_menu" placeholder="Nama Menu" value="{{$data->nama_menu}}">
                </div>
                <div class="form-group">
                    <label for="exampleSelectKategorir">Kategori</label>
                    <select class="form-control" name="kategori_id" id="exampleSelectKategori">
                        @foreach ( $data2 as $k )
                        <option value="{{ $k->id }}" {{ ($data->kategori_id == $k->id) ? 'selected' : '' }}>{{ $k->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="textarea" class="form-control" name="deskripsi" placeholder="Deskripsi" value="{{$data->deskripsi}}">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ $data->gambar[0] }}" class="rounded float-start" style="width: 80px" alt="">
                        </div>
                        <div class="col-9">
                            <div class="mb-3">
                                <label class="form-label">Gambar</label>
                                <input type="file" name="gambar" class="form-control" value="{{$data->gambar[0]}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" placeholder="Harga" value="{{$data->harga}}">
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@stop
