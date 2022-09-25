@extends('layout.main')

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="text-center">
                    <h4 class="h4" data-color="#16213E">Menunggu Pembayaran</h4>
                </div>
                <div class="pull-right">

                </div>
            </div>
            <div class="table-responsive">
                <table class="table hover multiple-select-row nowrap">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">No Meja</th>
                            <th scope="col">Nama pemesan</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">total Harga</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @foreach ( $belumBayar as $t )
                        <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{$t->nomeja}}</td>
                            <td>{{$t->nama_pemesan}}</td>
                            <td>{{$t->subtotal}}</td>
                            <td>{{$t->total_harga}}</td>
                            <td>{{$t->status}}</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="/transaksi/bayar/{{$t->id}}" class="btn btn-block btn-info">Bayar</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="text-center">
                    <h4 class="h4 text-center" data-color="#16213E">Transaksi Dikonfirmasi</h4>
                    <a class="btn tbn-sm btn-secondary float-left" href="/transaksi/pdf">Print</a>
                </div>
                <div class="pull-right">

                </div>
            </div>
            <div class="table-responsive">
                <table class="table hover multiple-select-row nowrap">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">No Meja</th>
                            <th scope="col">Nama pemesan</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">total Harga</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @foreach ( $sudahBayar as $key=>$t )
                        <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{$t->nomeja}}</td>
                            <td>{{$t->nama_pemesan}}</td>
                            <td>{{$t->subtotal}}</td>
                            <td>{{$t->total_harga}}</td>
                            <td>{{$tracking->get($key)->status}}</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    @switch($tracking->get($key)->status)
                                    @case("Menunggu")
                                    <a href="/transaksi/proses/{{$t->id}}" class="btn btn-block btn-warning">Proses</a>
                                    @break
                                    @case("Diproses")
                                    <a href="/transaksi/proses/{{$t->id}}" class="btn btn-block btn-success">Disajikan</a>
                                    @break
                                    @case("Disajikan")
                                    <button disabled href="#" class="btn btn-block btn-info">Selesai</button>
                                    @break
                                    @endswitch
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @stop
