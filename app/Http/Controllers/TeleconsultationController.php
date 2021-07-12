<?php

namespace App\Http\Controllers;

use App\Exports\TeleconsultsExport;
use App\Models\Teleconsult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use Maatwebsite\Excel\Facades\Excel;

class TeleconsultationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        $teleconsults = Teleconsult::latest()->with(['user',])->paginate(20);
        return view('tele.index',compact('teleconsults'));
    }


    public function create()
    {

        return view('tele.create');
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
        return view('tele.edit',compact('teleconsult'));
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
