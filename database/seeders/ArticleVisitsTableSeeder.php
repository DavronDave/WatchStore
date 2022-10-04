<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleVisitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('article_visits')->delete();
        
        \DB::table('article_visits')->insert(array (
            0 => 
            array (
                'article_id' => 4,
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36',
                'created_at' => '2022-03-10 16:36:14',
                'date' => '2022-03-10',
                'id' => 1,
                'ip' => '127.0.0.1',
                'updated_at' => '2022-03-10 16:36:14',
            ),
            1 => 
            array (
                'article_id' => 1,
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36',
                'created_at' => '2022-03-10 16:46:13',
                'date' => '2022-03-10',
                'id' => 2,
                'ip' => '127.0.0.1',
                'updated_at' => '2022-03-10 16:46:13',
            ),
            2 => 
            array (
                'article_id' => 6,
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36',
                'created_at' => '2022-03-11 12:00:50',
                'date' => '2022-03-11',
                'id' => 3,
                'ip' => '127.0.0.1',
                'updated_at' => '2022-03-11 12:00:50',
            ),
        ));
        
        
    }
}