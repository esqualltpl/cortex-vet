<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InstructionVideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('instruction_videos')->delete();
        
        \DB::table('instruction_videos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'exam_id' => 1,
                'url' => 'https://www.youtube.com/embed/njX2bu-_Vw4',
                'video' => NULL,
                'added_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
    }
}