<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('auth.users',compact('users'));
    }

    public function edit(User $user){

        return view('auth.edit', compact ('user'));
    }

    public function update(User $user, Request $request){
        $request->validate([
            'name'=>'required|max:255',
            'user_name'=>'required|max:255',
            'role' =>'required'
        ]);
        $user->fill($request->all())->save();
        return back()->with('Success, User account updated successfully');
    }

    public function destroy(User $user){
        $user->delete();
        return back()->with('success','User removed successfully');
    }
}
