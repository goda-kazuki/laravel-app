<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{
    private $fname;

    function __construct()
    {
        $this->fname="sample.txt";
    }

    public function index(Request $request,Response $response){
        $keys=[];
        $values=[];
        $msg="テキストを入力してください";

        $name=$request->query->get("name");
        $mail=$request->query->get("mail");
        $tel=$request->query->get("tel");
        $msg=$request->query->get("msg");

        $keys=["名前","メール","電話"];
        $values=[$name,$mail,$tel];

        $data=["msg"=>$msg,"keys"=>$keys,"values"=>$values];
        $request->flash();

        return view("hello.index",$data);
    }

    public function other(Request $request){
        $data=["name"=>"たろう","mail"=>"taro@yamada","tel"=>"090-123-123"];

        $query_str=http_build_query($data);
        $data["msg"]=$query_str;

        return redirect()->route("hello",$data);
    }
}
