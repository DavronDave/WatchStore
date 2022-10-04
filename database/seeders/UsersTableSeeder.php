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
                'avatar' => 'storage/user/1646978342_uzgerb.svg',
                'created_at' => NULL,
                'id' => 1,
                'last_seen' => NULL,
                'name' => 'Adminstrator',
                'password' => '$2y$10$eOsywh3PaGEsgvEC3w104ekBEPmak6ENoj2GMY3FYF5/PicPOoqCO',
                'remember_token' => NULL,
                'role' => 'admin',
                'status' => 'active',
                'updated_at' => '2022-03-11 11:01:02',
                'username' => 'admin',
            ),
        ));
        
        
    }
}