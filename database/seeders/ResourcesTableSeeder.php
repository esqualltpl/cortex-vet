<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ResourcesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('resources')->delete();
        
        \DB::table('resources')->insert(array (
            0 => 
            array (
                'id' => 1,
                'video_url' => 'https://www.youtube.com/embed/njX2bu-_Vw4',
                'upload_video' => NULL,
                'added_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
    }
}