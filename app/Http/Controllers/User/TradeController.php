<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;
use Auth;

class TradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $currenPlan = Models\Trade::where('user_id', Auth::user()->id)->latest()->first();
       
        if(is_null($currenPlan)){
            $currentUserplan = 'none';
        }else{
            $userPlan = $currenPlan->plan;
            $currentUserplan = $userPlan->plan_name.' '.Auth::user()->currency.''.$userPlan->min_trade_amount.' - '.Auth::user()->currency.''.$userPlan->max_trade_amount;
        }

        $plans = Models\Plan::all();
        return view('account.trade.index')->with('plans', $plans)->with('currentUserplan', $currentUserplan);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
