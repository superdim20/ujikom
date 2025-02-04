<?php

namespace App\Http\Controllers;

use App\Models\Publisher ;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
        public function index()
    {
        $publisher = Publisher::paginate(10);  // Menggunakan paginate untuk pagination
        return view('publisher.index', compact('publisher'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publisher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_publisher' => 'required|min:5',
        ]);

        $publisher = new Publisher ();
        $publisher->nama_publisher = $request->nama_publisher;
        $publisher->save();
        return redirect()->route('publisher.index');
    }

    
    public function edit($id)
    {
        $publisher = Publisher ::findOrFail($id);
        return view('publisher.edit', compact('publisher'));
    }
    
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'nama_publisher' => 'required|min:5',
        ]);

        $publisher = Publisher ::findOrFail($id);
        $publisher->nama_publisher = $request->nama_publisher;
        $publisher->save();
        return redirect()->route('publisher.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $publisher = Publisher ::findOrFail($id);
        $publisher->delete();
        return redirect()->route('publisher.index');

    }
}
