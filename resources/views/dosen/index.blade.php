<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
</head>
<body>

    <a href="/dosen/create">+ Tambah Dosen</a><br><br>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jabatan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @php $no=1; @endphp
        @foreach($data as $a)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$a->nama}}</td>
            <td>{{$a->umur}}</td>
            <td>{{$a->jabatan}}</td>
            <td>{{$a->alamat}}</td>
            <td>
                <a href="/dosen/edit/{{$a->id}}">Edit</a> |
                <a href="/dosen/hapus/{{$a->id}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>