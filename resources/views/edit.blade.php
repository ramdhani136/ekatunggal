<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pegawai</title>
</head>
<body>
    @foreach($ambil as $p)
    <form action="/update" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$p->id}}">
        Nama : <input type="text" name="nama" value="{{$p->nama}}"><br>
        umur : <input type="number" name="umur" value="{{$p->umur}}"><br>
        jabatan : <input type="text" name="jabatan" value="{{$p->jabatan}}"><br>
        Alamat :<textarea name="alamat" cols="30" rows="10">{{$p->alamat}}</textarea><br>
        <button type="submit" name="simpan" value="Simpan">Update</button>
    </form>
    @endforeach
</body>
</html>