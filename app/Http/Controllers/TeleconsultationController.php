<?php

namespace App\Http\Controllers;

use App\Models\Teleconsult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeleconsultationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        return view('tele.index');
    }


    public function create()
    {

        return view('tele.create');
    }


    public function store(Request $request)
    {
        $this->validates($request);
         Auth::user()->teleConsult()->create(
            $request->all()
        );
         return back()->with('success','Teleconsult added successfully');
    }


    public function show(Teleconsult $teleconsult)
    {
        return view('tele.view',compact('teleconsult'));
    }


    public function edit(Teleconsult $teleconsult)
    {
        return view('tele.edit',compact('teleconsult'));
    }


    public function update(Request $request, Teleconsult $teleconsult)
    {
        $teleconsult->fill($request->all())->save();
        return back()->with('success','Teleconsult updated successfully');
    }


    public function destroy(Teleconsult $teleconsult)
    {
        $teleconsult->delete();
        return back()->with('success','Teleconsult removed successfully');
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

//            "prior_referred_to_hospital"=>'required',


        ]);
    }
}
