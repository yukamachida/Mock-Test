<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'name' => '太郎1',
                'email' => 'tarotaro1@example.com',
                'password' => bcrypt('password123'),
                'postal_code' => '111-1111',
                'address' => '横浜市',
                'building' => '横浜マンション',

            ],
            [
                'name' => '太郎2',
                'email' => 'tarotaro2@example.com',
                'password' => bcrypt('password123'),
                'postal_code' => '111-1111',
                'address' => '横浜市',
                'building' => '横浜マンション',
            ],
            [
                'name' => '太郎3',
                'email' => 'tarotaro3@example.com',
                'password' => bcrypt('password123'),
                'postal_code' => '111-1111',
                'address' => '横浜市',
                'building' => '横浜マンション',
            ]
        ]);
    }
}
