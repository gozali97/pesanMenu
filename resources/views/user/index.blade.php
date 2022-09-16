@extends('layout.usermain')

@section('content')
<div class="mobile-menu-overlay"></div>
<div class="container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <!-- Fade-in effect -->
                    <div class="wrapper bg-info rounded p-2 mb-3">
                        {{-- <h5 class="h4 text-center text-white">App Resto</h5> --}}
                        <h4 class="h4 text-center text-white">Menu Makanan</h4>
                    </div>
                    <div class="row clearfix">
                        @foreach ( $makanan as $food)
                        <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                            <div class="da-card">
                                <div class="da-card-photo">
                                    <div style="height: 170px; width: 100%; margin-left: auto; margin-right: auto;">
                                        <img src="{{ $food->gambar[0] }}" alt="" class="img-fluid" style="width: 90%; position: relative; max-height: 220px">
                                    </div>
                                    <div class="da-overlay">
                                        <div class="da-social">
                                            <ul class="clearfix">
                                                {{-- <li><a type="button" data-toggle="modal" data-target="#exampleModal">
                                                        <i class="fa fa-info"></i></a></li> --}}
                                                <li><a href="/tambah/{{$food->id}}"><i class="fa fa-check"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{$food->nama_menu}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ $food->gambar[0] }}" alt="" class="img-fluid" style="width: 90%; position: relative; max-height: 220px">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="da-card-content text-center">
                                    <h5 class="h5 mb-10">{{$food->nama_menu}}</h5>
                                    <p class="text-info text-lg my-0 text-center mb-3" style="font-weight: 600">Rp. {{ number_format($food->harga, 0,'', '.')}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <!-- Fade-in effect -->
                    <div class="wrapper bg-success rounded p-2 mb-3">
                        <h4 class="h4 text-center text-white">Menu Minuman</h4>
                    </div>
                    <div class="row clearfix">
                        @foreach ( $minuman as $drink)
                        <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                            <div class="da-card">
                                <div class="da-card-photo">
                                    <div style="height: 170px; width: 100%; margin-left: auto; margin-right: auto;">
                                        <img src="{{ $drink->gambar[0] }}" alt="" class="img-fluid" style="width: 90%; position: relative; max-height: 220px">
                                    </div>
                                    <div class="da-overlay">
                                        <div class="da-social">
                                            <ul class="clearfix">
                                                <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                        <i class="fa fa-info"></i></button></li>
                                                <li><a href="/tambah/{{$drink->id}}"><i class="fa fa-check"></i></a></li>
                                            </ul>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="da-card-content text-center">
                                    <h5 class="h5 mb-10">{{$drink->nama_menu}}</h5>
                                    <p class="text-info text-lg my-0 text-center mb-3" style="font-weight: 600">Rp. {{ number_format($drink->harga, 0,'', '.')}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
