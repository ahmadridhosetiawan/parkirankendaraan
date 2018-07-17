@extends('layout')
@section('judul')
Daftar Kendaraan
@endsection
@section('konten')
<table class="table table-hover">
	<thead>
		<tr>
			<th>TIPE KENDARAAN</th>
			<th>Detail</th>
			<th>Edit</th>
			<th>Hapus</th>
		</tr>
	</thead> 
	<tbody>
		@foreach($data as $a)
		<tr>
			<td>{{$a->tipekendaraan}}</td>
			<td>
				<a href="{{ url('kendaraan/'.$a->id) }}" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open">Detail</i></a>
			</td>
			<td>
				<a href="{{ url('kendaraan/'.$a->id.'/edit') }}" class="btn btn-primary"><i class="glyphicon glyphicon-edit">Edit</i></a>
			</td>
			<td>
				<form action="{{ url('kendaraan/'.$a->id)}}" method="post">
					{{csrf_field()}}
					<input type="hidden" name="_method" value="DELETE">
					<button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash">Hapus</i></button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection