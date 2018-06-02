<?php

use Illuminate\Database\Seeder;

class OverViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\OverView::class, 30)->create();
    }
}
