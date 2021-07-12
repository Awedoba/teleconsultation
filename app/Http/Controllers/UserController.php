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

    public function update(User $user, Request $request){
        $request->validate([
            'fullname'=>'required|max:255',
            'user_name'=>'required|max:255',
            'roles' =>'required'
        ]);
        return back()->with('success, User account updated successfully');
    }

    public function destroy(User $user){
        $user->delete();
        return back()->with('success','User removed successfully');
    }
}
