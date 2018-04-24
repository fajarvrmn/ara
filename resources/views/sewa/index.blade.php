@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<center><h1>Detail Sewa</h1></center>
<div class="panel panel-primary">
<div class="panel-heading">Detail Sewa
<div class="panel-title pull-right">
<a href="/sewa/create">Tambah data</a></div></div>

<div class="panel-body">
<table class="table">
<thead>

<tr>
<th>Tanggal Sewa</th>
<th>Nama Customer</th>
<th>Jenis Kelamin</th>
<th>Alamat</th>
<th>No Telepon</th>
<th>No KTP</th>
<th>Jumlah Hari</th>
<th>Merk Kamera</th>
<th>Harga Sewa</th>
<th>Total Harga</th>

<th colspan="3">Action</th>
</tr>
</thead>
	@foreach ($sewa as $data)
	<tr>
		<td>{{$data->tanggal_sewa}}</td>
		<td>{{$data->nama_customer}}</td>
		<td>{{$data->jenis_kelamin}}</td>
		<td>{{$data->alamat}}</td>
		<td>{{$data->no_tlp}}</td>
		<td>{{$data->no_ktp}}</td>
		<td>{{$data->jumlah_hari}}</td>


		<td>{{$data->kamera->merk_kamera}}</td>
		<td>{{$data->kamera->harga_sewa}}</td>
				<td>{{$data->total_harga}}</td>


		<td>

		<td>
			<a class="btn btn-success" href="/sewa/{{$data->id}}/edit">Edit</a>
		</td>
		<!-- <td>
			<a class="btn btn-primary" href="/sewa/{{$data->id}}">Show</a>
		</td> -->
		<td>
			<form action="{{route('sewa.destroy',$data->id)}}" method="post">
		

			<input type="hidden" name="_method" value="DELETE">
			<input type="hidden" name="_token">
			<input class="btn btn-danger" type="submit" value="delete">
			{{csrf_field()}}
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection