<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_details')->delete();
        
        \DB::table('user_details')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'contact_type' => 'Home',
                'contact_no' => '123456789',
                'vet_license' => 'test vet license',
                'license_state' => 'test license state',
                'license_country' => 'license country',
                'address' => 'Home',
                'main_street' => 'test, xyz',
                'city' => 'xyz',
                'state' => 'xyz',
                'zip_code' => '12345',
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'contact_type' => 'Home',
                'contact_no' => '123456789',
                'vet_license' => 'test vet license',
                'license_state' => 'test license state',
                'license_country' => 'license country',
                'address' => 'Home',
                'main_street' => 'test, xyz',
                'city' => 'xyz',
                'state' => 'xyz',
                'zip_code' => '12345',
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 3,
                'contact_type' => 'Home',
                'contact_no' => '123456789',
                'vet_license' => 'test vet license',
                'license_state' => 'test license state',
                'license_country' => 'license country',
                'address' => 'Home',
                'main_street' => 'test, xyz',
                'city' => 'xyz',
                'state' => 'xyz',
                'zip_code' => '12345',
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 4,
                'contact_type' => 'Home',
                'contact_no' => '123456789',
                'vet_license' => 'test vet license',
                'license_state' => 'test license state',
                'license_country' => 'license country',
                'address' => 'Home',
                'main_street' => 'test, xyz',
                'city' => 'xyz',
                'state' => 'xyz',
                'zip_code' => '12345',
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 5,
                'contact_type' => 'Home',
                'contact_no' => '123456789',
                'vet_license' => 'test vet license',
                'license_state' => 'test license state',
                'license_country' => 'license country',
                'address' => 'Home',
                'main_street' => 'test, xyz',
                'city' => 'xyz',
                'state' => 'xyz',
                'zip_code' => '12345',
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 6,
                'contact_type' => 'Home',
                'contact_no' => '123456789',
                'vet_license' => 'test vet license',
                'license_state' => 'test license state',
                'license_country' => 'license country',
                'address' => 'Home',
                'main_street' => 'test, xyz',
                'city' => 'xyz',
                'state' => 'xyz',
                'zip_code' => '12345',
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}