<?php

namespace App\Http\Controllers;

use App\Exports\TeleconsultsExport;
use App\Exports\TeleconsultsRangeExport;
use App\Models\Teleconsult;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use Maatwebsite\Excel\Facades\Excel;

class TeleconsultationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(Request $request)
    {
//        dd($request->has('search'));
        if ($request->has('search')){
            $teleconsults = Teleconsult::where('patient_first_name','like','%'.$request->search.'%')
                ->orWhere('name_of_caller','like','%'.$request->search.'%')
                ->orWhere('facility','like','%'.$request->search.'%')
                ->orWhere('district','like','%'.$request->search.'%')
                ->orWhere('contact_of_caller','like','%'.$request->search.'%')->paginate(20);
        }else{
            $teleconsults = Teleconsult::latest()->with(['user',])->paginate(20);
        }

        return view('tele.index',compact('teleconsults'));
    }


    public function create()
    {
        $date = Carbon::now()->toDateString();
        return view('tele.create',compact('date'));
    }


    public function store(Request $request)
    {
        $this->validates($request);
         $teleconsult = Auth::user()->teleConsult()->create(
            $request->all()
        );

        $medication = $request->medication;
        $quantity = $request->quantity;
//        add medications
//        dd($request->medication[0]);
        if ($request->medication[0] != null) {
            for ($x = 0; $x < sizeof($request->medication); $x++) {
                $during = array('medication' => $medication[$x], 'quantity' => $quantity[$x]);
//            dd($medicate);
                $teleconsult->duringTeleconsult()->create(
                    $during
                );
            }
        }
        $prior_medication = $request->prior_medication;
        $dosage = $request->dosage;
        $med_form = $request->medication_form;
        $amount_dispensed = $request->amount_dispensed;
//        dd(count($request->prior_medication));
//        add medications
        if ($request->prior_medication[0] != null) {
            for ($x = 0; $x < sizeof($request->prior_medication); $x++) {
//                dd($amount_dispensed[$x]);
                $prior = array('medication' => $prior_medication[$x], 'dosage' => $dosage[$x], 'medication_form' => $med_form[$x], 'amount_dispensed' => $amount_dispensed[$x]);
                //            dd($medicate);
                $teleconsult->priorTeleconsult()->create(
                    $prior
                );
            }
        }

         return back()->with('success','Teleconsult added successfully');
    }


    public function show(Teleconsult $teleconsult)
    {
//        dd($teleconsult->duringTeleconsult[0]['medication']);
        return view('tele.view',compact('teleconsult'));

    }


    public function edit(Teleconsult $teleconsult)
    {
//        dd('edit');
        $date = Carbon::now()->toDateString();
        return view('tele.edit',compact('teleconsult','date'));
    }


    public function update(Request $request, Teleconsult $teleconsult)
    {
//        dd($request->has('cc_physician'));
        $teleconsult->fill($request->all());
        $teleconsult->cc_physician = $request->has('cc_physician');
        $teleconsult->prior_referred_to_hospital = $request->has('prior_referred_to_hospital');
        $teleconsult->referral_priority = $request->has('referral_priority');
        $teleconsult->ambulance = $request->has('ambulance');
        $teleconsult->referred_to_hospital = $request->has('referred_to_hospital');
//        dd($teleconsult->cc_physician );
        $teleconsult->save();
        return back()->with('success','Teleconsult updated successfully');
    }


    public function destroy(Teleconsult $teleconsult)
    {
//        dd($teleconsult);
        foreach ($teleconsult->duringTeleconsult as $during){
            $during->delete();
        }
        foreach ($teleconsult->priorTeleconsult as $prior){
            $prior->delete();
        }
        $teleconsult->delete();
        return back()->with('success','Teleconsult removed successfully');
    }

    public function export()
    {
        return Excel::download(new TeleconsultsExport, 'teleconsult.xlsx');
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
        return Excel::download(new TeleconsultsRangeExport($from_date, $to_date), 'teleconsult.xlsx');
    }

    public function validates($request){
        $request->validate([
             "encounter_date"=>"required",
             "district"=>"required",
            "facility"=>"required",
            "patient_first_name"=>"required",
             "age"=>"required" ,
             "sex"=>"required",
             "complaint"=>"required",
             "name_of_caller" =>"required",
             "contact_of_caller"=>"required",
//             "tcc_staff"
            "diagnosis" =>"required",
            "purpose" =>"required",
//            "prior_referred_to_hospital"=>'required',
        ]);
    }
}
