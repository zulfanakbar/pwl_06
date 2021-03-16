<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'administrator',
            'email' => 'admin.baru@admin.com',
            'password' => Hash::make('password'),
        ]);
    }
}
