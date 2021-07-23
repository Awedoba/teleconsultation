<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Covid;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CovidController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(Request $request)
    {
        $covids = Covid::all();
        return view('covid.index', compact('covids'));
    }
    public function create()
    {
        $date = Carbon::now()->toDateString();
        return view('covid.create', compact('date'));
    }
    public function store(Request $request)
    {
        $this->validates($request);
        
        $covid = Auth::user()->covid()->create(
            $request->all()
        );
        return back()->with('success', 'Covid Teleconsult added successfully');
    }
    public function destroy(Covid $covid)
    {
        //        dd($teleconsult);
        $covid->delete();
        return back()->with('success', 'Covid teleconsult removed successfully');
    }
    public function show(Covid $covid)
    {
        //dd($teleconsult->duringTeleconsult[0]['medication']);
        return view('covid.view', compact('covid'));
    }

    public function validates($request){
        $request->validate([
            'encounter_date'=>'required|date',
            'name'=>'nullable',
            'location'=>'nullable',
            'contact_of_caller'=>'nullable',
            'complaints'=>'nullable',
            'assistance_offered'=>'nullable',
            'sex'=>'required',
        ]);
    }
}
