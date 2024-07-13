<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use App\Models\User;

class Withdrawal extends Model
{
    use HasFactory, HasUlids, SoftDeletes;

    protected $table = 'withdrawals';

    protected $fillable = [
        'user_id',
        'method',
        'payment_details',
        'fullanme',
        'phone',
        'email',
        'country',
        'proof_of_payment',
        'amount_requested',
        'paid_amount',
        'status',
        'comment',
        'user_identification_type',
        'user_identification_card',
    ];

    protected $cast = [
        'payment_details' => 'array',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
