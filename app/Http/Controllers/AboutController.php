<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_about;
use DB;

class AboutController extends Controller
{
    public function index()
    {
        $r = DB::select("SELECT * FROM tbl_about");

        return view('about.index',compact('r'));
    }

    public function ubah($id=null)
    {
        $r = DB::select("SELECT * FROM tbl_about WHERE id_about=?",[$id])[0];

        return view('about.edit',compact('r'));
    }

    public function ubahAboutProses(Request $request,$id=null)
    {
        if($request->isMethod('post')){
            $data = $request->all();

            tbl_about::where(['id_about'=>$id])->update(['keterangan'=>$data['keterangan']]);
            return redirect('/about')->with('message','data berhasil di update');
        }
    }
}
