@extends('layout.usermain')

@section('content')
@if(empty($cart) || count($cart) == 0)
Tidak ada produk di keranjang
@else
<div class="mobile-menu-overlay"></div>
<div class="container mt-5 mx-auto justify-content-center">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Form Pesanan</h2>
                <form action="/transaksi" method="POST" class="forms-sample">
                    @csrf
                    <div class="row p-4">
                        <div class="col-md-4">
                            <h5>No Meja : </h5>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="nomeja" class="form-control" id="exampleInputName1" placeholder="No Meja" value="{{Session::get('nomeja')}}" disabled>
                        </div>
                        <div class="col-md-4 mt-3">
                            <h5>Nama Pemesan :</h5>
                        </div>
                        <div class="col-md-8 mt-3">
                            <input type="text" name="nama_pemesan" class="form-control" id="exampleInputName1" placeholder="Nama">
                        </div>
                        <div class="table-responsive mt-4">
                            <hr>
                            <h5 class="text-center mb-3">Detail Pesanan</h5>
                            <table class="table table-responsive-lg table-striped mb-4">
                                <thead>
                                    <tr>
                                        <th> No </th>
                                        <th> Nama Menu</th>
                                        <th> Harga </th>
                                        {{-- <th> Jumlah </th> --}}
                                        <th> Sub Total </th>
                                        <th> Jumlah </th>
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
                                        {{-- <td>{{$val["jumlah"]}} Item</td> --}}
                                        <td id="subtotal-{{explode('_', $ct)[1]}}" class="total">{{$subtotal}}</td>
                                        <td class="action">
                                            <input type="hidden" name="id" value="{{explode('_', $ct)[1]}}">
                                            <a type="button" class="button-minus btn btn-sm btn-danger d-inline"><i class="fa fa-minus text-white"></i></a>
                                            <h5 id="jumlah" class="d-inline" style="font-weight: 600"> {{$val["jumlah"]}} </h5><a type="button" class="button-plus btn btn-sm btn-info d-inline"><i class="fa fa-plus text-white"></i></a>
                                        </td>
                                    </tr>
                                    <?php $grandtotal+= $subtotal ?>
                                    @endforeach
                                    <tr>
                                        <th colspan="4">Total Pesanan</th>
                                        <th id="total">{{$grandtotal}}</th>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="float-right">
                                <button type="submit" class="btn btn-success me-2">Pesan</button>
                                <a type="button" href="/menu" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endif

<script>
    $(".button-minus").click(function(e) {
        e.preventDefault();
        console.log("Minus Clicked");
        var that = this;
        $.ajax({
            url: '/minus'
            , type: 'POST'
            , data: {
                "_token": "{{ csrf_token() }}"
                , id: $(that).siblings('[name="id"]').attr('value')

            , }
            , success: function(result) {
                $(that).siblings('[id="jumlah"]').text(result.data.jumlah)
                $('#subtotal-' + $(that).siblings('[name="id"]').attr('value')).text(result.data.subtotal)
                var sum = 0;
                $('.total').each(function() {
                    sum += parseFloat($(this).text());
                });
                $('#total').text(sum)
            }
        });
    });

    $(".button-plus").click(function(e) {
        e.preventDefault();
        console.log("plus Clicked");
        var that = this;
        $.ajax({
            url: '/plus'
            , type: 'POST'
            , data: {
                "_token": "{{ csrf_token() }}"
                , id: $(that).siblings('[name="id"]').attr('value')
            , }
            , success: function(result) {
                $(that).siblings('[id="jumlah"]').text(result.data.jumlah)
                $('#subtotal-' + $(that).siblings('[name="id"]').attr('value')).text(result.data.subtotal)
                var sum = 0;
                $('.total').each(function() {
                    sum += parseFloat($(this).text());
                });
                $('#total').text(sum)
            }
        });
    });

</script>
@stop
