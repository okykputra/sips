<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SiswaController extends Controller
{
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
        $grade = DB::table('kelas')->get();
        return view('siswa.tambah',['grade'=>$grade]);
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
    }
    public function data_kelas()
    {
       	$kelas = DB::table('kelas')
                    ->orderBy('kelas.id','ASC')
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
    }

    public function destroy($id)
    {
        $delete = DB::table('kelas')->where('id',$id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $kelas = DB::table('kelas')->where('id',$id)->first();
        return view('kelas.edit', ['kelas'=>$kelas]);
    }

    public function update(Request $request,$id)
    {
        $kelas = DB::table('kelas')->where('id',$id)
                    ->update([
                        'kelas'       => $request->kelas,
                        'jurusan'     => $request->jurusan
                    ]);
        return redirect('kelas');
    }

    public function ubah($id)
    {
        $siswa = DB::table('siswa')->where('id',$id)->first();
        $kelas = DB::table('kelas')->orderBy('kelas','ASC')->get();
        return view('siswa.edit', ['siswa' => $siswa , 'kelas' => $kelas]);
    }

    public function ganti(Request $request,$id)
    {
        $siswa = DB::table('siswa')->where('id',$id)
                ->update([
                    'nama_siswa' 		  	     => $request->nama_siswa,
		       	    'kelas_id'   			     => $request->kelas_id,
                    'jenis_kelamin'   			     => $request->jenis_kelamin,
                    'alamat'                     => $request->alamat,
                    'nomer_telpon'               => $request->nomer_telpon
                ]);
        return redirect('siswa')->with('message','Data Berhasil di Update');             
    }

    public function hapus($id)
    {
         $hapus = DB::table('siswa')->where('id', '=', $id)->delete();
         return redirect()->back()->with('message','Data Berhasil di Hapus');;
    }
    
    public function catatan()
    {
        $catatan = DB::table('catatan_pelanggaran')
                    ->join('siswa','siswa.id','=','catatan_pelanggaran.siswa_id')
                    ->join('pelanggaran','pelanggaran.id','=','catatan_pelanggaran.pelanggaran_id')
                    ->join('kelas','kelas.id','=','siswa.kelas_id')
                    ->get();
        return view('siswa.catatan',['catatan'=>$catatan]);
    }
}
