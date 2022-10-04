<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('article_images')->delete();
        
        \DB::table('article_images')->insert(array (
            0 => 
            array (
                'article_id' => 2,
                'created_at' => '2022-03-03 11:04:22',
                'id' => 1,
                'image' => 'storage/article_images/1646305462_3a62b2ee46b08a0ab926a9b394e72870.jpg',
                'updated_at' => '2022-03-03 11:04:22',
            ),
            1 => 
            array (
                'article_id' => 2,
                'created_at' => '2022-03-03 11:04:22',
                'id' => 2,
                'image' => 'storage/article_images/1646305462_57e5056d2292a.jpg',
                'updated_at' => '2022-03-03 11:04:22',
            ),
            2 => 
            array (
                'article_id' => 2,
                'created_at' => '2022-03-03 11:04:22',
                'id' => 3,
                'image' => 'storage/article_images/1646305462_850__80_501152611.jpg',
                'updated_at' => '2022-03-03 11:04:22',
            ),
            3 => 
            array (
                'article_id' => 2,
                'created_at' => '2022-03-03 11:04:22',
                'id' => 4,
                'image' => 'storage/article_images/1646305462_850__80_2461989194.jpg',
                'updated_at' => '2022-03-03 11:04:22',
            ),
            4 => 
            array (
                'article_id' => 2,
                'created_at' => '2022-03-03 11:04:22',
                'id' => 5,
                'image' => 'storage/article_images/1646305462_850__80_2526206290.jpg',
                'updated_at' => '2022-03-03 11:04:22',
            ),
            5 => 
            array (
                'article_id' => 2,
                'created_at' => '2022-03-03 11:04:22',
                'id' => 6,
                'image' => 'storage/article_images/1646305462_850__80_2537654486.jpg',
                'updated_at' => '2022-03-03 11:04:22',
            ),
            6 => 
            array (
                'article_id' => 2,
                'created_at' => '2022-03-03 12:20:04',
                'id' => 9,
                'image' => 'storage/article_images/1646310004_ptt3.jpg',
                'updated_at' => '2022-03-03 12:20:04',
            ),
            7 => 
            array (
                'article_id' => 2,
                'created_at' => '2022-03-03 12:20:04',
                'id' => 10,
                'image' => 'storage/article_images/1646310004_ptt4.jpg',
                'updated_at' => '2022-03-03 12:20:04',
            ),
            8 => 
            array (
                'article_id' => 2,
                'created_at' => '2022-03-03 12:20:04',
                'id' => 11,
                'image' => 'storage/article_images/1646310004_ptt5.jpg',
                'updated_at' => '2022-03-03 12:20:04',
            ),
            9 => 
            array (
                'article_id' => 2,
                'created_at' => '2022-03-03 12:20:04',
                'id' => 12,
                'image' => 'storage/article_images/1646310004_res.jpg',
                'updated_at' => '2022-03-03 12:20:04',
            ),
            10 => 
            array (
                'article_id' => 2,
                'created_at' => '2022-03-03 12:37:45',
                'id' => 13,
                'image' => 'storage/article_images/1646311065_ab1.jpg',
                'updated_at' => '2022-03-03 12:37:45',
            ),
            11 => 
            array (
                'article_id' => 2,
                'created_at' => '2022-03-03 12:37:45',
                'id' => 14,
                'image' => 'storage/article_images/1646311065_ab2.jpg',
                'updated_at' => '2022-03-03 12:37:45',
            ),
            12 => 
            array (
                'article_id' => 1,
                'created_at' => '2022-03-03 12:45:25',
                'id' => 15,
                'image' => 'storage/article_images/1646311525_ptt1.jpg',
                'updated_at' => '2022-03-03 12:45:25',
            ),
            13 => 
            array (
                'article_id' => 1,
                'created_at' => '2022-03-03 12:45:25',
                'id' => 16,
                'image' => 'storage/article_images/1646311525_ptt2.jpg',
                'updated_at' => '2022-03-03 12:45:25',
            ),
            14 => 
            array (
                'article_id' => 1,
                'created_at' => '2022-03-03 12:45:25',
                'id' => 17,
                'image' => 'storage/article_images/1646311525_ptt3.jpg',
                'updated_at' => '2022-03-03 12:45:25',
            ),
            15 => 
            array (
                'article_id' => 1,
                'created_at' => '2022-03-03 12:45:25',
                'id' => 18,
                'image' => 'storage/article_images/1646311525_ptt4.jpg',
                'updated_at' => '2022-03-03 12:45:25',
            ),
            16 => 
            array (
                'article_id' => 1,
                'created_at' => '2022-03-03 12:45:25',
                'id' => 19,
                'image' => 'storage/article_images/1646311525_ptt5.jpg',
                'updated_at' => '2022-03-03 12:45:25',
            ),
            17 => 
            array (
                'article_id' => 1,
                'created_at' => '2022-03-03 12:45:25',
                'id' => 20,
                'image' => 'storage/article_images/1646311525_ptt6.jpg',
                'updated_at' => '2022-03-03 12:45:25',
            ),
            18 => 
            array (
                'article_id' => 1,
                'created_at' => '2022-03-03 12:45:25',
                'id' => 21,
                'image' => 'storage/article_images/1646311525_res.jpg',
                'updated_at' => '2022-03-03 12:45:25',
            ),
            19 => 
            array (
                'article_id' => 1,
                'created_at' => '2022-03-04 05:08:59',
                'id' => 22,
                'image' => 'storage/article_images/1646370539_ptt1.jpg',
                'updated_at' => '2022-03-04 05:08:59',
            ),
            20 => 
            array (
                'article_id' => 1,
                'created_at' => '2022-03-04 05:08:59',
                'id' => 23,
                'image' => 'storage/article_images/1646370539_ptt2.jpg',
                'updated_at' => '2022-03-04 05:08:59',
            ),
            21 => 
            array (
                'article_id' => 1,
                'created_at' => '2022-03-04 05:08:59',
                'id' => 24,
                'image' => 'storage/article_images/1646370539_ptt3.jpg',
                'updated_at' => '2022-03-04 05:08:59',
            ),
            22 => 
            array (
                'article_id' => 1,
                'created_at' => '2022-03-04 05:08:59',
                'id' => 25,
                'image' => 'storage/article_images/1646370539_ptt4.jpg',
                'updated_at' => '2022-03-04 05:08:59',
            ),
            23 => 
            array (
                'article_id' => 1,
                'created_at' => '2022-03-04 05:08:59',
                'id' => 26,
                'image' => 'storage/article_images/1646370539_ptt5.jpg',
                'updated_at' => '2022-03-04 05:08:59',
            ),
            24 => 
            array (
                'article_id' => 1,
                'created_at' => '2022-03-04 05:08:59',
                'id' => 27,
                'image' => 'storage/article_images/1646370539_ptt6.jpg',
                'updated_at' => '2022-03-04 05:08:59',
            ),
            25 => 
            array (
                'article_id' => 1,
                'created_at' => '2022-03-04 05:08:59',
                'id' => 28,
                'image' => 'storage/article_images/1646370539_res.jpg',
                'updated_at' => '2022-03-04 05:08:59',
            ),
            26 => 
            array (
                'article_id' => 1,
                'created_at' => '2022-03-04 05:12:56',
                'id' => 29,
                'image' => 'storage/article_images/1646370776_ptt3.jpg',
                'updated_at' => '2022-03-04 05:12:56',
            ),
            27 => 
            array (
                'article_id' => 1,
                'created_at' => '2022-03-04 05:12:56',
                'id' => 30,
                'image' => 'storage/article_images/1646370776_ptt4.jpg',
                'updated_at' => '2022-03-04 05:12:56',
            ),
            28 => 
            array (
                'article_id' => 1,
                'created_at' => '2022-03-04 05:12:56',
                'id' => 31,
                'image' => 'storage/article_images/1646370776_ptt5.jpg',
                'updated_at' => '2022-03-04 05:12:56',
            ),
        ));
        
        
    }
}