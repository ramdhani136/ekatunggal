<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dosen</title>
</head>
<body>
    @foreach($ambil as $p)
    <form action="/dosen/update" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$p->id}}">
        Nama : <input type="text" name="nama" value="{{$p->nama}}"><br>
        umur : <input type="number" name="umur" value="{{$p->umur}}"><br>
        jabatan : <input type="text" name="jabatan" value="{{$p->jabatan}}"><br>
        <textarea name="alamat" id="" cols="30" rows="10">{{$p->alamat}}</textarea><br>
        <input type="submit" value="Simpan">
    </form>
    @endforeach
</body>
</html>