<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = 'commande';

    protected $fillable = ['numeroCommande', 'dateCommande', 'prix', 'quantite', 'id_Utilisateur', 'id_Produit', 'id_Etat_Commande'];

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
