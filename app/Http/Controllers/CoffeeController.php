<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreCoffeeRequest;
use App\Http\Requests\UpdateCoffeeRequest;

class CoffeeController extends Controller
{
    public function index($id){

        $users = \App\Models\User::find($id);

        return view('Coffee',[
            "title"=>"Coffee",
            "cards"=> \App\Models\Coffee::all(),
            "users"=>$users
        ]);
    }
}
