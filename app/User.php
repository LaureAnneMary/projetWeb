<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom','prenom','pseudo', 'email', 'password','id_Etat_Inscription', 'id_Rang_Utilisateur'];

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

    public function evenementVote()
    {
        return $this->belongsToMany('App\Evenement','vote','id_evenement','id_users');
    }

    public function evenementInscription()
    {
        return $this->belongsToMany('App\Evenement', 'inscription', 'id_evenement', 'id_users');
    }

    public function evenmentPropose()
    {
        return $this->hasOne('App\User', 'id_evenement');
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
