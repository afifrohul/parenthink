<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Ben',
            'email' => 'admin01@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin11'),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $user = User::create([
            'name' => 'hendi',
            'email' => 'hendi11@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('hendi123'),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
