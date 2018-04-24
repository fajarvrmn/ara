@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<center><h1>Data Karyawan</h1></center>
<div class="panel panel-primary">
<div class="panel-heading"><b>Data Karyawan</b>
<div class="panel-title pull-right"><!-- 
<a href="/user/create">Tambah data</a> --></div></div>

<div class="panel-body">
<table class="table">
<thead>

<tr>

<th>Email</th>
<th>Password</th>

</tr>
</thead>
    @foreach ($user as $data)
    <tr>
       
        <td>{{$data->email}}</td>
        <td>{{$data->password}}</td>

      
		<!-- <td>
			<a class="btn btn-success" href="/user/{{$data->id}}/edit">Edit</a>
		</td> -->
		<!-- <td>
			<a class="btn btn-primary" href="/user/{{$data->id}}">Show</a>
		</td> -->
		<!-- <td>
			<form action="{{route('user.destroy',$data->id)}}" method="post">
		 -->

			<!-- <input type="hidden" name="_method" value="DELETE"> -->
<!-- 			<input type="hidden" name="_token">
			<input class="btn btn-danger" type="submit" value="delete"> -->
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