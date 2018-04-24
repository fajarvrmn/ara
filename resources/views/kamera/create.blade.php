@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <center><h1>Data Kamera</h1></center>
    <div class="panel panel-primary">
    <div class="panel-heading">Data Kamera
    <div class="panel-title pull-right">
    <a href="/kamera">Kembali</a></div>
</div>

<div class="panel-body">
    <form action="{{route('kamera.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label class="control-lable">Gambar</label>
                <input type="file" name="gambar" class="form-control" required=""></div>

        <div class="form-group">
            <label class="control-lable">Merk</label>
                <input type="text" name="merk" class="form-control" required=""></div>

        <div class="form-group">
            <label class="control-lable">Harga Sewa</label>
                <input type="number" name="harga" class="form-control" required=""></div>

        <div class="form-group">
            <button type="submit" class="btn btn-danger">Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button></div>

    </form>
</div>
</div>
@endsection

