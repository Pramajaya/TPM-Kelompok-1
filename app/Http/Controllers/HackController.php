<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hack;

class HackController extends Controller
{
    public function homepage(){
        return view('welcome');
    }

    public function store(Request $request){
        Hack::create([
            'nama_grup' => $request->nama_grup,
            'password' => $request->password,
            'nama_ketua' => $request->nama_ketua,
            'email' => $request->email,
            'nomor_whatsapp' => $request->nomor_whatsapp,
            'id_line' => $request->id_line,
            'id_github' => $request->id_github,
            'tanggal_lahir_ketua' => $request->tanggal_lahir_ketua,
            'cv' => $request->cv,
            'flazz_binus' => $request->flazz_binus,
            'id_kartu_non_binus' => $request->id_kartu_non_binus

            // return redirect(route('dashboard'));
        ]);
    }
}
