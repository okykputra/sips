<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use DB;

class SiswaController extends Controller
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function index()
    {
        $kelas = DB::table('kelas')->get();
        return view('kelas.index',['kelas'=>$kelas]);
    }
    public function tampil($id)
    {
        $siswa = DB::table('kelas')->join('siswa','siswa.kelas_id','=','kelas.id')->where('siswa.kelas_id',$id)->get();
        return view('kelas.siswa',['siswa'=>$siswa]);
    }
    public function kelas()
    {
        $kelas = DB::table('kelas')->get();
        return view('siswa.tambah',['kelas'=>$kelas]);
    }
    public function tambah(Request $request)
    {
        $siswa = DB::table('siswa')->insert([
                'nama_siswa' 		  	     => $request->nama_siswa,
		       	'kelas_id'   			     => $request->kelas_id,
		       	'jenis_kelamin'   			     => $request->jenis_kelamin,
		       	'alamat'                     => $request->alamat,
		       	'nomer_telpon'               => $request->nomer_telpon
        ]);
        return redirect('/siswa')->with('message','Data Siswa Berhasil di Tambahkan');
=======
=======
>>>>>>> e043141623df6d261b35b39164272e30efc8c951
    public function kelas()
    {
    	$kelas = DB::table('kelas')
                ->orderBy('kelas.id','DESC')
                ->get();
        return view('kelas.kelas',['kelas'=>$kelas]);
    }

    public function add()
    {
    	return view('kelas.add');
    }

    public function store(Request $request)
    {
    	$kelas = DB::table('kelas')->insert([
    	'kelas' =>$request->kelas,
    	'jurusan' =>$request->jurusan
    	]);
    	return redirect('kelas');
<<<<<<< HEAD
>>>>>>> e043141623df6d261b35b39164272e30efc8c951
=======
>>>>>>> e043141623df6d261b35b39164272e30efc8c951
    }
}
