<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurrence extends Model
{
    protected $table = 'recurrence';

    protected $fillable = ['recurrence'];

    public function evenement()
    {
        return $this->hasMany('App\Evenement');
    }
}
