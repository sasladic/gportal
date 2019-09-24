<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
        ]);
        DB::table('roles')->insert([
            'name' => 'User',
        ]);
        DB::table('roles')->insert([
            'name' => 'Not Verified',
        ]);
        DB::table('roles')->insert([
            'name' => 'Employee',
        ]);
    }
}
