@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Kamera</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Kamera
	<div class="panel-title pull-right">
	<a href="{{URL('previous')}}">Kembali</a></div>
</div>



<div class="panel-body">
	<form action="{{route('kamera.show',$kamera->id)}}" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		
<div class="panel-body">
		<div class="form-group">
			<label class="control-lable">Gambar</label>
			<center><img src="{{asset('img/'.$kamera->gambar.'')}}" style=" width: 300px; height: 300px;"></center>
				

		<div class="form-group">
			<label class="control-lable">Merk </label>
				<input type="text" readonly name="merk" class="form-control" required="" value="{{$kamera->merk_kamera}}"></div>

		<div class="form-group">
			<label class="control-lable">Harga Sewa</label>
			<input type="text" readonly name="harga" class="form-control" value="{{$kamera->harga_sewa}}"  required=""></div>


	</form>
</div>
</div>
</div>
@endsection