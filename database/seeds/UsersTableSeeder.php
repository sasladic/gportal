<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Sasa',
            'last_name' => 'Sladic',
            'username' => 'sasladic',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'email' => 'sasa96.sladic@gmail.com',
            'password' => bcrypt('neznam123'),
            'pin_code' => 123456,
            'country' => 'Serbia',
            'status' => 1,
            'ip_address' => '192.168.0.0.1',
            'last_active' => date("Y-m-d H:i:s"),
            'role_id' => 1,
        ]);
    }
}
