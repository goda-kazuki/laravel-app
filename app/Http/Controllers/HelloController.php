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
        $keys=[];
        $values=[];
        $msg="テキストを入力してください";

        if($request->isMethod("post")){
            $form=$request->all();
            $keys=array_keys($form);
            $values=array_values($form);
        }

        $data=["msg"=>$msg,"keys"=>$keys,"values"=>$values];

        return view("hello.index",$data);
    }

    public function other(Request $request){
        Storage::disk("local")
            ->putFile("files",$request->file("file"));
        return redirect()->route("hello");
    }
}
