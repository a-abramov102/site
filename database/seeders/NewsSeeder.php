<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run()
    {
        \DB::table('news')->insert($this->getData());
    }

    public function getData()
    {
        $faker = \Faker\Factory::create();
        $data=[];
        for($i=0; $i<10; $i++){
            $data = [
                'title'=>$faker->sentence(rand(1,3)),
                'text'=>$faker->realText(rand(100,200))
            ];
        }
        return $data;
    }
}
