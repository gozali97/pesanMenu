@extends('layout.usermain')

@section('content')
@if(empty($cart) || count($cart) == 0)
Tidak ada produk di keranjang
@else

<div class="container mt-5 mr-5">
    <div class="col-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Form Pesanan</h4>
                <form class="forms-sample">
                    <div class="form-group">
                        <label for="exampleInputName1">No Meja</label>
                        <input type="text" name="nomeja" class="form-control" id="exampleInputName1" placeholder="No Meja" value="{{Session::get('nomeja')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Nama Pemesan</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama">
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Nama Menu</th>
                                <th> Harga </th>
                                <th> Jumlah </th>
                                <th> Sub Total </th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            $grandtotal=0;
                            ?>
                            @foreach ( $cart as $ct => $val)
                            <?php $subtotal= $val["harga"]* $val["jumlah"]; ?>
                            <tr>
                                <td>{{$no++}}</td>
                                <td> {{$val["nama_menu"]}} </td>
                                <td>{{$val["harga"]}}</td>
                                <td>{{$val["jumlah"]}} Item</td>
                                <td>{{$subtotal}}</td>
                                <td>
                                    <a type="button" class="btn btn-gradient-danger btn-icon-text" href="/hapus/{{$ct}}">
                                        <i class="mdi mdi-delete btn-icon-prepend"></i>Hapus</a>
                                </td>
                            </tr>
                            <?php $grandtotal+= $subtotal ?>
                            @endforeach
                            <tr>
                                <th colspan="4">Total Pesanan</th>
                                <th>{{$grandtotal}}</th>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>
                    <div class="float-right">
                        <button type="submit" class="btn btn-gradient-primary me-2">Pesan</button>
                        <a type="button" href="/menu" class="btn btn-light">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
