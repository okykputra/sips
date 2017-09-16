<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nexa">
</head>
<body>
	@extends('adminlte::layouts.app')

<title>home</title>

@section('main-content')
        <div class="panel panel-info" style="margin-top: -50px;background-color: #00C0EF;">
        	<div class="panel-heading" style="background-color: #00C0EF; border-color:#00C0EF;">  
        		<p style="color: white;font-family: lato ;font-size: 30px;border-color:#00C0EF" align="center" >Selamat datang </p>
        	</div>
        </div>
        <small>@yield('')</small>
        <!-- content di bawah welcome -->
	@if(Auth::user()->is_admin == 1)
        	<b><div class="row">
        		<div class="col-md-4">
        			<blockquote  style="font-family: lato">
        				Di halaman ini anda akan di mudahkan untuk :<br>
        				<ul style="margin-top: 10px;">
        					<li style="font-family: Lato">Melihat data siswa</li>	
        					<li style="font-family: Lato">Melihat data pelanggaran</li>
        					<li style="font-family: lato">Melihat catatan pelanggaran</li>
                                                <li style="font-family: lato">Menambah data siswa / hapus data</li>
                                                <li style="font-family: lato">Menambah data pelanggaran baru / hapus data</li>
                                                <li style="font-family: lato">Menambah data kelas / hapus data</li>
        				</ul>
        			</blockquote>
        		</div>
        		<div class="col-md-4">	
        			<blockquote  style="font-family: lato">
        				<ul>
                                          <li style="list-style-type: none"><span style="color: black; float: left;font-family: Nexa; font-size: 55px; line-height: 40px;padding-right: 3px; padding-top: 8px;">D
                                            </span>engan adanya <b class="bold"  style="color:#3498db">program</b> ini diharapkan bisa meningkatkan kedisiplinan siswa dan mempermudah guru dalam menjalankan tugas.</li>
                                        </ul>
        			</blockquote>
        		</div>
                <!-- Untuk Logo smk -->
                        <div class="col-md-4">
                                <p align="center"><img src="{{ asset('img/smk.png') }}" alt="" class="img-responsive" style="width: 250px"></p>
                        </div>
                <!-- end Logo smk -->
                </div></b>
	@else
	<div class="row">
           <div class="col-md-4">
                   <blockquote>
                           Selamat datang {{ Auth::user()->name }} ! <br>di halaman ini anda akan di mudahkan untuk :
                           <ul><br>
                                <li>Mencatat pelanggaran siswa</li>
                           </ul>
                   </blockquote>
           </div>
           <div class="col-md-4">       
                                <blockquote  style="font-family: lato">
                                        <ul>
                                          <li style="list-style-type: none"><span style="color: black; float: left;font-family: Nexa; font-size: 55px; line-height: 40px;padding-right: 3px; padding-top: 8px;">D
                                            </span>engan adanya <b class="bold"  style="color:#3498db">program</b> ini diharapkan bisa meningkatkan kedisiplinan siswa dan mempermudah guru dalam menjalankan tugas.</li>
                                        </ul>
                                </blockquote>
                        </div>
           <div class="col-md-4">
                                <p align="center"><img src="{{ asset('img/smk.png') }}" alt="" class="img-responsive" style="width: 250px"></p>
                        </div>
        </div>
	@endif
@stop
</body>
</html>