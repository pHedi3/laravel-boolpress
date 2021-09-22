<?php

use Illuminate\Database\Seeder;
require_once 'vendor/autoload.php';


use App\Post;
use App\PostCategory;

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
        $categories = [
            'comic',
            'polical',
            'fact',
            'news',
            'food',
            'hobby',
            'sport'
        ];
        $allIdCategories = [];

        foreach ($categories as $item) {
            $newCategori = new PostCategory();
            $newCategori->tag = $item;
            $newCategori->save();
            $allIdCategories[] = $newCategori->id;
        }

        for ($i= 0; $i < 50; $i++) {
            $newpost = new Post();
            $newpost->user = $faker->name();
            $newpost->text = $faker->realText();
            $newpost->img = $faker->imageUrl(640, 480, 'animals', true);
            $randCategoryKey = array_rand($allIdCategories, 1);
            $categoryID = $allIdCategories[$randCategoryKey];
            $newpost->category_id = $categoryID;
            $newpost->save();

        };
    }
}
