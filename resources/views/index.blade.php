<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>
<body>

    <a href="/tambah">+ Tambah Pegawai</a><br><br>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jabatan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @foreach($data as $a)
        <tr>
            <td>{{$a->nama}}</td>
            <td>{{$a->umur}}</td>
            <td>{{$a->jabatan}}</td>
            <td>{{$a->alamat}}</td>
            <td>
            <a href="/edit/{{$a->id}}">Edit</a>  
            | 
            <a href="/hapus">Hapus</a> 
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>