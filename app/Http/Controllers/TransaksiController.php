<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;
use App\Models\transaksi;
use App\Models\pakaian;
class TransaksiController extends Controller
{
    public function index(){
        $pelanggan = pelanggan::all();
        
        return view ('transaksi', [
            'pelanggan' => $pelanggan,
        ]);
    }
}
