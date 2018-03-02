<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    public $timestamps = false;

    protected $fillable = [
      'id','name','registration_number','economic_id','ceo_name'
        ,'email','field','phone'
    ];
}
