<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AboutsTableSeeder::class);
        $this->call(ArticleCategoriesTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(ArticleImagesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(LangsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ProjectDescriptionsTableSeeder::class);
        $this->call(ProjectEventsTableSeeder::class);
        $this->call(ProjectImagesTableSeeder::class);
        $this->call(ProjectInfographicsTableSeeder::class);
        $this->call(QuestionAnswersTableSeeder::class);
        $this->call(RegulationCategoriesTableSeeder::class);
        $this->call(RegulationsTableSeeder::class);
        $this->call(RequestsTableSeeder::class);
        $this->call(TranslatesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ArticleVisitsTableSeeder::class);
        $this->call(SiteVisitsTableSeeder::class);
    }
}
