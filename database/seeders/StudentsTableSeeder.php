<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('students')->delete();

        \DB::table('students')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'user_id' => 7,
                    'user_name' => 'test-student',
                    'school_name' => 'eSquall',
                    'years_of_graduation' => '2024',
                    'module' => 'Dashboard',
                    'added_by' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
        ));


    }
}