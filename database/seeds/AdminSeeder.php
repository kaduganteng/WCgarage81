<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'superadmin',
            'email' => 'rayhanjundi77@gmail.com',
            'password' => Hash::make('admin123'),
            'role_id' => 1
        ]);


        DB::table('users')->insert([
            'name' => 'Admin1',
            'email' => 'rayhanjundi3@gmail.com',
            'password' => Hash::make('administrator'),
            'role_id' => 2
        ]);
    }
}
