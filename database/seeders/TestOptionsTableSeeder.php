<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TestOptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('test_options')->delete();

        \DB::table('test_options')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'test_id' => 1,
                    'name' => 'Option 01',
                    'video_url' => NULL,
                    'upload_video' => NULL,
                    'added_by' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'test_id' => 1,
                    'name' => 'Option 02',
                    'video_url' => NULL,
                    'upload_video' => NULL,
                    'added_by' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'test_id' => 1,
                    'name' => 'Option 03',
                    'video_url' => NULL,
                    'upload_video' => NULL,
                    'added_by' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'test_id' => 1,
                    'name' => 'Option 04',
                    'video_url' => NULL,
                    'upload_video' => NULL,
                    'added_by' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'test_id' => 2,
                    'name' => 'Option 01',
                    'video_url' => NULL,
                    'upload_video' => NULL,
                    'added_by' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'test_id' => 2,
                    'name' => 'Option 02',
                    'video_url' => NULL,
                    'upload_video' => NULL,
                    'added_by' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'test_id' => 2,
                    'name' => 'Option 03',
                    'video_url' => NULL,
                    'upload_video' => NULL,
                    'added_by' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 8,
                    'test_id' => 2,
                    'name' => 'Option 04',
                    'video_url' => NULL,
                    'upload_video' => NULL,
                    'added_by' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
        ));


    }
}