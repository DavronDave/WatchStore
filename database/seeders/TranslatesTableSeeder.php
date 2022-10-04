<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TranslatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('translates')->delete();
        
        \DB::table('translates')->insert(array (
            0 => 
            array (
                'created_at' => '2022-02-23 05:45:28',
                'field_id' => 1,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">In the context of the growing population of Uzbekistan and taking into account the trend of increasing its migration from rural areas to cities, where most of the jobs are created, urbanization plays an increasingly important role in the economic development of the Republic. According to the State Statistics Committee, in the period 1990-2017, the highest population growth rates were observed in medium-sized cities and amounted to 54%.</div>

<p><br />
In this regard, in the integrated development of urbanization, great importance is attached to the uniform and widespread expansion of cities, including medium-sized cities as important economic centers (hubs). However, rapid unmanaged growth, resulting in inefficiency and growing pent-up demand for infrastructure and utilities, has a negative impact on the quality of life and the overall investment attractiveness of such cities.</p>

<p><br />
Preliminarily, with the support of the World Bank, a comprehensive urban diagnostics was carried out in selected pilot cities - Chartak, Kagan and Yangiyul, as a result of which factors were identified that negatively affect the quality of the urban environment: the lack of a system for the integrated and efficient provision of services, the need to replace and modernize the morally obsolete infrastructure, low levels of energy efficiency, lack of an acceptable urban environment, as well as the need to create conditions for attracting investment, creating jobs and increasing competitiveness. <a href="https://mift.uz/" target="_blank">Main site</a></p>',
                'id' => 1,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'abouts',
                'updated_at' => '2022-03-09 17:30:55',
            ),
            1 => 
            array (
                'created_at' => '2022-02-23 05:45:28',
                'field_id' => 1,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">В условиях роста населения Узбекистана и с учетом тенденции увеличения его миграции из сельской местности в города, где создаётся большая часть рабочих мест, урбанизация играет всё более важную роль в экономическом развитии Республики. По данным Государственного комитета по статистике, в период 1990-2017 годов самые высокие темпы роста населения наблюдались именно в средних городах и составили 54%.</div>

<p>&nbsp;</p>

<p>В связи с этим, огромное значение при комплексном развитии урбанизации придаётся равномерному и повсеместному расширению городов, в том числе средних городов как важных экономических центров (хабов). Однако быстрый неуправляемый рост, в результате приводящий к неэффективности и растущему неудовлетворенному спросу на инфраструктуру и коммунальные услуги, негативно сказывается на качестве жизни и общей инвестиционной привлекательности таких городов.</p>

<p><br />
Предварительно, при поддержке Всемирного банка, была проведена комплексная городская диагностика выбранных пилотных городов &ndash; Чартак, Каган и Янгиюль, в результате которой были выявлены факторы, негативно влияющие на качество городской среды: отсутствие системы комплексного и эффективного оказания услуг, необходимость замены и модернизации морально устаревающей инфраструктуры, низкий уровень энергоэффективности, отсутствие приемлемой городской среды, а также необходимость создания условий для привлечения инвестиций, создания рабочих мест и повышения конкурентоспособности.&nbsp;<a href="https://mift.uz/" target="_blank">Главный сайт&nbsp;</a></p>',
                'id' => 2,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'abouts',
                'updated_at' => '2022-03-09 17:30:55',
            ),
            2 => 
            array (
                'created_at' => '2022-02-23 05:45:28',
                'field_id' => 1,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">Oʻzbekiston aholisining koʻpayishi sharoitida va uning qishloq joylardan koʻp ish oʻrinlari yaratilgan shaharlarga migratsiyasining kuchayishi tendentsiyasini hisobga olgan holda, urbanizatsiya respublikaning iqtisodiy rivojlanishida tobora muhim rol oʻynamoqda. Davlat statistika qoʻmitasi maʼlumotlariga koʻra, 1990-2017-yillarda aholining eng yuqori oʻsish surʼatlari oʻrta shaharlarda kuzatilgan va 54 foizni tashkil etgan.</div>

<p><br />
Shu munosabat bilan urbanizatsiyani kompleks rivojlantirishda shaharlarni, shu jumladan, oʻrta shaharlarni muhim iqtisodiy markazlar (uzatmalar) sifatida bir xilda va keng koʻlamda kengaytirishga katta ahamiyat beriladi. Biroq, infratuzilma va kommunal xizmatlarga bo&#39;lgan samarasiz va o&#39;sib borayotgan talabning o&#39;sishiga olib keladigan boshqarilmaydigan tez o&#39;sish bunday shaharlarning hayot sifatiga va umumiy investitsiya jozibadorligiga salbiy ta&#39;sir ko&#39;rsatmoqda.</p>

<p><br />
Dastlab, Jahon banki ko&lsquo;magida tanlangan tajriba shaharlar &ndash; Chortoq, Kogon va Yangiyo&lsquo;l shaharlarida kompleks shahar diagnostikasi o&lsquo;tkazildi, natijada shahar atrof-muhitining sifatiga salbiy ta&rsquo;sir ko&lsquo;rsatuvchi omillar aniqlandi: xizmatlarni kompleks va samarali koʻrsatish tizimi, maʼnaviy eskirgan infratuzilmani almashtirish va modernizatsiya qilish zarurati, energiya samaradorligi pastligi, maqbul shahar muhitining yoʻqligi, shuningdek, investitsiyalarni jalb qilish, ish oʻrinlarini yaratish va koʻpaytirish uchun shart-sharoitlar yaratish zarurati. raqobatbardoshlik. <a href="https://mift.uz/" target="_blank">Asosiy sayt</a></p>',
                'id' => 3,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'abouts',
                'updated_at' => '2022-03-09 17:30:55',
            ),
            3 => 
            array (
                'created_at' => '2022-02-23 05:45:28',
                'field_id' => 1,
                'field_name' => 'second_description',
                'field_value' => '<p>In the city of Kagan, Bukhara region, it is planned to improve the sewerage system, restore the Palace of the Emir of Bukhara and certain cultural heritage sites in the central part of the city, organize the Kagan-Bukhara tourist bus route, purchase special equipment and build garages for its maintenance, landscaping, and improve street lighting in selected project areas.</p>

<p><br />
In the city of Yangiyul, Tashkent region, water supply and sewerage systems will be improved, special equipment will be purchased and specialized garages will be built, as well as the improvement of a number of mahallas and the improvement of street lighting in selected project areas.</p>

<p><br />
The sources of financing for the project are borrowed funds from the World Bank in the amount of $100 million under a state guarantee and the contribution of the Republic of Uzbekistan in the amount equivalent to $24.12 million in the form of tax and customs benefits.</p>',
                'id' => 4,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'abouts',
                'updated_at' => '2022-03-09 17:30:55',
            ),
            4 => 
            array (
                'created_at' => '2022-02-23 05:45:28',
                'field_id' => 1,
                'field_name' => 'second_description',
                'field_value' => '<p>В г.Кагане Бухарской области планируется улучшение системы канализации, восстановление Дворца эмира Бухарского и отдельных объектов культурного наследия в центральной части города, организация туристического автобусного маршрута &laquo;Каган-Бухара&raquo;, закупка спецтехники и строительство гаражей для её содержания, благоустройство, улучшение уличного освещения в выбранных проектных зонах.</p>

<p><br />
В г.Янгиюле Ташкентской области будут улучшены системы водоснабжения и канализации, закуплена спецтехника и осуществлено строительство специализированных гаражей, а также благоустройство ряда махаллей и улучшение уличного освещения в выбранных проектных зонах.</p>

<p><br />
Источниками финансирования проекта определены заемные средства Всемирного банка в размере 100 млн долларов под государственную гарантию и вклад Республики Узбекистан в сумме, эквивалентной 24,12 млн долларов США, в виде налоговых и таможенных льгот.<br />
&nbsp;</p>',
                'id' => 5,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'abouts',
                'updated_at' => '2022-03-09 17:30:55',
            ),
            5 => 
            array (
                'created_at' => '2022-02-23 05:45:28',
                'field_id' => 1,
                'field_name' => 'second_description',
                'field_value' => '<p>Buxoro viloyati Kogon shahrida kanalizatsiya tizimini yaxshilash, Buxoro amiri saroyi va shaharning markaziy qismidagi ayrim madaniy meros obyektlarini qayta tiklash, Kogon-Buxoro turistik avtobus yo&lsquo;nalishini tashkil etish, maxsus avtotransport xarid qilish rejalashtirilgan. jihozlash va uni saqlash, obodonlashtirish va tanlangan loyiha hududlarida ko&#39;chalarni yoritishni yaxshilash uchun garajlar qurish.</p>

<p><br />
Toshkent viloyatining Yangiyo&lsquo;l shahrida suv ta&rsquo;minoti va kanalizatsiya tizimini yaxshilash, maxsus jihozlar xarid qilish va ixtisoslashtirilgan garajlar qurish, shuningdek, bir qator mahallalarni obodonlashtirish va tanlangan loyiha hududlarida ko&lsquo;chalarni yoritishni yaxshilash ko&lsquo;zda tutilgan. .</p>

<p><br />
Loyihani moliyalashtirish manbalari Jahon bankining davlat kafolati boʻyicha 100 million dollar miqdoridagi qarz mablagʻlari hamda soliq va bojxona imtiyozlari koʻrinishidagi 24,12 million dollar ekvivalentidagi Oʻzbekiston Respublikasi hissasi hisoblanadi.</p>',
                'id' => 6,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'abouts',
                'updated_at' => '2022-03-09 17:30:55',
            ),
            6 => 
            array (
                'created_at' => '2022-02-28 12:49:44',
                'field_id' => 1,
                'field_name' => 'name',
                'field_value' => 'Useful information',
                'id' => 7,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'article_categories',
                'updated_at' => '2022-02-28 12:49:44',
            ),
            7 => 
            array (
                'created_at' => '2022-02-28 12:49:44',
                'field_id' => 1,
                'field_name' => 'name',
                'field_value' => 'Полезная информация',
                'id' => 8,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'article_categories',
                'updated_at' => '2022-02-28 12:49:44',
            ),
            8 => 
            array (
                'created_at' => '2022-02-28 12:49:44',
                'field_id' => 1,
                'field_name' => 'name',
                'field_value' => 'Foydali ma\'lumotlar',
                'id' => 9,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'article_categories',
                'updated_at' => '2022-02-28 12:49:44',
            ),
            9 => 
            array (
                'created_at' => '2022-02-28 13:19:26',
                'field_id' => 2,
                'field_name' => 'name',
                'field_value' => 'Press release',
                'id' => 10,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'article_categories',
                'updated_at' => '2022-02-28 13:19:26',
            ),
            10 => 
            array (
                'created_at' => '2022-02-28 13:19:26',
                'field_id' => 2,
                'field_name' => 'name',
                'field_value' => 'Пресс-релиз',
                'id' => 11,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'article_categories',
                'updated_at' => '2022-02-28 13:19:26',
            ),
            11 => 
            array (
                'created_at' => '2022-02-28 13:19:26',
                'field_id' => 2,
                'field_name' => 'name',
                'field_value' => 'Matbuot xabari',
                'id' => 12,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'article_categories',
                'updated_at' => '2022-02-28 13:19:26',
            ),
            12 => 
            array (
                'created_at' => '2022-02-28 13:28:33',
                'field_id' => 3,
                'field_name' => 'name',
                'field_value' => 'Speeches and official addresses of the head',
                'id' => 13,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'article_categories',
                'updated_at' => '2022-02-28 13:28:33',
            ),
            13 => 
            array (
                'created_at' => '2022-02-28 13:28:33',
                'field_id' => 3,
                'field_name' => 'name',
                'field_value' => 'Выступления и официальные обращения руководителя',
                'id' => 14,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'article_categories',
                'updated_at' => '2022-02-28 13:28:33',
            ),
            14 => 
            array (
                'created_at' => '2022-02-28 13:28:33',
                'field_id' => 3,
                'field_name' => 'name',
                'field_value' => 'Rasmiy murojaatlari',
                'id' => 15,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'article_categories',
                'updated_at' => '2022-02-28 13:33:32',
            ),
            15 => 
            array (
                'created_at' => '2022-02-28 13:52:18',
                'field_id' => 1,
                'field_name' => 'name',
                'field_value' => 'State programs',
                'id' => 16,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'regulation_categories',
                'updated_at' => '2022-02-28 13:52:18',
            ),
            16 => 
            array (
                'created_at' => '2022-02-28 13:52:18',
                'field_id' => 1,
                'field_name' => 'name',
                'field_value' => 'Государственные программы',
                'id' => 17,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'regulation_categories',
                'updated_at' => '2022-02-28 13:55:20',
            ),
            17 => 
            array (
                'created_at' => '2022-02-28 13:52:18',
                'field_id' => 1,
                'field_name' => 'name',
                'field_value' => 'Davlat dasturlari',
                'id' => 18,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'regulation_categories',
                'updated_at' => '2022-02-28 13:52:18',
            ),
            18 => 
            array (
                'created_at' => '2022-03-02 10:43:30',
                'field_id' => 2,
                'field_name' => 'name',
                'field_value' => 'Press release',
                'id' => 19,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'regulation_categories',
                'updated_at' => '2022-03-02 10:43:30',
            ),
            19 => 
            array (
                'created_at' => '2022-03-02 10:43:30',
                'field_id' => 2,
                'field_name' => 'name',
                'field_value' => 'Пресс-релиз',
                'id' => 20,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'regulation_categories',
                'updated_at' => '2022-03-02 10:43:30',
            ),
            20 => 
            array (
                'created_at' => '2022-03-02 10:43:30',
                'field_id' => 2,
                'field_name' => 'name',
                'field_value' => 'Matbuot xabari',
                'id' => 21,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'regulation_categories',
                'updated_at' => '2022-03-02 10:43:30',
            ),
            21 => 
            array (
                'created_at' => '2022-03-02 11:21:34',
                'field_id' => 1,
                'field_name' => 'title',
                'field_value' => 'Title of Document',
                'id' => 22,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'regulations',
                'updated_at' => '2022-03-02 12:09:15',
            ),
            22 => 
            array (
                'created_at' => '2022-03-02 11:21:34',
                'field_id' => 1,
                'field_name' => 'title',
                'field_value' => 'Название документ',
                'id' => 23,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'regulations',
                'updated_at' => '2022-03-02 12:09:15',
            ),
            23 => 
            array (
                'created_at' => '2022-03-02 11:21:34',
                'field_id' => 1,
                'field_name' => 'title',
                'field_value' => 'Hujjat nomi',
                'id' => 24,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'regulations',
                'updated_at' => '2022-03-02 11:21:34',
            ),
            24 => 
            array (
                'created_at' => '2022-03-02 12:07:07',
                'field_id' => NULL,
                'field_name' => 'title',
                'field_value' => 'Title of Document',
                'id' => 25,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'regulations',
                'updated_at' => '2022-03-02 12:07:07',
            ),
            25 => 
            array (
                'created_at' => '2022-03-02 12:07:07',
                'field_id' => NULL,
                'field_name' => 'title',
                'field_value' => 'Название документации',
                'id' => 26,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'regulations',
                'updated_at' => '2022-03-02 12:07:07',
            ),
            26 => 
            array (
                'created_at' => '2022-03-02 12:07:07',
                'field_id' => NULL,
                'field_name' => 'title',
                'field_value' => 'Hujjat nomi',
                'id' => 27,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'regulations',
                'updated_at' => '2022-03-02 12:07:07',
            ),
            27 => 
            array (
                'created_at' => '2022-03-02 12:11:30',
                'field_id' => 2,
                'field_name' => 'title',
                'field_value' => 'Regulations',
                'id' => 28,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'regulations',
                'updated_at' => '2022-03-02 12:11:30',
            ),
            28 => 
            array (
                'created_at' => '2022-03-02 12:11:30',
                'field_id' => 2,
                'field_name' => 'title',
                'field_value' => 'Нормативные акты',
                'id' => 29,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'regulations',
                'updated_at' => '2022-03-02 12:11:30',
            ),
            29 => 
            array (
                'created_at' => '2022-03-02 12:11:30',
                'field_id' => 2,
                'field_name' => 'title',
                'field_value' => 'Qoidalar',
                'id' => 30,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'regulations',
                'updated_at' => '2022-03-02 12:11:30',
            ),
            30 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 2,
                'field_name' => 'title',
                'field_value' => 'Project "Comprehensive development of medium-sized cities" with the participation of loans from the World Bank 2',
                'id' => 31,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:39',
            ),
            31 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 2,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">In the context of the growing population of Uzbekistan and taking into account the trend of increasing its migration from rural areas to cities, where most of the jobs are created, urbanization plays an increasingly important role in the economic development of the Republic. According to the State Statistics Committee, in the period 1990-2017, the highest population growth rates were observed in medium-sized cities and amounted to 54%.</div>

<p><br />
In this regard, in the integrated development of urbanization, great importance is attached to the uniform and widespread expansion of cities, including medium-sized cities as important economic centers (hubs). However, rapid unmanaged growth, resulting in inefficiency and growing pent-up demand for infrastructure and utilities, has a negative impact on the quality of life and the overall investment attractiveness of such cities.<br />
Preliminarily, with the support of the World Bank, a comprehensive urban diagnostics was carried out in selected pilot cities - Chartak, Kagan and Yangiyul, as a result of which factors were identified that negatively affect the quality of the urban environment: the lack of a system for the integrated and efficient provision of services, the need to replace and modernize the morally obsolete infrastructure, low levels of energy efficiency, lack of an acceptable urban environment, as well as the need to create conditions for attracting investment, creating jobs and increasing competitiveness.</p>',
                'id' => 32,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:39',
            ),
            32 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 2,
                'field_name' => 'title',
                'field_value' => '«Комплексное развитие средних городов» 2',
                'id' => 33,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:39',
            ),
            33 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 2,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">В условиях роста населения Узбекистана и с учетом тенденции увеличения его миграции из сельской местности в города, где создаётся большая часть рабочих мест, урбанизация играет всё более важную роль в экономическом развитии Республики. По данным Государственного комитета по статистике, в период 1990-2017 годов самые высокие темпы роста населения наблюдались именно в средних городах и составили 54%.</div>

