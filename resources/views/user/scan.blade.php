@extends('layout.usermain')

@section('content')
<div class="wrapper">
    <div class="wrapper-body">
        {{-- @foreach ( $data as $code)
        <img src="{{ url('https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=').url('/scan?code=').$code->qr_code}}" alt="">
        @endforeach --}}

    </div>
</div>
<script>
    window.setTimeout(function() {
        window.location = "/menu";
    }, 2000);

</script>
@stop
