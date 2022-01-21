<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Cooking', 'Science', 'Gaming', 'News', 'Finance'];

        foreach ($categories as $category) {
            $new_category_object = new Category();
            $new_category_object->name = $category;
            $new_category_object->save();
        }
    }
}
