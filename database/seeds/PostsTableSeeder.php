<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->sentence(5);
            $newPost->description = $faker->paragraph(7);
            $newPost->img = 'https://picsum.photos/300/200';
            $newPost->save();
        }
    }
}
