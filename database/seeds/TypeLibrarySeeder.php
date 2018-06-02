<?php

use Illuminate\Database\Seeder;

class TypeLibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\TypeLibrary::class, 2)->create()->each(function ($group) {
            factory(App\Models\Library::class, 10)->create([
                'type_id' => $group->id,
            ]);
        });
    }
}
