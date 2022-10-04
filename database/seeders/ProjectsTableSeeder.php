<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'cover_image' => 'storage/project_cover/1646483205_g1.jpg',
                'created_at' => '2022-03-05 12:26:45',
                'description' => NULL,
                'id' => 1,
                'image' => 'storage/project_image/1646908930_kagan1.jpg',
                'name' => 'Каган',
                'point_x' => '64.54812372007645',
                'point_y' => '39.73837203768041',
                'region' => 'Бухарская область',
                'short_description' => 'Каган - город-спутник древней Бухары, где началось моё знакомство с провинциальным Узбекистаном',
                'status' => 1,
                'updated_at' => '2022-03-10 15:42:10',
            ),
            1 => 
            array (
                'cover_image' => 'storage/project_cover/1646760428_chartak.jpg',
                'created_at' => '2022-03-05 14:20:39',
                'description' => NULL,
                'id' => 2,
                'image' => 'storage/project_image/1646979705_q4KPnvGBUKY3RGe2q_F6_vRKtJAf3Yme.jpg',
                'name' => 'Чартак',
                'point_x' => '71.82259569655142',
                'point_y' => '41.07288727039031',
                'region' => 'Наманганская область',
                'short_description' => 'Реконструкция туристического комплекса «Чартак Плаза» путем реконструкции старого фермерского рынка в Чартаке',
                'status' => 1,
                'updated_at' => '2022-03-11 11:21:45',
            ),
            2 => 
            array (
                'cover_image' => 'storage/project_cover/1646979726_ThinkstockPhotos-496200014.jpg',
                'created_at' => '2022-03-07 16:32:42',
                'description' => NULL,
                'id' => 3,
                'image' => 'storage/project_image/1646979726_Swiss-National-Park-Switzerland.jpg',
                'name' => 'Янгиюль',
                'point_x' => '69.06084421191818',
                'point_y' => '41.11674901674111',
                'region' => 'Ташкентская область',
                'short_description' => 'В Янгиюле планируется строительство объектов питьевого водоснабжения мощностью 30 000 м3/ночь/день и другие подобные работы.',
                'status' => 1,
                'updated_at' => '2022-03-11 11:22:06',
            ),
        ));
        
        
    }
}