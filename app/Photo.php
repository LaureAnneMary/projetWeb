<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photo';

    protected $fillable = ['url', 'nombreLike', 'id_Utilisateur', 'id_Evenement', 'id_Produit'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function produit()
    {
        return $this->belongsTo('App\Produit');
    }

    public function commentaire()
    {
        return $this->belongsToMany('App\Commentaire');
    }

    public function evenement()
    {
        return $this->hasOne('App\Evenement');
    }

}
