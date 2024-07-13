<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, HasUlids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'balance',
        'signal',
        'photo',
        'currency',
        'firstname',
        'lastname',
        'username',
        'email',
        'phone',
        'country',
        'state',
        'address',
        'password',
        'account_type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'account_type' => 'array',
    ];

    public function email(): Attribute
    {
        return new Attribute(
            // get: fn ($value) => strtoupper($value),
            set: fn ($value) => $value,
        );
    }


    public function trades(){
        return $this->hasMany(Models\Trade::class, 'user_id');
    }


    public function deposits(){
        return $this->hasMany(Models\Deposit::class, 'user_id');
    }

    public function referrals(){
        return $this->hasMany(Models\Referral::class, 'user_id');
    }

    
}
