<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <script src="/js/app.js" type="text/javascript"></script>
    <title>Edit</title>
</head>
<body>
    <div class="container">		
        <h1>Edit Data</h1> 
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }} </li>
                @endforeach
            </ul>
        @endif
		<form class="form-horizontal" action="{{ route('post.update', $boots->id) }}" method="POST"> 
			<div class="form-group">
				<label class="control-label col-sm-2" for="nama">Nama Anda:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" value="{{$boots->title}}">
				</div>
            </div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="alamat">Sekolah anda:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="alamat" value="{{$boots->body}}">
				</div>
			</div>		
			<button type="submit" class="btn btn-success">Simpan</button>
		</form>		
	</div>
</body>
</html>