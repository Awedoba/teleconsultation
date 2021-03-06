<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function edit()
    {
        return view('auth.change');
    }
    public function store(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);
        $password = $request->password;
        if(Hash::check($request->old_password,auth()->user()->password )){
            auth()->user()->fill(['password'=>Hash::make($password)])->save();
        }
        return back()->with('success', 'Password changed successfully!');
    }

    public function reset(User $user)
    {
//        dd($user->name);
//        $user->fill(['password'=>Hash::make('123')])->save();
        $user->password = Hash::make('123');
        $user->save();
        return back()->with('Success', 'Password reset successfully!');
    }
}
