<?php

namespace App\Http\Controllers;

use App\timeModel;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $kelas = DB::table('kelas')->get();
        return view('user.index',['kelas'=>$kelas]);
    }

    public function tampil($id)
    {
        $siswa = DB::table('kelas')->join('siswa','siswa.kelas_id','=','kelas.id')->where('siswa.kelas_id',$id)->get();
        return view('user.data_siswa',['siswa'=>$siswa]);
    }

    public function tambah($id)
    {
        $siswa = DB::table('siswa')->where('id',$id)->first();
        $pelanggaran = DB::table('pelanggaran')->get();
        return view('user.pelanggaran',  ['siswa'=>$siswa , 'pelanggaran'=>$pelanggaran]);
    }

    public function store(Request $request)
    {
       	// $catat = DB::table('catatan_pelanggaran')->insert([
        //             'siswa_id' =>$request->siswa_id,
        //             'pelanggaran_id' =>$request->pelanggaran_id,
                     
        // 	]);
        $catat = new timeModel;
        $catat->siswa_id = $request->siswa_id;
        $catat->pelanggaran_id = $request->pelanggaran_id;
        $catat->save();
      	return redirect('Catat')->with('message','Data Berhasil Di Kirim');
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("catatan_pelanggaran")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Products Deleted successfully."]);
    }
}
