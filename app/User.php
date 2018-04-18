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

    //relation entre la table commentaire et users
    public function commentaire()
    {
        return $this->hasMany('App\Commentaire');
    }

    //relation entre la table commande et users
    public function commande()
    {
        return $this->hasMany('App\Commande');
    }

    public function evenementInscription()
    {
        return $this->belongsToMany('App\Evenement', 'inscription', 'id_Evenement', 'id_Users');
    }

    public function evenementPropose()
    {
        return $this->hasMany('App\User', 'id_Evenement');
    }
  
    //relation entre la table evenement et users (liaison vote)
    public function evenementVote()
    {
        return $this->belongsToMany('App\Evenement','vote','id_Evenement','id_Users');
    }

    //relation entre la table photo et users
    public function photo()
    {
        return $this->hasMany('App\Photo');
    }

    //relation entre la table etat_inscription et users
    public function etat_inscription()
    {
        return $this->belongsTo('App\Etat_inscription','id_Etat_Inscription');
    }

    //relation entre la table rang_utilisateur et users
    public function rang_utilisateur()
    {
        return $this->belongsTo('App\Rang_utilisateur','id_Rang_Utilisateur');
    }

    public function isAdmin(){
        return $this->rang_utilisateur->intitule == 'MembreBDE';
    }

}
