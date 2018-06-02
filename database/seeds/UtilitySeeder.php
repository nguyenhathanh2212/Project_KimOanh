<?php

use Illuminate\Database\Seeder;

class UtilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i < 31; $i++)
        factory(App\Models\Utility::class)->create([
        	'project_id' => $i
        ]);
    }
}
