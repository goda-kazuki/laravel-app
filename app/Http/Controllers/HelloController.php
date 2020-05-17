<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Person $person){
        $data=["msg"=>$person];

        return view("hello.index",$data);
    }

    public function other(Request $request){
        $data=["msg"=>$request->get("bye")];
        return view("hello.index",$data);
    }

}