<p>В связи с этим, огромное значение при комплексном развитии урбанизации придаётся равномерному и повсеместному расширению городов, в том числе средних городов как важных экономических центров (хабов). Однако быстрый неуправляемый рост, в результате приводящий к неэффективности и растущему неудовлетворенному спросу на инфраструктуру и коммунальные услуги, негативно сказывается на качестве жизни и общей инвестиционной привлекательности таких городов.<br />
Предварительно, при поддержке Всемирного банка, была проведена комплексная городская диагностика выбранных пилотных городов &ndash; Чартак, Каган и Янгиюль, в результате которой были выявлены факторы, негативно влияющие на качество городской среды: отсутствие системы комплексного и эффективного оказания услуг, необходимость замены и модернизации морально устаревающей инфраструктуры, низкий уровень энергоэффективности, отсутствие приемлемой городской среды, а также необходимость создания условий для привлечения инвестиций, создания рабочих мест и повышения конкурентоспособности.&nbsp;</p>',
                'id' => 34,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:39',
            ),
            34 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 2,
                'field_name' => 'title',
                'field_value' => 'Jahon banki kreditlari ishtirokida “O‘rta shaharlarni kompleks rivojlantirish” loyihasi 2',
                'id' => 35,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:39',
            ),
            35 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 2,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">Oʻzbekiston aholisining koʻpayishi sharoitida va uning qishloq joylardan koʻp ish oʻrinlari yaratilgan shaharlarga migratsiyasining kuchayishi tendentsiyasini hisobga olgan holda, urbanizatsiya respublikaning iqtisodiy rivojlanishida tobora muhim rol oʻynamoqda. Davlat statistika qoʻmitasi maʼlumotlariga koʻra, 1990-2017-yillarda aholining eng yuqori oʻsish surʼatlari oʻrta shaharlarda kuzatilgan va 54 foizni tashkil etgan.</div>

<p><br />
Shu munosabat bilan urbanizatsiyani kompleks rivojlantirishda shaharlarni, shu jumladan, oʻrta shaharlarni muhim iqtisodiy markazlar (uzatmalar) sifatida bir xilda va keng koʻlamda kengaytirishga katta ahamiyat beriladi. Biroq, infratuzilma va kommunal xizmatlarning samarasizligi va o&#39;sib borayotgan talabni keltirib chiqaradigan boshqarilmaydigan tez o&#39;sish bunday shaharlarning hayot sifati va umumiy investitsion jozibadorligiga salbiy ta&#39;sir ko&#39;rsatmoqda.<br />
Dastlab Jahon banki ko&lsquo;magida tanlangan tajriba shaharlar &ndash; Chortoq, Kogon va Yangiyo&lsquo;l shaharlarida kompleks shahar diagnostikasi o&lsquo;tkazildi, natijada shahar atrof-muhit sifatiga salbiy ta&rsquo;sir ko&lsquo;rsatuvchi omillar aniqlandi: xizmatlarni kompleks va samarali koʻrsatish tizimi, maʼnaviy eskirgan infratuzilmani almashtirish va modernizatsiya qilish zarurati, energiya samaradorligi pastligi, maqbul shahar muhitining yoʻqligi, shuningdek, investitsiyalarni jalb qilish, ish oʻrinlari yaratish va raqobatbardoshligini oshirish.</p>',
                'id' => 36,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:39',
            ),
            36 => 
            array (
                'created_at' => '2022-03-02 12:11:30',
                'field_id' => 1,
                'field_name' => 'title',
                'field_value' => 'Regulations',
                'id' => 37,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'regulations',
                'updated_at' => '2022-03-02 12:11:30',
            ),
            37 => 
            array (
                'created_at' => '2022-03-02 12:11:30',
                'field_id' => 1,
                'field_name' => 'title',
                'field_value' => 'Нормативные акты',
                'id' => 38,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'regulations',
                'updated_at' => '2022-03-02 12:11:30',
            ),
            38 => 
            array (
                'created_at' => '2022-03-02 12:11:30',
                'field_id' => 1,
                'field_name' => 'title',
                'field_value' => 'Qoidalar',
                'id' => 39,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'regulations',
                'updated_at' => '2022-03-02 12:11:30',
            ),
            39 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 1,
                'field_name' => 'title',
                'field_value' => 'Project "Comprehensive development of medium-sized cities" with the participation of loans from the World Bank 1',
                'id' => 40,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:24',
            ),
            40 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 1,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">In the context of the growing population of Uzbekistan and taking into account the trend of increasing its migration from rural areas to cities, where most of the jobs are created, urbanization plays an increasingly important role in the economic development of the Republic. According to the State Statistics Committee, in the period 1990-2017, the highest population growth rates were observed in medium-sized cities and amounted to 54%.</div>

