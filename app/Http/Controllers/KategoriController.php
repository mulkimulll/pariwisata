<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_kategori;
use DB;
use Input;

class KategoriController extends Controller
{
    public function index()
    {
        $r = DB::select("SELECT * FROM tbl_kategori");

        return view('kategori.index',compact('r'));
    }

    public function InputKategori(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new tbl_kategori;
            $m->nama_kategori = $data['nama_kategori'];
            $m->save();
            return redirect('/kategori')->with('message','data berhasil di tambahkan');
         }
    }

    public function ubah($id=null)
    {        
        $t = DB::select("SELECT * FROM tbl_kategori where id_kategori=?",[$id])[0]; 

        return view('kategori.edit',compact('t'));
    }

    public function ubahKategoriProses(Request $request,$id=null)
    {
        if($request->isMethod('post')){
            $data = $request->all();

            tbl_kategori::where(['id_kategori'=>$id])->update(['nama_kategori'=>$data['nama_kategori']]);
            return redirect('/kategori')->with('message','data berhasil di update');
        }
    }

    public function hapus($id=null){
        $d=DB::delete("DELETE from tbl_kategori where id_kategori=?",[$id]);
        return redirect('/kategori')->with('message','data berhasil di hapus!!!');
  
    }
}
