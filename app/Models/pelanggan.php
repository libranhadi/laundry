<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;

      protected $fillable = [
        'pelanggan_nama',  
        'pelanggan_hp',
        'pelanggan_alamat'
    ];
}
