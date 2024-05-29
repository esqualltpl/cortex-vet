<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Test Super Admin',
                    'email' => 'superadmin@cortexvet.com',
                    'email_verified_at' => NULL,
                    'password' => Hash::make('123456789'),
                    'status' => 'Super Admin',
                    'remember_token' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Test Neurologist',
                    'email' => 'neurologist@cortexvet.com',
                    'email_verified_at' => NULL,
                    'password' => Hash::make('123456789'),
                    'status' => 'Neurologist',
                    'remember_token' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Test Practitioner',
                    'email' => 'practitioner@cortexvet.com',
                    'email_verified_at' => NULL,
                    'password' => Hash::make('123456789'),
                    'status' => 'Practitioner',
                    'remember_token' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'KM Super Admin',
                    'email' => 'khadija.testing1@gmail.com',
                    'email_verified_at' => NULL,
                    'password' => Hash::make('123456789'),
                    'status' => 'Super Admin',
                    'remember_token' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'KM Neurologist',
                    'email' => 'km.testing12@gmail.com ',
                    'email_verified_at' => NULL,
                    'password' => Hash::make('123456789'),
                    'status' => 'Neurologist',
                    'remember_token' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'KM Practitioner',
                    'email' => 'khadija1997.pm@gmail.com',
                    'email_verified_at' => NULL,
                    'password' => Hash::make('123456789'),
                    'status' => 'Practitioner',
                    'remember_token' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'Test Student',
                    'email' => 'student@cortexvet.com',
                    'email_verified_at' => NULL,
                    'password' => Hash::make('123456789'),
                    'status' => 'Student',
                    'remember_token' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
        ));
    }
}