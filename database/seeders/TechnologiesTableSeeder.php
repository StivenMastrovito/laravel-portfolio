<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $techs = ['HTML', 'JS', 'CSS', 'PHP', 'PYTHON', 'C', 'C++'];

        foreach($techs as $tech){
            $newTech = new Technology();
            $newTech->name = $tech;
            $newTech->color = $faker->hexColor();
            $newTech->save();
        }
    }
}
