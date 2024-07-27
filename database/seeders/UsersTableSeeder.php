<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Demo_1',
            'email' => 'admin_village_visit@gmail.com',
            'password' => '123456',
            'allotted_village' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ]);

        // for ($i = 2; $i <= 60; $i++) {
        //     DB::table('users')->insert([
        //         'id' => $i,
        //         'name' => $faker->name,
        //         'email' => $faker->unique()->safeEmail,
        //         'password' => '123456',
        //         'allotted_village' => $faker->city,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //         'deleted_at' => null,
        //     ]);
        // }
    }
}
