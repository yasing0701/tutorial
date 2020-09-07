<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'publisher', 'year', 'quantity'
    ];

    public function borrowRecord()
    {
        return $this->hasOne('App\Borrow');
    }
}
