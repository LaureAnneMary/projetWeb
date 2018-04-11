<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
