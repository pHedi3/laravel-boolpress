<?php

use Illuminate\Database\Seeder;
require_once 'vendor/autoload.php';


use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i= 0; $i < 50; $i++) {
            $newpost = new Post();
            $newpost->user = $faker->name();
            $newpost->text = $faker->realText();
            $newpost->img = $faker->imageUrl(640, 480, 'animals', true);
            $newpost->save();

        };
    }
}
