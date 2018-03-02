<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id','name','price','field','description',
        'start_date','end_date','status'
    ];
}
