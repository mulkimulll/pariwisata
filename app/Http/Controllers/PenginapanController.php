<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_penginapan;
use DB;
use Input;
use Image;

class PenginapanController extends Controller
{
    public function index()
    {
        $r = DB::select("SELECT * FROM tbl_penginapan");

        return view('penginapan.index',compact('r'));
    }
}
