<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'unique:users', 'email:dns'],
            'password' => ['required', 'min:7', 'max:25']
        ]);

         //enkripsi password
         $data['password']=bcrypt($data['password']);

         User::create($data);

         return redirect('/')->with('success', 'Berhasil Registrasi, silahkan login!');
    }
}
