<?php

namespace App\Http\Controllers;

use App\Models\Kursi;
use Illuminate\Http\Request;

class KursiApiController extends Controller
{
    public function index()
    {
        $kursi = Kursi::all();
        return response()->json(['message' => 'Hai', 'data' => $kursi]);
    }
    public function show($id_kursi)
    {
        $kursi = Kursi::find($id_kursi);
        return response()->json(['message' => 'Hai', 'data' => $kursi]);
    }
    public function store(Request $request)
    {
        $kursi = Kursi::create($request->all());

        if ($request->hasFile('image_kursi')) {
            $file = $request->file('image_kursi');
            $extension = $file->getClientOriginalExtension();
            $fileName = 'gilang' . '_' . $file->getClientOriginalName();
            $filePath = $request->file('image_kursi')->storeAs('img/', $fileName);

            // Simpan nama file yang sesuai ke dalam basis data
            $kursi->image_kursi = $fileName;
            $kursi->save();
        }

        return response()->json(['message' => 'Kursi berhasil disimpan'], 200);
    }
    public function uploadImage(Request $request)
    {
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/img', $filename);

        // Lakukan operasi lain jika diperlukan

        return response()->json(['message' => 'Gambar berhasil diupload']);
    }

    public function update(Request $request, $id_kursi)
    {
        $kursi = Kursi::find($id_kursi);
        $kursi->update($request->all());
        return response()->json(['message' => 'Hai', 'data' => $kursi]);
    }
    public function destroy($id_kursi)
    {
        $kursi = Kursi::find($id_kursi);
        $kursi->delete();
        return response()->json(['message' => 'Hai', 'data' => null]);
    }
}
