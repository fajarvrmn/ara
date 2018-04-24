@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Detail Sewa</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Detail Sewa
	<div class="panel-title pull-right">
	<a href="/sewa/create">Kembali</a></div>
</div>

<div class="panel-body">
	<form action="{{route('sewa.store')}}" method="post">
		{{csrf_field()}}

		<div class="form-group">
			<label class="control-lable">Tanggal Sewa</label>
				<input type="date" name="tanggal" class="form-control" required=""></div>

		<div class="form-group">
			<label class="control-lable">Nama Customer</label>
				<input type="text" name="nama" class="form-control" required=""></div>

		<div class="form-group">
			<label class="control-lable">Jenis Kelamin</label>
				<br><input type="radio" name="jk"  value="laki-laki">Laki-laki
				<input type="radio" name="jk"  value="perempuan">Perempuan</div>

		<div class="form-group">
			<label class="control-lable">Alamat</label>
				<textarea name="alamat" class="form-control" required=""></textarea></div>

		<div class="form-group">
			<label class="control-lable">No Telepon</label>
				<input type="text" name="notlp" class="form-control" required=""></div>

		<div class="form-group">
			<label class="control-lable">No KTP</label>
				<input type="text" name="noktp" class="form-control" required=""></div>

		<div class="form-group">
			<label class="control-lable">Jumlah Hari</label>
				<input type="text" name="jumlah" class="form-control" required=""></div>

		<div class="form-group">
			<label class="control-lable">Merk Kamera</label>
				<select name="kamera_id" class="form-control">
				@foreach($kamera as $data)
				<option value="{{$data->id}}">
				{{$data->merk_kamera}}</option>
				@endforeach
			</select></div>



	

		<div class="form-group">
			<button type="submit" class="btn btn-danger">Simpan</button>
			<button type="reset" class="btn btn-danger">Reset</button></div>

	</form>
</div>
</div>
@endsection

