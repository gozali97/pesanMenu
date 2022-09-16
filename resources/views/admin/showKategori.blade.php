@extends('layout.main')

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mt-2">Edit Kategori</h4>
                </div>
                <div class="card-body">
                    <form action="/update/{{$data->id}}" method="POST" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori" value="{{$data->nama_kategori}}">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a href="/kategori" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
