<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\harga;
use Illuminate\Auth\Events\Validated;

class HargaController extends Controller
{
    public function index (){
        $id = 1;
        $harga = harga::findOrFail($id);
        // dd($harga);
        return view('harga', ['harga' => $harga]);
    }
    public function update(Request $request, $id){
        $attr = $this->validate($request, [
            'harga_per_kilo'  => 'required',
        ]);
        $item = harga::findOrFail($id);
        $item->update($attr);

        return redirect()->route('get-harga');
    }
}
