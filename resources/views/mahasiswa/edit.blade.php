<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>Edit Mahasiswa</title>
</head>
<body>
    @foreach($data as $r)
    <form action="/mahasiswa/update/{{$r->id}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        nama : <input type="text" name="nama" value="{{$r->nama}}"><br>
        alamat : <input type="text" name="alamat" value="{{$r->alamat}}"><br>
        <input type="submit" value="Update">
    </form>
    @endforeach
</body>
</html>