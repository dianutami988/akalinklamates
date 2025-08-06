<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Menambahkan Auth facade
use App\Models\Guru;
use Session;
use Hash;
use Illuminate\Http\RedirectResponse;
use DB;

class AuthController extends Controller
{
    public function tampilRegistrasi(){
        return view('registrasi');
    }

    public function submitRegistrasi(Request $request){

        DB::table('gurus')->insert([
            'nama'=>$request->nama,
            'nip'=>$request->nip,
            'alamat'=>$request->alamat,
            'jeniskelamin'=>$request->jeniskelamin,
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
        ]);
        return redirect('/loginguru');
    }

    public function tampilLogin(){
        return view('loginguru');
    }

    public function submitLogin(Request $request){
       $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $data=[
            'username' => 'required',
            'password' => 'required'
        ];
   
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('guru');
        }else{
            return redirect()->route('dashboard.guru.dashboardguru');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/loginguru');
    }
}