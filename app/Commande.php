<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function etat_commande()
    {
        return $this->hasOne('App\Etat_commande');
    }

    public function produit()
    {
        return $this->hasOne('App\Produit');
    }

}
