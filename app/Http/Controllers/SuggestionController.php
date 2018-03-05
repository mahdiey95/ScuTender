<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Tender;
use App\Suggestion;


class SuggestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index']]);
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


    public function acceptSuggestion($id) {
        $user = Auth::user();
        if($user->role != 'ADMIN')
            return abort(403);

        $suggestion = Suggestion::find($id);

        // check if this suggestion accepted before
        // if accepted , deny it
        if(str_contains($suggestion->accepting_titles , $user->title))
        {
            $suggestion->accepting_titles = str_replace_first($user->title.'%','',$suggestion->accepting_titles);
        }


        else
        {
            // deny other suggestions for this tender
            $allTenderSuggestions = Suggestion::where('tender_id','=',$suggestion->tender_id)->get();
            foreach($allTenderSuggestions as $denied)
            {
                if(str_contains($denied->accepting_titles , $user->title))
                {
                    $denied->accepting_titles = str_replace($user->title.'%','',$denied->accepting_titles);
                    $denied->save();
                }
            }

            // accept this suggestion
            $suggestion->accepting_titles = $suggestion->accepting_titles . $user->title . '%';

            // check if all admins accepted this suggestion
            // if all admins accepted , update tender as finished and set winner suggestion
            if($suggestion->checkAccept())
            {
                $tender = Tender::find($suggestion->tender_id);
                $tender->winner_suggestion_id = $suggestion->id;
                $tender->status = 4;
                $tender->save();
            }
        }

        if($suggestion->save())
            return back();

        else
            return abort(500);
    }
}
