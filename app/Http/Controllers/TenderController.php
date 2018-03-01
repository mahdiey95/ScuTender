<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tender;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

class TenderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenders = Tender::all();
        return view('index',['tenders'=>$tenders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        if($user->role != 'ADMIN')
            abort(403);

        return view('NewTender'); //TODO create add tender view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        if($user->role != "ADMIN")
            abort(403);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();

        if($user->role == 'ADMIN')
            return 'tender detail for admin'; //TODO create tender detail view for admin
        else if($user->role == 'CONTRACTOR')
            return 'tender detail for contractor'; //TODO create tender detail view for contractor

        else
            return '403'; //TODO create error view
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();

        if($user->role != 'ADMIN')
            return "403"; // access denied;

        return "tender edit page"; //TODO create tender edit view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
