<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
</head>
<body>
    <form action="/store" method="post">
        {{csrf_field()}}
        Nama : <input type="text" name="nama"><br>
        umur : <input type="number" name="umur"><br>
        jabatan : <input type="text" name="jabatan"><br>
        Alamat :<textarea name="alamat" cols="30" rows="10"></textarea><br>
        <button type="submit" name="simpan" value="Simpan">Simpan</button>
    </form>
</body>
</html>