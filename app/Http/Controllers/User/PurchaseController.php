<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models;

class PurchaseController extends Controller
{
    //
    public function create(){
        $currenPlan = Models\Trade::where('user_id', Auth::user()->id)->latest()->first();
        $allplans = Models\Plan::all();
        
        if(is_null($currenPlan)){
            $plan = 'none';
            
        }else{
            $userPlan = $currenPlan->plan;
            $plan = $userPlan->plan_name.' '.Auth::user()->currency.''.$userPlan->min_trade_amount.' - '.Auth::user()->currency.''.$userPlan->max_trade_amount;
        }
        return view('account.purchase.index')->with('plan', $plan)->with('userPlan', $userPlan)->with('allplans', $allplans);
    }

    public function store( Request $request){
        // dd($request->all());
        $request->validate([
            'email' => ['bail','required', 'string', 'email'],
            'name' => ['bail', 'required', 'string'],
            'signal' => ['bail', 'required', 'numeric'],
            
        ]);

        switch ($request->signal) {
            case 1000:
                $signalQty = 15;
                break;
            case 2000:
                $signalQty = 36;
                break;
            case 3000:
                $signalQty = 78;
                break;       
            default:
            $signalQty = 0;
                break;
        }
        $addresses = DB::table('accounts')->latest()->first();
        return view('account.deposit.signaldeposit')->with('addresses',  $addresses)->with('signalAmount', $request->signal)->with('signalQty', $signalQty);

        // $balance = Auth::user()->balance;
        
        // if($request->signal > $balance){
        //     return redirect()->route('deposit.create')->with('message', 'Insufficient balance to purchase this signal plan. To continue kindly make a deposit')->with('message-color', 'alert-danger');
        // }else{
        //     $user = Models\User::find(Auth::user()->id);
        //     $user->balance = $user->balance - $request->signal;
        //     $user->signal = $user->signal + $signalQty;
        //     $user->save();
        // }

        // return back()->with('message', 'You purchased '.$signalQty.' for your next trade.')->with('message-color', 'alert-danger');
    }


    public function storesignal(Request $request){
        $request->validate([
            'type' => ['bail', 'required', 'string'],
            'payment_proof' => ['bail', 'required', 'file'],
            'amount' => ['bail','required', 'numeric'],
            'signalAmount' => ['bail', 'required', 'numeric'],
            'signalQty' => ['bail','required', 'numeric'],
        ]);

        if($request->hasFile('payment_proof')){
            $filename = trim(Auth::user()->firstname.' '.Auth::user()->lastname);
            $filename = str_replace(' ', '_',  $filename);
            $filename = filter_var($filename, FILTER_SANITIZE_STRING);
            $image_name = time().'.'.$request->payment_proof->extension();
            $saved = $request->payment_proof->storeAs('signals/images/'.$filename,  $image_name, 'public');
          
        }

        Models\SignalDeposit::create([
            'user_id' => Auth::user()->id,
            'proof_of_payment' => $saved,
            'initiation_amount' => $request->amount,
            'status' => 'pending',
            'type' =>  $request->type,
            'signalAmount' =>  $request->signalAmount,
            'signalQty' => $request->signalQty,
        ]);

        return redirect()->route('purchase.create')->with('message', 'You initiated a deposit for signal. Upon review and approval your signals will be released.')->with('message-color', 'alert-primary');
    
    }



    public function upgrade(Request $request)
    {
        //
        $request->validate([
            'plan' => ['bail','required', 'string'],
            'type' => ['bail', 'required', 'array'],
            'trade_amount' => ['bail', 'required', 'numeric'],
            
        ]);
        
        $balance = Auth::user()->balance;
        $signal = Auth::user()->signal;
        $plan =  Models\Plan::find($request->plan);
        $tradingDays = $plan->trade_timeline;
        $signalUsed = 2 * $tradingDays;
       
        if($request->trade_amount > $balance){
           return redirect()->route('deposit.create')->with('message', 'Insufficient balance for this trade. To continue kindly make a deposit')->with('message-color', 'alert-danger');
        }else{
            if($signal < $signalUsed ){
                return redirect()->route('purchase.create')->with('message', 'You do not have enough signal to enter trade. To continue kindly purchase a signal')->with('message-color', 'alert-danger');

            }else{
                
                if($plan->min_trade_amount > $request->trade_amount){
                    return back()->with('message', 'Trade amount does not meet the minimum investment for your selected plan')->with('message-color', 'alert-danger');

                }else{
                    // check if user has active trade
                    $activeTrade = Models\Trade::where('user_id', Auth::user()->id)->where('status', 'active')->latest()->first();
                    if(is_null($activeTrade)){
                        $timestamp = strtotime("+ ".$tradingDays." days");
                        $enddate =  date('Y-m-d h:i:s', $timestamp);
                        // $profit = (($plan->profit_percentage / 100) * $request->trade_amount) / $tradingDays;
                        Models\Trade::create([
                            'user_id' => Auth::user()->id,
                            'plan_id' => $request->plan,
                            'profit' => 0,
                            'bonus' => 0,
                            'trade_amount' => $request->trade_amount,
                            'start_date' => Now(),
                            'end_date' => $enddate ,
                            'status' => 'active',
                            'assets' => $request->type,
                        ]);

                        // deduct signal from user signal

                        $userData = Models\User::find(Auth::user()->id);
                        $userData->signal = $userData->signal - $signalUsed;
                        $userData->save();
                        return back()->with('message', 'You entered a trade successfully.')->with('message-color', 'alert-success');
                    }else{
                        $message = 'You have a trade in progress. Contact admin to cancel active trades or wait till active trade completes';
                        return back()->with('message', $message)->with('message-color', 'alert-success');
                    }
                    
                }
            }
        }

    }
}
