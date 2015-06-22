<?php

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
        $user = \App\User::create(['name' => 'Fahad Ali', 'email' => 'super@gmail.com',
                'password' => bcrypt('123456')]);
        $user->roles()->attach(1); // Super Admin

        $user = \App\User::create(['name' => 'Ahmed Ali', 'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')]);
        $user->roles()->attach(2); //  Admin

        $user = \App\User::create(['name' => 'Hamza Ali', 'email' => 'receptionist@gmail.com',
            'password' => bcrypt('123456')]);
        $user->roles()->attach(3); // Receptionist

        $user = \App\User::create(['name' => 'Noor Ali', 'email' => 'pharmaceutical@gmail.com',
            'password' => bcrypt('123456')]);
        $user->roles()->attach(4); // Pharmaceutical
    }
}
