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
        
        \DB::table('result_details')->insert(array (
            0 => 
            array (
                'id' => 3,
                'result_id' => 1,
                'exam_id' => 1,
                'test_id' => 1,
                'option_id' => 1,
                'added_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'result_id' => 1,
                'exam_id' => 1,
                'test_id' => 2,
                'option_id' => 5,
                'added_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'result_id' => 2,
                'exam_id' => 1,
                'test_id' => 1,
                'option_id' => 2,
                'added_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'result_id' => 2,
                'exam_id' => 1,
                'test_id' => 2,
                'option_id' => 6,
                'added_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'result_id' => 3,
                'exam_id' => 1,
                'test_id' => 1,
                'option_id' => 3,
                'added_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'result_id' => 3,
                'exam_id' => 1,
                'test_id' => 2,
                'option_id' => 7,
                'added_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'result_id' => 4,
                'exam_id' => 1,
                'test_id' => 1,
                'option_id' => 4,
                'added_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'result_id' => 4,
                'exam_id' => 1,
                'test_id' => 2,
                'option_id' => 8,
                'added_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
    }
}