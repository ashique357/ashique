<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SuperAdmin extends Authenticatable
{
    use Notifiable;

    protected $guard='SuperAdmin';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function marriage(){
      return $this->hasMany(Marriage::class);
    }
    public function admin(){
      return $this->hasMany(Admin::class);
    }
    public function approved(){
      return $this->hasMany(Approved::class);
    }
}
