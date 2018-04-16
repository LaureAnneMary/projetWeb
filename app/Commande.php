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
        return $this->belongsTo('App\Etat_commande','id_Etat_Commande');
    }

    public function produit()
    {
        return $this->belongsTo('App\Produit','id_Produit');
    }

}
