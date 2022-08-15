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
        'login_id','name', 'email','username', 'password','pin_code','phone','dob','timestamp','zip_code','city','state','country','security_a1','security_q1','signature',
        'link','image','parent','sponsor','status','status2','in_active_id','level_id','earning','balance','bonus','admin_user','scholor_ship','joining_date','Payment_date','palce_ment'
    ];
    public $timestamps=false;
    /**
     * The attributes that should be hidden for arrays.
     *'remember_token'
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'timestamp' => 'datetime',
    ];
}
