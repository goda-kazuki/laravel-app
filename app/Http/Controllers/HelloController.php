<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($person){
        $data=["msg"=>config("sample.message"),
            "data"=>config("sample.data")];

        return view("hello.index",$data);
    }

    public function other(Request $request){
        $data=["msg"=>$request->get("bye")];
        return view("hello.index",$data);
    }

}
