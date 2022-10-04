<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('articles')->delete();
        
        \DB::table('articles')->insert(array (
            0 => 
            array (
                'article_category_id' => 2,
                'cover_image' => 'storage/article_cover_image/1646311504_kagan.jpg',
                'created_at' => '2022-03-03 11:04:02',
                'description' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">В условиях роста населения Узбекистана и с учетом тенденции увеличения его миграции из сельской местности в города, где создаётся большая часть рабочих мест, урбанизация играет всё более важную роль в экономическом развитии Республики. По данным Государственного комитета по статистике, в период 1990-2017 годов самые высокие темпы роста населения наблюдались именно в средних городах и составили 54%.</div>

<p>В связи с этим, огромное значение при комплексном развитии урбанизации придаётся равномерному и повсеместному расширению городов, в том числе средних городов как важных экономических центров (хабов). Однако быстрый неуправляемый рост, в результате приводящий к неэффективности и растущему неудовлетворенному спросу на инфраструктуру и коммунальные услуги, негативно сказывается на качестве жизни и общей инвестиционной привлекательности таких городов.<br />
Предварительно, при поддержке Всемирного банка, была проведена комплексная городская диагностика выбранных пилотных городов &ndash; Чартак, Каган и Янгиюль, в результате которой были выявлены факторы, негативно влияющие на качество городской среды: отсутствие системы комплексного и эффективного оказания услуг, необходимость замены и модернизации морально устаревающей инфраструктуры, низкий уровень энергоэффективности, отсутствие приемлемой городской среды, а также необходимость создания условий для привлечения инвестиций, создания рабочих мест и повышения конкурентоспособности.&nbsp;</p>',
                'id' => 1,
                'image' => 'storage/article_image/1646311504_forest.jpg',
                'published_date' => '2022-03-03 17:44:00',
                'quantity_views' => 1,
                'status' => 1,
                'title' => '«Комплексное развитие средних городов» 1',
                'updated_at' => '2022-03-11 11:55:24',
            ),
            1 => 
            array (
                'article_category_id' => 2,
                'cover_image' => 'storage/article_cover_image/1646309080_ptt5.jpg',
                'created_at' => '2022-03-03 11:04:22',
                'description' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">В условиях роста населения Узбекистана и с учетом тенденции увеличения его миграции из сельской местности в города, где создаётся большая часть рабочих мест, урбанизация играет всё более важную роль в экономическом развитии Республики. По данным Государственного комитета по статистике, в период 1990-2017 годов самые высокие темпы роста населения наблюдались именно в средних городах и составили 54%.</div>

<p>В связи с этим, огромное значение при комплексном развитии урбанизации придаётся равномерному и повсеместному расширению городов, в том числе средних городов как важных экономических центров (хабов). Однако быстрый неуправляемый рост, в результате приводящий к неэффективности и растущему неудовлетворенному спросу на инфраструктуру и коммунальные услуги, негативно сказывается на качестве жизни и общей инвестиционной привлекательности таких городов.<br />
Предварительно, при поддержке Всемирного банка, была проведена комплексная городская диагностика выбранных пилотных городов &ndash; Чартак, Каган и Янгиюль, в результате которой были выявлены факторы, негативно влияющие на качество городской среды: отсутствие системы комплексного и эффективного оказания услуг, необходимость замены и модернизации морально устаревающей инфраструктуры, низкий уровень энергоэффективности, отсутствие приемлемой городской среды, а также необходимость создания условий для привлечения инвестиций, создания рабочих мест и повышения конкурентоспособности.&nbsp;</p>',
                'id' => 2,
                'image' => 'storage/article_image/1646309080_ptt6.jpg',
                'published_date' => '2022-03-03 17:04:00',
                'quantity_views' => 0,
                'status' => 1,
                'title' => '«Комплексное развитие средних городов» 2',
                'updated_at' => '2022-03-11 11:55:39',
            ),
            2 => 
            array (
                'article_category_id' => 2,
                'cover_image' => 'storage/article_cover_image/1646309080_ptt5.jpg',
                'created_at' => '2022-03-03 11:04:22',
                'description' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">В условиях роста населения Узбекистана и с учетом тенденции увеличения его миграции из сельской местности в города, где создаётся большая часть рабочих мест, урбанизация играет всё более важную роль в экономическом развитии Республики. По данным Государственного комитета по статистике, в период 1990-2017 годов самые высокие темпы роста населения наблюдались именно в средних городах и составили 54%.</div>

<p>В связи с этим, огромное значение при комплексном развитии урбанизации придаётся равномерному и повсеместному расширению городов, в том числе средних городов как важных экономических центров (хабов). Однако быстрый неуправляемый рост, в результате приводящий к неэффективности и растущему неудовлетворенному спросу на инфраструктуру и коммунальные услуги, негативно сказывается на качестве жизни и общей инвестиционной привлекательности таких городов.<br />
Предварительно, при поддержке Всемирного банка, была проведена комплексная городская диагностика выбранных пилотных городов &ndash; Чартак, Каган и Янгиюль, в результате которой были выявлены факторы, негативно влияющие на качество городской среды: отсутствие системы комплексного и эффективного оказания услуг, необходимость замены и модернизации морально устаревающей инфраструктуры, низкий уровень энергоэффективности, отсутствие приемлемой городской среды, а также необходимость создания условий для привлечения инвестиций, создания рабочих мест и повышения конкурентоспособности.&nbsp;</p>',
                'id' => 3,
                'image' => 'storage/article_image/1646309080_ptt6.jpg',
                'published_date' => '2022-03-03 17:04:00',
                'quantity_views' => 0,
                'status' => 1,
                'title' => '«Комплексное развитие средних городов» 3',
                'updated_at' => '2022-03-11 11:55:54',
            ),
            3 => 
            array (
                'article_category_id' => 2,
                'cover_image' => 'storage/article_cover_image/1646311504_kagan.jpg',
                'created_at' => '2022-03-03 11:04:02',
                'description' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">В условиях роста населения Узбекистана и с учетом тенденции увеличения его миграции из сельской местности в города, где создаётся большая часть рабочих мест, урбанизация играет всё более важную роль в экономическом развитии Республики. По данным Государственного комитета по статистике, в период 1990-2017 годов самые высокие темпы роста населения наблюдались именно в средних городах и составили 54%.</div>

<p>В связи с этим, огромное значение при комплексном развитии урбанизации придаётся равномерному и повсеместному расширению городов, в том числе средних городов как важных экономических центров (хабов). Однако быстрый неуправляемый рост, в результате приводящий к неэффективности и растущему неудовлетворенному спросу на инфраструктуру и коммунальные услуги, негативно сказывается на качестве жизни и общей инвестиционной привлекательности таких городов.<br />
Предварительно, при поддержке Всемирного банка, была проведена комплексная городская диагностика выбранных пилотных городов &ndash; Чартак, Каган и Янгиюль, в результате которой были выявлены факторы, негативно влияющие на качество городской среды: отсутствие системы комплексного и эффективного оказания услуг, необходимость замены и модернизации морально устаревающей инфраструктуры, низкий уровень энергоэффективности, отсутствие приемлемой городской среды, а также необходимость создания условий для привлечения инвестиций, создания рабочих мест и повышения конкурентоспособности.&nbsp;</p>',
                'id' => 4,
                'image' => 'storage/article_image/1646311504_forest.jpg',
                'published_date' => '2022-03-03 17:44:00',
                'quantity_views' => 1,
                'status' => 1,
                'title' => '«Комплексное развитие средних городов» 4',
                'updated_at' => '2022-03-11 11:56:12',
            ),
            4 => 
            array (
                'article_category_id' => 1,
                'cover_image' => 'storage/article_cover_image/1646309080_ptt5.jpg',
                'created_at' => '2022-03-03 11:04:22',
                'description' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">В условиях роста населения Узбекистана и с учетом тенденции увеличения его миграции из сельской местности в города, где создаётся большая часть рабочих мест, урбанизация играет всё более важную роль в экономическом развитии Республики. По данным Государственного комитета по статистике, в период 1990-2017 годов самые высокие темпы роста населения наблюдались именно в средних городах и составили 54%.</div>

<p>В связи с этим, огромное значение при комплексном развитии урбанизации придаётся равномерному и повсеместному расширению городов, в том числе средних городов как важных экономических центров (хабов). Однако быстрый неуправляемый рост, в результате приводящий к неэффективности и растущему неудовлетворенному спросу на инфраструктуру и коммунальные услуги, негативно сказывается на качестве жизни и общей инвестиционной привлекательности таких городов.<br />
Предварительно, при поддержке Всемирного банка, была проведена комплексная городская диагностика выбранных пилотных городов &ndash; Чартак, Каган и Янгиюль, в результате которой были выявлены факторы, негативно влияющие на качество городской среды: отсутствие системы комплексного и эффективного оказания услуг, необходимость замены и модернизации морально устаревающей инфраструктуры, низкий уровень энергоэффективности, отсутствие приемлемой городской среды, а также необходимость создания условий для привлечения инвестиций, создания рабочих мест и повышения конкурентоспособности.&nbsp;</p>',
                'id' => 5,
                'image' => 'storage/article_image/1646309080_ptt6.jpg',
                'published_date' => '2022-03-03 17:04:00',
                'quantity_views' => 0,
                'status' => 1,
                'title' => '«Комплексное развитие средних городов» 5',
                'updated_at' => '2022-03-11 11:59:49',
            ),
            5 => 
            array (
                'article_category_id' => 1,
                'cover_image' => 'storage/article_cover_image/1646311504_kagan.jpg',
                'created_at' => '2022-03-03 11:04:02',
                'description' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">В условиях роста населения Узбекистана и с учетом тенденции увеличения его миграции из сельской местности в города, где создаётся большая часть рабочих мест, урбанизация играет всё более важную роль в экономическом развитии Республики. По данным Государственного комитета по статистике, в период 1990-2017 годов самые высокие темпы роста населения наблюдались именно в средних городах и составили 54%.</div>

<p>В связи с этим, огромное значение при комплексном развитии урбанизации придаётся равномерному и повсеместному расширению городов, в том числе средних городов как важных экономических центров (хабов). Однако быстрый неуправляемый рост, в результате приводящий к неэффективности и растущему неудовлетворенному спросу на инфраструктуру и коммунальные услуги, негативно сказывается на качестве жизни и общей инвестиционной привлекательности таких городов.<br />
Предварительно, при поддержке Всемирного банка, была проведена комплексная городская диагностика выбранных пилотных городов &ndash; Чартак, Каган и Янгиюль, в результате которой были выявлены факторы, негативно влияющие на качество городской среды: отсутствие системы комплексного и эффективного оказания услуг, необходимость замены и модернизации морально устаревающей инфраструктуры, низкий уровень энергоэффективности, отсутствие приемлемой городской среды, а также необходимость создания условий для привлечения инвестиций, создания рабочих мест и повышения конкурентоспособности.&nbsp;</p>',
                'id' => 6,
                'image' => 'storage/article_image/1646311504_forest.jpg',
                'published_date' => '2022-03-03 17:44:00',
                'quantity_views' => 2,
                'status' => 1,
                'title' => '«Комплексное развитие средних городов» 4',
                'updated_at' => '2022-03-11 12:00:50',
            ),
        ));
        
        
    }
}