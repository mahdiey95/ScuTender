<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id','price','duration','conditions'
    ];
}
