<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <script src="/js/app.js" type="text/javascript"></script>
    <title>Table Siswa</title>
</head>
<body>
    <div class="container">
    <div class="card">
    <div class="card-body">
        
        <h3>Data Post</h3>
            @if(count($boots)>0)  
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Action</th>
                </tr>
                @foreach($boots as $boot)
                <tr>
                    <td>{{$boot->id}}</td>
                    <td>{{$boot->title}}</td>
                    <td>{!!$boot->body!!}</td>
                    <td>
                        <a href="{{ route('post.edit', $boot->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('post.destroy', $boot->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </table>
    </div>
    </div>
    </div>
</body>
</html>