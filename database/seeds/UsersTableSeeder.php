<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = array(
            array(
                "name" => "BT Design Admin",
                "email" => "admin@system.com",
                "password" => Hash::make('password'),
            ),
        );
        foreach ($admins as $admin) {
            \App\User::create($admin);
        }
    }
}
