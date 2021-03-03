<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function registered(){
        $users = User::all();

        return view('admin.register')->with('users',$users);

    }


    public function registeredit(Request $request, $id)
    {

        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users',$users);

    }

}

