<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $table = 'evenement';

    protected $fillable = ['libelle', 'description', 'dateEvenement', 'urlPhotoPrincipale', 'prix', 'vote', 'id_Validation_Evenement', 'id_Recurrence'];

    public function userVote()
    {
        return $this->belongsToMany('App\User', 'vote', 'id_users', 'id_evenement');
    }

    public function userInscription()
    {
        return $this->belongsToMany('App\User', 'inscription', 'id_users', 'id_evenement');
    }

    public function userPropose()
    {
        return $this->hasOne('App\User', 'id_users');
    }

    public function recurrence()
    {
        return $this->hasOne('App\Recurrence');
    }

    public function validation_evenement()
    {
        return $this->hasOne('App\Validation_evenement');
    }

    public function photo()
    {
        return $this->belongsToMany('App\Photo');
    }

    public $timestamps = true;

}
