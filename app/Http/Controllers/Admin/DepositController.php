<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;

class DepositController extends Controller
{
    //
    public function index(){
        $alldeposits = Models\Deposit::with('users')->where('status', 'completed')->get();
        return view('admin.alldeposit')->with('alldeposits', $alldeposits);
    }

    public function show(){
        $pendings = Models\Deposit::with('users')->where('status', 'pending')->get();
        return view('admin.pending')->with('pendings', $pendings);
    }

    // this function reverses (i.e deletes the amount, sets status back to pending and a deducts
    // amount from users balance) a user deposit in the case of error
    public function reverse(String $id){
        $deposit = Models\Deposit::with('users')->find($id);
        if($deposit->paid_amount > 10000){
            $signal = 20;
        }elseif ($deposit->paid_amount > 5000) {
            $signal = 12;
        }elseif ($deposit->paid_amount > 1000) {
            $signal = 8;
        }elseif ($deposit->paid_amount > 500) {
            $signal = 6;
        }else {
            $signal = 2;
        }


        $deposit->users->balance = $deposit->users->balance - $deposit->paid_amount;
        $deposit->users->signal = $deposit->users->signal -  $signal;
        // dd($deposit->paid_amount, $deposit->users->balance, $deposit->users->signal);
        $deposit->users->save();
        $deposit->status = 'pending';
        $deposit->paid_amount = Null;
        $deposit->comment = Null;
        $deposit->save();
        return redirect()->route('admin.deposit')->with('message', 'You reversed a deposit, kindly review here')->with('message-color', 'alert-secondary'); 
    }



    public function create(String $id){
        $pending = Models\Deposit::with('users')->find($id);
        return view('admin.deposit')->with('pending', $pending);
    }

    public function approve(Request $request){
        $request->validate([
            'user_id' => ['bail', 'required', 'string'],
            'deposit_id' => ['bail', 'required', 'string'],
            'amount' => ['bail', 'required', 'numeric'],
            'comment' => ['bail', 'nullable', 'string'],
            
            
        ]);

        if($request->amount > 10000){
            $signal = 20;
        }elseif ($request->amount > 5000) {
            $signal = 12;
        }elseif ($request->amount > 1000) {
            $signal = 8;
        }elseif ($request->amount > 500) {
            $signal = 6;
        }else {
            $signal = 2;
        }

        $pending = Models\Deposit::find($request->deposit_id);
        $pending->paid_amount = $request->amount;
        $pending->comment = $request->comment ?? null;
        $pending->status = 'completed';
        $pending->save();

        $user = Models\User::find($request->user_id);
        $user->balance = $user->balance + $request->amount;
        $user->signal = $user->signal + $signal;
        $user->save();

        return redirect()->route('admin.deposit')->with('message', 'You approved a deposit')->with('message-color', 'alert-secondary'); 
    
    }

    public function restrict(String $id){
        $pending = Models\Deposit::find($id);
        $pending->status = 'cancelled';
        $pending->save();
        return redirect()->route('admin.deposit')->with('message', 'You cancelled a deposit')->with('message-color', 'alert-secondary'); 
    }

    public function deduct(){
        return view('admin.deduction');
    }


    public function depositupdate(Request $request){
        $request->validate([
            'email' => ['bail', 'required', 'string', 'email'],
            'amount' => ['bail', 'required', 'numeric'],
        ]);

        $user = Models\User::where('email', $request->email)->first();
        $lastDeposit = Models\Deposit::where('user_id', $user->id)->latest()->first();

        if( $request->amount > $user->balance || $request->amount > $lastDeposit->paid_amount){
            return redirect()->route('admin.deposit.deduct')->with('message', 'Your deduction exceeds user balance or Your deduction exceeds last users deposit')->with('message-color', 'alert-danger'); 
        }else{
            
            $user->balance = $user->balance - $request->amount;
            $user->save();

            
            $lastDeposit->paid_amount =  $lastDeposit->paid_amount - $request->amount;
            $lastDeposit->save();

            return redirect()->route('admin.deposit.deduct')->with('message', 'You deductied from  user last deposit')->with('message-color', 'alert-success'); 

        }
       
    }

    public function bonus(){
        return view('admin.bonus');
    }


    public function addbonus(Request $request){
        $request->validate([
            'email' => ['bail', 'required', 'string', 'email'],
            'amount' => ['bail', 'required', 'numeric'],
        ]);

        $user = Models\User::where('email', $request->email)->first();
        $lastDeposit = Models\Trade::where('user_id', $user->id)->latest()->first();

        $lastDeposit->bonus = $request->amount;
        $lastDeposit->save();

        return redirect()->route('admin.bonus')->with('message', 'You added bonus to a user')->with('message-color', 'alert-success'); 

 
       
    }
     
    public function signal(){
        $pendings = Models\SignalDeposit::with('users')->where('status', 'pending')->get();
        return view('admin.pendingSignal')->with('pendings', $pendings);
    }

    public function storesignal($pending_id){
        
        $pendings = Models\SignalDeposit::find($pending_id);
        $user = Models\User::find($pendings->user_id);

        $user->signal = $pendings->signalQty;
        $user->save();

        $pendings->status = 'completed';
        $pendings->save();

        return redirect()->route('admin.deposit.signal')->with('message', 'You approved a signal deposit')->with('message-color', 'alert-success'); 

       
    }

     
}
