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
        $super->name         = 'super';
        $super->display_name = 'Super Admin'; // optional
        $super->description  = 'Super Admin is the owner of a Application'; // optional
        $super->save();

        $admin = new \App\Role();
        $admin->id = 2;
        $admin->name         = 'admin';
        $admin->display_name = 'Administrator'; // optional
        $admin->description  = 'Clinic Admin'; // optional
        $admin->save();

        $doctor = new \App\Role();
        $doctor->id = 3;
        $doctor->name         = 'doctor';
        $doctor->display_name = 'Doctor'; // optional
        $doctor->description  = 'Clinic Doctor'; // optional
        $doctor->save();

        $receptionist = new \App\Role();
        $receptionist->id = 4;
        $receptionist->name         = 'receptionist';
        $receptionist->display_name = 'Receptionist'; // optional
        $receptionist->description  = 'Clinic Receptionist'; // optional
        $receptionist->save();

        $accountant = new \App\Role();
        $accountant->id = 5;
        $accountant->name         = 'accountant';
        $accountant->display_name = 'Accountant'; // optional
        $accountant->description  = 'Clinic Accountant'; // optional
        $accountant->save();

        $lab = new \App\Role();
        $lab->id = 6;
        $lab->name         = 'lab';
        $lab->display_name = 'Lab Manager'; // optional
        $lab->description  = 'Clinic Lab Manager'; // optional
        $lab->save();
    }
}
