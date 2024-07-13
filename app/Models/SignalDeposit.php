<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use App\Models;

class SignalDeposit extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'signal_deposits';

    protected $fillable = [
        'user_id',
        'proof_of_payment',
        'initiation_amount',
        'paid_amount',
        'status',
        'comment',
        'type',
        'signalAmount',
        'signalQty',
       
    ];

    public function users(){
        return $this->belongsTo(Models\User::class, 'user_id');
    }
}
