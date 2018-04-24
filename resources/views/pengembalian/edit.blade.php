@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Pengembalian</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Pengembalian
	<div class="panel-title pull-right">
	<a href="{{URL('previous')}}">Kembali</a></div>
</div>


<div class="panel-body">
	<form action="{{route('Kembali.update',$Kembali->id)}}" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<label class="control-lable">Tanggal Sewa</label>
				<input type="date" name="tanggal" class="form-control">{{$sewa->tanggal_sewa}}</div>

		<div class="form-group">
			<label class="control-lable">Jumlah Hari</label>
				<input type="text" name="jumlah_hari" class="form-control" required="" value="{{$kembali-pengembalian>}}"></div>

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
</div>
@endsection