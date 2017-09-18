<?php

namespace App\Http\Controllers;
use DB;
use App\PelanggaranModel;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
	public function index()
    {
    	$pelanggaran = DB::table('pelanggaran')
    					->orderBy('pelanggaran.id','ASC')
    					->get();
        return view('pelanggaran.view',['pelanggaran'=>$pelanggaran]);
    }

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
	       return redirect('pelanggaran/view');
	}

	public function edit($id)
    {
    	$pelanggaran = PelanggaranModel::find($id);
    	// dd($pelanggaran);
    	return view('pelanggaran.edit')->with('pelanggaran',$pelanggaran);

        // $pelanggaran = DB::table('pelanggaran')->where('id',$id)->first();
        // return view('pelanggaran.edit', ['pelanggaran'=>$pelanggaran]);
    	}

     public function update(Request $request, $id)
    {


        $pelanggaran = PelanggaranModel::find($id);
        $pelanggaran->pelanggaran  = $request->pelanggaran;
        $pelanggaran->poin         = $request->poin;
        // dd($pelanggaran);
        $pelanggaran->save();

        return redirect('pelanggaran/view');
    }

      public function destroy($id)
    {
        $delete = DB::table('pelanggaran')->where('id',$id)->delete();
        return redirect()->back();
    }
}
