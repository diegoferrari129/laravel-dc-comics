<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $comic = new Comic();

            $comic->title = $faker->word();
            $comic->description = $faker->text(100);
            $comic->image = $faker->word();
            $comic->price = $faker->numberBetween(10, 999);
            $comic->sale_date = $faker->year();
            $comic->type = $faker->word();

            $comic->save();
        }
    }
}
