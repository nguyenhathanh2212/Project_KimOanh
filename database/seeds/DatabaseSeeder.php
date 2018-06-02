<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $this->call(OverViewSeeder::class);
         $this->call(PictureSeedeer::class);
         $this->call(TypeLibrarySeeder::class);
         $this->call(TypeNewsSeeder::class);
         $this->call(TypeProjectSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(UtilitySeeder::class);
         $this->call(VideoSeeder::class);
    }
}
