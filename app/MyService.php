<?php


namespace App;


class MyService
{
    private $id;
    private $msg = "no id";
    private $data = ["おはよう", "こんちは", "こんばんわ"];
    private $serial;

    private static $myService;

    public function __construct()
    {
        $this->serial = rand();
        echo "[" . $this->serial . "]";
    }

    public function setId($id)
    {
        $this->id = $id;

        if ($id >= 0 && $id < count($this->data)) {
            $this->msg = "select id:" . $this->id . "data:" . $this->data[$id];
        }
    }

    public function say()
    {
        return $this->msg;
    }

    public function data(int $id)
    {
        return $this->data[$id];
    }

    public function allData()
    {
        return $this->data;
    }
}
