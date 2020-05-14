<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(Request $request){
        $data=["msg"=>"はろーさんぷるいんでっくす"];

        return view("hello.index",$data);
    }

    public function other(Request $request){
        $data=["msg"=>"はろーさんぷるあざー"];
        return view("hello.index",$data);
    }

}
