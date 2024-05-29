<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ResultDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('result_details')->delete();

        \DB::table('result_details')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'result_id' => 1,
                    'exam_id' => 1,
                    'test_id' => 1,
                    'option_id' => 4,
                    'added_by' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'result_id' => 1,
                    'exam_id' => 1,
                    'test_id' => 2,
                    'option_id' => 7,
                    'added_by' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
        ));
    }
}