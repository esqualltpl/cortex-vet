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
        ));
    }
}