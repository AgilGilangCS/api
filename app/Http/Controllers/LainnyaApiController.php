<?php

namespace App\Http\Controllers;

use App\Models\Lainnya;
use Illuminate\Http\Request;

class LainnyaApiController extends Controller
{
    public function index()
    {
        $lainnya = Lainnya::all();
        return response()->json(['message' => 'Hai', 'data' => $lainnya]);
    }
    public function show($id_lainnya)
    {
        $lainnya = Lainnya::find($id_lainnya);
        return response()->json(['message' => 'Hai', 'data' => $lainnya]);
    }
    public function store(Request $request)
    {
        $lainnya = Lainnya::create($request->all());

        if ($request->hasFile('image_lemari')) {
            $file = $request->file('image_lemari');
            $extension = $file->getClientOriginalExtension();
            $fileName = 'gilang' . '_' . $file->getClientOriginalName();
            $filePath = $request->file('image_lemari')->storeAs('img/', $fileName);

            // Simpan nama file yang sesuai ke dalam basis data
            $lainnya->image_lemari = $fileName;
            $lainnya->save();
        }

        return response()->json(['message' => 'Lainnya berhasil disimpan'], 200);
    }
    public function uploadImage(Request $request)
    {
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/img', $filename);

        // Lakukan operasi lain jika diperlukan

        return response()->json(['message' => 'Gambar berhasil diupload']);
    }

    public function update(Request $request, $id_lainnya)
    {
        $lainnya = Lainnya::find($id_lainnya);
        $lainnya->update($request->all());
        return response()->json(['message' => 'Hai', 'data' => $lainnya]);
    }
    public function destroy($id_lainnya)
    {
        $lainnya = Lainnya::find($id_lainnya);
        $lainnya->delete();
        return response()->json(['message' => 'Hai', 'data' => null]);
    }
}
