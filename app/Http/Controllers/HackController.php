<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hack;

class HackController extends Controller
{
    public function homepage(){
        return view('welcome');
    }
    public function adminPanel()
    {
        $hacks-> Hack::all();
        return view('adminPanel', compact('hacks'));
    }
    public function create()
    {
        return view('createData');
    }

    public function store(Request $request){

        $request->validate([
            'nama_ketua' => ['required'],
            'email' => 'required|email',
            'nomor_whatsapp' => 'required|min:9',
            'id_line' => 'required',
            'id_github' => 'required',
            'tanggal_lahir_ketua' => 'required|date',
        ]);
        $cv_name = $request->nama_ketua . '-' . $request->nama_grup . '-' . $request->file('cv')->getClientOriginalName();
        $request->file('cv')->storeAs('/public/cv',$cv_name);

        $id_card = $request->nama_ketua . '-' . $request->nama_grup . '-' . $request->file('id_card')->getClientOriginalName();
        $request->file('id_kartu_nonbinus')->storeAs('/public/id_card',$cv_name);

        Hack::create([
            'nama_ketua' => $request->nama_ketua,
            'email' => $request->email,
            'nomor_whatsapp' => $request->nomor_whatsapp,
            'id_line' => $request->id_line,
            'id_github' => $request->id_github,
            'tanggal_lahir_ketua' => $request->tanggal_lahir_ketua,
            'cv' => $cv_name,
            'id_card' => $id_card
        ]);


         return redirect(route('adminPanel'));
    }
    public function edit($id)
    {
        $hack = Hack::findOrFail($id);
        return view('editPanel', compact('hack'));
    }
    public function update(Request $request, $id)
    {
        $hack = Hack::findOrFail($id);

        $hack->update([
            'nama_ketua' => $request->nama_ketua,
            'email' => $request->email,
            'nomor_whatsapp' => $request->nomor_whatsapp,
            'id_line' => $request->id_line,
            'id_github' => $request->id_github,
            'tanggal_lahir_ketua' => $request->tanggal_lahir_ketua
        ]);
        return redirect(route('adminPanel'));
    }
    public function delete($id){
        Hack::destroy($id);
        //return redirect
    }

}
