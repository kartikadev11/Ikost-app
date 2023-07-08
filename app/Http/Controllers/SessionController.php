<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Symfony\Contracts\Service\Attribute\Required;

class SessionController extends Controller
{
    function index(){
        return view('/sesi/index',[
            "title" => "Login"]);
    }
    function login(Request $request){
        Session::flash('email', $request->input('email'));
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)){
            //if auth succes
            return redirect('/admin')->with('success', 'Berhasil login');
        } else {
        return redirect('/sesi')->with('loginError','Username dan password yang dimasukkan tidak sesuai');
    }
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/admin');
      }

    function register(){
        return view('sesi.register',[
            "title" => "Register"]);
    }
    function create(Request $request){
        Session::flash('name', $request->input('name'));
        Session::flash('email', $request->input('email'));
        
        $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8'
        ], [
            'nama.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email yang dimasukkan tidak valid',
            'email.unique' => 'Email sudah digunakan, silakan masukkan email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minumum password 8 karakter'
        ]);
        $data = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
        ];
        User::create($data);
        $infologin = [
        'email' => $request->email,
        'password' => $request->password
        ];
        if (Auth::attempt($infologin)) {
            return redirect('/admin')->with('success', 'Berhasil login');
        } else {
        return redirect('/sesi')->withErrors('Username dan password yang dimasukkan tidak sesuai');
        }
    }
}