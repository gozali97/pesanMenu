@extends('layout.usermain')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center" style="font-weight: 700">Makanan</h3>
        </div>
        @foreach ( $makanan as $food)
        <div class="col-sm-6 col-md-4 my-3">
            <!-- link artikel -->
            {{-- <a href="/showmenu/{{ $food->id }}" class="text-decoration-none link-dark"> --}}
            <div class="card card-body rounded-5 h-100 border-0 shadow">
                <div class="overflow-hidden rounded-5">
                    <!-- gambar artikel -->
                    <img src="{{ $food->gambar[0] }}" alt="" class="img-fluid" style="height: 100%; width: 100%">
                </div>
                <!-- judul artikel -->
                <h6 class="my-2 text-center">{{$food->nama_menu}}</h6>
                <!-- tanggal artikel -->
                <p class="text-secondary small my-0 text-center mb-3">Rp. {{ number_format($food->harga, 0,'', '.')}}</p>
                <a type="button" class="btn btn-gradient-success btn-rounded btn-fw" href="/tambah/{{$food->id}}">Pilih Menu</a>
            </div>
            </a>
        </div>
        @endforeach
        <div class="col-12">
            <h3 class="text-center" style="font-weight: 700">Minuman</h3>
        </div>
        @foreach ( $minuman as $drink)

        <div class="col-sm-6 col-md-4 my-3">
            <!-- link artikel -->
            <a href="/showmenu/{{ $drink->id }}" class="text-decoration-none link-dark" target="_blank">
                <div class="card card-body rounded-5 h-100 border-0 shadow">
                    <div class="overflow-hidden rounded-5">
                        <!-- gambar artikel -->
                        <img src="{{ $drink->gambar[0] }}" style="height: 70%; width: 80%">
                    </div>
                    <!-- judul artikel -->
                    <h6 class="my-3 text-center">{{$drink->nama_menu}}</h6>
                    <!-- tanggal artikel -->
                    <p class="text-secondary small my-0 text-center mb-3">Rp. {{ number_format($drink->harga, 0,'', '.')}}</p>
                    <a type="button" class="btn btn-gradient-success btn-rounded btn-fw" href="/tambah/{{$drink->id}}">Pilih Menu</a>
                </div>
            </a>
        </div>
        @endforeach
        <div class="col-12">
            <h3 class="text-center" style="font-weight: 700">Dessert</h3>
        </div>
        @foreach ( $dessert as $d)
        <div class="col-sm-6 col-md-4 my-3">
            <!-- link artikel -->
            <a href="/showmenu/{{ $d->id }}" class="text-decoration-none link-dark" target="_blank">
                <div class="card card-body rounded-5 h-100 border-0 shadow">
                    <div class="overflow-hidden rounded-5">
                        <!-- gambar artikel -->
                        <img src="{{ $d->gambar[0] }}" alt="" class="img-fluid w-50">
                    </div>
                    <!-- judul artikel -->
                    <h6 class="my-3 text-center">{{$d->nama_menu}}</h6>
                    <!-- tanggal artikel -->
                    <p class="text-secondary small my-0 text-center">Rp.{{ number_format($d->harga, 0,'', '.')}}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@stop
