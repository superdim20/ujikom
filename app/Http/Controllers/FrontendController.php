<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;



class FrontendController extends Controller
{
  
    public function index()
    {
        $buku = Buku::all();
        
        return view('frontend',compact('buku'));
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        $buku = Buku::findOrFail($id);        
        return view('detail', compact('buku'));
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
