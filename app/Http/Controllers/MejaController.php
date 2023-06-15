<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    public function index()
    {
        $mejas = Meja::all();
        return view('mejas.index', compact(['mejas']));
    }
    public function tambah()
    {
        return view('mejas.tambah');
    }
    public function store(Request $request)
    {
        $meja = Meja::create($request->all());

        if ($request->hasFile('image_meja')) {
            $file = $request->file('image_meja');
            $extension = $file->getClientOriginalExtension();
            $fileName = 'gilang' . '_' . $file->getClientOriginalName();
            $filePath = $request->file('image_meja')->storeAs('img/', $fileName);

            // Simpan nama file yang sesuai ke dalam basis data
            $meja->image_meja = $fileName;
            $meja->save();
        }

        return redirect('/mejas');
    }


    public function edit($id_meja)
    {
        $meja = Meja::find($id_meja);
        return view('mejas.edit', compact(['meja']));
    }
    public function update(Request $request, $id_meja)
    {
        $meja = Meja::find($id_meja);
        $meja->update($request->all());
        return redirect('/mejas');
    }
    public function destroy($id_meja)
    {
        $meja = Meja::find($id_meja);
        $meja->delete();
        return redirect('/mejas');
    }
}
