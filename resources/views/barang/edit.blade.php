<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data barang</title>
</head>
<body>
    @foreach($data as $a)
    <form action="/barang/update" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$a->id}}">
        Nama : <input type="text" name="nama" value="{{$a->nama}}"><br>
        QTY : <input type="text" name="qty" value="{{$a->qty}}"><br>
        Satuan : <input type="text" name="satuan" value="{{$a->satuan}}"><br>
        Lokasi : <input type="text" name="lokasi" value="{{$a->lokasi}}"><br>
        <input type="submit" value="Update">
    </form> 
    @endforeach
</body>
</html>