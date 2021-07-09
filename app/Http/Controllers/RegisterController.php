<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        return view('auth.register');
    }
    public function store(Request $request){
        $request->validate([
            'fullname'=>'required|max:255',
            'user_name'=>'required|max:255',
            'password'=>'required',
            'role' =>'required'
        ]);

        $user = User::create([
            'name'=>$request->fullname,
            'user_name'=>$request->user_name,
            'password'=>Hash::make($request->password),
            'role'=>$request->role,
        ]);
        //dd($user);

        //$user->assignRole($request->roles);
        //auth()->attempt($request->only('user_name','password'));
        return back()->with('Success','User added successfully!');
    }
}
