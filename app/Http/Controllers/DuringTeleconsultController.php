<?php

namespace App\Http\Controllers;

use App\Models\DuringTeleconsult;
use Illuminate\Http\Request;

class DuringTeleconsultController extends Controller
{
    public function destroy(DuringTeleconsult $duringTeleconsult)
    {
//       dd($duringTeleconsult->teleconsult);
        $duringTeleconsult->delete();
        return redirect()->route('teleconsult.edit',$duringTeleconsult->teleconsult);
    }
}
