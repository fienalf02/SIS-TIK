<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="{{ asset('favicon.ico') }}">
		<title>SMKN1Cirebon</title>
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="css/text">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="css/text">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		@include('include.navigation')
		<!-- <div class="container"> -->
    <div class="row no-gutters mt-0">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-3">
            <ul class="nav flex-column ml-2 mb-5">
                <li class="nav-item">
                  <a class="nav-link active text-white" href="dashboard.html"><i class="fas fa-home mr-2"></i>DASHBOARD</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="jurusan.php"><i class="fas fa-archive mr-2"></i>JURUSAN</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="kelas.php"><i class="far fa-address-card mr-2"></i>KELAS</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="dataguru.php"><i class="fas fa-chalkboard-teacher mr-2"></i>DATA GURU</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="jadwalpengajar.php"><i class="fas fa-calendar mr-2"></i>JADWAL PENGAJAR</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="datasiswa.php"><i class="fas fa-users mr-2"></i>DATA SISWA</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="jadwalpelajaran.php"><i class="fas fa-clipboard-list mr-2"></i>JADWAL PELAJARAN </a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="nilaisiswa.php"><i class="fas fa-table mr-2"></i>NILAI SISWA </a><hr class="bg-secondary">
              </li>
                
              </ul>
        </div>
      </div>
		@yield('content')
		@include('include.footer')
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="admin.js"></script>
	</body>
</html>