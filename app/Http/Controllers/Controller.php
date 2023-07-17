<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login(){
        return view('login');
    }

    public function loginCheck(Request $r){
        if(Auth::attempt(['email' => $r->email, 'password' => $r->password])){
            $r->session()->regenerate();
            return redirect('/');
        }else{
            return 'password salah';
        }
    }

    public function dashboard(){
        $u = Auth::user();
        $resi = Resi::count();
        $allResi = Resi::all();
        return view('dashboard', ['user' => $u, 'resi' => $resi, 'allResi' => $allResi]);
    }

    public function logout(Request $r){
        $r->session()->invalidate();
        $r->session()->regenerate();
        return redirect('/login');
    }
}
