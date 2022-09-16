@extends('layout.usermain')

@section('content')
<div class="mobile-menu-overlay"></div>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <img src="{{ url('assets/img/cef.png')}}" alt="">
            </div>
            <div class="col-md-6 col-lg-5 p-3">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">

                        {{-- <img style="display: block; margin-left: auto; margin-right: auto; width: 50%" src="{{url('assets/img/bayar.gif')}}" alt=""> --}}
                    </div>
                    <h3 class="text-center text-info mb-2">Nota Transaksi</h3>
                    <p class="text-small text-center" style="font-size: 12px">Tanggal Transaksi : {{ $transaksi->created_at->format('d F Y')}}</p>
                    <div class="table-responsive mt-3">
                        <table class="table table-striped mb-4">
                            <tbody>
                                <tr>
                                    <td>No Meja</td>
                                    <td>:</td>
                                    <td>{{$transaksi->nomeja}}</td>
                                </tr>
                                <tr>
                                    <td>Nama Pemesan</td>
                                    <td>:</td>
                                    <td>{{$transaksi->nama_pemesan}}</td>
                                </tr>
                                <tr>
                                    <td>Total harga</td>
                                    <td>:</td>
                                    <td>Rp. {{number_format($transaksi->total_harga, 0,'', '.')}} ({{$transaksi->subtotal}} item) </td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td>{{$transaksi->status}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card bg-light-blue">
                        <div class="card-body text-center">
                            <h5 class="card-title text-warning">Status : {{$status->status}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
