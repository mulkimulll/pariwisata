<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pa = DB::select("SELECT COUNT(*) as wisata FROM tbl_destinasi")[0];
        $k = DB::select("SELECT COUNT(*) as kategori FROM tbl_kategori")[0];
        $p = DB::select("SELECT COUNT(*) as penginapan FROM tbl_penginapan")[0];        
        $t = DB::select("SELECT COUNT(*) as transportasi FROM tbl_transportasi")[0];        

        return view('dashboard.index',compact('pa','k','p','t'));
    }
}
