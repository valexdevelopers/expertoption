<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Account extends Model
{
    use HasFactory, HasUlids;
    
    protected $table = 'accounts';

    protected $fillable = [
        'admin_id',
        'bi',
        'et',
       
    ];
}
