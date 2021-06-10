<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        \DB::table('categories')->insert($this->getData());
    }

    public function getData()
    {
        $faker = \Faker\Factory::create();
        $data=[];
        for($i=0; $i<10; $i++){
            $data = [
                'title'=>$faker->sentence(rand(1,3)),
                'info'=>$faker->realText(rand(100,200))
            ];
        }
        return $data;
    }
}
