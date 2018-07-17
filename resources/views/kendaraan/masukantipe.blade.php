@extends('layout')
@section('judul')
Masukan Tipe Kendaraan
@endsection
@section('konten')
<form action="{{ url('kendaraan')}}" method="post">
	{{ csrf_field() }}
	<label>TipeKendaraan</label>
	<input type="text" name="tipekendaraan" class="form-control">
	<label>NomerPlat</label>
	<input type="text" name="nomerplat" class="form-control">
	<input type="submit" class="btn btn-success" value="Simpan">
</form>
@endsection