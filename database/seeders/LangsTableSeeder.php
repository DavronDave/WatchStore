<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('langs')->delete();
        
        \DB::table('langs')->insert(array (
            0 => 
            array (
                'created_at' => '2022-02-17 13:21:24',
                'default' => 0,
                'id' => 1,
                'image' => 'storage/languages/1646504555_united-states.svg',
                'name' => 'English',
                'status' => 1,
                'updated_at' => '2022-03-10 18:05:27',
                'url' => 'en',
            ),
            1 => 
            array (
                'created_at' => '2022-02-17 13:23:24',
                'default' => 0,
                'id' => 2,
                'image' => 'storage/languages/1646504565_russia.svg',
                'name' => 'Русский',
                'status' => 1,
                'updated_at' => '2022-03-10 17:45:38',
                'url' => 'ru',
            ),
            2 => 
            array (
                'created_at' => '2022-02-17 13:25:32',
                'default' => 1,
                'id' => 3,
                'image' => 'storage/languages/1646504575_uzbekistan.svg',
                'name' => 'O`zbek',
                'status' => 1,
                'updated_at' => '2022-03-10 17:45:38',
                'url' => 'uz',
            ),
        ));
        
        
    }
}