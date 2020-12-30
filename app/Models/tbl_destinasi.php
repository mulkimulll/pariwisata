<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_destinasi extends Model
{
    use HasFactory;

    protected $table = "tbl_destinasi";
    protected $fillable = ['gambar'];

    public function attributes()
    {
        
    }
}
