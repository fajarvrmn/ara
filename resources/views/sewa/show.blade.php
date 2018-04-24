@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Detail Sewa</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Detail Sewa
	<div class="panel-title pull-right">
	<a href="{{URL('previous')}}">Kembali</a></div>
</div>



<div class="panel-body">
	<form action="{{route('sewa.show',$sewa->id)}}" method="post">
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<label class="control-lable">Tanggal Sewa</label>
				<input type="date" name="tanggal" readonly class="form-control">{{$sewa->tanggal_sewa}}</div>

		<div class="form-group">
			<label class="control-lable">Nama Customer</label>
				<input type="text" name="nama" readonly class="form-control"  value="{{$sewa->nama_customer}} "></div>

		<div class="form-group">
			<label class="control-lable">Jenis Kelamin</label>
				<input type="text" name="jk" readonly class="form-control" value="{{$sewa->jenis_kelamin}} "></div>

		<div class="form-group">
			<label class="control-lable">Alamat</label>
				<textarea name="alamat" readonly class="form-control" >{{$sewa->alamat}} </textarea></div>

		<div class="form-group">
			<label class="control-lable">No Telepon</label>
				<input type="text" name="notlp" readonly class="form-control" value="{{$sewa->no_tlp}} "></div>

		<div class="form-group">
			<label class="control-lable">No KTP</label>
				<input type="text" name="noktp" readonly class="form-control" value="{{$sewa->no_ktp}} "></div>

		<div class="form-group">
			<label class="control-lable">Jumlah Hari</label>
				<input type="text" name="jumlah" readonly class="form-control" value="{{$sewa->jumlah_hari}} "></div>

		<div class="form-group">
			<label class="control-lable">Merk Kamera</label>
				<input type="text" name="jumlah" readonly class="form-control" value="{{$sewa->kamera->merk_kamera}} "></div>

	</form>
</div>
</div>
</div>
@endsection