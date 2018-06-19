<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlternatePersonName extends Model
{

    // Get the person that owns the alternate name.
    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
