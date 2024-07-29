<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MainFirstVideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('main_first_videos')->delete();
        
        \DB::table('main_first_videos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'video' => NULL,
                'url' => 'https://www.youtube.com/embed/njX2bu-_Vw4',
                'added_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
    }
}