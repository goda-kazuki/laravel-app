<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    function __construct()
    {
    }

    public function index(Request $request){
        $data=["msg"=>env("SAMPLE_MESSAGE"),
            "data"=>explode(",",env("SAMPLE_DATA"))];

        return view("hello.index",$data);
    }

    public function other(Request $request){
        return redirect()->route("sample");
    }

}
