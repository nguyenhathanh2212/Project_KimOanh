<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ActionNewsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ExchangesTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(PicturesTableSeeder::class);
        $this->call(VideosTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
       
    }
}
