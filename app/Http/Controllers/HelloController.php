<?php

namespace App\Http\Controllers;

use App\MyService;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{
    function __construct(MyService $myService)
    {
        $myService = app(MyService::class);
    }

    public function index(Request $request, MyService $myService, int $id = -1)
    {
        $myService->setId($id);

        $data = [
            "msg" => $myService->say(),
            "data" => $myService->allData()
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
