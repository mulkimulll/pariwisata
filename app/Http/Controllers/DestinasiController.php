<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_destinasi;
use DB;
use Input;
use Image;

class DestinasiController extends Controller
{
    public function index()
    {
        $r = DB::SELECT("SELECT * FROM tbl_kategori");

        return view('destinasi.index',compact('r'));
    }

    public function InputDest(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new tbl_destinasi;
            $m->nama_destinasi = $data['nama_destinasi'];
            $m->id_kategori = $data['id_kategori'];
            $m->isi_destinasi = $data['isi_destinasi'];
            $m->alamat = $data['alamat'];
            if($request->hasfile('gambar')){
                $files = $request->file('gambar');
                $extension = $files->getClientOriginalExtension();
                $filename = rand(111,9999).'.'.$extension;
                $large_image_path = 'images/large/'.$filename;
                //image resize code
                Image::make($files)->save($large_image_path);
                $m->gambar = $filename;
               } 
            $m->save();
            return redirect('/daftar-destinasi')->with('message','data berhasil di tambahkan');
         }
    }

    public function list()
    {
        $r = DB::select("SELECT * FROM tbl_destinasi a LEFT JOIN tbl_kategori b on a.id_kategori = b.id_kategori");

        return view('destinasi.daftar-destinasi',compact('r'));
    }

    public function dtl($id=null)
    {
        $r = DB::select("SELECT * FROM tbl_destinasi a LEFT JOIN tbl_kategori b on a.id_kategori = b.id_kategori WHERE id_destinasi = ?",[$id])[0];
        
        return view('destinasi.dtl',compact('r'));
    }

    public function ubah($id=null)
    {
        $r = DB::select("SELECT * FROM tbl_destinasi WHERE id_destinasi=?",[$id])[0];
        $t = DB::select("SELECT * FROM tbl_kategori",[$id]); 

        return view('destinasi.edit',compact('r','t'));
    }

    public function ubahDestProses(Request $request,$id=null)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasFile('gambar')){
                $file_photo = $request->file('gambar');

                // Kalo pas diedit gambar diganti / masukin gambar
                if($file_photo) {
                    $filename = $file_photo->getClientOriginalName();
                    $data['gambar'] = $filename; // Update field photo
            
                    $proses = $file_photo->move('images/large/', $filename);
                }
            }
            $filename = $data['gambar']; 

            tbl_destinasi::where(['id_destinasi'=>$id])->update(['nama_destinasi'=>$data['nama_destinasi'],
            'id_kategori'=>$data['id_kategori'],'alamat'=>$data['alamat'],
            'isi_destinasi'=>$data['isi_destinasi'],'gambar'=>$filename]);
            return redirect('/daftar-destinasi')->with('message','data berhasil di update');
        }
    }

    public function hapus($id=null){
        $d=DB::delete("DELETE from tbl_destinasi where id_destinasi=?",[$id]);
        return redirect('/daftar-destinasi')->with('message','data berhasil di hapus!!!');
  
    }
}
