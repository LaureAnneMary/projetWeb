<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Validation_evenement extends Model
{
    public function evenement()
    {
        return $this->belongsToMany('App\Evenement');
    }
}
