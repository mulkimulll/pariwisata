<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_bupati;
use DB;
use Input;
use Image;

class BupatiController extends Controller
{
    public function index()
    {
        $r = DB::select("SELECT * FROM tbl_bupati");

        return view('bupati.index',compact('r'));
    }

    public function InputBupati(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new tbl_bupati;
            $m->nama_bupati = $data['nama_bupati'];
            $m->keterangan = $data['keterangan'];
            if($request->hasfile('gambar')){
                $files = $request->file('gambar');
                $extension = $files->getClientOriginalExtension();
                $filename = rand(111,9999).'.'.$extension;
                $large_image_path = 'images/bupati/'.$filename;
                //image resize code
                Image::make($files)->save($large_image_path);
                $m->gambar = $filename;
               } 
            $m->save();
            return redirect('/bupati')->with('message','data berhasil di tambahkan');
         }
    }

    public function ubah($id=null)
    {
        $r = DB::select("SELECT * FROM tbl_bupati WHERE id_bupati=?",[$id])[0];
        $t = DB::select("SELECT * FROM tbl_kategori",[$id]); 

        return view('bupati.edit',compact('r','t'));
    }

    public function ubahBupatiProses(Request $request,$id=null)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasFile('gambar')){
                $file_photo = $request->file('gambar');

                // Kalo pas diedit gambar diganti / masukin gambar
                if($file_photo) {
                    $filename = $file_photo->getClientOriginalName();
                    $data['gambar'] = $filename; // Update field photo
            
                    $proses = $file_photo->move('images/bupati/', $filename);
                }
            }
            $filename = $data['gambar']; 

            tbl_bupati::where(['id_bupati'=>$id])->update(['nama_bupati'=>$data['nama_bupati'],
            'keterangan'=>$data['keterangan'],'gambar'=>$filename]);
            return redirect('/bupati')->with('message','data berhasil di update');
        }
    }

    public function hapus($id=null){
        $d=DB::delete("DELETE from tbl_bupati where id_bupati=?",[$id]);
        return redirect('/bupati')->with('message','data berhasil di hapus!!!');
  
    }
}
