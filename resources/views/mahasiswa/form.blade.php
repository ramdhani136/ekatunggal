<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <form action="/mahasiswa/store" method="post">
        {{csrf_field()}}
        nama : <input type="text" name="nama" id=""><br>
        @if($errors->has('nama'))
            <div class="nama">
                {{$errors->first('nama')}}
            </div>
        @endif
        alamat : <input type="text" name="alamat" id=""><br>
        @if($errors->has('alamat'))
            <div class="alamat">
                {{$errors->first('alamat')}}
            </div>
        @endif

        <input type="submit" value="Tambah">
    </form>
</body>
</html>