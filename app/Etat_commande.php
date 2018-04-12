<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etat_commande extends Model
{
    public function commande()
    {
        return $this->belongsToMany('App\Commande', '');
    }

    protected $table = 'etat_commande';

    public $timestamps = false;

}
