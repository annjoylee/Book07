<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    // Define the table name.
    protected $table = 'persons';


    // Get the alternate names for the person.
    public function alternate_person_names()
    {
        return $this->hasMany('App\AlternatePersonName');
    }

    // The books that belong to the person.
    public function books()
    {
        return $this->belongsToMany('App\Book', 'book_person', 'person_id', 'book_id');
    }
}
