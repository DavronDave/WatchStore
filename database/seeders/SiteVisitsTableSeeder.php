<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiteVisitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('site_visits')->delete();
        
        \DB::table('site_visits')->insert(array (
            0 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36',
                'created_at' => '2022-03-10 16:41:05',
                'date' => '2022-03-09',
                'id' => 1,
                'ip' => '127.0.0.1',
                'updated_at' => '2022-03-10 16:41:05',
            ),
            1 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36',
                'created_at' => '2022-03-10 16:41:33',
                'date' => '2022-03-10',
                'id' => 2,
                'ip' => '127.0.0.1',
                'updated_at' => '2022-03-10 16:41:33',
            ),
            2 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:97.0) Gecko/20100101 Firefox/97.0',
                'created_at' => '2022-03-10 17:46:31',
                'date' => '2022-03-10',
                'id' => 3,
                'ip' => '127.0.0.1',
                'updated_at' => '2022-03-10 17:46:31',
            ),
            3 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36',
                'created_at' => '2022-03-11 09:56:48',
                'date' => '2022-03-11',
                'id' => 4,
                'ip' => '127.0.0.1',
                'updated_at' => '2022-03-11 09:56:48',
            ),
            4 => 
            array (
            'browser' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_1 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.0 Mobile/14E304 Safari/602.1',
                'created_at' => '2022-03-11 11:16:55',
                'date' => '2022-03-11',
                'id' => 5,
                'ip' => '127.0.0.1',
                'updated_at' => '2022-03-11 11:16:55',
            ),
        ));
        
        
    }
}