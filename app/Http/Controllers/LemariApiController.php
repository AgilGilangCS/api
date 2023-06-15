<?php

namespace App\Http\Controllers;

use App\Models\Lemari;
use Illuminate\Http\Request;

class LemariApiController extends Controller
{
    public function index()
    {
        $lemari = Lemari::all();
        return response()->json(['message' => 'Hai', 'data' => $lemari]);
    }
    public function show($id_lemari)
    {
        $lemari = Lemari::find($id_lemari);
        return response()->json(['message' => 'Hai', 'data' => $lemari]);
    }
    public function store(Request $request)
    {
        $lemari = Lemari::create($request->all());

        if ($request->hasFile('image_lemari')) {
            $file = $request->file('image_lemari');
            $extension = $file->getClientOriginalExtension();
            $fileName = 'gilang' . '_' . $file->getClientOriginalName();
            $filePath = $request->file('image_lemari')->storeAs('img/', $fileName);

            // Simpan nama file yang sesuai ke dalam basis data
            $lemari->image_lemari = $fileName;
            $lemari->save();
        }

        return response()->json(['message' => 'Lemari berhasil disimpan'], 200);
    }
    public function uploadImage(Request $request)
    {
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/img', $filename);

        // Lakukan operasi lain jika diperlukan

        return response()->json(['message' => 'Gambar berhasil diupload']);
    }

    public function update(Request $request, $id_lemari)
    {
        $lemari = Lemari::find($id_lemari);
        $lemari->update($request->all());
        return response()->json(['message' => 'Hai', 'data' => $lemari]);
    }
    public function destroy($id_lemari)
    {
        $lemari = Lemari::find($id_lemari);
        $lemari->delete();
        return response()->json(['message' => 'Hai', 'data' => null]);
    }
}
