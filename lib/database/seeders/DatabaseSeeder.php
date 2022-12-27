<?php

namespace Database\Seeders;

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
       
        \DB::table('users')->insert([
            'email' => 'nguyenphuochao123@gmail.com',
            'fullname' => 'Nguyễn Phước Hảo',
            'address' => '301',
            'phone' => '098383838',
            'quyen' => 1,
            'password' => bcrypt('111111'),
            'active' => 1

        ]);
    
    }
}
