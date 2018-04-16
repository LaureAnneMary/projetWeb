<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etat_commande extends Model
{
    protected $fillable = ['etat'];

    public function commande()
    {
        return $this->hasMany('App\Commande');
    }

    protected $table = 'etat_commande';

    public $timestamps = true;

}