<p><br />
In this regard, in the integrated development of urbanization, great importance is attached to the uniform and widespread expansion of cities, including medium-sized cities as important economic centers (hubs). However, rapid unmanaged growth, resulting in inefficiency and growing pent-up demand for infrastructure and utilities, has a negative impact on the quality of life and the overall investment attractiveness of such cities.<br />
Preliminarily, with the support of the World Bank, a comprehensive urban diagnostics was carried out in selected pilot cities - Chartak, Kagan and Yangiyul, as a result of which factors were identified that negatively affect the quality of the urban environment: the lack of a system for the integrated and efficient provision of services, the need to replace and modernize the morally obsolete infrastructure, low levels of energy efficiency, lack of an acceptable urban environment, as well as the need to create conditions for attracting investment, creating jobs and increasing competitiveness.</p>',
                'id' => 41,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'articles',
                'updated_at' => '2022-03-10 14:57:19',
            ),
            41 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 1,
                'field_name' => 'title',
                'field_value' => '«Комплексное развитие средних городов» 1',
                'id' => 42,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'articles',
                'updated_at' => '2022-03-03 12:45:25',
            ),
            42 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 1,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">В условиях роста населения Узбекистана и с учетом тенденции увеличения его миграции из сельской местности в города, где создаётся большая часть рабочих мест, урбанизация играет всё более важную роль в экономическом развитии Республики. По данным Государственного комитета по статистике, в период 1990-2017 годов самые высокие темпы роста населения наблюдались именно в средних городах и составили 54%.</div>

<p>В связи с этим, огромное значение при комплексном развитии урбанизации придаётся равномерному и повсеместному расширению городов, в том числе средних городов как важных экономических центров (хабов). Однако быстрый неуправляемый рост, в результате приводящий к неэффективности и растущему неудовлетворенному спросу на инфраструктуру и коммунальные услуги, негативно сказывается на качестве жизни и общей инвестиционной привлекательности таких городов.<br />
Предварительно, при поддержке Всемирного банка, была проведена комплексная городская диагностика выбранных пилотных городов &ndash; Чартак, Каган и Янгиюль, в результате которой были выявлены факторы, негативно влияющие на качество городской среды: отсутствие системы комплексного и эффективного оказания услуг, необходимость замены и модернизации морально устаревающей инфраструктуры, низкий уровень энергоэффективности, отсутствие приемлемой городской среды, а также необходимость создания условий для привлечения инвестиций, создания рабочих мест и повышения конкурентоспособности.&nbsp;</p>',
                'id' => 43,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'articles',
                'updated_at' => '2022-03-10 14:57:19',
            ),
            43 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 1,
                'field_name' => 'title',
                'field_value' => 'Jahon banki kreditlari ishtirokida “O‘rta shaharlarni kompleks rivojlantirish” loyihasi 1',
                'id' => 44,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:24',
            ),
            44 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 1,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">Oʻzbekiston aholisining koʻpayishi sharoitida va uning qishloq joylardan koʻp ish oʻrinlari yaratilgan shaharlarga migratsiyasining kuchayishi tendentsiyasini hisobga olgan holda, urbanizatsiya respublikaning iqtisodiy rivojlanishida tobora muhim rol oʻynamoqda. Davlat statistika qoʻmitasi maʼlumotlariga koʻra, 1990-2017-yillarda aholining eng yuqori oʻsish surʼatlari oʻrta shaharlarda kuzatilgan va 54 foizni tashkil etgan.</div>

<p><br />
Shu munosabat bilan urbanizatsiyani kompleks rivojlantirishda shaharlarni, shu jumladan, oʻrta shaharlarni muhim iqtisodiy markazlar (uzatmalar) sifatida bir xilda va keng koʻlamda kengaytirishga katta ahamiyat beriladi. Biroq, infratuzilma va kommunal xizmatlarning samarasizligi va o&#39;sib borayotgan talabni keltirib chiqaradigan boshqarilmaydigan tez o&#39;sish bunday shaharlarning hayot sifati va umumiy investitsion jozibadorligiga salbiy ta&#39;sir ko&#39;rsatmoqda.<br />
Dastlab Jahon banki ko&lsquo;magida tanlangan tajriba shaharlar &ndash; Chortoq, Kogon va Yangiyo&lsquo;l shaharlarida kompleks shahar diagnostikasi o&lsquo;tkazildi, natijada shahar atrof-muhit sifatiga salbiy ta&rsquo;sir ko&lsquo;rsatuvchi omillar aniqlandi: xizmatlarni kompleks va samarali koʻrsatish tizimi, maʼnaviy eskirgan infratuzilmani almashtirish va modernizatsiya qilish zarurati, energiya samaradorligi pastligi, maqbul shahar muhitining yoʻqligi, shuningdek, investitsiyalarni jalb qilish, ish oʻrinlari yaratish va raqobatbardoshligini oshirish.</p>',
                'id' => 45,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'articles',
                'updated_at' => '2022-03-10 14:57:19',
            ),
            45 => 
            array (
                'created_at' => '2022-03-04 06:51:07',
                'field_id' => 1,
                'field_name' => 'question',
                'field_value' => 'Question and answer',
                'id' => 46,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'question_answers',
                'updated_at' => '2022-03-04 06:59:04',
            ),
            46 => 
            array (
                'created_at' => '2022-03-04 06:51:07',
                'field_id' => 1,
                'field_name' => 'answer',
                'field_value' => '<p>Lorem ipsum is fish text often used in print and web design. Lorem Ipsum has been the standard &quot;fish&quot; for Latin texts since the early 16th century. At the time, an unnamed printer created a large collection of font sizes and shapes, using Lorem Ipsum to print samples. Lorem Ipsum not only successfully survived five centuries without noticeable changes, but also stepped into electronic design. It was popularized in modern times by the publication of Letraset sheets with Lorem Ipsum patterns in the 60s and, more recently, by an electronic layout program like Aldus PageMaker, which uses Lorem Ipsum in its templates.</p>',
                'id' => 47,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'question_answers',
                'updated_at' => '2022-03-04 06:51:07',
            ),
            47 => 
            array (
                'created_at' => '2022-03-04 06:51:07',
                'field_id' => 1,
                'field_name' => 'question',
                'field_value' => 'Часто задаваемые вопросы',
                'id' => 48,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'question_answers',
                'updated_at' => '2022-03-04 06:51:07',
            ),
            48 => 
            array (
                'created_at' => '2022-03-04 06:51:07',
                'field_id' => 1,
                'field_name' => 'answer',
                'field_value' => '<p>Лорем ипсум &mdash; это текст-&laquo;рыба&raquo;, часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной &laquo;рыбой&raquo; для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Лорем ипсум.</p>',
                'id' => 49,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'question_answers',
                'updated_at' => '2022-03-04 06:51:07',
            ),
            49 => 
            array (
                'created_at' => '2022-03-04 06:51:07',
                'field_id' => 1,
                'field_name' => 'question',
                'field_value' => 'Ko\'p so\'raladigan savollar',
                'id' => 50,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'question_answers',
                'updated_at' => '2022-03-04 06:51:07',
            ),
            50 => 
            array (
                'created_at' => '2022-03-04 06:51:07',
                'field_id' => 1,
                'field_name' => 'answer',
                'field_value' => '<p>Lorem ipsum bosma va veb-dizaynda tez-tez ishlatiladigan baliq matnidir. Lorem Ipsum 16-asr boshidan beri lotin matnlari uchun standart &quot;baliq&quot; bo&#39;lib kelgan. O&#39;sha paytda nomi noma&#39;lum printer namunalarni chop etish uchun Lorem Ipsum yordamida shrift o&#39;lchamlari va shakllarining katta to&#39;plamini yaratdi. Lorem Ipsum nafaqat besh asr davomida sezilarli o&#39;zgarishlarsiz muvaffaqiyatli omon qoldi, balki elektron dizaynga ham qadam qo&#39;ydi. U zamonaviy davrda 60-yillarda Lorem Ipsum naqshlari bilan Letraset varaqlarini nashr qilish va yaqinda o&#39;z shablonlarida Lorem Ipsumdan foydalanadigan Aldus PageMaker kabi maket dasturlari orqali ommalashgan.</p>',
                'id' => 51,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'question_answers',
                'updated_at' => '2022-03-04 06:51:07',
            ),
            51 => 
            array (
                'created_at' => '2022-03-05 12:26:45',
                'field_id' => 1,
                'field_name' => 'name',
                'field_value' => 'Kagan',
                'id' => 52,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 12:26:45',
            ),
            52 => 
            array (
                'created_at' => '2022-03-05 12:26:45',
                'field_id' => 1,
                'field_name' => 'short_description',
                'field_value' => 'Kagan is a satellite city of ancient Bukhara, where my acquaintance with provincial Uzbekistan began',
                'id' => 53,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 12:26:45',
            ),
            53 => 
            array (
                'created_at' => '2022-03-05 12:26:45',
                'field_id' => 1,
                'field_name' => 'region',
                'field_value' => 'Bukhara region',
                'id' => 54,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 12:26:45',
            ),
            54 => 
            array (
                'created_at' => '2022-03-05 12:26:45',
                'field_id' => 1,
                'field_name' => 'name',
                'field_value' => 'Каган',
                'id' => 55,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 12:26:45',
            ),
            55 => 
            array (
                'created_at' => '2022-03-05 12:26:45',
                'field_id' => 1,
                'field_name' => 'short_description',
                'field_value' => 'Каган - город-спутник древней Бухары, где началось моё знакомство с провинциальным Узбекистаном',
                'id' => 56,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 12:26:45',
            ),
            56 => 
            array (
                'created_at' => '2022-03-05 12:26:45',
                'field_id' => 1,
                'field_name' => 'region',
                'field_value' => 'Бухарская область',
                'id' => 57,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 12:26:45',
            ),
            57 => 
            array (
                'created_at' => '2022-03-05 12:26:45',
                'field_id' => 1,
                'field_name' => 'name',
                'field_value' => 'Kogon',
                'id' => 58,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 12:26:45',
            ),
            58 => 
            array (
                'created_at' => '2022-03-05 12:26:45',
                'field_id' => 1,
                'field_name' => 'short_description',
                'field_value' => 'Kogon — qadimiy Buxoroning yoʻldosh shahri boʻlib, Oʻzbekiston viloyatlari bilan tanishuvim shu yerda boshlangan',
                'id' => 59,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 12:26:45',
            ),
            59 => 
            array (
                'created_at' => '2022-03-05 12:26:45',
                'field_id' => 1,
                'field_name' => 'region',
                'field_value' => 'Buxoro viloyati',
                'id' => 60,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 12:26:45',
            ),
            60 => 
            array (
                'created_at' => '2022-03-05 14:20:39',
                'field_id' => 2,
                'field_name' => 'name',
                'field_value' => 'Chartak',
                'id' => 61,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 14:20:39',
            ),
            61 => 
            array (
                'created_at' => '2022-03-05 14:20:39',
                'field_id' => 2,
                'field_name' => 'short_description',
                'field_value' => 'Reconstruction of Chartak Plaza tourist complex through reconstruction of old farmers\' market in Chartak',
                'id' => 62,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 14:20:39',
            ),
            62 => 
            array (
                'created_at' => '2022-03-05 14:20:39',
                'field_id' => 2,
                'field_name' => 'region',
                'field_value' => 'Namangan region',
                'id' => 63,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 14:20:39',
            ),
            63 => 
            array (
                'created_at' => '2022-03-05 14:20:39',
                'field_id' => 2,
                'field_name' => 'name',
                'field_value' => 'Чартак',
                'id' => 64,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 14:20:39',
            ),
            64 => 
            array (
                'created_at' => '2022-03-05 14:20:39',
                'field_id' => 2,
                'field_name' => 'short_description',
                'field_value' => 'Реконструкция туристического комплекса «Чартак Плаза» путем реконструкции старого фермерского рынка в Чартаке',
                'id' => 65,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 14:20:39',
            ),
            65 => 
            array (
                'created_at' => '2022-03-05 14:20:39',
                'field_id' => 2,
                'field_name' => 'region',
                'field_value' => 'Наманганская область',
                'id' => 66,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 14:20:39',
            ),
            66 => 
            array (
                'created_at' => '2022-03-05 14:20:39',
                'field_id' => 2,
                'field_name' => 'name',
                'field_value' => 'Chortoq',
                'id' => 67,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 14:20:39',
            ),
            67 => 
            array (
                'created_at' => '2022-03-05 14:20:39',
                'field_id' => 2,
                'field_name' => 'short_description',
                'field_value' => 'Chortoq shahridagi eski dexqon bozorini rekonstruksiya qilish orqali “Chortoq plaza” turistlarga mo\'ljallangan savdo majmuasi tashkil qilish',
                'id' => 68,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 14:20:39',
            ),
            68 => 
            array (
                'created_at' => '2022-03-05 14:20:39',
                'field_id' => 2,
                'field_name' => 'region',
                'field_value' => 'Namangan viloyati',
                'id' => 69,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'projects',
                'updated_at' => '2022-03-05 14:20:39',
            ),
            69 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 3,
                'field_name' => 'title',
                'field_value' => 'Project "Comprehensive development of medium-sized cities" with the participation of loans from the World Bank 3',
                'id' => 70,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:54',
            ),
            70 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 3,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">In the context of the growing population of Uzbekistan and taking into account the trend of increasing its migration from rural areas to cities, where most of the jobs are created, urbanization plays an increasingly important role in the economic development of the Republic. According to the State Statistics Committee, in the period 1990-2017, the highest population growth rates were observed in medium-sized cities and amounted to 54%.</div>

