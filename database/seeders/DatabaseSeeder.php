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

        $this->call(ContactsTableSeeder::class);

        $this->call(LangsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(PagesTableSeeder::class);

        $this->call(ProjectsTableSeeder::class);

        $this->call(QuestionAnswersTableSeeder::class);

        $this->call(RequestsTableSeeder::class);
        $this->call(TranslatesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        $this->call(SiteVisitsTableSeeder::class);
    }
}
