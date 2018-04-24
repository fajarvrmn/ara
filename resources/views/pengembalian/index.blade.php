@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<center><h1>Data Pengembalian</h1></center>
<div class="panel panel-primary">
<div class="panel-heading">Data Pengembalian
<div class="panel-title pull-right">
<a href="/kembali/create">Tambah data</a></div></div>

<div class="panel-body">
<table class="table">
<thead>

<tr>
<th>ID Sewa</th>
<th>Tanggal Sewa</th>
<th>Jumlah Sewa Awal</th>
<th>Tanggal Kembali</th>
<th>Jumlah Sewa Akhir</th>
<th>Telat</th>
<th>Denda</th>
<th>Total Harga</th>


<th colspan="3">Action</th>
</tr>
</thead>
	@foreach ($kembali as $data)
	<tr>
	    <td>{{$data->sewwa->id}}</td>
	    <td>{{$data->sewwa->tanggal_sewa}}</td>
	    <td>{{$data->sewwa->jumlah_hari}} Hari</td>
		<td>{{$data->tanggal_kembali}}</td>
		<td>{{$data->jumlah_hari}}</td>
		<td>{{$data->telat}}</td>
		<td>{{$data->denda}}</td>
		<td>{{$data->total_harga}}</td>
		

		<td>
			<a class="btn btn-success" href="/kembali/{{$data->id}}/edit">Edit</a>
		</td>
<!-- 		<td>
			<a class="btn btn-primary" href="/kembali/{{$data->id}}">Show</a>
		</td> -->
		<td>
			<form action="{{route('kembali.destroy',$data->id)}}" method="post">
		

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