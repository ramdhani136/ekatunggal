<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CRUD</title>
</head>
<body>

    <a href="pegawai/tambah">+ Tambah Pegawai Baru</a>
    <br>
    <br>

    <table border="1px">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        @foreach($pegawai as $a)
        <tr>
            <td>{{ $a->nama }}</td>
            <td>{{ $a->jabatan }}</td>
            <td>{{ $a->umur }}</td>
            <td>{{ $a->alamat }}</td>
            <td>
            <a href="pegawai/edit">Edit</a>  | 
            <a href="pegawai/hapus"> Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>