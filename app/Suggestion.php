<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id','tender_id','contractor_name','price','duration','conditions'
    ];
}
