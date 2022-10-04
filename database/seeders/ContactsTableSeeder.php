<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'created_at' => '2022-02-21 13:39:29',
                'icon' => 'storage/contacts/1646586986_phone.svg',
                'id' => 3,
                'name' => 'Телефонный номер',
                'status' => 1,
                'type' => 'tel',
                'updated_at' => '2022-03-06 17:16:26',
                'value' => '+998 90 123 45 67',
            ),
            1 => 
            array (
                'created_at' => '2022-02-22 08:20:42',
                'icon' => 'storage/contacts/1646586996_phone.svg',
                'id' => 4,
                'name' => 'Телефонный номер',
                'status' => 1,
                'type' => 'tel',
                'updated_at' => '2022-03-06 17:16:36',
                'value' => '+998 90 123 45 67',
            ),
            2 => 
            array (
                'created_at' => '2022-02-22 10:44:07',
                'icon' => 'storage/contacts/1646587034_environment.svg',
                'id' => 5,
                'name' => 'Адрес',
                'status' => 1,
                'type' => 'address',
                'updated_at' => '2022-03-06 17:17:14',
                'value' => 'г.Ташкент, ул. Лабзак, 3А, 9-эта',
            ),
            3 => 
            array (
                'created_at' => '2022-03-01 14:09:17',
                'icon' => 'storage/contacts/1646587203_mail.svg',
                'id' => 6,
                'name' => 'Эл. адрес',
                'status' => 1,
                'type' => 'mailto',
                'updated_at' => '2022-03-06 17:20:03',
                'value' => 'test@mail.ru',
            ),
            4 => 
            array (
                'created_at' => '2022-02-21 12:43:52',
                'icon' => 'storage/contacts/1646586966_instagram-Logo-PNG-Transparent-Background-download.svg',
                'id' => 7,
                'name' => '@kibera_technology',
                'status' => 1,
                'type' => 'social',
                'updated_at' => '2022-03-06 17:16:06',
                'value' => 'https://www.instagram.com/kibera_technology/',
            ),
        ));
        
        
    }
}