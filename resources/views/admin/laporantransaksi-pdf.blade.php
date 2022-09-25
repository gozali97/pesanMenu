<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laporan Transaski</title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #FF9494;
            color: white;
        }

    </style>
</head>
<body>
    <h2 style="text-align: center;">Laporan Penjualan</h2>
    <table id="customers">
        <tr>
            <th>#</th>
            <th>No Meja</th>
            <th>Nama Pemesan</th>
            <th>Subtotal</th>
            <th>Total harga</th>
        </tr>
        <?php $no = 1 ?>
        @foreach ( $data as $t )
        <tr>
            <td>{{$no++}}</td>
            <td>{{$t->nomeja}}</td>
            <td>{{$t->nama_pemesan}}</td>
            <td>({{$t->subtotal}}) item</td>
            <td>Rp. {{ number_format($t->total_harga, 0,'', '.')}}</td>
        </tr>
        @endforeach
    </table>
</html>