<p><br />
In this regard, in the integrated development of urbanization, great importance is attached to the uniform and widespread expansion of cities, including medium-sized cities as important economic centers (hubs). However, rapid unmanaged growth, resulting in inefficiency and growing pent-up demand for infrastructure and utilities, has a negative impact on the quality of life and the overall investment attractiveness of such cities.<br />
Preliminarily, with the support of the World Bank, a comprehensive urban diagnostics was carried out in selected pilot cities - Chartak, Kagan and Yangiyul, as a result of which factors were identified that negatively affect the quality of the urban environment: the lack of a system for the integrated and efficient provision of services, the need to replace and modernize the morally obsolete infrastructure, low levels of energy efficiency, lack of an acceptable urban environment, as well as the need to create conditions for attracting investment, creating jobs and increasing competitiveness.</p>',
                'id' => 71,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:54',
            ),
            71 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 3,
                'field_name' => 'title',
                'field_value' => '«Комплексное развитие средних городов» 3',
                'id' => 72,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:54',
            ),
            72 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 3,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">В условиях роста населения Узбекистана и с учетом тенденции увеличения его миграции из сельской местности в города, где создаётся большая часть рабочих мест, урбанизация играет всё более важную роль в экономическом развитии Республики. По данным Государственного комитета по статистике, в период 1990-2017 годов самые высокие темпы роста населения наблюдались именно в средних городах и составили 54%.</div>

<p>В связи с этим, огромное значение при комплексном развитии урбанизации придаётся равномерному и повсеместному расширению городов, в том числе средних городов как важных экономических центров (хабов). Однако быстрый неуправляемый рост, в результате приводящий к неэффективности и растущему неудовлетворенному спросу на инфраструктуру и коммунальные услуги, негативно сказывается на качестве жизни и общей инвестиционной привлекательности таких городов.<br />
Предварительно, при поддержке Всемирного банка, была проведена комплексная городская диагностика выбранных пилотных городов &ndash; Чартак, Каган и Янгиюль, в результате которой были выявлены факторы, негативно влияющие на качество городской среды: отсутствие системы комплексного и эффективного оказания услуг, необходимость замены и модернизации морально устаревающей инфраструктуры, низкий уровень энергоэффективности, отсутствие приемлемой городской среды, а также необходимость создания условий для привлечения инвестиций, создания рабочих мест и повышения конкурентоспособности.&nbsp;</p>',
                'id' => 73,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:54',
            ),
            73 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 3,
                'field_name' => 'title',
                'field_value' => 'Jahon banki kreditlari ishtirokida “O‘rta shaharlarni kompleks rivojlantirish” loyihasi 3',
                'id' => 74,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:54',
            ),
            74 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 3,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">Oʻzbekiston aholisining koʻpayishi sharoitida va uning qishloq joylardan koʻp ish oʻrinlari yaratilgan shaharlarga migratsiyasining kuchayishi tendentsiyasini hisobga olgan holda, urbanizatsiya respublikaning iqtisodiy rivojlanishida tobora muhim rol oʻynamoqda. Davlat statistika qoʻmitasi maʼlumotlariga koʻra, 1990-2017-yillarda aholining eng yuqori oʻsish surʼatlari oʻrta shaharlarda kuzatilgan va 54 foizni tashkil etgan.</div>

<p><br />
Shu munosabat bilan urbanizatsiyani kompleks rivojlantirishda shaharlarni, shu jumladan, oʻrta shaharlarni muhim iqtisodiy markazlar (uzatmalar) sifatida bir xilda va keng koʻlamda kengaytirishga katta ahamiyat beriladi. Biroq, infratuzilma va kommunal xizmatlarning samarasizligi va o&#39;sib borayotgan talabni keltirib chiqaradigan boshqarilmaydigan tez o&#39;sish bunday shaharlarning hayot sifati va umumiy investitsion jozibadorligiga salbiy ta&#39;sir ko&#39;rsatmoqda.<br />
Dastlab Jahon banki ko&lsquo;magida tanlangan tajriba shaharlar &ndash; Chortoq, Kogon va Yangiyo&lsquo;l shaharlarida kompleks shahar diagnostikasi o&lsquo;tkazildi, natijada shahar atrof-muhit sifatiga salbiy ta&rsquo;sir ko&lsquo;rsatuvchi omillar aniqlandi: xizmatlarni kompleks va samarali koʻrsatish tizimi, maʼnaviy eskirgan infratuzilmani almashtirish va modernizatsiya qilish zarurati, energiya samaradorligi pastligi, maqbul shahar muhitining yoʻqligi, shuningdek, investitsiyalarni jalb qilish, ish oʻrinlari yaratish va raqobatbardoshligini oshirish.</p>',
                'id' => 75,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:54',
            ),
            75 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 4,
                'field_name' => 'title',
                'field_value' => 'Project "Comprehensive development of medium-sized cities" with the participation of loans from the World Bank 4',
                'id' => 76,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:56:12',
            ),
            76 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 4,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">In the context of the growing population of Uzbekistan and taking into account the trend of increasing its migration from rural areas to cities, where most of the jobs are created, urbanization plays an increasingly important role in the economic development of the Republic. According to the State Statistics Committee, in the period 1990-2017, the highest population growth rates were observed in medium-sized cities and amounted to 54%.</div>

<p><br />
In this regard, in the integrated development of urbanization, great importance is attached to the uniform and widespread expansion of cities, including medium-sized cities as important economic centers (hubs). However, rapid unmanaged growth, resulting in inefficiency and growing pent-up demand for infrastructure and utilities, has a negative impact on the quality of life and the overall investment attractiveness of such cities.<br />
Preliminarily, with the support of the World Bank, a comprehensive urban diagnostics was carried out in selected pilot cities - Chartak, Kagan and Yangiyul, as a result of which factors were identified that negatively affect the quality of the urban environment: the lack of a system for the integrated and efficient provision of services, the need to replace and modernize the morally obsolete infrastructure, low levels of energy efficiency, lack of an acceptable urban environment, as well as the need to create conditions for attracting investment, creating jobs and increasing competitiveness.</p>',
                'id' => 77,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:56:12',
            ),
            77 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 4,
                'field_name' => 'title',
                'field_value' => '«Комплексное развитие средних городов» 4',
                'id' => 78,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:56:12',
            ),
            78 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 4,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">В условиях роста населения Узбекистана и с учетом тенденции увеличения его миграции из сельской местности в города, где создаётся большая часть рабочих мест, урбанизация играет всё более важную роль в экономическом развитии Республики. По данным Государственного комитета по статистике, в период 1990-2017 годов самые высокие темпы роста населения наблюдались именно в средних городах и составили 54%.</div>

<p>В связи с этим, огромное значение при комплексном развитии урбанизации придаётся равномерному и повсеместному расширению городов, в том числе средних городов как важных экономических центров (хабов). Однако быстрый неуправляемый рост, в результате приводящий к неэффективности и растущему неудовлетворенному спросу на инфраструктуру и коммунальные услуги, негативно сказывается на качестве жизни и общей инвестиционной привлекательности таких городов.<br />
Предварительно, при поддержке Всемирного банка, была проведена комплексная городская диагностика выбранных пилотных городов &ndash; Чартак, Каган и Янгиюль, в результате которой были выявлены факторы, негативно влияющие на качество городской среды: отсутствие системы комплексного и эффективного оказания услуг, необходимость замены и модернизации морально устаревающей инфраструктуры, низкий уровень энергоэффективности, отсутствие приемлемой городской среды, а также необходимость создания условий для привлечения инвестиций, создания рабочих мест и повышения конкурентоспособности.&nbsp;</p>',
                'id' => 79,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:56:12',
            ),
            79 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 4,
                'field_name' => 'title',
                'field_value' => 'Jahon banki kreditlari ishtirokida “O‘rta shaharlarni kompleks rivojlantirish” loyihasi 4',
                'id' => 80,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:56:12',
            ),
            80 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 4,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">Oʻzbekiston aholisining koʻpayishi sharoitida va uning qishloq joylardan koʻp ish oʻrinlari yaratilgan shaharlarga migratsiyasining kuchayishi tendentsiyasini hisobga olgan holda, urbanizatsiya respublikaning iqtisodiy rivojlanishida tobora muhim rol oʻynamoqda. Davlat statistika qoʻmitasi maʼlumotlariga koʻra, 1990-2017-yillarda aholining eng yuqori oʻsish surʼatlari oʻrta shaharlarda kuzatilgan va 54 foizni tashkil etgan.</div>

