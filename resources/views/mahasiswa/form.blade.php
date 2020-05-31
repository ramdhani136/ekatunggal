<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <form action="/mahasiswa/store" method="post">
        {{csrf_field()}}
        nama : <input type="text" name="nama" id=""><br>
        alamat : <input type="text" name="alamat" id=""><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>