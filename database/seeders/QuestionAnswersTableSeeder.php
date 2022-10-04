<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionAnswersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('question_answers')->delete();
        
        \DB::table('question_answers')->insert(array (
            0 => 
            array (
                'answer' => '<p>Лорем ипсум &mdash; это текст-&laquo;рыба&raquo;, часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной &laquo;рыбой&raquo; для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Лорем ипсум.</p>',
                'created_at' => '2022-03-04 06:51:07',
                'id' => 1,
                'img' => NULL,
                'keyword' => NULL,
                'question' => 'Часто задаваемые вопросы',
                'status' => 1,
                'updated_at' => '2022-03-04 06:59:09',
            ),
            1 => 
            array (
                'answer' => '<p>Лорем ипсум &mdash; это текст-&laquo;рыба&raquo;, часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной &laquo;рыбой&raquo; для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Лорем ипсум. 2</p>',
                'created_at' => '2022-03-04 06:51:07',
                'id' => 2,
                'img' => NULL,
                'keyword' => NULL,
                'question' => 'Часто задаваемые вопросы 2',
                'status' => 1,
                'updated_at' => '2022-03-07 00:01:36',
            ),
        ));
        
        
    }
}