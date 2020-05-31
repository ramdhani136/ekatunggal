<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Data Barang</title>
</head>
<body>

<style type="text/css">
    .container{
        width:100%;
        margin:50px auto;
    }

    .pagination li{
        list-style:none;
        float:left;
        margin:5px;
    }
</style>

<div class="container">

<form action="/barang/cari" method="get">
    <input type="text" name="cari" placeholder="Cari barang ..">
    <input type="submit" value="Cari">
</form><br><br>


<a href="/barang/tambah">+ Tambah Barang</a><br><br>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>QTY</th>
            <th>Satuan</th>
            <th>Lokasi</th>
            <th>Aksi</th>
        </tr>
        @foreach($data as $a)
        <tr>
            <td>{{$a->nama}}</td>
            <td>{{$a->qty}}</td>
            <td>{{$a->satuan}}</td>
            <td>{{$a->lokasi}}</td>
            <td>
                <a href="/barang/edit/{{$a->id}}">Edit</a>  |
                <a href="/barang/hapus/{{$a->id}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br><br>

    Halaman : {{$data->currentPage()}} <br>
    Jumlah : {{$data->total()}} <br>
    Per Halaman : {{$data->perPage()}} <br><br>

    {{$data->links()}}

    </div>
</body>
</html>