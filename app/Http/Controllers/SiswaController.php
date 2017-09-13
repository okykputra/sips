<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
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
    }
}
