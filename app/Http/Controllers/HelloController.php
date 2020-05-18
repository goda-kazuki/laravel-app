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
        if(Storage::disk("public")->exists("bk_".$this->fname)){
            Storage::disk("public")->delete("bk_".$this->fname);
        }
        Storage::disk("public")->copy($this->fname,"bk_".$this->fname);
        Storage::disk("local")->delete("bk_".$this->fname);
        Storage::disk("local")
            ->copy("/public/bk_".$this->fname,"bk_".$this->fname);

        $data=["msg"=>Storage::disk("public")->url($this->fname),
            "data"=>explode(PHP_EOL,Storage::disk("public")->url($this->fname))];

        return view("hello.index",$data);
    }

    public function other(Request $request){
        Storage::disk("local")
            ->putFile("files",$request->file("file"));
        return redirect()->route("hello");
    }
}
