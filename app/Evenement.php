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
        return $this->belongsTo('App\User', 'id_users');
    }

    public function recurrence()
    {
        return $this->belongsTo('App\Recurrence','id_Recurrence');
    }

    public function validation_evenement()
    {
        return $this->belongsTo('App\Validation_evenement','id_Validation_Evenement');
    }

    public function photo()
    {
        return $this->hasMany('App\Photo');
    }

    public $timestamps = true;

}