<p><br />
Shu munosabat bilan urbanizatsiyani kompleks rivojlantirishda shaharlarni, shu jumladan, oʻrta shaharlarni muhim iqtisodiy markazlar (uzatmalar) sifatida bir xilda va keng koʻlamda kengaytirishga katta ahamiyat beriladi. Biroq, infratuzilma va kommunal xizmatlarning samarasizligi va o&#39;sib borayotgan talabni keltirib chiqaradigan boshqarilmaydigan tez o&#39;sish bunday shaharlarning hayot sifati va umumiy investitsion jozibadorligiga salbiy ta&#39;sir ko&#39;rsatmoqda.<br />
Dastlab Jahon banki ko&lsquo;magida tanlangan tajriba shaharlar &ndash; Chortoq, Kogon va Yangiyo&lsquo;l shaharlarida kompleks shahar diagnostikasi o&lsquo;tkazildi, natijada shahar atrof-muhit sifatiga salbiy ta&rsquo;sir ko&lsquo;rsatuvchi omillar aniqlandi: xizmatlarni kompleks va samarali koʻrsatish tizimi, maʼnaviy eskirgan infratuzilmani almashtirish va modernizatsiya qilish zarurati, energiya samaradorligi pastligi, maqbul shahar muhitining yoʻqligi, shuningdek, investitsiyalarni jalb qilish, ish oʻrinlari yaratish va raqobatbardoshligini oshirish.</p>',
                'id' => 81,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:56:12',
            ),
            81 => 
            array (
                'created_at' => '2022-03-04 06:51:07',
                'field_id' => 2,
                'field_name' => 'question',
                'field_value' => 'Question and answer 2',
                'id' => 82,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'question_answers',
                'updated_at' => '2022-03-07 00:01:36',
            ),
            82 => 
            array (
                'created_at' => '2022-03-04 06:51:07',
                'field_id' => 2,
                'field_name' => 'answer',
                'field_value' => '<p>Lorem ipsum is fish text often used in print and web design. Lorem Ipsum has been the standard &quot;fish&quot; for Latin texts since the early 16th century. At the time, an unnamed printer created a large collection of font sizes and shapes, using Lorem Ipsum to print samples. Lorem Ipsum not only successfully survived five centuries without noticeable changes, but also stepped into electronic design. It was popularized in modern times by the publication of Letraset sheets with Lorem Ipsum patterns in the 60s and, more recently, by an electronic layout program like Aldus PageMaker, which uses Lorem Ipsum in its templates. 2</p>',
                'id' => 83,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'question_answers',
                'updated_at' => '2022-03-07 00:01:36',
            ),
            83 => 
            array (
                'created_at' => '2022-03-04 06:51:07',
                'field_id' => 2,
                'field_name' => 'question',
                'field_value' => 'Часто задаваемые вопросы 2',
                'id' => 84,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'question_answers',
                'updated_at' => '2022-03-07 00:01:36',
            ),
            84 => 
            array (
                'created_at' => '2022-03-04 06:51:07',
                'field_id' => 2,
                'field_name' => 'answer',
                'field_value' => '<p>Лорем ипсум &mdash; это текст-&laquo;рыба&raquo;, часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной &laquo;рыбой&raquo; для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Лорем ипсум. 2</p>',
                'id' => 85,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'question_answers',
                'updated_at' => '2022-03-07 00:01:36',
            ),
            85 => 
            array (
                'created_at' => '2022-03-04 06:51:07',
                'field_id' => 2,
                'field_name' => 'question',
                'field_value' => 'Ko\'p so\'raladigan savollar 2',
                'id' => 86,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'question_answers',
                'updated_at' => '2022-03-07 00:01:36',
            ),
            86 => 
            array (
                'created_at' => '2022-03-04 06:51:07',
                'field_id' => 2,
                'field_name' => 'answer',
                'field_value' => '<p>Lorem ipsum bosma va veb-dizaynda tez-tez ishlatiladigan baliq matnidir. Lorem Ipsum 16-asr boshidan beri lotin matnlari uchun standart &quot;baliq&quot; bo&#39;lib kelgan. O&#39;sha paytda nomi noma&#39;lum printer namunalarni chop etish uchun Lorem Ipsum yordamida shrift o&#39;lchamlari va shakllarining katta to&#39;plamini yaratdi. Lorem Ipsum nafaqat besh asr davomida sezilarli o&#39;zgarishlarsiz muvaffaqiyatli omon qoldi, balki elektron dizaynga ham qadam qo&#39;ydi. U zamonaviy davrda 60-yillarda Lorem Ipsum naqshlari bilan Letraset varaqlarini nashr qilish va yaqinda o&#39;z shablonlarida Lorem Ipsumdan foydalanadigan Aldus PageMaker kabi maket dasturlari orqali ommalashgan. 2</p>',
                'id' => 87,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'question_answers',
                'updated_at' => '2022-03-07 00:01:36',
            ),
            87 => 
            array (
                'created_at' => '2022-03-07 16:03:24',
                'field_id' => 1,
                'field_name' => 'description',
            'field_value' => '<p>In this regard, in the integrated development of urbanization, great importance is attached to the uniform and widespread expansion of cities, including medium-sized cities as important economic centers (hubs). However, rapid unmanaged growth, resulting in inefficiency and growing pent-up demand for infrastructure and utilities, has a negative impact on the quality of life and overall investment attractiveness of such cities.</p>

<p><br />
Preliminarily, with the support of the World Bank, a comprehensive urban diagnostics was carried out in the selected pilot cities - Chartak, Kagan and Yangiyul, as a result of which factors were identified that negatively affect the quality of the urban environment: the lack of a system for the integrated and efficient provision of services, the need to replace and modernize the morally obsolete infrastructure, low levels of energy efficiency, lack of an acceptable urban environment, as well as the need to create conditions for attracting investment, creating jobs and increasing competitiveness.</p>',
                'id' => 88,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_descriptions',
                'updated_at' => '2022-03-09 10:38:07',
            ),
            88 => 
            array (
                'created_at' => '2022-03-07 16:03:24',
                'field_id' => 1,
                'field_name' => 'description',
            'field_value' => '<p>В связи с этим, огромное значение при комплексном развитии урбанизации придаётся равномерному и повсеместному расширению городов, в том числе средних городов как важных экономических центров (хабов). Однако быстрый неуправляемый рост, в результате приводящий к неэффективности и растущему неудовлетворенному спросу на инфраструктуру и коммунальные услуги, негативно сказывается на качестве жизни и общей инвестиционной привлекательности таких городов.</p>

<p><br />
Предварительно, при поддержке Всемирного банка, была проведена комплексная городская диагностика выбранных пилотных городов &ndash; Чартак, Каган и Янгиюль, в результате которой были выявлены факторы, негативно влияющие на качество городской среды: отсутствие системы комплексного и эффективного оказания услуг, необходимость замены и модернизации морально устаревающей инфраструктуры, низкий уровень энергоэффективности, отсутствие приемлемой городской среды, а также необходимость создания условий для привлечения инвестиций, создания рабочих мест и повышения конкурентоспособности.</p>',
                'id' => 89,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_descriptions',
                'updated_at' => '2022-03-09 10:38:07',
            ),
            89 => 
            array (
                'created_at' => '2022-03-07 16:03:24',
                'field_id' => 1,
                'field_name' => 'description',
            'field_value' => '<p>Shu munosabat bilan urbanizatsiyani kompleks rivojlantirishda shaharlarni, shu jumladan, oʻrta shaharlarni muhim iqtisodiy markazlar (uzatmalar) sifatida bir xilda va keng koʻlamda kengaytirishga katta ahamiyat beriladi. Biroq, infratuzilma va kommunal xizmatlarga bo&#39;lgan samarasiz va o&#39;sib borayotgan talabning o&#39;sishiga olib keladigan boshqarilmaydigan tez o&#39;sish bunday shaharlarning hayot sifatiga va umumiy investitsiya jozibadorligiga salbiy ta&#39;sir ko&#39;rsatmoqda.</p>

<p><br />
Dastlab Jahon banki ko&lsquo;magida tanlangan tajriba shaharlar &ndash; Chortoq, Kogon va Yangiyo&lsquo;l shaharlarida kompleks shahar diagnostikasi o&lsquo;tkazildi, natijada shahar atrof-muhit sifatiga salbiy ta&rsquo;sir ko&lsquo;rsatuvchi omillar aniqlandi: xizmatlarni kompleks va samarali koʻrsatish tizimi, maʼnaviy eskirgan infratuzilmani almashtirish va modernizatsiya qilish zarurati, energiya samaradorligi pastligi, maqbul shahar muhitining yoʻqligi, shuningdek, investitsiyalarni jalb qilish, ish oʻrinlari yaratish va raqobatbardoshligini oshirish.</p>',
                'id' => 90,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_descriptions',
                'updated_at' => '2022-03-09 10:38:07',
            ),
            90 => 
            array (
                'created_at' => '2022-03-07 16:13:04',
                'field_id' => 2,
                'field_name' => 'description',
                'field_value' => '<p>In the city of Kagan, Bukhara region, it is planned to improve the sewerage system, restore the Palace of the Emir of Bukhara and certain cultural heritage sites in the central part of the city, organize the Kagan-Bukhara tourist bus route, purchase special equipment and build garages for its maintenance, landscaping, and improve street lighting in selected project areas.</p>

<p><br />
In the city of Yangiyul, Tashkent region, water supply and sewerage systems will be improved, special equipment will be purchased and specialized garages will be built, as well as the improvement of a number of mahallas and the improvement of street lighting in selected project areas.</p>

<p><br />
The sources of financing for the project are borrowed funds from the World Bank in the amount of $100 million under a state guarantee and the contribution of the Republic of Uzbekistan in the amount equivalent to $24.12 million in the form of tax and customs benefits.</p>',
                'id' => 91,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_descriptions',
                'updated_at' => '2022-03-09 10:37:59',
            ),
            91 => 
            array (
                'created_at' => '2022-03-07 16:13:04',
                'field_id' => 2,
                'field_name' => 'description',
                'field_value' => '<p>В г.Кагане Бухарской области планируется улучшение системы канализации, восстановление Дворца эмира Бухарского и отдельных объектов культурного наследия в центральной части города, организация туристического автобусного маршрута &laquo;Каган-Бухара&raquo;, закупка спецтехники и строительство гаражей для её содержания, благоустройство, улучшение уличного освещения в выбранных проектных зонах.</p>

<p><br />
В г.Янгиюле Ташкентской области будут улучшены системы водоснабжения и канализации, закуплена спецтехника и осуществлено строительство специализированных гаражей, а также благоустройство ряда махаллей и улучшение уличного освещения в выбранных проектных зонах.</p>

<p><br />
Источниками финансирования проекта определены заемные средства Всемирного банка в размере 100 млн долларов под государственную гарантию и вклад Республики Узбекистан в сумме, эквивалентной 24,12 млн долларов США, в виде налоговых и таможенных льгот.<br />
&nbsp;</p>',
                'id' => 92,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_descriptions',
                'updated_at' => '2022-03-09 10:37:59',
            ),
            92 => 
            array (
                'created_at' => '2022-03-07 16:13:04',
                'field_id' => 2,
                'field_name' => 'description',
                'field_value' => '<p>Buxoro viloyati Kogon shahrida kanalizatsiya tizimini yaxshilash, Buxoro amiri saroyi va shaharning markaziy qismidagi ayrim madaniy meros obyektlarini qayta tiklash, Kogon-Buxoro turistik avtobus yo&lsquo;nalishini tashkil etish, maxsus avtotransport xarid qilish rejalashtirilgan. jihozlash va uni saqlash, obodonlashtirish va tanlangan loyiha hududlarida ko&#39;chalarni yoritishni yaxshilash uchun garajlar qurish.</p>

<p><br />
Toshkent viloyatining Yangiyo&lsquo;l shahrida suv ta&rsquo;minoti va kanalizatsiya tizimini yaxshilash, maxsus jihozlar xarid qilish va ixtisoslashtirilgan garajlar qurish, shuningdek, bir qator mahallalarni obodonlashtirish va tanlangan loyiha hududlarida ko&lsquo;chalarni yoritishni yaxshilash ko&lsquo;zda tutilgan. .</p>

<p><br />
Loyihani moliyalashtirish manbalari Jahon bankining davlat kafolati boʻyicha 100 million dollar miqdoridagi qarz mablagʻlari hamda soliq va bojxona imtiyozlari koʻrinishidagi 24,12 million dollar ekvivalentidagi Oʻzbekiston Respublikasi hissasi hisoblanadi.</p>',
                'id' => 93,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_descriptions',
                'updated_at' => '2022-03-09 10:37:59',
            ),
            93 => 
            array (
                'created_at' => '2022-03-07 16:32:42',
                'field_id' => 3,
                'field_name' => 'name',
                'field_value' => 'Yangiyul',
                'id' => 94,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'projects',
                'updated_at' => '2022-03-07 16:32:42',
            ),
            94 => 
            array (
                'created_at' => '2022-03-07 16:32:42',
                'field_id' => 3,
                'field_name' => 'short_description',
                'field_value' => 'In Yangiyul, it is planned to build drinking water supply facilities with a capacity of 30,000 m3/night/day and other similar works.',
                'id' => 95,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'projects',
                'updated_at' => '2022-03-07 16:32:42',
            ),
            95 => 
            array (
                'created_at' => '2022-03-07 16:32:42',
                'field_id' => 3,
                'field_name' => 'region',
                'field_value' => 'Tashkent region',
                'id' => 96,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'projects',
                'updated_at' => '2022-03-07 16:32:42',
            ),
            96 => 
            array (
                'created_at' => '2022-03-07 16:32:42',
                'field_id' => 3,
                'field_name' => 'name',
                'field_value' => 'Янгиюль',
                'id' => 97,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'projects',
                'updated_at' => '2022-03-07 16:32:42',
            ),
            97 => 
            array (
                'created_at' => '2022-03-07 16:32:42',
                'field_id' => 3,
                'field_name' => 'short_description',
                'field_value' => 'В Янгиюле планируется строительство объектов питьевого водоснабжения мощностью 30 000 м3/ночь/день и другие подобные работы.',
                'id' => 98,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'projects',
                'updated_at' => '2022-03-07 16:32:42',
            ),
            98 => 
            array (
                'created_at' => '2022-03-07 16:32:42',
                'field_id' => 3,
                'field_name' => 'region',
                'field_value' => 'Ташкентская область',
                'id' => 99,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'projects',
                'updated_at' => '2022-03-07 16:32:42',
            ),
            99 => 
            array (
                'created_at' => '2022-03-07 16:32:42',
                'field_id' => 3,
                'field_name' => 'name',
                'field_value' => 'Yangiyo\'l',
                'id' => 100,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'projects',
                'updated_at' => '2022-03-07 16:32:42',
            ),
            100 => 
            array (
                'created_at' => '2022-03-07 16:32:42',
                'field_id' => 3,
                'field_name' => 'short_description',
                'field_value' => 'Yangiyo\'l shahrida 30000 m3/kecha/kunduz quvvatga ega bo\'lgan ichimlik suv inshootlarini qurish va shu kabi boshqa ishlarni amalga oshirilishi rejalashtirilgan',
                'id' => 101,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'projects',
                'updated_at' => '2022-03-07 16:32:42',
            ),
            101 => 
            array (
                'created_at' => '2022-03-07 16:32:42',
                'field_id' => 3,
                'field_name' => 'region',
                'field_value' => 'Toshkent viloyati',
                'id' => 102,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'projects',
                'updated_at' => '2022-03-07 16:32:42',
            ),
            102 => 
            array (
                'created_at' => '2022-03-07 17:34:26',
                'field_id' => 1,
                'field_name' => 'title',
                'field_value' => 'Small industrial zones',
                'id' => 103,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:34:26',
            ),
            103 => 
            array (
                'created_at' => '2022-03-07 17:34:26',
                'field_id' => 1,
                'field_name' => 'title',
                'field_value' => 'Малые промышленные зоны',
                'id' => 104,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:34:26',
            ),
            104 => 
            array (
                'created_at' => '2022-03-07 17:34:26',
                'field_id' => 1,
                'field_name' => 'title',
                'field_value' => 'Kichik sanoat zonalari',
                'id' => 105,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:34:26',
            ),
            105 => 
            array (
                'created_at' => '2022-03-07 17:35:22',
                'field_id' => 2,
                'field_name' => 'title',
                'field_value' => 'Free economic zones',
                'id' => 106,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:35:22',
            ),
            106 => 
            array (
                'created_at' => '2022-03-07 17:35:22',
                'field_id' => 2,
                'field_name' => 'title',
                'field_value' => 'Свободные экономические зоны',
                'id' => 107,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-09 11:17:34',
            ),
            107 => 
            array (
                'created_at' => '2022-03-07 17:35:22',
                'field_id' => 2,
                'field_name' => 'title',
                'field_value' => 'Erkin iqtisodiy zonalar',
                'id' => 108,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:35:22',
            ),
            108 => 
            array (
                'created_at' => '2022-03-07 17:36:42',
                'field_id' => 3,
                'field_name' => 'title',
                'field_value' => 'Projects implemented under the investment program',
                'id' => 109,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:36:42',
            ),
            109 => 
            array (
                'created_at' => '2022-03-07 17:36:42',
                'field_id' => 3,
                'field_name' => 'title',
                'field_value' => 'Проекты, реализованные в рамках инвестиционной программы',
                'id' => 110,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:36:42',
            ),
            110 => 
            array (
                'created_at' => '2022-03-07 17:36:42',
                'field_id' => 3,
                'field_name' => 'title',
                'field_value' => 'Investitsiya dasturi doirasida amalga oshirilgan loyixalar',
                'id' => 111,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:36:42',
            ),
            111 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 1,
                'field_name' => 'title',
                'field_value' => 'Title of Event',
                'id' => 112,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            112 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 1,
                'field_name' => 'title',
                'field_value' => 'Информация',
                'id' => 113,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            113 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 1,
                'field_name' => 'title',
                'field_value' => 'Ma\'lumotlar',
                'id' => 114,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            114 => 
            array (
                'created_at' => '2022-03-07 17:34:26',
                'field_id' => 4,
                'field_name' => 'title',
                'field_value' => 'Small industrial zones',
                'id' => 115,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:34:26',
            ),
            115 => 
            array (
                'created_at' => '2022-03-07 17:34:26',
                'field_id' => 4,
                'field_name' => 'title',
                'field_value' => 'Малые промышленные зоны',
                'id' => 116,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:34:26',
            ),
            116 => 
            array (
                'created_at' => '2022-03-07 17:34:26',
                'field_id' => 4,
                'field_name' => 'title',
                'field_value' => 'Kichik sanoat zonalari',
                'id' => 117,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:34:26',
            ),
            117 => 
            array (
                'created_at' => '2022-03-07 17:35:22',
                'field_id' => 5,
                'field_name' => 'title',
                'field_value' => 'Free economic zones',
                'id' => 118,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:35:22',
            ),
            118 => 
            array (
                'created_at' => '2022-03-07 17:35:22',
                'field_id' => 5,
                'field_name' => 'title',
                'field_value' => 'Свободные экономические зоны',
                'id' => 119,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-09 11:17:34',
            ),
            119 => 
            array (
                'created_at' => '2022-03-07 17:35:22',
                'field_id' => 5,
                'field_name' => 'title',
                'field_value' => 'Erkin iqtisodiy zonalar',
                'id' => 120,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:35:22',
            ),
            120 => 
            array (
                'created_at' => '2022-03-07 17:36:42',
                'field_id' => 6,
                'field_name' => 'title',
                'field_value' => 'Projects implemented under the investment program',
                'id' => 121,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:36:42',
            ),
            121 => 
            array (
                'created_at' => '2022-03-07 17:36:42',
                'field_id' => 6,
                'field_name' => 'title',
                'field_value' => 'Проекты, реализованные в рамках инвестиционной программы',
                'id' => 122,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:36:42',
            ),
            122 => 
            array (
                'created_at' => '2022-03-07 17:36:42',
                'field_id' => 6,
                'field_name' => 'title',
                'field_value' => 'Investitsiya dasturi doirasida amalga oshirilgan loyixalar',
                'id' => 123,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:36:42',
            ),
            123 => 
            array (
                'created_at' => '2022-03-07 17:34:26',
                'field_id' => 7,
                'field_name' => 'title',
                'field_value' => 'Small industrial zones',
                'id' => 124,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:34:26',
            ),
            124 => 
            array (
                'created_at' => '2022-03-07 17:34:26',
                'field_id' => 7,
                'field_name' => 'title',
                'field_value' => 'Малые промышленные зоны',
                'id' => 125,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:34:26',
            ),
            125 => 
            array (
                'created_at' => '2022-03-07 17:34:26',
                'field_id' => 7,
                'field_name' => 'title',
                'field_value' => 'Kichik sanoat zonalari',
                'id' => 126,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:34:26',
            ),
            126 => 
            array (
                'created_at' => '2022-03-07 17:35:22',
                'field_id' => 8,
                'field_name' => 'title',
                'field_value' => 'Free economic zones',
                'id' => 127,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:35:22',
            ),
            127 => 
            array (
                'created_at' => '2022-03-07 17:35:22',
                'field_id' => 8,
                'field_name' => 'title',
                'field_value' => 'Свободные экономические зоны',
                'id' => 128,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-09 11:17:34',
            ),
            128 => 
            array (
                'created_at' => '2022-03-07 17:35:22',
                'field_id' => 8,
                'field_name' => 'title',
                'field_value' => 'Erkin iqtisodiy zonalar',
                'id' => 129,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:35:22',
            ),
            129 => 
            array (
                'created_at' => '2022-03-07 17:36:42',
                'field_id' => 9,
                'field_name' => 'title',
                'field_value' => 'Projects implemented under the investment program',
                'id' => 130,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:36:42',
            ),
            130 => 
            array (
                'created_at' => '2022-03-07 17:36:42',
                'field_id' => 9,
                'field_name' => 'title',
                'field_value' => 'Проекты, реализованные в рамках инвестиционной программы',
                'id' => 131,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:36:42',
            ),
            131 => 
            array (
                'created_at' => '2022-03-07 17:36:42',
                'field_id' => 9,
                'field_name' => 'title',
                'field_value' => 'Investitsiya dasturi doirasida amalga oshirilgan loyixalar',
                'id' => 132,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_infographics',
                'updated_at' => '2022-03-07 17:36:42',
            ),
            132 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 2,
                'field_name' => 'title',
                'field_value' => 'Title of Event',
                'id' => 133,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            133 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 2,
                'field_name' => 'title',
                'field_value' => 'Информация',
                'id' => 134,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            134 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 2,
                'field_name' => 'title',
                'field_value' => 'Ma\'lumotlar',
                'id' => 135,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            135 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 3,
                'field_name' => 'title',
                'field_value' => 'Title of Event',
                'id' => 136,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            136 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 3,
                'field_name' => 'title',
                'field_value' => 'Информация',
                'id' => 137,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            137 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 3,
                'field_name' => 'title',
                'field_value' => 'Ma\'lumotlar',
                'id' => 138,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            138 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 4,
                'field_name' => 'title',
                'field_value' => 'Title of Event',
                'id' => 139,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            139 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 4,
                'field_name' => 'title',
                'field_value' => 'Информация',
                'id' => 140,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            140 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 4,
                'field_name' => 'title',
                'field_value' => 'Ma\'lumotlar',
                'id' => 141,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            141 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 5,
                'field_name' => 'title',
                'field_value' => 'Title of Event',
                'id' => 142,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            142 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 5,
                'field_name' => 'title',
                'field_value' => 'Информация',
                'id' => 143,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            143 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 5,
                'field_name' => 'title',
                'field_value' => 'Ma\'lumotlar',
                'id' => 144,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            144 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 6,
                'field_name' => 'title',
                'field_value' => 'Title of Event',
                'id' => 145,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            145 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 6,
                'field_name' => 'title',
                'field_value' => 'Информация',
                'id' => 146,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            146 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 6,
                'field_name' => 'title',
                'field_value' => 'Ma\'lumotlar',
                'id' => 147,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            147 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 7,
                'field_name' => 'title',
                'field_value' => 'Title of Event',
                'id' => 148,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            148 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 7,
                'field_name' => 'title',
                'field_value' => 'Информация',
                'id' => 149,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            149 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 7,
                'field_name' => 'title',
                'field_value' => 'Ma\'lumotlar',
                'id' => 150,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            150 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 8,
                'field_name' => 'title',
                'field_value' => 'Title of Event',
                'id' => 151,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            151 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 8,
                'field_name' => 'title',
                'field_value' => 'Информация',
                'id' => 152,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            152 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 8,
                'field_name' => 'title',
                'field_value' => 'Ma\'lumotlar',
                'id' => 153,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            153 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 9,
                'field_name' => 'title',
                'field_value' => 'Title of Event',
                'id' => 154,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            154 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 9,
                'field_name' => 'title',
                'field_value' => 'Информация',
                'id' => 155,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            155 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 9,
                'field_name' => 'title',
                'field_value' => 'Ma\'lumotlar',
                'id' => 156,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            156 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 10,
                'field_name' => 'title',
                'field_value' => 'Title of Event',
                'id' => 157,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            157 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 10,
                'field_name' => 'title',
                'field_value' => 'Информация',
                'id' => 158,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            158 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 10,
                'field_name' => 'title',
                'field_value' => 'Ma\'lumotlar',
                'id' => 159,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            159 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 11,
                'field_name' => 'title',
                'field_value' => 'Title of Event',
                'id' => 160,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            160 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 11,
                'field_name' => 'title',
                'field_value' => 'Информация',
                'id' => 161,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            161 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 11,
                'field_name' => 'title',
                'field_value' => 'Ma\'lumotlar',
                'id' => 162,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            162 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 12,
                'field_name' => 'title',
                'field_value' => 'Title of Event',
                'id' => 163,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            163 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 12,
                'field_name' => 'title',
                'field_value' => 'Информация',
                'id' => 164,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            164 => 
            array (
                'created_at' => '2022-03-08 17:59:21',
                'field_id' => 12,
                'field_name' => 'title',
                'field_value' => 'Ma\'lumotlar',
                'id' => 165,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_events',
                'updated_at' => '2022-03-08 17:59:21',
            ),
            165 => 
            array (
                'created_at' => '2022-03-11 11:38:53',
                'field_id' => 3,
                'field_name' => 'description',
                'field_value' => '<p>In the city of Kagan, Bukhara region, it is planned to improve the sewerage system, restore the Palace of the Emir of Bukhara and certain cultural heritage sites in the central part of the city, organize the Kagan-Bukhara tourist bus route, purchase special equipment and build garages for its maintenance, landscaping, and improve street lighting in selected project areas.</p>

<p><br />
In the city of Yangiyul, Tashkent region, water supply and sewerage systems will be improved, special equipment will be purchased and specialized garages will be built, as well as the improvement of a number of mahallas and the improvement of street lighting in selected project areas.</p>

<p><br />
The sources of financing for the project are borrowed funds from the World Bank in the amount of $100 million under a state guarantee and the contribution of the Republic of Uzbekistan in the amount equivalent to $24.12 million in the form of tax and customs benefits.</p>',
                'id' => 166,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_descriptions',
                'updated_at' => '2022-03-11 11:38:53',
            ),
            166 => 
            array (
                'created_at' => '2022-03-11 11:38:53',
                'field_id' => 3,
                'field_name' => 'description',
                'field_value' => '<p>В г.Кагане Бухарской области планируется улучшение системы канализации, восстановление Дворца эмира Бухарского и отдельных объектов культурного наследия в центральной части города, организация туристического автобусного маршрута &laquo;Каган-Бухара&raquo;, закупка спецтехники и строительство гаражей для её содержания, благоустройство, улучшение уличного освещения в выбранных проектных зонах.</p>

<p><br />
В г.Янгиюле Ташкентской области будут улучшены системы водоснабжения и канализации, закуплена спецтехника и осуществлено строительство специализированных гаражей, а также благоустройство ряда махаллей и улучшение уличного освещения в выбранных проектных зонах.</p>

<p><br />
Источниками финансирования проекта определены заемные средства Всемирного банка в размере 100 млн долларов под государственную гарантию и вклад Республики Узбекистан в сумме, эквивалентной 24,12 млн долларов США, в виде налоговых и таможенных льгот.</p>',
                'id' => 167,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_descriptions',
                'updated_at' => '2022-03-11 11:38:53',
            ),
            167 => 
            array (
                'created_at' => '2022-03-11 11:38:53',
                'field_id' => 3,
                'field_name' => 'description',
                'field_value' => '<p>Buxoro viloyati Kogon shahrida kanalizatsiya tizimini yaxshilash, Buxoro amiri saroyi va shaharning markaziy qismidagi ayrim madaniy meros obyektlarini qayta tiklash, Kogon-Buxoro turistik avtobus yo&lsquo;nalishini tashkil etish, maxsus avtotransport xarid qilish rejalashtirilgan. jihozlash va uni saqlash, obodonlashtirish va tanlangan loyiha hududlarida ko&#39;chalarni yoritishni yaxshilash uchun garajlar qurish.</p>

<p><br />
Toshkent viloyatining Yangiyo&lsquo;l shahrida suv ta&rsquo;minoti va kanalizatsiya tizimini yaxshilash, maxsus jihozlar xarid qilish va ixtisoslashtirilgan garajlar qurish, shuningdek, bir qator mahallalarni obodonlashtirish va tanlangan loyiha hududlarida ko&lsquo;chalarni yoritishni yaxshilash ko&lsquo;zda tutilgan. .</p>

<p><br />
Loyihani moliyalashtirish manbalari Jahon bankining davlat kafolati boʻyicha 100 million dollar miqdoridagi qarz mablagʻlari hamda soliq va bojxona imtiyozlari koʻrinishidagi 24,12 million dollar ekvivalentidagi Oʻzbekiston Respublikasi hissasi hisoblanadi.</p>',
                'id' => 168,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_descriptions',
                'updated_at' => '2022-03-11 11:38:53',
            ),
            168 => 
            array (
                'created_at' => '2022-03-11 11:39:37',
                'field_id' => 4,
                'field_name' => 'description',
                'field_value' => '<p>&nbsp;</p>

<p>In this regard, in the integrated development of urbanization, great importance is attached to the uniform and widespread expansion of cities, including medium-sized cities as important economic centers (hubs). However, rapid unmanaged growth, resulting in inefficiency and growing pent-up demand for infrastructure and utilities, has a negative impact on the quality of life and overall investment attractiveness of such cities.</p>

<p><br />
Preliminarily, with the support of the World Bank, a comprehensive urban diagnostics was carried out in the selected pilot cities - Chartak, Kagan and Yangiyul, as a result of which factors were identified that negatively affect the quality of the urban environment: the lack of a system for the integrated and efficient provision of services, the need to replace and modernize the morally obsolete infrastructure, low levels of energy efficiency, lack of an acceptable urban environment, as well as the need to create conditions for attracting investment, creating jobs and increasing competitiveness.</p>',
                'id' => 169,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_descriptions',
                'updated_at' => '2022-03-11 11:53:39',
            ),
            169 => 
            array (
                'created_at' => '2022-03-11 11:39:37',
                'field_id' => 4,
                'field_name' => 'description',
                'field_value' => '<p>&nbsp;</p>

<p>В связи с этим, огромное значение при комплексном развитии урбанизации придаётся равномерному и повсеместному расширению городов, в том числе средних городов как важных экономических центров (хабов). Однако быстрый неуправляемый рост, в результате приводящий к неэффективности и растущему неудовлетворенному спросу на инфраструктуру и коммунальные услуги, негативно сказывается на качестве жизни и общей инвестиционной привлекательности таких городов.</p>

<p><br />
Предварительно, при поддержке Всемирного банка, была проведена комплексная городская диагностика выбранных пилотных городов &ndash; Чартак, Каган и Янгиюль, в результате которой были выявлены факторы, негативно влияющие на качество городской среды: отсутствие системы комплексного и эффективного оказания услуг, необходимость замены и модернизации морально устаревающей инфраструктуры, низкий уровень энергоэффективности, отсутствие приемлемой городской среды, а также необходимость создания условий для привлечения инвестиций, создания рабочих мест и повышения конкурентоспособности.</p>',
                'id' => 170,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_descriptions',
                'updated_at' => '2022-03-11 11:53:39',
            ),
            170 => 
            array (
                'created_at' => '2022-03-11 11:39:37',
                'field_id' => 4,
                'field_name' => 'description',
                'field_value' => '<p>&nbsp;</p>

<p>Shu munosabat bilan urbanizatsiyani kompleks rivojlantirishda shaharlarni, shu jumladan, oʻrta shaharlarni muhim iqtisodiy markazlar (uzatmalar) sifatida bir xilda va keng koʻlamda kengaytirishga katta ahamiyat beriladi. Biroq, infratuzilma va kommunal xizmatlarga bo&#39;lgan samarasiz va o&#39;sib borayotgan talabning o&#39;sishiga olib keladigan boshqarilmaydigan tez o&#39;sish bunday shaharlarning hayot sifatiga va umumiy investitsiya jozibadorligiga salbiy ta&#39;sir ko&#39;rsatmoqda.</p>

<p><br />
Dastlab Jahon banki ko&lsquo;magida tanlangan tajriba shaharlar &ndash; Chortoq, Kogon va Yangiyo&lsquo;l shaharlarida kompleks shahar diagnostikasi o&lsquo;tkazildi, natijada shahar atrof-muhit sifatiga salbiy ta&rsquo;sir ko&lsquo;rsatuvchi omillar aniqlandi: xizmatlarni kompleks va samarali koʻrsatish tizimi, maʼnaviy eskirgan infratuzilmani almashtirish va modernizatsiya qilish zarurati, energiya samaradorligi pastligi, maqbul shahar muhitining yoʻqligi, shuningdek, investitsiyalarni jalb qilish, ish oʻrinlari yaratish va raqobatbardoshligini oshirish.</p>',
                'id' => 171,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_descriptions',
                'updated_at' => '2022-03-11 11:53:39',
            ),
            171 => 
            array (
                'created_at' => '2022-03-11 11:53:12',
                'field_id' => 5,
                'field_name' => 'description',
                'field_value' => '<p>&nbsp;</p>

<p>In this regard, in the integrated development of urbanization, great importance is attached to the uniform and widespread expansion of cities, including medium-sized cities as important economic centers (hubs). However, rapid unmanaged growth, resulting in inefficiency and growing pent-up demand for infrastructure and utilities, has a negative impact on the quality of life and overall investment attractiveness of such cities.</p>

<p><br />
Preliminarily, with the support of the World Bank, a comprehensive urban diagnostics was carried out in the selected pilot cities - Chartak, Kagan and Yangiyul, as a result of which factors were identified that negatively affect the quality of the urban environment: the lack of a system for the integrated and efficient provision of services, the need to replace and modernize the morally obsolete infrastructure, low levels of energy efficiency, lack of an acceptable urban environment, as well as the need to create conditions for attracting investment, creating jobs and increasing competitiveness.</p>',
                'id' => 172,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'project_descriptions',
                'updated_at' => '2022-03-11 11:53:50',
            ),
            172 => 
            array (
                'created_at' => '2022-03-11 11:53:12',
                'field_id' => 5,
                'field_name' => 'description',
                'field_value' => '<p>&nbsp;</p>

<p>В связи с этим, огромное значение при комплексном развитии урбанизации придаётся равномерному и повсеместному расширению городов, в том числе средних городов как важных экономических центров (хабов). Однако быстрый неуправляемый рост, в результате приводящий к неэффективности и растущему неудовлетворенному спросу на инфраструктуру и коммунальные услуги, негативно сказывается на качестве жизни и общей инвестиционной привлекательности таких городов.</p>

<p><br />
Предварительно, при поддержке Всемирного банка, была проведена комплексная городская диагностика выбранных пилотных городов &ndash; Чартак, Каган и Янгиюль, в результате которой были выявлены факторы, негативно влияющие на качество городской среды: отсутствие системы комплексного и эффективного оказания услуг, необходимость замены и модернизации морально устаревающей инфраструктуры, низкий уровень энергоэффективности, отсутствие приемлемой городской среды, а также необходимость создания условий для привлечения инвестиций, создания рабочих мест и повышения конкурентоспособности.</p>',
                'id' => 173,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'project_descriptions',
                'updated_at' => '2022-03-11 11:54:00',
            ),
            173 => 
            array (
                'created_at' => '2022-03-11 11:53:12',
                'field_id' => 5,
                'field_name' => 'description',
                'field_value' => '<p>&nbsp;</p>

<p>Shu munosabat bilan urbanizatsiyani kompleks rivojlantirishda shaharlarni, shu jumladan, oʻrta shaharlarni muhim iqtisodiy markazlar (uzatmalar) sifatida bir xilda va keng koʻlamda kengaytirishga katta ahamiyat beriladi. Biroq, infratuzilma va kommunal xizmatlarga bo&#39;lgan samarasiz va o&#39;sib borayotgan talabning o&#39;sishiga olib keladigan boshqarilmaydigan tez o&#39;sish bunday shaharlarning hayot sifatiga va umumiy investitsiya jozibadorligiga salbiy ta&#39;sir ko&#39;rsatmoqda.</p>

<p><br />
Dastlab Jahon banki ko&lsquo;magida tanlangan tajriba shaharlar &ndash; Chortoq, Kogon va Yangiyo&lsquo;l shaharlarida kompleks shahar diagnostikasi o&lsquo;tkazildi, natijada shahar atrof-muhit sifatiga salbiy ta&rsquo;sir ko&lsquo;rsatuvchi omillar aniqlandi: xizmatlarni kompleks va samarali koʻrsatish tizimi, maʼnaviy eskirgan infratuzilmani almashtirish va modernizatsiya qilish zarurati, energiya samaradorligi pastligi, maqbul shahar muhitining yoʻqligi, shuningdek, investitsiyalarni jalb qilish, ish oʻrinlari yaratish va raqobatbardoshligini oshirish.</p>',
                'id' => 174,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'project_descriptions',
                'updated_at' => '2022-03-11 11:54:00',
            ),
            174 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 5,
                'field_name' => 'title',
                'field_value' => 'Project "Comprehensive development of medium-sized cities" with the participation of loans from the World Bank 5',
                'id' => 175,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:59:49',
            ),
            175 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 5,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">In the context of the growing population of Uzbekistan and taking into account the trend of increasing its migration from rural areas to cities, where most of the jobs are created, urbanization plays an increasingly important role in the economic development of the Republic. According to the State Statistics Committee, in the period 1990-2017, the highest population growth rates were observed in medium-sized cities and amounted to 54%.</div>

