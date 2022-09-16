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
                        <h2 class="text-center text-success">Pembayaran Cash</h2>
                        {{-- <img style="display: block; margin-left: auto; margin-right: auto; width: 50%" src="{{url('assets/img/bayar.gif')}}" alt=""> --}}
                    </div>
                    {{-- <p class="text-center" style="font-weight: 700">Silahkan Pilih Metode pembayaran :</p> --}}
                    <form action="{{route('bayar', ['id' => $transaksi->id])}}" class="forms-sample" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$transaksi->id}}">
                        <div class="table-responsive p-3">
                            <table class="table table-responsive-lg table-striped mb-4">
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
                                        <td>Rp. {{number_format($transaksi->total_harga, 0,'', '.')}}</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3">*) biaya layanan sebesar Rp.2000</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <button type="submit" class="btn btn-success w-100">Bayar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
