<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        return view('auth.login');
    }
    public function view(Request $request){

        $request->validate([
           'user_name' => 'required|max:255',
            'password' => 'required',

        ]);
//        auth()->attempt($request->only('user_name','password'));
//       dd($request);
        if (!auth()->attempt($request->only('user_name','password'))){
            return back()->with('error','Invalid login attempt');
        }
//        if (auth()->user()->hasanyrole('admin|Super Admin') ){
//            return redirect()->route('dashboard');
//        }
        return redirect()->route('teleconsult.index');
    }
}
