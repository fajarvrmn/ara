@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Kembali</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Kembali
	<div class="panel-title pull-right">
	<a href="/kembali">Kembali</a></div>
</div>

<div class="panel-body">
	<form action="{{route('kembali.store')}}" method="post">
		{{csrf_field()}}

		<div class="form-group">
			<label class="control-lable">Tanggal Kembali</label>
				<input type="date" name="tanggal_kembali" class="form-control" required=""></div>

		<div class="form-group">
			<label class="control-lable">Jumlah Hari</label>
				<input type="text" name="jumlah_hari" class="form-control" required=""></div>

		<div class="form-group">
			<label class="control-lable">ID Sewa</label>
				<select name="sewa_id" class="form-control">
				@foreach($kembali as $data)
				<option value="{{$data->id}}">
				{{$data->id}}</option>
				@endforeach
			</select></div>



		<div class="form-group">
			<button type="submit" class="btn btn-danger">Simpan</button>
			<button type="reset" class="btn btn-danger">Reset</button></div>

	</form>
</div>
</div>
@endsection

