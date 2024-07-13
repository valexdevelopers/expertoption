<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Referral;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(?string $user_id = Null): View
    {
   
        session(['referred_by' => $user_id]);
        return view('register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //  dd(session('referred_by'));
        $request->validate([
            'currency' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'string', 'max:20'],
            'country' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::min(8)->numbers()->symbols()->mixedcase()],
            'type' => ['required', 'array'],
        ]);
        

        $user = User::create([
            'currency' => $request->currency,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'state' => $request->state,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'account_type' => $request->type
        ]);

        if(session()->has('referred_by')){
            Referral::create([
                'user_id' => session('referred_by'),
                'referred_user_id' => $user->id,
            ]);
            
        }
        event(new Registered($user));
        return redirect()->route('site.account.login')->with('message', 'You account has been created, Kindly Verify your email using the verification link we sent you.')->with('message-color', 'alert-danger');
    
}
}
