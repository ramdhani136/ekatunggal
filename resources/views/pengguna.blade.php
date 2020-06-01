<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Data Pengguna</title>
</head>
<body>
    <table border="1" style="margin:5px;">
        <tr>
            <th>Nama</th>
            <th>Nomor Telepon</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        @foreach($data as $r)
        <tr>
            <td>{{$r->nama}}</td>
            <td>{{$r->telepon->hp}}</td>
            <td>{{$r->jurusan->jurusan}}</td>
            <td>Edit | Hapus</td>
        </tr>
        @endforeach
    </table>
</body>
</html>