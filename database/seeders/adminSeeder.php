<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'status' => '1',
            'username' => 'admin',
            'password' => Hash::make('123')
        ]);

        DB::table('settings')->insert([
            'status' => '1'
        ]);
        
        DB::table('contact')->insert([
            'status' => '1'
        ]);
    }
}
