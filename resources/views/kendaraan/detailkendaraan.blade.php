@extends('layout')
@section('judul')
Detail Kendaraan
@endsection
@section('konten')
<table class="table table-hover">
<thead>
	<tr>
		<th>Tipe Kendaraan</th>
		<th>NomerPlat</th>
		<th>Mulai Parkir Tgl</th>
		
	</tr>
</thead>
<tbody>
	<tr>
		<td>{{$data->tipekendaraan}}</td>
		<td>{{$data->nomerplat}}</td>
		<td>{{$data->created_at}}</td>
	</tr>
</tbody>	
</table>
@endsection