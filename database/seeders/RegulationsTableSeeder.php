<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegulationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regulations')->delete();
        
        \DB::table('regulations')->insert(array (
            0 => 
            array (
                'created_at' => '2022-03-02 11:21:34',
                'document' => 'storage/documents/1646908973_ab1a.jpg',
                'id' => 1,
                'published_date' => '2022-03-02',
                'quantity_downloads' => 5,
                'regulation_category_id' => 2,
                'status' => 1,
                'title' => 'Название документ',
                'updated_at' => '2022-03-10 15:42:53',
            ),
            1 => 
            array (
                'created_at' => '2022-03-02 12:11:30',
                'document' => 'storage/documents/1646223090_850__80_2948805578.jpg',
                'id' => 2,
                'published_date' => '2022-03-03',
                'quantity_downloads' => 7,
                'regulation_category_id' => 1,
                'status' => 1,
                'title' => 'Нормативные акты',
                'updated_at' => '2022-03-09 19:34:54',
            ),
        ));
        
        
    }
}