<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data barang</title>
</head>
<body>
    <form action="/barang/store" method="post">
        {{csrf_field()}}
        Nama : <input type="text" name="nama" id=""><br>
        QTY : <input type="text" name="qty" id=""><br>
        Satuan : <input type="text" name="satuan" id=""><br>
        Lokasi : <input type="text" name="lokasi" id=""><br>
        <input type="submit" value="Simpan">
    </form> 
</body>
</html>