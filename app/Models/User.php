<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // protected $casts = [
    //     'password' => 'hashed',
    // ];

    public function userImage()
    {
        return $this->hasOne(UserImage::class);
    }

    public function scopeSeller($query)
    {
        $query->where('user_role_id', 2);
    }

    public function isAdmin()
    {
        return $this->user_role_id == 1;
    }

    public function isSeller()
    {
        return $this->user_role_id == 2;
    }

    public function isCustomer()
    {
        return $this->user_role_id == 3;
    }
}
