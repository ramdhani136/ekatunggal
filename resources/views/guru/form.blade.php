<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>tambah Guru</title>
</head>
<body>
    <form action="/guru/store" method="post">
        {{csrf_field()}}
        Nama : <input type="text" name="nama" id=""><br>

        @if($errors->has('nama'))
            <div class="nama">
                {{$errors->first('nama')}}
            </div>
        @endif

        Umur : <input type="text" name="umur" id=""><br>

        @if($errors->has('umur'))
            <div class="umur">
                {{$errors->first('umur')}}
            </div>
        @endif

        <input type="submit" value="Tambah">
    </form>
</body>
</html>