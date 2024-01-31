<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

use App\Models\Hack;

class HackController extends Controller
{
    public function homepage(){
        return view('welcome');
    }
    
    public function store(Request $request){

        $request->validate([
            'nama_grup' => ['required'],
            'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()->uncompromised()],
            'nama_ketua' => ['required'],
            'email' => 'required|email',
            'nomor_whatsapp' => 'required|min:9',
            'id_line' => 'required',
            'id_github' => 'required',
            'tanggal_lahir_ketua' => 'required|date',
            'cv' => 'required|mimes:png,jpg,pdf,png',
            'id_card' => 'required|mimes:png,jpg,pdf,png'
        ]);
        $cv_name = $request->nama_ketua . '-' . $request->nama_grup . '-' . $request->file('cv')->getClientOriginalName();
        $request->file('cv')->storeAs('/public/cv',$cv_name);

        $id_card = $request->nama_ketua . '-' . $request->nama_grup . '-' . $request->file('id_card')->getClientOriginalName();
        $request->file('id_kartu_nonbinus')->storeAs('/public/id_card',$cv_name);

        Hack::create([
            'nama_grup' => $request->nama_grup,
            'password' => $request->password,
            'nama_ketua' => $request->nama_ketua,
            'email' => $request->email,
            'nomor_whatsapp' => $request->nomor_whatsapp,
            'id_line' => $request->id_line,
            'id_github' => $request->id_github,
            'tanggal_lahir_ketua' => $request->tanggal_lahir_ketua,
            'cv' => $cv_name,
            'id_card' => $id_card
        ]);
         // return redirect(route('dashboard'));
    }
    public function edit($id)
    {
        $hack = Hack::findOrFail($id);
        //return view('editBook', compact('hack'));
    }
    public function update(Request $request, $id)
    {
        $hack = Hack::findOrFail($id);

        $hack->update([
            'nama_grup' => $request->nama_grup,
            'password' => $request->password,
            'nama_ketua' => $request->nama_ketua,
            'email' => $request->email,
            'nomor_whatsapp' => $request->nomor_whatsapp,
            'id_line' => $request->id_line,
            'id_github' => $request->id_github,
            'tanggal_lahir_ketua' => $request->tanggal_lahir_ketua,
        ]);
        //return redirect;
    }
    public function delete($id){
        Hack::destroy($id);
        //return redirect
    }

}
