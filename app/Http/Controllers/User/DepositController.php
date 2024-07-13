<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\DB;
use Auth;

class DepositController extends Controller
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
        $addresses = DB::table('accounts')->latest()->first();
        // dd();
        return view('account.deposit.index')->with('addresses',  $addresses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'type' => ['bail', 'required', 'string'],
            'payment_proof' => ['bail', 'required', 'file'],
            'amount' => ['bail','required', 'numeric'],
        ]);

        if($request->hasFile('payment_proof')){
            $filename = trim(Auth::user()->firstname.' '.Auth::user()->lastname);
            $filename = str_replace(' ', '_',  $filename);
            $filename = filter_var($filename, FILTER_SANITIZE_STRING);
            $image_name = time().'.'.$request->payment_proof->extension();
            $saved = $request->payment_proof->storeAs('deposits/images/'.$filename,  $image_name, 'public');
          
        }

        Models\Deposit::create([
            'user_id' => Auth::user()->id,
            'proof_of_payment' => $saved,
            'initiation_amount' => $request->amount,
            'status' => 'pending',
            'type' =>  $request->type,
        ]);

        return redirect()->route('deposit.create')->with('message', 'You initiated a deposit. Upon review and approval your account will be funded.')->with('message-color', 'alert-primary');
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
