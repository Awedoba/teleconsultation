<?php

namespace Database\Seeders;

use Faker\Factory;
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
        // \App\Models\User::factory(10)->create();
        $this->call([
//            RolesAndPermissionsSeeder::class,
            UserTableSeeder::class,
//            LocationTableSeeder::class,
//            LeaveTableSeeder::class,
//            SeverityTableSeeder::class,
        ]);
    }
}
