<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurrence extends Model
{
    public function evenement()
    {
        return $this->belongsToMany('App\Evenement');
    }
}
