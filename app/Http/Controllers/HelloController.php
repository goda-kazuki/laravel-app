<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{
    private $fname;

    function __construct()
    {
        $this->fname="sample.txt";
    }

    public function index(Request $request){
        $data=["msg"=>$this->fname,
            "data"=>explode(PHP_EOL,Storage::get($this->fname))];

        return view("hello.index",$data);
    }

    public function other($msg){
        Storage::put($this->fname, Storage::get($this->fname).PHP_EOL.$msg);

        return redirect()->route("hello");
    }
}
