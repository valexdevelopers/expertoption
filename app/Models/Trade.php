<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use App\Models;

class Trade extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'trades';

    protected $fillable = [
        'user_id',
        'plan_id',
        'profit',
        'bonus',
        'trade_amount',
        'start_date',
        'end_date',
        'status',
        'assets',
    ];

    protected $casts = [
        'assets' => 'array',
    ];

    public function users(){
        return $this->belongsTo(Models\User::class, 'user_id');
    }
    public function plan(){
        return $this->belongsTo(Models\Plan::class, 'plan_id');
    }
}
