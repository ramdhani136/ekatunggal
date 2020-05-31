<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>

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
</body>
</html>