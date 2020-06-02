<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Artikel</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Judul</td>
            <td>Tags</td>
        </tr>
        @foreach($data as $r)
        <tr>
            <td>{{$r->judul}}</td>
            <td>
                @foreach($r->tags as $a)
                    {{$a->tag}},
                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>