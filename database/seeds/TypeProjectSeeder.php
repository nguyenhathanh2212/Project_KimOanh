<?php

use Illuminate\Database\Seeder;

class TypeProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $x = 1;
        for ($i = 0; $i < 3; $i++) {
            $type = factory(App\Models\TypeProject::class)->create();
            $id = $type->id;
            for ($j = 1; $j <= 10; $j++) {
                factory(App\Models\Project::class)->create([
                    'type_id' => $id,
                    'overview_id' => $x,
                    'video_id' => $x,
                    'subdivision_picture_id' => $x ++
                ]);
            }
        }
    }
}