<p><br />
In this regard, in the integrated development of urbanization, great importance is attached to the uniform and widespread expansion of cities, including medium-sized cities as important economic centers (hubs). However, rapid unmanaged growth, resulting in inefficiency and growing pent-up demand for infrastructure and utilities, has a negative impact on the quality of life and the overall investment attractiveness of such cities.<br />
Preliminarily, with the support of the World Bank, a comprehensive urban diagnostics was carried out in selected pilot cities - Chartak, Kagan and Yangiyul, as a result of which factors were identified that negatively affect the quality of the urban environment: the lack of a system for the integrated and efficient provision of services, the need to replace and modernize the morally obsolete infrastructure, low levels of energy efficiency, lack of an acceptable urban environment, as well as the need to create conditions for attracting investment, creating jobs and increasing competitiveness.</p>',
                'id' => 176,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:39',
            ),
            176 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 5,
                'field_name' => 'title',
                'field_value' => '«Комплексное развитие средних городов» 5',
                'id' => 177,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:59:49',
            ),
            177 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 5,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">В условиях роста населения Узбекистана и с учетом тенденции увеличения его миграции из сельской местности в города, где создаётся большая часть рабочих мест, урбанизация играет всё более важную роль в экономическом развитии Республики. По данным Государственного комитета по статистике, в период 1990-2017 годов самые высокие темпы роста населения наблюдались именно в средних городах и составили 54%.</div>

