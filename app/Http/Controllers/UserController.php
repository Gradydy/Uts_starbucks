<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function index(){
        return view('login',[
            "title"=>"Home",
            "user"=> \App\Models\User::all()
        ]);
    }

    public static function login($id){
        $users = \App\Models\User::find($id);

        return view('Home',[
            "title"=>"Profile",
        ])->with('users', $users);
    }

    public static function history($id){
        $users = \App\Models\User::find($id);

        return view('History',[
            "title"=>"History"
        ])->with('users', $users);
    }

}
