@extends('layout')
@section('judul')
Edit Data Kendaraan
@endsection
@section('konten')
<form action="{{ url('kendaraan/'.$data->id)}}" method="post">
<input type="hidden" name="_method" value="PUT">
	{{ csrf_field() }}
	<label>TipeKendaraan</label>
	<input type="text" name="tipekendaraan" value="{{$data->tipekendaraan}}" class="form-control">
	<label>NomerPlat</label>
	<input type="text" name="nomerplat" value="{{$data->nomerplat}}" class="form-control">
	<input type="submit" class="btn btn-success" value="Simpan">
</form>
@endsection