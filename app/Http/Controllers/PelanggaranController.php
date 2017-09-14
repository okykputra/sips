<?php

namespace App\Http\Controllers;
use DB;
use App\PelanggaranModel;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
public function create()
{
     return view('pelanggaran.index');
}

public function store(Request $request)
{
		$pelanggaran = new PelanggaranModel;
		$pelanggaran->pelanggaran = $request->pelanggaran;
		$pelanggaran->poin = $request->poin;
        $pelanggaran->save();
       return redirect('pelanggaran.index');
    }
}
