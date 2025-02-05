<?php

namespace App\Http\Controllers;

use App\Models\Kategori ;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::paginate(10);  // Menggunakan paginate untuk pagination
        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|min:5',
        ]);

        $kategori = new Kategori ();
        $kategori->nama_kategori = $request->nama_kategori;
        Alert::success('Success', 'Data berhasil disimpan')->autoClose(2000); // SweetAlert sukses
        $kategori->save();
        return redirect()->route('kategori.index');
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);

        // Pass the category to the view
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|min:5',
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        Alert::success('Success', 'Data berhasil diedit')->autoClose(2000);
        $kategori->save();
        return redirect()->route('kategori.index');
    }

    
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        Alert::success('Success', 'Data berhasil dihapus')->autoClose(2000);
        $kategori->delete();
        return redirect()->route('kategori.index');
    }
}
