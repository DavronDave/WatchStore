<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'admin',
                'username' => 'admin',
                'last_seen' => NULL,
                'avatar' => NULL,
                'status' => 'active',
                'role' => 'admin',
                'password' => '$2y$10$wL7tnXoQMKo0r3fCg4aC3.69ADUJgCu/nWGFN90Nwk2NM6LbQh5pO',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
