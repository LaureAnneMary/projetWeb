<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom','prenom','pseudo', 'mail', 'motDePasse','id_Etat_Inscription', 'id_Rang_Utilisateur'];

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
        return $this->belongsToMany('App\Evenement');
    }

    public function photo()
    {
        return $this->hasMany('App\Photo');
    }

    public function etat_inscription()
    {
        return $this->hasOne('App\Etat_inscription');
    }

    public function rang_utilisateur()
    {
        return $this->hasOne('App\Rang_utilisateur');
    }

}
