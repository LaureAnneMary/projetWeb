<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etat_inscription extends Model
{
    protected $table = 'etat_inscription';

    protected $fillable = ['intitule'];

    public function user()
    {
        return $this->hasMany('App\User');
    }

}
