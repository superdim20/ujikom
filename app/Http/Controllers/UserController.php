<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', IsAdmin::class]);
    }

  
    public function index()
    {
        $user = User::orderBy('id', 'desc')->get();
        return view('user.index', compact('user'));
    }

    public function create()
    {
        return view('user.create'); // Tidak perlu mengirimkan 'user' ke tampilan
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    // Menyimpan data baru
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);  // Jangan lupa hash password
    $user->isAdmin = $request->isAdmin;
    $user->save();  // Simpan data

    Alert::success('Success', 'User berhasil disimpan')->autoClose(2000);

    return redirect()->route('user.index');  // Redirect ke halaman daftar user setelah sukses
}



    public function show($id)
    {
        //
    }

  function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required', 'string', 'email', 'max:255',
                // use Illuminate\Validation\Rule;
                Rule::unique('users')->ignore($user->id)
            ],
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->isAdmin = $request->isAdmin;
        Alert::success('Success', 'Data berhasil diedit')->autoClose(2000);
        $user->save();
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);  

        if (Auth::user()->id != $user->id) {
            $user->delete();
            Alert::success('Success', 'Data berhasil dihapus')->autoClose(2000);
            return redirect()->route('user.index');
        }
        return redirect()->route('user.index');
    }
}
