<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Belajar Upload</title>
</head>
<body>
    <div class="container">
        <div class="col-lg-9 mx-auto my-5">

            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}} br
                    </div>
                @endforeach
            @endif

            <form action="/upload/proses" method="post">
                @csrf
                <div class="form-group">
                    <b>Piliha File :</b><br>
                    <input type="file" name="file">
                </div>

                <div class="form-group">
                    <b>Keterangan :</b><br>
                    <textarea name="keterangan" class="form-control"></textarea>
                </div>

                <input type="submit" value="Upload" class="btn btn-primary">
            </form><br>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="1%">File</th>
                        <th>Keterangan</th>
                        <th width="1%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $r)
                    <tr>
                        <td><img src="{{url('/data_file/'.$r->nama)}}" width="150px" alt="gambar"></td>
                        <td>{{$r->keterangan}}</td>
                        <td>
                            <a href="/upload/hapus/{{$r->id}}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </>
</body>
</html>