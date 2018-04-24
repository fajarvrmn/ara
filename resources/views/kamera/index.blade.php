@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<center><h1>Data Kamera</h1></center>
<div class="panel panel-primary">
<div class="panel-heading"><b>Data Kamera</b>
<div class="panel-title pull-right">
<a href="/kamera/create">Tambah data</a></div></div>

<div class="panel-body">
<table class="table">
<thead>

<tr>

<th>Gambar</th>
<th>Merk</th>
<th>Harga Sewa</th>
<th colspan="3">Action</th>
</tr>
</thead>
    @foreach ($kamera as $data)
    <tr>

        <td><img src="{{asset('/img/'.$data->gambar.'')}} " width="70" height="70"></td>
        <td>{{$data->merk_kamera}}</td>
        <td>{{$data->harga_sewa}}</td>
      
        <td>
            <a class="btn btn-success" href="/kamera/{{$data->id}}/edit">Edit</a>
        </td>

        <!-- <td>
            <a class="btn btn-primary" href="/kamera/{{$data->id}}">Show</a>
        </td> -->

        <td>
            <form action="{{route('kamera.destroy',$data->id)}}" method="post">
        

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