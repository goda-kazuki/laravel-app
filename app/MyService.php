<?php


namespace App;


class MyService
{
    private $id;
    private $msg = "no id";
    private $data = ["おはよう", "こんちは", "こんばんわ"];

    public function __construct(int $id = -1)
    {
        if ($id >= 0) {
            $this->id = $id;
            $this->msg = "select:" . $this->data[$id];
        }
    }

    public function say()
    {
        return $this->msg;
    }

    public function data($id)
    {
        return $this->data[$id];
    }

    public function allData()
    {
        return $this->data;
    }
}
