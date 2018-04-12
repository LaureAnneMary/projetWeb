<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rang_utilisateur extends Model
{
    protected $table='rang_utilisateur';

    public $timestamps = false;

    protected $fillable = ['intitule'];

    public function user()
    {
        return $this->belongsToMany('App\User');
    }

}
