<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use Auth;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $plans = Plan::all();
        return view('admin.plan')->with('plans', $plans);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.setplan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data =  $request->validate([
            'plan_name' => ['bail', 'required', 'string', 'unique:'.Plan::class],
            'profit_percentage' => ['bail', 'required', 'numeric'],
            'stop_amount' => ['bail', 'required', 'numeric'],
            'trade_timeline' => ['bail', 'required', 'numeric'],
            'min_trade_amount' => ['bail', 'required', 'numeric', 'unique:'.Plan::class],
            'max_trade_amount' => ['bail', 'required', 'numeric', 'unique:'.Plan::class],
            'professional_signal' => ['bail', 'required', 'numeric'],
            'referral_bonus' => ['bail', 'required', 'numeric'],
            
        ]);

        Plan::create([
            'admin_id' => Auth::guard('admin')->user()->id,
            'plan_name' => $data['plan_name'],
            'profit_percentage' => $data['profit_percentage'],
            'trade_timeline' => $data['trade_timeline'],
            'min_trade_amount' => $data['min_trade_amount'],
            'max_trade_amount' => $data['max_trade_amount'],
            'stop_amount' => $data['stop_amount'],
            'referral_bonus' => $data['referral_bonus'],
            'professional_signal' => $data['professional_signal'],
        ]);
        // dd($request->all());
        return redirect()->route('admin.plan.index')->with('message', 'You added a new Investment plan')->with('message-color', 'alert-primary');
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
