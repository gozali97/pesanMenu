@extends('layout.head')

@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit No Meja</h4>
            <form action="/update/{{$data->id}}" method="POST" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label>No Meja</label>
                    <input type="number" class="form-control" name="no_meja" placeholder="No Meja" value="{{$data->no_meja}}">
                </div>
                <div class="form-group">
                    <label>No Meja</label>
                    <input type="text" class="form-control" name="qr_code" placeholder="QR Code" value="{{$data->qr_code}}">
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@stop
