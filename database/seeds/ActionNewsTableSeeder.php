<?php

use Illuminate\Database\Seeder;

class ActionNewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\ActionNews::class, 10)->create();
    }
}
