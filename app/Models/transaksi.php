<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaksi_tgl', 'transaksi_pelanggan', 'transaksi_harga', 'transaksi_berat', 'transaksi_tgl_selesai', 'transaksi_status'
    ];
}
