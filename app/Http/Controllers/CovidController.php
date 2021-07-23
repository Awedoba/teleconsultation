<?php

namespace App\Http\Controllers;

use App\Exports\CovidsExport;
use App\Exports\CovidsRangeExport;
use App\Exports\TeleconsultsExport;
use Illuminate\Http\Request;
use App\Models\Covid;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class CovidController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(Request $request)
    {
        if ($request->has('search')){
            $covids = Covid::where('contact_of_caller','like','%'.$request->search.'%')
                ->orWhere('name','like','%'.$request->search.'%')
                ->orWhere('location','like','%'.$request->search.'%')->paginate(20);
        }else{
            $covids = Covid::latest()->with(['user',])->paginate(20);
        }
//        $covids = Covid::all();
        return view('covid.index', compact('covids'));
    }

    public function create()
    {
        $date = Carbon::now()->toDateString();
        return view('covid.create', compact('date'));
    }

    public function store(Request $request)
    {
//        dd('jjjj');
        $this->validates($request);

        $covid = Auth::user()->covid()->create(
            $request->all()
        );
        return back()->with('success', 'Covid Teleconsult added successfully');
    }

    public function validates($request)
    {
        $request->validate([
            'encounter_date' => 'required|date',
            'name' => 'nullable',
            'location' => 'nullable',
            'contact_of_caller' => 'nullable',
            'complaints' => 'nullable',
            'assistance_offered' => 'nullable',
            'sex' => 'required',
        ]);
    }

    public function edit( Covid $covid)
    {
        $date = Carbon::now()->toDateString();
        return view('covid.edit',compact('covid','date'));
    }


    public function update(Request $request, Covid $covid)
    {
        $covid->fill($request->all())->save();
        return back()->with('success','Covid teleconsult updated successfully');
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
    public function export()
    {
        return Excel::download(new CovidsExport, 'Covid teleconsult.xlsx');
    }
    public function exportRange(Request $request)
    {
        $request->validate([
            "from_date"=>"required|date",
            "to_date"=>"nullable|date"
        ]);

        $from_date = Carbon::createFromFormat('Y-m-d', $request->from_date);
        $to_date = $request->filled('to_date') ? Carbon::createFromFormat('Y-m-d', $request->to_date): null;
//        dd(["from"=>$from_date,"to"=>$to_date]);
        return Excel::download(new CovidsRangeExport($from_date, $to_date), 'Covid teleconsult.xlsx');
    }
}
