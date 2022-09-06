@extends('layout.usermain')

@section('content')
<div class="visible-print text-center">
    <h1>Laravel 8 - QR Code Generator Example</h1>

    <img src="{{ url('https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=')}}"> alt="">

    <p>example by ItSolutionStuf.com.</p>
</div>
