<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hack;
use App\Models\Identity;
use App\Models\Birthplace;
use Illuminate\Support\Facades\Validator;

class HackController extends Controller
{
    public function homepage(){
        return view('welcome2');
    }
    public function adminPanel()
    {
        $hacks = Hack::all();

        return view('adminPanel', compact('hacks'));
    }

    public function create()
    {
        $birthplaces = Birthplace::all();
        return view('registerData2', compact('birthplaces'));
    }

    public function store(Request $request){
        /*
        $request->validate([
            'nama_ketua' => ['required'],
            'email' => 'required|email|unique:hacks',
            'nomor_whatsapp' => 'required|min:9|unique:hacks',
            'id_line' => 'required',
            'id_github' => 'required|email',
            'tempat_lahir' => 'required',
            'tanggal_lahir_ketua' => 'required',
            'cv' =>'required|mimes:jpg,jpeg,png',
            'id_card' => 'required|mimes:jpg,jpeg,png'
        ]); */


        $validator = Validator::make($request->all(), [
            'nama_ketua' => ['required'],
            'email' => 'required|email|unique:hacks',
            'nomor_whatsapp' => 'required|min:9|unique:hacks',
            'id_line' => 'required',
            'id_github' => 'required',
            'birthplace_id' => 'required',
            'tanggal_lahir_ketua' => 'required|date|before_or_equal:' . now()->subYears(17)->format('Y-m-d'),
            'cv' =>'required|mimes:jpg,jpeg,png,pdf',
            'id_card' => 'required|mimes:jpg,jpeg,png,pdf'
            // Add other validation rules as needed
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous() .'#contact')->withErrors($validator)->withInput();
        }

        /*
        $request->validate([
            'nama_ketua' => ['required'],
            'email' => 'required|email|unique:hacks',
            'nomor_whatsapp' => 'required|min:9|unique:hacks',
            'id_line' => 'required',
            'id_github' => 'required',
            'birthplace_id' => 'required',
            'tanggal_lahir_ketua' => 'required|date|before_or_equal:' . now()->subYears(18)->format('Y-m-d'),
            'cv' =>'required|mimes:jpg,jpeg,png,pdf',
            'id_card' => 'required|mimes:jpg,jpeg,png,pdf'
        ]);*/

        $cv_name = $request->nama_ketua . '-' . $request->nama_grup . '-' . $request->file('cv')->getClientOriginalName();
        $request->file('cv')->storeAs('/public/cv',$cv_name);

        $id_card = $request->nama_ketua . '-' . $request->nama_grup . '-' . $request->file('id_card')->getClientOriginalName();
        $request->file('id_card')->storeAs('/public/id_card',$id_card);

        Hack::create([
            'nama_ketua' => $request->nama_ketua,
            'email' => $request->email,
            'nomor_whatsapp' => $request->nomor_whatsapp,
            'id_line' => $request->id_line,
            'id_github' => $request->id_github,
            'birthplace_id' => $request->birthplace_name,
            'tanggal_lahir_ketua' => $request->tanggal_lahir_ketua,
            'cv' => $cv_name,
            'id_card' => $id_card
        ]);


         return redirect(route('dashboardhack'));
    }
    public function edit($id)
    {
        $hack = Hack::findOrFail($id);
        return view('editData', compact('hack'));
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
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir_ketua' => $request->tanggal_lahir_ketua
        ]);
        return redirect(route('adminPanel'));
    }
    public function delete($id){
        Hack::destroy($id);
        return redirect(route('adminPanel'));
    }

    public function ascending()
    {
        $ascendingData = Hack::orderBy('nama_ketua', 'asc')->get();
        return View::make('adminPanel', ['data' => $ascendingData, 'order' => 'Ascending']);
    }

    public function descending()
    {
        $descendingData = Hack::orderBy('nama_ketua', 'desc')->get();
        return View::make('adminPanel', ['data' => $descendingData, 'order' => 'Descending']);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = Hack::where('nama_ketua', 'like', '%' . $query . '%')->get();

        return view('search', ['results' => $results, 'query' => $query]);
    }

}
