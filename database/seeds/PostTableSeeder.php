<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $postObject = new Post();
            $postObject->body = $faker->paragraph();
            $postObject->image = $faker->imageUrl(640, 480, 'post', true);
            $postObject->save();
           }
    }
}
