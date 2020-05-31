<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>Data Mahasiswa</title>
</head>
<body>
<style type="text/css">
    .container{
        margin:50px auto;
    }
</style>
<div class="container">

    <a href="/mahasiswa/tambah">+ Tambah data Mahasiswa</a><br><br>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @foreach($data as $a)
        <tr>
            <td>{{$a->nama}}</td>
            <td>{{$a->alamat}}</td>
            <td>
            <a href="/mahasiswa/edit/{{$a->id}}">Edit</a>  | 
            <a href="/mahasiswa/hapus/{{$a->id}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br><br>
    Halaman : {{$data->currentPage()}} <br>
    Jumlah : {{$data->total()}} <br>
    Per Halaman : {{$data->perPage()}} <br>
    <br>    
    {{$data->links()}}
    </div>
</body>
</html>