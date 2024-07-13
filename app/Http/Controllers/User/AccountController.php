<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AccountController extends Controller
{
    //
    public function technical(){
        // $trades = Models\Trade::with('users')->all();
        return view('account.technical.index');
    }


    public function chart(){
        // $trades = Models\Trade::with('users')->all();
        return view('account.chart.index');
    }

    public function calendar(){
        // $trades = Models\Trade::with('users')->all();
        return view('account.calendar.index');
    }


    public function history(){
        // $trades = Models\Trade::with('users')->all();
        return view('account.history.index');
    }


    public function transactions(){
        // $trades = Models\Trade::with('users')->all();
        return view('account.transactions.index');
    }

    public function news(){
        // $trades = Models\Trade::with('users')->all();
        return view('account.news.index');
    }

    public function settings(){
        $lastDeposit = Models\Deposit::where('user_id', Auth::user()->id)->latest()->first();
        $totalInvestment = Models\Deposit::where('user_id', Auth::user()->id)->get();
        $lastWithdrawal = Models\Withdrawal::where('user_id', Auth::user()->id)->latest()->first();
        $totalWithdrawal = Models\Withdrawal::where('user_id', Auth::user()->id)->where('status', 'completed')->get();
        $pendingWithdrawal = Models\Withdrawal::where('user_id', Auth::user()->id)->where('status', 'pending')->get();
        $referrals = Auth::user()->referrals();
        // dd($lastDeposit);
         $lastTrade = Models\Trade::where('user_id', Auth::user()->id)->latest()->first();
        return view('account.settings.index')
                    ->with('lastDeposit', $lastDeposit)
                    ->with('lastWithdrawal', $lastWithdrawal)
                    ->with('totalWithdrawal', $totalWithdrawal)
                    ->with('pendingWithdrawal', $pendingWithdrawal)
                    ->with('totalInvestment', $totalInvestment)
                    ->with('referrals', $referrals)
                  ->with('lastTrade', $lastTrade);
    }
   
    public function update(Request $request){
       
        $validated = $request->validate( [
            'oldpassword' => ['required', 'current_password'],
            'password' => ['required', Password::min(8)->numbers()->symbols()->mixedcase(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('status', 'password-updated')->with('message', 'You updated your password')->with('message-color', 'alert-success');
    }

}
  