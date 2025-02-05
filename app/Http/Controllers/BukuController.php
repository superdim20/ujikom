<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Publisher;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BukuController extends Controller
{
 
    public function index()
    {
        $buku = Buku::with(['publisher', 'kategori'])->orderBy('id', 'desc')->get();
        return view('buku.index', compact('buku'));
    }
    

    
    public function create()
    {
        $kategori = Kategori::all();
        $publisher = Publisher::all();
        return view('buku.create', compact('publisher','kategori'));
    }


  
    public function store(Request $request)
    {
        $request->validate([
            'nama_buku' => 'required', 'string', 'max:255',
            'author' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'stok' => 'required',
        ]);

        $buku = new Buku();
        $buku->nama_buku = $request->nama_buku;
        $buku->author = $request->author;
        $buku->stok = $request->stok;
        $buku->id_publisher = $request->id_publisher;
        $buku->id_kategori = $request->id_kategori;

        $image = $request->file('image');
        $image->storeAs('public/bukus', $image->hashName());
        $buku->image = $image->hashName();
        Alert::success('Success', 'Data berhasil disimpan')->autoClose(2000);
        $buku->save();

        return redirect()->route('buku.index');
    }

   
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
    // Ambil data kategori dan publisher
    $kategori = Kategori::all();
    $publisher = Publisher::all();

    // Ambil data buku berdasarkan id
    $buku = Buku::findOrFail($id);

    // Kirim variabel ke view
    return view('buku.edit', compact('buku', 'publisher', 'kategori'));
    }


    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_buku' => 'required', 'string', 'max:255',
            'author' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'stok' => 'required',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->nama_buku = $request->nama_buku;
        $buku->author = $request->author;
        $buku->stok = $request->stok;
        $buku->id_publisher = $request->id_publisher;
        $buku->id_kategori = $request->id_kategori;


        if ($request->hasFile('image')) {
            Storage::delete('public/bukus/' . $buku->image); // hapus gambar lama
            $image = $request->file('image');
            $image->storeAs('public/bukus', $image->hashName());
            $buku->image = $image->hashName();
        }
        Alert::success('Success', 'Data berhasil diedit')->autoClose(2000);
        $buku->save();
        return redirect()->route('buku.index');
    }

   
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        Storage::delete('public/bukus/' . $buku->image);
        Alert::success('Success', 'Data berhasil dihapus')->autoClose(2000);
        $buku->delete();
        return redirect()->route('buku.index');
    }
}
