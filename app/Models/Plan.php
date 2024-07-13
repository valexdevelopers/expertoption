<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Plan extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'plans';

    protected $fillable = [
        'admin_id',
        'plan_name',
        'profit_percentage',
        'trade_timeline',
        'min_trade_amount',
        'max_trade_amount',
        'referral_bonus',
        'professional_signal',
    ];



    protected $cast = [
        'professional_signal' => 'boolean',
    ];
}
