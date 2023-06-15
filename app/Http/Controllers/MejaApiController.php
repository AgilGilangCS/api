<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use Illuminate\Http\Request;

class MejaApiController extends Controller
{
    public function index()
    {
        $meja = Meja::all();
        return response()->json(['message' => 'Hai', 'data' => $meja]);
    }
    public function show($id_meja)
    {
        $meja = Meja::find($id_meja);
        return response()->json(['message' => 'Hai', 'data' => $meja]);
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

        return response()->json(['message' => 'Meja berhasil disimpan'], 200);
    }
    public function uploadImage(Request $request)
    {
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/img', $filename);

        // Lakukan operasi lain jika diperlukan

        return response()->json(['message' => 'Gambar berhasil diupload']);
    }

    public function update(Request $request, $id_meja)
    {
        $meja = Meja::find($id_meja);
        $meja->update($request->all());
        return response()->json(['message' => 'Hai', 'data' => $meja]);
    }
    public function destroy($id_meja)
    {
        $meja = Meja::find($id_meja);
        $meja->delete();
        return response()->json(['message' => 'Hai', 'data' => null]);
    }
}
