<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato">
</head>
<body>
	@extends('adminlte::layouts.app')

<title>home</title>

@section('main-content')
        <div class="panel panel-info" style="margin-top: -50px;background-color: #00C0EF;">
        	<div class="panel-heading" style="background-color: #00C0EF; border-color:#00C0EF;">  
        		<p style="color: white;font-family: lato ;font-size: 30px;border-color:#00C0EF" align="center" >Selamat datang</p>
        	</div>
        </div>
        <small>@yield('')</small>
        <!-- content di bawah welcome -->
        	<b><div class="row">
        		<div class="col-md-4">
        			<blockquote  style="font-family: lato">
        				Selamat datang <b style="color:#3498db">admin </b> <br> di halaman ini anda akan di mudahkan untuk :<br>
        				<ul style="margin-top: 10px;">
        					<li style="font-family: Lato">Melihat data siswa</li>	
        					<li style="font-family: Lato">Melihat data pelanggaran</li>
        					<li style="font-family: lato">Tambah data siswa / hapus data</li>
        					<li style="font-family: lato">Menambah data pelanggaran baru / hapus data</li>
        					<li style="font-family: lato">Melihat catatan pelanggaran</li>
        				</ul>
        			</blockquote>
        		</div>
        		<div class="col-md-4">	
        			<blockquote  style="font-family: lato">
        				Dengan adanya <b class="bold"  style="color:#3498db">program</b> ini diharapkan bisa meningkatkan kedisiplinan siswa dan mempermudah guru dalam menjalankan tugas
        			</blockquote>
        		</div>
        </div></b>
@stop
</body>
</html>