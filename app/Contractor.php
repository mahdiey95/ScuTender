<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    protected $fillable = [
      'id','name','registration_number','economic_id','ceo_name'
        ,'email','field','phone'
    ];
}