<p>В связи с этим, огромное значение при комплексном развитии урбанизации придаётся равномерному и повсеместному расширению городов, в том числе средних городов как важных экономических центров (хабов). Однако быстрый неуправляемый рост, в результате приводящий к неэффективности и растущему неудовлетворенному спросу на инфраструктуру и коммунальные услуги, негативно сказывается на качестве жизни и общей инвестиционной привлекательности таких городов.<br />
Предварительно, при поддержке Всемирного банка, была проведена комплексная городская диагностика выбранных пилотных городов &ndash; Чартак, Каган и Янгиюль, в результате которой были выявлены факторы, негативно влияющие на качество городской среды: отсутствие системы комплексного и эффективного оказания услуг, необходимость замены и модернизации морально устаревающей инфраструктуры, низкий уровень энергоэффективности, отсутствие приемлемой городской среды, а также необходимость создания условий для привлечения инвестиций, создания рабочих мест и повышения конкурентоспособности.&nbsp;</p>',
                'id' => 178,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:39',
            ),
            178 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 5,
                'field_name' => 'title',
                'field_value' => 'Jahon banki kreditlari ishtirokida “O‘rta shaharlarni kompleks rivojlantirish” loyihasi 5',
                'id' => 179,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:59:49',
            ),
            179 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 5,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">Oʻzbekiston aholisining koʻpayishi sharoitida va uning qishloq joylardan koʻp ish oʻrinlari yaratilgan shaharlarga migratsiyasining kuchayishi tendentsiyasini hisobga olgan holda, urbanizatsiya respublikaning iqtisodiy rivojlanishida tobora muhim rol oʻynamoqda. Davlat statistika qoʻmitasi maʼlumotlariga koʻra, 1990-2017-yillarda aholining eng yuqori oʻsish surʼatlari oʻrta shaharlarda kuzatilgan va 54 foizni tashkil etgan.</div>

