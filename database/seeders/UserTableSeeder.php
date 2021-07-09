<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'super admin',
            'user_name' => 'super admin',
            'password' => Hash::make('123'),
            'role'=>'admin',
        ]);
//        $user->assignRole('Super Admin');
    }
}
