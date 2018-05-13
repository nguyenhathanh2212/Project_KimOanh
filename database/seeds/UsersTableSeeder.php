<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class, 1)->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' =>  "admin",
        ]);

        factory(App\Models\User::class, 10)->create();
    }
}
