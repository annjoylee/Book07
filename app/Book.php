<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //The persons that belong to the book.
    public function persons()
    {
        return $this->belongsToMany('App\Person', 'book_person', 'book_id', 'person_id');
    }
}
