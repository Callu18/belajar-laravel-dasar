<?php

namespace App\Http\Controllers;

use App\Models\InputData;
use Illuminate\Http\Request;

class InputDataController extends Controller
{
    public function inputData(Request $request){
        $request->validate([
            'nama' => ['string','required','min:2','max:255'],
        ]);

        InputData::create([
            'nama' => $request->nama,
        ]);

        return redirect('/')->with('pesan-berhasil', 'Berhasil Input Data');
    }
}
