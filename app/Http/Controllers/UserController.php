<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

class UserController extends Controller
{
    public function index() 
    {
        return view('user.user');
    }

    public function store(Request $request) 
    {
        $user = new Users();

        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/user/', $filename);
            $user->image = $filename;
        } else {
            return $request;
            $user->image = '';
        }

        $user->save();

        return view('user.user')->with('user', $user);
    }
}
