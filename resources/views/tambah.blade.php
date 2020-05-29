<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
</head>
<body>
    <a href="/pegawai">Kembali</a>
    <br>
    <br>

    <form action="/pegawai/store" method="post">
        {{csrf_field()}}
        nama : <input type="text" name="nama" ><br>
        jabatan : <input type="text" name="jabatan" ><br>
        umur : <input type="number" name="umur" ><br>
        Alamat : <textarea name="alamat" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>