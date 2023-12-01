<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // http://country.io/phone.json

    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'prianandaazhar2001@gmail.com',
                'username' => 'azhar620',
                'password' => Hash::make("Azhar20062001")
            ],
            [
                'email' => 'deaashilla1@gmail.com',
                'username' => 'deaashilla1',
                'password' => Hash::make("Azhar20062001")
            ],
            [
                'email' => 'azharpriananda2001@gmail.com',
                'username' => 'azharpriananda2001',
                'password' => Hash::make("Azhar20062001")
            ]
        ]);
    }
}