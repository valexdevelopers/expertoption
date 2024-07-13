<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class RegisterController extends Controller
{
    //

    public function create(){
        return view('admin.register');
    }


    public function store(Request $request){
        
       
        $request->validate([
           
            'fullname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::min(8)->numbers()->symbols()->mixedcase()],
            
        ]);
        
        $admin = Admin::all();
        
        if($admin->count() == 0){
            $status = 1;
            $message = 'You Admin account has been created.';
        }else{
            $status = 0;
            $message = 'You Admin account has been created, A super Admin will verify your account before you can login.';
        }
        
        $user = Admin::create([
            'name' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => $status,
        ]);

        return back()->with('message', $message)->with('message-color', 'alert-secondary');
    
    }
   
}
