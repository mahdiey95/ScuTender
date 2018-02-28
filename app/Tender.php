<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    protected $fillable = [
        'id','name','price','field','description',
        'start_date','end_date','status'
    ];
}
