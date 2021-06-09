<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pakaian extends Model
{
    use HasFactory;
    protected $fillable =['pakaian_transaksi' , 'pakaian_jenis', 'pakaian_jumlah'];
}
