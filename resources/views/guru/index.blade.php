<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>Data Guru</title>
</head>
<body>

    <style type="text/css">
        .container{
        margin:50px auto;

        }
    </style>

    <div class="container">
    <a href="/guru/tambah">+ Tambah data Guru</a><br>  <br>

        <table border=1>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Aksi</th>
            </tr>
            @foreach($data as $r)
            <tr>
                <td>{{$r->nama}}</td>
                <td>{{$r->umur}}</td>
                <td>
                    <a href="/guru/edit/{{$r->id}}">Edit</a>  | 
                    <a href="/guru/hapus/{{$r->id}}">Hapus</a> 
                </td>
            </tr>
            @endforeach
        </table>

        <br>

        Halaman : {{$data->currentPage()}} <br>
        Jumlah : {{$data->total()}} <br>
        Per Halaman : {{$data->perPage()}} <br><br>
        {{$data->links()}}


    </div>
</body>
</html>