<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //
    public function create(){
        return view('admin.login');
    }

    public function store(Request $request){

        $data =  $request->validate([
         
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required'],
            
        ]);
        
        Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']]);

        $request->session()->regenerate();

        return redirect()->route('admin.home');
      
    }

    public function logout(Request $request){
        
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login.create');
    }
}
