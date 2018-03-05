<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Suggestion extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id','tender_id','contractor_name','price','duration','conditions','accepting_titles'
    ];

    public function checkAccept()
    {
        $admins = User::where('role','=','ADMIN')->get();

        $isAccepted = true;

        foreach ($admins as $admin)
        {
            if(!str_contains($this->accepting_titles,$admin->title))
                $isAccepted = false;
        }

        return $isAccepted;
    }
}
