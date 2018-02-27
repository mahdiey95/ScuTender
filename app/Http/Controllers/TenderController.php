<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class TenderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        if($user->role = 'ADMIN')
            return 'admin tender'; //TODO create admin tender view

        else if($user->role = 'CONTRACTOR')
            return 'contractor tender detail'; // TODO create contractor tender view

        else
            return '404'; //TODO create 404 view
    }
}
