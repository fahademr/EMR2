<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('roles')->delete();

        $super = new \App\Role();
        $super->id = 1;
        $super->name = 'super';
        $super->display_name = 'Super Admin'; // optional
        $super->description = 'Super Admin is the owner of a Application'; // optional
        $super->save();

        $admin = new \App\Role();
        $admin->id = 2;
        $admin->name = 'admin';
        $admin->display_name = 'Administrator'; // optional
        $admin->description = 'Clinic Admin'; // optional
        $admin->save();

        $receptionist = new \App\Role();
        $receptionist->id = 3;
        $receptionist->name = 'receptionist';
        $receptionist->display_name = 'Receptionist'; // optional
        $receptionist->description = 'Clinic Receptionist'; // optional
        $receptionist->save();

        $doctor = new \App\Role();
        $doctor->id = 4;
        $doctor->name = 'pharmaceutical';
        $doctor->display_name = 'Pharmaceutical'; // optional
        $doctor->description = 'Clinic Pharmaceutical'; // optional
        $doctor->save();
    }
}
