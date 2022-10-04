<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectInfographicsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_infographics')->delete();
        
        \DB::table('project_infographics')->insert(array (
            0 => 
            array (
                'created_at' => '2022-03-07 17:34:26',
                'id' => 1,
                'project_id' => 3,
                'title' => 'Малые промышленные зоны',
                'updated_at' => '2022-03-07 17:34:26',
                'value' => '470',
            ),
            1 => 
            array (
                'created_at' => '2022-03-07 17:35:22',
                'id' => 2,
                'project_id' => 3,
                'title' => 'Свободные экономические зоны',
                'updated_at' => '2022-03-09 11:17:34',
                'value' => '325',
            ),
            2 => 
            array (
                'created_at' => '2022-03-07 17:36:42',
                'id' => 3,
                'project_id' => 3,
                'title' => 'Проекты, реализованные в рамках инвестиционной программы',
                'updated_at' => '2022-03-07 17:36:42',
                'value' => '234',
            ),
            3 => 
            array (
                'created_at' => '2022-03-07 17:34:26',
                'id' => 4,
                'project_id' => 2,
                'title' => 'Малые промышленные зоны',
                'updated_at' => '2022-03-07 17:34:26',
                'value' => '470',
            ),
            4 => 
            array (
                'created_at' => '2022-03-07 17:35:22',
                'id' => 5,
                'project_id' => 2,
                'title' => 'Свободные экономические зоны',
                'updated_at' => '2022-03-09 11:17:34',
                'value' => '325',
            ),
            5 => 
            array (
                'created_at' => '2022-03-07 17:36:42',
                'id' => 6,
                'project_id' => 2,
                'title' => 'Проекты, реализованные в рамках инвестиционной программы',
                'updated_at' => '2022-03-07 17:36:42',
                'value' => '234',
            ),
            6 => 
            array (
                'created_at' => '2022-03-07 17:34:26',
                'id' => 7,
                'project_id' => 1,
                'title' => 'Малые промышленные зоны',
                'updated_at' => '2022-03-11 11:28:15',
                'value' => '232',
            ),
            7 => 
            array (
                'created_at' => '2022-03-07 17:35:22',
                'id' => 8,
                'project_id' => 1,
                'title' => 'Свободные экономические зоны',
                'updated_at' => '2022-03-11 11:28:21',
                'value' => '322',
            ),
            8 => 
            array (
                'created_at' => '2022-03-07 17:36:42',
                'id' => 9,
                'project_id' => 1,
                'title' => 'Проекты, реализованные в рамках инвестиционной программы',
                'updated_at' => '2022-03-11 11:28:26',
                'value' => '343',
            ),
        ));
        
        
    }
}