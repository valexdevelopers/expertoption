<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use App\Models;

class Deposit extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'deposits';

    protected $fillable = [
        'user_id',
        'proof_of_payment',
        'initiation_amount',
        'paid_amount',
        'status',
        'comment',
        'type',
       
    ];

    public function users(){
        return $this->belongsTo(Models\User::class, 'user_id');
    }
}
