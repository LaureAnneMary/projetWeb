<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etat_inscription extends Model
{
    public function user()
    {
        return $this->belongsToMany('App\User');
    }

}
