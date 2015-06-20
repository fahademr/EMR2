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
        $user = \App\User::create(['name' => 'Fahad Ali', 'email' => 'rock.star9722@gmail.com',
                'password' => bcrypt('123456')]);
        $user->roles()->attach(1); // Super Admin
    }
}
