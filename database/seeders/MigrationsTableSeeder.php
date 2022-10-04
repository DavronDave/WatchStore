<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'batch' => 1,
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
            ),
            1 => 
            array (
                'batch' => 1,
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
            ),
            2 => 
            array (
                'batch' => 1,
                'id' => 3,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
            ),
            3 => 
            array (
                'batch' => 1,
                'id' => 4,
                'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
            ),
            4 => 
            array (
                'batch' => 2,
                'id' => 5,
                'migration' => '2022_02_16_121010_create_abouts_table',
            ),
            5 => 
            array (
                'batch' => 2,
                'id' => 6,
                'migration' => '2022_02_16_121120_create_contacts_table',
            ),
            6 => 
            array (
                'batch' => 2,
                'id' => 7,
                'migration' => '2022_02_16_121433_create_requests_table',
            ),
            7 => 
            array (
                'batch' => 2,
                'id' => 8,
                'migration' => '2022_02_16_122752_create_article_categories_table',
            ),
            8 => 
            array (
                'batch' => 2,
                'id' => 9,
                'migration' => '2022_02_16_122832_create_articles_table',
            ),
            9 => 
            array (
                'batch' => 2,
                'id' => 10,
                'migration' => '2022_02_16_122851_create_article_images_table',
            ),
            10 => 
            array (
                'batch' => 2,
                'id' => 11,
                'migration' => '2022_02_16_123212_create_regulation_categories_table',
            ),
            11 => 
            array (
                'batch' => 2,
                'id' => 12,
                'migration' => '2022_02_16_123302_create_regulations_table',
            ),
            12 => 
            array (
                'batch' => 2,
                'id' => 13,
                'migration' => '2022_02_16_123601_create_projects_table',
            ),
            13 => 
            array (
                'batch' => 2,
                'id' => 14,
                'migration' => '2022_02_16_123616_create_project_images_table',
            ),
            14 => 
            array (
                'batch' => 2,
                'id' => 15,
                'migration' => '2022_02_16_123626_create_project_events_table',
            ),
            15 => 
            array (
                'batch' => 2,
                'id' => 16,
                'migration' => '2022_02_16_123639_create_project_infographics_table',
            ),
            16 => 
            array (
                'batch' => 2,
                'id' => 17,
                'migration' => '2022_02_16_123652_create_project_descriptions_table',
            ),
            17 => 
            array (
                'batch' => 2,
                'id' => 18,
                'migration' => '2022_02_16_123706_create_translates_table',
            ),
            18 => 
            array (
                'batch' => 2,
                'id' => 19,
                'migration' => '2022_02_16_123816_create_langs_table',
            ),
            19 => 
            array (
                'batch' => 2,
                'id' => 20,
                'migration' => '2022_02_16_123826_create_pages_table',
            ),
            20 => 
            array (
                'batch' => 3,
                'id' => 23,
                'migration' => '2022_03_03_125001_create_question_answers_table',
            ),
            21 => 
            array (
                'batch' => 4,
                'id' => 66,
                'migration' => '2022_03_10_153613_create_site_visits_table',
            ),
            22 => 
            array (
                'batch' => 5,
                'id' => 68,
                'migration' => '2022_03_10_154507_create_article_visits_table',
            ),
        ));
        
        
    }
}