<?php

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
        DB::table('users')->insert([
            'name' => 'Warrick Yoeman',
            'email' => 'manager@ptlundin.com',
            'password' => Hash::make('123'),
            'role' => 'manager'
        ]);

        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@ptlundin.com',
            'password' => Hash::make('123'),
            'role' => 'admin'
        ]);
    }
}
