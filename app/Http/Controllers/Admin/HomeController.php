<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;


class HomeController extends Controller
{
    //

    public function index(){
        $users = Models\User::all();
        return view('admin.index')->with('users', $users);
    }

    public function all(){
        $users = Models\User::all();
        return view('admin.index')->with('users', $users);
    }

    public function account(){
       
        return view('admin.wallet');
    }

    public function storeaccount(Request $request){
        $request->validate([
           
            'bi' => ['bail', 'required', 'string'],
            'et' => ['bail', 'required', 'string'],
            'password' => ['bail','required', 'current_password:admin'],
            
        ]);

        $account =  Models\Account::all();
        if($account->count() > 0){
           $acctUpdate = Models\Account::whereNotNull('bi')->update([
            'bi' => $request->bi,
            'et' => $request->et
           ]);
        }else{
            Models\Account::create([
                'admin_id' => Auth::guard('admin')->user()->id,
                'bi' => $request->bi,
                'et' => $request->et
            ]);
        }
       return redirect()->route('admin.wallet')->with('message', 'Wallets Address have been updated')->with('message-color', 'alert-secondary'); 
    
    }
 
   public function password(){
    return view('admin.password');
   }

   public function updatepassword(Request $request){
    
        $request->validate([
            'oldpassword' => ['bail', 'required', 'current_password:admin'],
            'password' => ['bail', 'required', 'confirmed', Password::min(8)->mixedCase()->numbers()->symbols()],
        ]);


        Auth::guard('admin')->user()->password = Hash::make($request->password);
        Auth::guard('admin')->user()->save();
        return redirect()->route('admin.password')->with('message', 'You updated your password')->with('message-color', 'alert-success');
    
   }

   public function bonus(){
    return view('admin.bonus');
   }

   public function addbonus(Request $request){
    
        $request->validate([
            'email' => ['bail', 'required', 'string', 'email'],
            'amount' => ['bail', 'required', 'numeric'],
        ]);


        Auth::guard('admin')->user()->password = Hash::make($request->password);
        Auth::guard('admin')->user()->save();
        return redirect()->route('admin.password')->with('message', 'You updated your password')->with('message-color', 'alert-success');
    
   }

}
