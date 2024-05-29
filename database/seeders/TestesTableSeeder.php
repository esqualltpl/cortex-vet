<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TestesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('testes')->delete();

        \DB::table('testes')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'exam_id' => 1,
                    'name' => 'This is a test, only for testing',
                    'added_by' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'exam_id' => 1,
                    'name' => 'This is a test, only for testing',
                    'added_by' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
        ));
    }
}