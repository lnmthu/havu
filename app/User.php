<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function bill()
    {
        return $this->hasMany("App\bill","id_user","id");
    }
    public function social()
    {
        return $this->hasOne("App\Social","id_user","id");
    }
    public function city()
    {
        return $this->belongsTo("App\city","id_city","id");
    }
    public function district()
    {
        return $this->belongsTo("App\district","id_district","id");
    }
    public function ward()
    {
        return $this->belongsTo("App\ward","id_ward","id");
    }
}
