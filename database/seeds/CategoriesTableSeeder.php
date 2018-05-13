<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\Category::class, 5)->create()->each(function($parent_cat){
            factory(App\Models\Category::class, 5)->create([
                'parent_id' => $parent_cat->id,
            ]);
        });
    }
}
