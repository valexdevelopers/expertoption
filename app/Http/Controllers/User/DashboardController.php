<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //

    public function index(){
        $totalInvestment = Models\Deposit::where('user_id', Auth::user()->id)->get();
        $userOpenTrades = DB::table('trades')->where('user_id', Auth::user()->id)->where('status', 'active')->whereDate('end_date', '<=', Now())->get();
        if($userOpenTrades->count() > 0){
            foreach($userOpenTrades as $openTrades){
                $plan = Models\Plan::find($openTrades->plan_id);
                $percentageProfit = $plan->profit_percentage;
                $tradeAmount = $openTrades->trade_amount;
                $profit = ($percentageProfit/100) * $tradeAmount;
                // $openTrades->profit = $profit;
                // $openTrades->status = ;
                Models\Trade::where('id', $openTrades->id)->update(['profit' => $profit, 'status' => 'completed']);
                
            }
        }
       
        return view('account.home.new')->with('totalInvestment', $totalInvestment);
    }
}
