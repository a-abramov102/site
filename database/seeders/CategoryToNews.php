<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryToNews extends Seeder
{
    public function run()
    {
        for($i=0; $i<18; $i++){
            $data = [
                'category_id'=>rand(7,17),
                'news_id'=>$i+1
            ];

            \DB::table('news_to_category')->insert($data);
        }
    }

    public function getData()
    {
    }
}
