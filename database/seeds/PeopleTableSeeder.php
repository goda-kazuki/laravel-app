<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("people")->insert([
            [
            "name"=>"合田　和樹",
            "mail"=>"goda@gmail.com",
            "age"=>25,
                "created_at"=> Carbon::now(),
                "updated_at"=>Carbon::now(),
        ],
            [
                "name"=>"合田　二郎",
                "mail"=>"zirou@gmail.com",
                "age"=>12,
                "created_at"=>Carbon::now(),
                "updated_at"=>Carbon::now(),

            ]
        ]);
    }
}
