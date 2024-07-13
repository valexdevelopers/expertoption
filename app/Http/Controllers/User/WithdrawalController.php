<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Auth;
use App\Models;

class WithdrawalController extends Controller
{
    //
    public function index(){
        return view('account.withdraw.index');
    }

    public function store(Request $request){
        //  dd($request->all()); 

        $validated = $request->validate( [
            'fullname' => ['bail', 'required', 'string'],
            'email' => ['bail', 'required', 'string', 'email'],
            'phone' => ['bail', 'required', 'string'],
            'country' => ['bail', 'required', 'string'],
            'method' => ['bail', 'required', 'numeric'],
            'walletaddress' => ['bail', 'nullable', 'string'],
            'bankname' => ['bail', 'nullable', 'string'],
            'accountnumber' => ['bail', 'nullable', 'string'],
            'routing' => ['bail', 'nullable', 'string'],
            'amount' => ['bail', 'required', 'numeric'],
            'document' => ['bail', 'required', 'string'],
            'idcard' => ['bail', 'required', 'file', File::types(['jpeg', 'jpg', 'png', 'avif', 'webp'])->max('10mb') ],
            
        ]);

        

        if($request->hasFile('idcard')){

            $balance = Auth::user()->trades->sum('profit') + Auth::user()->trades->sum('bunus') + Auth::user()->balance;
            if($request->amount > $balance ){
                return redirect()->route('withdraw.index')->with('message', 'Requested withdrawal amount exceeds your current balance')->with('message-color', 'alert-danger');

            }else{
                    if($request->method == 1){
                        $method = 'Bank Transfer';
                    }elseif($request->method == 2){
                        $method = 'Bitcoin';
                    }elseif($request->method == 3){
                        $method = 'Ethereum';
                    }elseif($request->method == 4){
                        $method = 'Usdt';
                    }
                $filename = trim(Auth::user()->firstname.' '.Auth::user()->lastname);
                $filename = str_replace(' ', '_',  $filename);
                $filename = filter_var($filename, FILTER_SANITIZE_STRING);
                $image_name = time().'.'.$request->idcard->extension();
                $saved = $request->idcard->storeAs('withdrawal/idcard/'.$filename,  $image_name, 'public');

                if($request->method == 2 || $request->method == 3 || $request->method == 4 ){
                    $payment_details = [$request->walletaddress];
        
                }elseif($request->method == 1){
                    $payment_details = [$request->bankname, $request->accountnumber, $request->routing];
                }
                
        
                Models\Withdrawal::create([
                    'user_id' => Auth::user()->id,
                    'method' => $method ,
                    'payment_details' => json_encode($payment_details),
                    'fullanme' => $request->fullname,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'country' => $request->country,
                    'amount_requested' => $request->amount,
                    'status' => 'pending',
                    'user_identification_type' => $request->document,
                    'user_identification_card' => $saved,
                ]);

                return redirect()->route('withdraw.index')->with('message', 'You request for a withdrawal. Upon review and approval your account will be funded.')->with('message-color', 'alert-primary');

            }
            
        }else{
            //  you must submit an id card
            return redirect()->route('withdraw.index')->with('message', 'You are required to submit a valid means of Identification')->with('message-color', 'alert-danger');

        }
        
    }
}
