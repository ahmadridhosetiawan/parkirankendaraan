<!DOCTYPE html>
<html>
<head>
	<title>@yield('judul')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.min.js') }}">
</head>
		
<body>
<label>PARKIRAN QMALL BANJARBARU</label>


	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<a href="{{url('/kendaraan/create')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus"
			></i> Tambah </a>
			<a href="{{url('/kendaraan')}}" class="btn btn-success">
			</i> Daftar Parkir </a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			@yield('konten')
		</div>
	</div>
</body>
</html>