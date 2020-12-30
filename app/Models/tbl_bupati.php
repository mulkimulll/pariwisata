<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_bupati extends Model
{
    use HasFactory;
    protected $table = "tbl_bupati";
    protected $fillable = ['gambar'];
    
    public function attributes()
    {
        
    }
}
