<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class CardControl extends Controller
{
    public function index(){
        return view('Coffee',[
            "title"=>"Coffee",
            "cards"=> \App\Models\Coffee::all()
        ]);
    }
}
