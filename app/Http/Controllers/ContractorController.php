<?php

namespace App\Http\Controllers;

use App\Contractor;
use Illuminate\Http\Request;
use App\Tender;
use App\Suggestion;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;
use Morilog\Jalali\jDate;
use Illuminate\Support\Facades\Storage;

class ContractorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showContractor($name) {

        if(!(Auth::user()->role == 'ADMIN' || Auth::user()->role == 'EXPERT'))
            return abort(403);

        $contractor = Contractor::where('name','=',$name)->get();
        if(count($contractor) != 1)
            return abort(404);

        $contractor = $contractor->first();

        $suggestions = Suggestion::where('contractor_name','=',$name)->orderby('id','DESC')->get();

        foreach ($suggestions as $suggestion) {
            $suggestion->tender = Tender::find($suggestion->tender_id);
        }

        $resumeUrl = '';
        if(Storage::exists('resumes/'.$contractor->id))
            $resumeUrl = Storage::url('resumes/'.$contractor->id.'.pdf');

        return view('contractor_detail',[
            'contractor' => $contractor,
            'suggestions' => $suggestions ,
            'resumeUrl' => $resumeUrl]);

    }

    public function index()
    {
        if(!(Auth::user()->role == 'ADMIN' || Auth::user()->role == 'EXPERT'))
            return abort(403);

        $contractors = Contractor::all();

        return view('contractors',['contractors' => $contractors]);
    }
}
