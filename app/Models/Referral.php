<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Referral extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'referrals';

    protected $fillable = [
        'user_id',
        'referred_user_id',
    ];
}
