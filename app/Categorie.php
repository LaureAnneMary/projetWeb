<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categorie';

    protected $fillable = ['intitule'];

    public function produit()
    {
        return $this->hasMany('App\Produit');
    }

}
