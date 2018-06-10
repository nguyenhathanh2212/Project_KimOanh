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
                    'video_id' => $x,
                ])->each(function($project) {
                    factory(App\Models\OverView::class)->create([
                        'project_id' => $project->id,
                    ]);
                });
            }
        }
    }
}
