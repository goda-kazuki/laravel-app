<?php

namespace App\Http\Controllers;

use App\MyService;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{
    private $fname;

    function __construct()
    {
        $this->fname = "sample.txt";
    }

    public function index(Request $request, Response $response, $id = -1)
    {
        $myClass = \App::makeWith(MyService::class, ["id" => $id]);

        $data = [
            "msg" => $myClass->say(),
            "data" => $myClass->allData()
        ];

        return view("hello.index", $data);
    }

    public function other(Request $request)
    {
        $data = ["name" => "たろう", "mail" => "taro@yamada", "tel" => "090-123-123"];

        $query_str = http_build_query($data);
        $data["msg"] = $query_str;

        return redirect()->route("hello", $data);
    }
}
