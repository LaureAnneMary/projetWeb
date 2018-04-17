<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produit';

    protected $fillable = ['libelle', 'description', 'prix', 'tva', 'id_Categorie'];

    public function commande()
    {
        return $this->hasMany('App\Commande');
    }

    public function categorie()
    {
        return $this->belongsTo('App\Categorie',"id_Categorie");
    }

    public function photo()
    {
        return $this->hasMany('App\Photo');
    }

}
