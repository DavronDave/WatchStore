<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegulationCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regulation_categories')->delete();
        
        \DB::table('regulation_categories')->insert(array (
            0 => 
            array (
                'created_at' => '2022-02-28 13:52:18',
                'id' => 1,
                'name' => 'Государственные программы',
                'status' => 1,
                'updated_at' => '2022-02-28 13:55:28',
            ),
            1 => 
            array (
                'created_at' => '2022-03-02 10:43:30',
                'id' => 2,
                'name' => 'Пресс-релиз',
                'status' => 1,
                'updated_at' => '2022-03-02 10:50:12',
            ),
        ));
        
        
    }
}