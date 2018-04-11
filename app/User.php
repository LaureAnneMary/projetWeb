<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    public function commentaire()
    {
        return $this->hasMany('App\Commentaire');
    }

    public function commande()
    {
        return $this->hasMany('App\Commande');
    }

    public function evenement()
    {
        return $this->hasMany('App\Evenement');
    }

    public function photo()
    {
        return $this->hasMany('App\Photo');
    }
}
