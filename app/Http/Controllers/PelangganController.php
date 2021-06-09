<?php

namespace App\Http\Controllers;

use App\Http\Requests\PelangganRequest;
use App\Models\pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(){
        $pelanggans = pelanggan::all();
        return view('pelanggan-index',[
            'pelanggans' => $pelanggans,
        ]);
    }
    public function create(PelangganRequest $request){
        $attr = $request->all();
        // $pelanggan = 
        pelanggan::create($attr);
        return redirect()->route('index-pelanggan');
    }
    public function edit( $id){
         $pelanggan = Pelanggan::findOrFail($id);
         return view('pelanggan-edit', ['pelanggan' => $pelanggan]);
    }
    public function update(PelangganRequest $request, $id){
         $attr = $request->all();
        $item = pelanggan::findOrFail($id);
        $item->update($attr);

        return redirect()->route('index-pelanggan');
    }
     public function delete( $id){
        $attr = pelanggan::findOrFail($id);
        $attr->delete();
        return redirect()->back();
        
    }
}
