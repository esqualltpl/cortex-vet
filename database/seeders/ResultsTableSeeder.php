<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ResultsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('results')->delete();
        
        \DB::table('results')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Test Result 1',
                'added_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Null,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Test Result 2',
                'added_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Null,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Test Result 3',
                'added_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Null,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Test Result 4',
                'added_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Null,
                'deleted_at' => NULL,
            ),
        ));
    }
}