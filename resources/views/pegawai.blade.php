<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>
<body>
    {{$nama}} 
    <br>
    @foreach($job as $a)
        <li>{{$a}}</li>
    @endforeach
</body>
</html>