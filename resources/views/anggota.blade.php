<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Hadiah</th>
        </tr>
        @foreach($data as $r)
        <tr>
            <td>{{$r->nama}}</td>
            <td>
                @foreach($r->hadiah as $a)

                <li>{{$a->nama_hadiah}}</li>

                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>