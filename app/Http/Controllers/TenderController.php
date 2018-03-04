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

        if($user->role != 'ADMIN')
            return abort(403);


        $date = jDate::forge('now')->format('date');


        return view('NewTender',['date' => $date]); //TODO create add tender view
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
            'price' => 100
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

            return view('tender_detail_admin',[
                'tender' => $tender,
                'suggestions' => $suggestions]);
        }

        else if($user->role == 'CONTRACTOR')
        {
            $suggestion = Suggestion::where('tender_id','=',$id)
                ->where('contractor_name','=',$user->name)->get()->first();


            return view('tender_detail_contractor',[
                'tender' => $tender,
                'suggestion' => $suggestion
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


    public function storeSuggestion(Request $request)
    {
        $user = Auth::user();
        if($user->role != 'CONTRACTOR')
            return abort(403);


        //TODO add validation for suggestion store request


        if(Tender::find($request->tender_id)->status != '1')
            return abort(403);

        Suggestion::where('contractor_name','=',$user->name)
            ->where('tender_id','=',$request->tender_id)->delete();

        $suggestion = new Suggestion([
            'tender_id' => $request->tender_id,
            'contractor_name' => $user->name,
            'price' => $request->price,
            'duration' => $request->duration,
            'conditions' => $request->conditions
        ]);

        if($suggestion->save())
            return back()->with('success','پیشنهاد شما برای این مناقصه ثبت شد');
        else
            return abort(500,'couldnt save suggestion');
    }

    public function showContractor($name) {

        if(Auth::user()->role != 'ADMIN')
            return abort(403);

        $contractor = Contractor::where('name','=',$name)->get();
        if(count($contractor) != 1)
            return abort(404);

        $contractor = $contractor->first();

        $suggestions = Suggestion::where('contractor_name','=',$name)->orderby('id','DESC')->get();

        foreach ($suggestions as $suggestion) {
            $suggestion->tender = Tender::find($suggestion->tender_id);
        }

        return view('contractor_detail',[
            'contractor' => $contractor,
            'suggestions' => $suggestions]);

    }

    public function searchTenders(Request $request) {
        $tenders = Tender::where('name','LIKE','%'.$request->search_name.'%')->
            where('field','LIKE','%'.$request->search_field.'%')->get();

        return view('index',['tenders'=>$tenders]);

    }
}
