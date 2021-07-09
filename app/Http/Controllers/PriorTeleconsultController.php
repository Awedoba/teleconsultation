<?php

namespace App\Http\Controllers;

use App\Models\PriorTeleconsult;
use Illuminate\Http\Request;

class PriorTeleconsultController extends Controller
{
    public function destroy(PriorTeleconsult $priorTeleconsult)
    {
//        dd($priorTeleconsult->teleconsult);
        $priorTeleconsult->delete();
        return redirect()->route('teleconsult.edit',$priorTeleconsult->teleconsult);
    }
}
