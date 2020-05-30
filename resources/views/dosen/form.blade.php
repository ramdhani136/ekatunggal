<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dosen</title>
</head>
<body>
    <form action="/dosen/store" method="post">
        {{csrf_field()}}
        Nama : <input type="text" name="nama" id=""><br>
        umur : <input type="number" name="umur" id=""><br>
        jabatan : <input type="text" name="jabatan" id=""><br>
        <textarea name="alamat" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>