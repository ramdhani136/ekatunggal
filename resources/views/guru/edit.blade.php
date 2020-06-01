<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Edit Data Guru</title>
</head>
<body>
    @foreach($data as $r)
    <form action="/guru/update/{{$r->id}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        Nama : <input type="text" name="nama" value="{{$r->nama}}"><br>


        Umur : <input type="text" name="umur"  value="{{$r->umur}}"><br>

    
        <input type="submit" value="Update">
    </form>
    @endforeach
</body>
</html>