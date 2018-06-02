<?php

use Illuminate\Database\Seeder;

class TypeNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\TypeNews::class, 4)->create()->each(function ($group) {
            factory(App\Models\News::class, 20)->create([
                'type_id' => $group->id,
            ]);
        });
    }
}
