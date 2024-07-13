<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;

class WithdrawalController extends Controller
{
    //
    public function index()
    {
        //
        $pendings = Models\Withdrawal::where('status', 'pending')->get();
        return view('admin.pending-withdrawal')->with('pendings', $pendings);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(?String $withdrawal_id = Null)
    {
        //
        if(!is_null($withdrawal_id)){
            $pending = Models\Withdrawal::find($withdrawal_id);

        }else{
            $pending = '';
        }
        return view('admin.withdrawfunds')->with('pending', $pending);
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'payment_proof' => ['bail', 'required', 'file'],
            'user_email' => ['bail', 'required', 'email'],
            'withdrawal_id' => ['bail', 'nullable', 'string'],
            'amount' => ['bail', 'required', 'numeric'],
            'comment' => ['bail', 'nullable', 'string'],
            
            
        ]);

        if($request->hasFile('payment_proof')){

            $user = Models\User::where('email', $request->user_email)->first();

            if($request->amount > $user->balance){
                return redirect()->route('admin.withdraw.create')->with('message', 'Withdrawal Amount is greater than user balance')->with('message-color', 'alert-danger'); 
            }else{
                $filename = trim($user->firstname.' '.$user->lastname);
                $filename = str_replace(' ', '_',  $filename);
                $filename = filter_var($filename, FILTER_SANITIZE_STRING);
                $image_name = time().'.'.$request->payment_proof->extension();
                $saved = $request->payment_proof->storeAs('withdrawals/images/'.$filename,  $image_name, 'public');
    
                
                    $withdrawal = Models\Withdrawal::where('user_id', $user->id)->first();
                
    
                    $withdrawal->status = 'completed';
                    $withdrawal->paid_amount = $request->amount;
                    $withdrawal->save();
                    $user->balance = $user->balance - $request->amount;
                    $user->save();
                    return redirect()->route('admin.withdraw.create')->with('message', 'You paid a user')->with('message-color', 'alert-success'); 

            }
            
        }else{
            return redirect()->route('admin.withdraw.create')->with('message', 'You need to add an image as proof of payment')->with('message-color', 'alert-danger'); 

        }
        
       
    }
}
