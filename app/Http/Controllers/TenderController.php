<?php

namespace App\Http\Controllers;

use App\Contractor;
use Illuminate\Http\Request;
use App\Tender;
use App\Suggestion;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;
use Morilog\Jalali\jDate;

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
        $tenders = Tender::orderBy('status')->get();

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

        if(!($user->role == 'ADMIN' || $user->role == 'EXPERT'))
            return abort(403);


        $date = jDate::forge('now')->format('date');


        return view('NewTender',['date' => $date]);
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


        $validatedData = $request->validate([
            'name' => 'required',
            'field' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);


        $tender = new Tender([
            'name' => $request->name,
            'field' => $request->field,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        if($tender->save())
            return redirect(route('tender.index'));
        else
            return abort(500,'Saving tender failed');
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

        $tender = Tender::find($id);


        if($user->role == 'ADMIN')
        {
            $suggestions = Suggestion::where('tender_id','=',$id)->orderby('price')->get();
            $accepted_id = 0;
            foreach($suggestions as $suggestion)
            {
                if(str_contains($suggestion->accepting_titles , $user->title))
                {
                    $accepted_id = $suggestion->id;
                    break;
                }
            }

            return view('tender_detail_admin',[
                'tender' => $tender,
                'suggestions' => $suggestions,
                'accepted_id' => $accepted_id]);
        }

        else if($user->role == 'EXPERT')
        {
            $suggestions = Suggestion::where('tender_id','=',$id)->orderby('price')->get();

            return view('tender_detail_expert',[
                'tender' => $tender,
                'suggestions' => $suggestions]);
        }

        else if($user->role == 'CONTRACTOR')
        {
            $suggestion = Suggestion::where('tender_id','=',$id)
                ->where('contractor_name','=',$user->name)->get()->first();

            $winner_name = '';

            if($tender->status == 4)
                $winner_name = Suggestion::find($tender->winner_suggestion_id)->contractor_name;

            return view('tender_detail_contractor',[
                'tender' => $tender,
                'suggestion' => $suggestion,
                'winner_name' => $winner_name
            ]);

        }

        else
            return abort(403); //TODO create error view
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
        if(Auth::user()->role != 'ADMIN')
            return abort(403);

        Tender::find($id)->delete();
        Suggestion::where('tender_id','=',$id)->delete();
        return redirect(route('tender.index'));
    }






    public function searchTenders(Request $request) {
        $tenders = Tender::where('name','LIKE','%'.$request->search_name.'%')->
            where('field','LIKE','%'.$request->search_field.'%')->get();

        return view('index',['tenders'=>$tenders]);

    }
}
