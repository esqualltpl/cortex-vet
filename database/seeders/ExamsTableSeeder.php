<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ExamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('exams')->delete();

        \DB::table('exams')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'step_name' => 'Test Exam 01',
                    'added_by' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
        ));
    }
}