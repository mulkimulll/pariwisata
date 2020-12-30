<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_penginapan extends Model
{
    use HasFactory;
    protected $table = "tbl_penginapan";
    protected $fillable = ['gambar'];
    
    public function attributes()
    {
        
    }
}
