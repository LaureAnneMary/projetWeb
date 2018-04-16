<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $table = 'commentaire';

    protected $fillable = ['contenu', 'dateCommentaire', 'id_Utilisateur', 'id_Photo'];

    public function user()
    {
        return $this->belongsTo('App\User','id_users');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo','id_Photo');
    }

}
