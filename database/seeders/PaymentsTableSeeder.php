<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payments')->delete();
        
        \DB::table('payments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'amount' => '1000',
                'added_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}