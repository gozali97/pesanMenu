@extends('layout.usermain')

@section('content')
<div class="mobile-menu-overlay"></div>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <img src="{{ url('assets/img/cef.png')}}" alt="">
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-success">Pesanan Berhasil 🎉</h2>
                        <img style="display: block; margin-left: auto; margin-right: auto; width: 50%" src="{{url('assets/img/bayar.gif')}}" alt="">
                    </div>
                    <p class="text-center" style="font-weight: 700">Silahkan Pilih Metode pembayaran :</p>
                    <form method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$transaksi->id}}">
                        <div class="row mt-3">
                            <div class="col-6">
                                <button type="submit" formaction="/cash" class="btn btn-primary w-100">Bayar cash</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-info w-100">Bayar Transfer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
