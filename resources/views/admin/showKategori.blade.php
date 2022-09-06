@extends('layout.head')

@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Kategori</h4>
            <form action="/update/{{$data->id}}" method="POST" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori" value="{{$data->nama_kategori}}">
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@stop
