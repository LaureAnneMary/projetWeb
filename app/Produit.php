<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public function commande()
    {
        return $this->belongsToMany('App\Commande');
    }

    public function categorie()
    {
        return $this->hasOne('App\Categorie');
    }

    public function photo()
    {
        return $this->hasMany('App\Photo');
    }

}
