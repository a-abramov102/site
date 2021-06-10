<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert($this->getData());
    }

    private function getData()
    {
        $faker = \Faker\Factory::create();
        $data=[];
        for($i=0; $i<10; $i++){
            $data = [
                'name'=>$faker->name(),
                'email'=>$faker->email(),
                'password'=>$faker->password(),
            ];
        }
        return $data;
    }
}