<p><br />
Shu munosabat bilan urbanizatsiyani kompleks rivojlantirishda shaharlarni, shu jumladan, oʻrta shaharlarni muhim iqtisodiy markazlar (uzatmalar) sifatida bir xilda va keng koʻlamda kengaytirishga katta ahamiyat beriladi. Biroq, infratuzilma va kommunal xizmatlarning samarasizligi va o&#39;sib borayotgan talabni keltirib chiqaradigan boshqarilmaydigan tez o&#39;sish bunday shaharlarning hayot sifati va umumiy investitsion jozibadorligiga salbiy ta&#39;sir ko&#39;rsatmoqda.<br />
Dastlab Jahon banki ko&lsquo;magida tanlangan tajriba shaharlar &ndash; Chortoq, Kogon va Yangiyo&lsquo;l shaharlarida kompleks shahar diagnostikasi o&lsquo;tkazildi, natijada shahar atrof-muhit sifatiga salbiy ta&rsquo;sir ko&lsquo;rsatuvchi omillar aniqlandi: xizmatlarni kompleks va samarali koʻrsatish tizimi, maʼnaviy eskirgan infratuzilmani almashtirish va modernizatsiya qilish zarurati, energiya samaradorligi pastligi, maqbul shahar muhitining yoʻqligi, shuningdek, investitsiyalarni jalb qilish, ish oʻrinlari yaratish va raqobatbardoshligini oshirish.</p>',
                'id' => 180,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:39',
            ),
            180 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 6,
                'field_name' => 'title',
                'field_value' => 'Project "Comprehensive development of medium-sized cities" with the participation of loans from the World Bank 6',
                'id' => 181,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:39',
            ),
            181 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 6,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">In the context of the growing population of Uzbekistan and taking into account the trend of increasing its migration from rural areas to cities, where most of the jobs are created, urbanization plays an increasingly important role in the economic development of the Republic. According to the State Statistics Committee, in the period 1990-2017, the highest population growth rates were observed in medium-sized cities and amounted to 54%.</div>

<p><br />
In this regard, in the integrated development of urbanization, great importance is attached to the uniform and widespread expansion of cities, including medium-sized cities as important economic centers (hubs). However, rapid unmanaged growth, resulting in inefficiency and growing pent-up demand for infrastructure and utilities, has a negative impact on the quality of life and the overall investment attractiveness of such cities.<br />
Preliminarily, with the support of the World Bank, a comprehensive urban diagnostics was carried out in selected pilot cities - Chartak, Kagan and Yangiyul, as a result of which factors were identified that negatively affect the quality of the urban environment: the lack of a system for the integrated and efficient provision of services, the need to replace and modernize the morally obsolete infrastructure, low levels of energy efficiency, lack of an acceptable urban environment, as well as the need to create conditions for attracting investment, creating jobs and increasing competitiveness.</p>',
                'id' => 182,
                'keyword' => NULL,
                'language_url' => 'en',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:39',
            ),
            182 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 6,
                'field_name' => 'title',
                'field_value' => '«Комплексное развитие средних городов» 6',
                'id' => 183,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:39',
            ),
            183 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 6,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">В условиях роста населения Узбекистана и с учетом тенденции увеличения его миграции из сельской местности в города, где создаётся большая часть рабочих мест, урбанизация играет всё более важную роль в экономическом развитии Республики. По данным Государственного комитета по статистике, в период 1990-2017 годов самые высокие темпы роста населения наблюдались именно в средних городах и составили 54%.</div>

<p>В связи с этим, огромное значение при комплексном развитии урбанизации придаётся равномерному и повсеместному расширению городов, в том числе средних городов как важных экономических центров (хабов). Однако быстрый неуправляемый рост, в результате приводящий к неэффективности и растущему неудовлетворенному спросу на инфраструктуру и коммунальные услуги, негативно сказывается на качестве жизни и общей инвестиционной привлекательности таких городов.<br />
Предварительно, при поддержке Всемирного банка, была проведена комплексная городская диагностика выбранных пилотных городов &ndash; Чартак, Каган и Янгиюль, в результате которой были выявлены факторы, негативно влияющие на качество городской среды: отсутствие системы комплексного и эффективного оказания услуг, необходимость замены и модернизации морально устаревающей инфраструктуры, низкий уровень энергоэффективности, отсутствие приемлемой городской среды, а также необходимость создания условий для привлечения инвестиций, создания рабочих мест и повышения конкурентоспособности.&nbsp;</p>',
                'id' => 184,
                'keyword' => NULL,
                'language_url' => 'ru',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:39',
            ),
            184 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 6,
                'field_name' => 'title',
                'field_value' => 'Jahon banki kreditlari ishtirokida “O‘rta shaharlarni kompleks rivojlantirish” loyihasi 6',
                'id' => 185,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:39',
            ),
            185 => 
            array (
                'created_at' => '2022-03-03 11:04:22',
                'field_id' => 6,
                'field_name' => 'description',
                'field_value' => '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">Oʻzbekiston aholisining koʻpayishi sharoitida va uning qishloq joylardan koʻp ish oʻrinlari yaratilgan shaharlarga migratsiyasining kuchayishi tendentsiyasini hisobga olgan holda, urbanizatsiya respublikaning iqtisodiy rivojlanishida tobora muhim rol oʻynamoqda. Davlat statistika qoʻmitasi maʼlumotlariga koʻra, 1990-2017-yillarda aholining eng yuqori oʻsish surʼatlari oʻrta shaharlarda kuzatilgan va 54 foizni tashkil etgan.</div>

<p><br />
Shu munosabat bilan urbanizatsiyani kompleks rivojlantirishda shaharlarni, shu jumladan, oʻrta shaharlarni muhim iqtisodiy markazlar (uzatmalar) sifatida bir xilda va keng koʻlamda kengaytirishga katta ahamiyat beriladi. Biroq, infratuzilma va kommunal xizmatlarning samarasizligi va o&#39;sib borayotgan talabni keltirib chiqaradigan boshqarilmaydigan tez o&#39;sish bunday shaharlarning hayot sifati va umumiy investitsion jozibadorligiga salbiy ta&#39;sir ko&#39;rsatmoqda.<br />
Dastlab Jahon banki ko&lsquo;magida tanlangan tajriba shaharlar &ndash; Chortoq, Kogon va Yangiyo&lsquo;l shaharlarida kompleks shahar diagnostikasi o&lsquo;tkazildi, natijada shahar atrof-muhit sifatiga salbiy ta&rsquo;sir ko&lsquo;rsatuvchi omillar aniqlandi: xizmatlarni kompleks va samarali koʻrsatish tizimi, maʼnaviy eskirgan infratuzilmani almashtirish va modernizatsiya qilish zarurati, energiya samaradorligi pastligi, maqbul shahar muhitining yoʻqligi, shuningdek, investitsiyalarni jalb qilish, ish oʻrinlari yaratish va raqobatbardoshligini oshirish.</p>',
                'id' => 186,
                'keyword' => NULL,
                'language_url' => 'uz',
                'table_name' => 'articles',
                'updated_at' => '2022-03-11 11:55:39',
            ),
        ));
        
        
    }
}