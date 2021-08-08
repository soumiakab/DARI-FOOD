<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'tel',
        'email',
        'password',
        'description',
        'isChef',
        'photo',
        'adress_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function plat()
    {
        return $this->hasMany("App\Models\Plat")->get();
    }

    public function wish()
    {
        return $this->hasMany("App\Models\Wish")->get();
    }

    public function order()
    {
        return $this->hasMany("App\Models\Order")->get();
    }

    public function commands()
    {
        return $this->hasMany("App\Models\Command")->get();
    }

    public function adress() {
        return $this->belongsTo('App\Models\Adress');
    }
}
