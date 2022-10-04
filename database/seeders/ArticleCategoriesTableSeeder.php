<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('article_categories')->delete();
        
        \DB::table('article_categories')->insert(array (
            0 => 
            array (
                'created_at' => '2022-02-28 12:49:44',
                'id' => 1,
                'name' => 'Полезная информация',
                'status' => 1,
                'updated_at' => '2022-02-28 12:49:44',
            ),
            1 => 
            array (
                'created_at' => '2022-02-28 13:19:26',
                'id' => 2,
                'name' => 'Пресс-релиз',
                'status' => 1,
                'updated_at' => '2022-02-28 13:33:15',
            ),
            2 => 
            array (
                'created_at' => '2022-02-28 13:28:33',
                'id' => 3,
                'name' => 'Выступления и официальные обращения руководителя',
                'status' => 1,
                'updated_at' => '2022-02-28 13:33:40',
            ),
        ));
        
        
    }
}