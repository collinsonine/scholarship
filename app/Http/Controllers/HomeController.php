<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Termwind\Components\Dd;

class HomeController extends Controller
{
    public function homepage (){
        $users = User::all();
        return view('home.homepage', compact('users'));
    }
    public function formstatus(Request $request){
        $validated = $request->validate([
            'username' => ['required', 'unique:users'],
            'firstname' => ['required'],
            'lastname' => ['required'],
            'password' => ['required', 'min:6'],
        ]);
        $users = new User();
        $users->username = $request->input('username');
        $users->firstname = $request->input('firstname');
        $users->lastname = $request->input('lastname');
        $users->password = $request->input('password');
        $users->save();
        return redirect()->back()->with('success', 'Form Submitted Successfully');
    }
}
