<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('auth.registrasi');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:200'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registrasi berhasil silahkan login!!');
    }
}
