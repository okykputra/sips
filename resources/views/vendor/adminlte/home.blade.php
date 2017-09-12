<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato">
</head>
<body>
	@extends('adminlte::layouts.app')

<title>Home</title>

@section('main-content')
        <div class="panel panel-primary" style="margin-top: -30px">
        	<div class="panel-heading">  
        		<p style="font-family: lato;font-size: 30px" align="center" >Selamat datang</p>
        	</div>
        </div>
        <small>@yield('')</small>
        <!-- content di bawah welcome -->
        	<b><div class="row">
        		<div class="col-md-4">
        			<blockquote  style="font-family: lato">
        				Selamat datang <b style="color:#3498db">admin !</b> <br> di halaman ini anda akan di mudahkan untuk :<br>
        				<ul style="margin-top: 10px;">
        					<li style="font-family: lato">Melihat data siswa</li>	
        					<li style="font-family: lato">Melihat data pelanggaran</li>
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
                <div class="col-md-4">
                    <button class='btn btn-primary btn-circle' style=" border-color:#3498db; width: 30px;height: 30px;text-align: center;padding: 6px 0;margin-left: 10px;
  border-radius: 15px;" onclick='if(document.getElementById(&apos;spoiler&apos;) .style.display==&apos;none&apos;) {document.getElementById(&apos;spoiler&apos;) .style.display=&apos;&apos;}else{document.getElementById(&apos;spoiler&apos;) .style.display=&apos;none&apos;}' title='Info' type='button'><i class="fa fa-bell-o"></i></button><span style="font-family: lato;font-size: 16px;margin-left: 3px;"> Sembunyikan / tampilkan</span>

                    <div id='spoiler' style='display: none;margin-top: 7px;'>
                        <div class='panel panel-info'>
                            <div class='panel-heading'>
                            <p style="font-family: lato;font-size: 16px">Special Thanks to :</p>
                            <li style="font-family: lato;font-size: 16px">Allah SWT</li>
                            <li style="font-family: lato;font-size: 16px">Quantum leap (Tempat PSG)</li>
                            <li style="font-family: lato;font-size: 16px">Kepala sekolah Smkn 1 dlanggu</li>
                            <li style="font-family: lato;font-size: 16px">Team Developer</li>
                            </div>
                     </div> 
                 </div>
            </div>
        </div></b>
@stop
</body>
</html>