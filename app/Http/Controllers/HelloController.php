<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    function __construct()
    {
        config(["sample.message"=>"新しいメッセージ"]);
    }

    public function index($person){
        $data=["msg"=>config("sample.message"),
            "data"=>config("sample.data")];

        return view("hello.index",$data);
    }

    public function other(Request $request){
        return redirect()->route("sample");
    }

}
