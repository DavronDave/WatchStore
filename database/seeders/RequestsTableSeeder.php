<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RequestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('requests')->delete();
        
        \DB::table('requests')->insert(array (
            0 => 
            array (
                'contact' => 'daniel@gmail.com',
                'created_at' => '2022-03-04 15:27:50',
                'fio' => 'Daniel',
                'id' => 1,
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et mauris nec mi placerat dapibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed tempus feugiat vehicula. Cras vestibulum nulla eu orci elementum rhoncus. Fusce egestas tellus lectus. Sed ut est eu nunc ullamcorper lacinia ac feugiat nibh. Phasellus scelerisque, sapien eu semper volutpat, eros nunc accumsan ligula, ac accumsan lorem nibh quis libero. Integer quis imperdiet ipsum.

Praesent non leo lobortis, rutrum nisl ac, gravida elit. Donec lobortis eleifend dolor, vel commodo diam lobortis vitae. Duis sed risus in dui tincidunt suscipit non et metus. Ut rhoncus tempor facilisis. Nulla tincidunt porta euismod. Aliquam placerat elementum finibus. Nullam vulputate scelerisque lacus nec sollicitudin. Aliquam suscipit, justo consectetur fringilla sollicitudin, ex eros interdum eros, a vehicula urna ex sed nibh. Morbi fringilla lorem lacus, in tristique massa porttitor ac. Nunc mollis nulla at ligula scelerisque blandit. Suspendisse potenti. Fusce sit amet dignissim risus. Donec sed augue a nulla gravida ornare ut eu nunc. Fusce faucibus, diam non sagittis pretium, purus eros fermentum libero, id venenatis quam urna ut nisi. Duis justo sem, ornare vitae rhoncus sed, porta a nibh. Sed dictum et lorem nec rhoncus.

Quisque efficitur lacus metus, a dictum risus consectetur quis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed fringilla, quam nec gravida ornare, turpis massa feugiat augue, finibus ultricies magna mi quis lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed suscipit, sapien id congue ornare, arcu mi volutpat sem, feugiat mollis nulla eros eget neque. In hac habitasse platea dictumst. Mauris id aliquet magna. Nam justo purus, mollis a pretium nec, efficitur eget nulla. Aliquam congue turpis lorem, nec condimentum turpis sagittis non. Curabitur fringilla quam ut ipsum finibus ullamcorper. Quisque molestie turpis leo, eu congue erat finibus id. Pellentesque congue vulputate leo, id tincidunt sem tempus vitae. In tempus, erat id finibus congue, metus arcu finibus neque, a cursus eros lorem sit amet nulla. Ut porttitor vitae sapien a hendrerit. Praesent ut imperdiet lorem. Vivamus egestas nisi vel pharetra facilisis.

Ut gravida convallis interdum. Sed ut tellus varius, tempor dolor ut, dictum diam. Sed eu purus dignissim, hendrerit erat non, venenatis ante. Pellentesque laoreet volutpat enim, non varius elit volutpat eu. Vestibulum pharetra egestas velit eget viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas tristique lorem quis metus dapibus, sed ultrices lacus facilisis. Sed vel enim a odio hendrerit maximus. Pellentesque malesuada sed nisi faucibus ullamcorper. Nunc varius dui ut nibh pellentesque venenatis.

In vel consectetur ligula. Vivamus efficitur ipsum a turpis dignissim consectetur. Fusce mollis nibh vitae sapien malesuada interdum. Vestibulum erat lorem, semper rhoncus sem eget, rhoncus facilisis neque. Etiam ultricies risus in sagittis lobortis. Sed tincidunt purus tortor, et vestibulum odio porttitor eu. Vivamus ac faucibus ex. Phasellus placerat venenatis enim, eu interdum felis mollis at.',
                'status' => '1',
                'updated_at' => '2022-03-04 10:33:58',
            ),
            1 => 
            array (
                'contact' => 'johndoe@gmail.com',
                'created_at' => '2022-03-04 15:26:50',
                'fio' => 'John Doe',
                'id' => 2,
                'message' => 'Quisque efficitur lacus metus, a dictum risus consectetur quis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed fringilla, quam nec gravida ornare, turpis massa feugiat augue, finibus ultricies magna mi quis lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed suscipit, sapien id congue ornare, arcu mi volutpat sem, feugiat mollis nulla eros eget neque. In hac habitasse platea dictumst. Mauris id aliquet magna. Nam justo purus, mollis a pretium nec, efficitur eget nulla. Aliquam congue turpis lorem, nec condimentum turpis sagittis non. Curabitur fringilla quam ut ipsum finibus ullamcorper. Quisque molestie turpis leo, eu congue erat finibus id. Pellentesque congue vulputate leo, id tincidunt sem tempus vitae. In tempus, erat id finibus congue, metus arcu finibus neque, a cursus eros lorem sit amet nulla. Ut porttitor vitae sapien a hendrerit. Praesent ut imperdiet lorem. Vivamus egestas nisi vel pharetra facilisis.',
                'status' => '1',
                'updated_at' => '2022-03-04 15:27:50',
            ),
            2 => 
            array (
                'contact' => 'umid@gmail.com',
                'created_at' => '2022-03-06 18:31:59',
                'fio' => 'Umid Ikromovich',
                'id' => 3,
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec libero non lectus placerat sagittis eget vel nibh. Aenean gravida tincidunt augue, a aliquet felis imperdiet nec. Sed accumsan libero sed sodales euismod. Nulla ac tincidunt odio, vitae dictum erat. Cras dolor orci, imperdiet elementum odio at, malesuada blandit velit. Sed eget ornare sem, eu ultrices dolor. Duis bibendum mattis eros id tempor. Nulla aliquam tellus ullamcorper, vestibulum lectus id, molestie nunc. Suspendisse elementum felis id porta suscipit. Integer sit amet turpis lobortis, hendrerit elit eget, gravida elit. Vestibulum ullamcorper tellus et turpis bibendum, a viverra ligula posuere.

Etiam rhoncus nunc odio, eget posuere mauris gravida id. Nulla a porttitor ipsum, sodales consectetur neque. Aliquam placerat odio nec vehicula fermentum. Proin nec ante tellus. Nam dignissim mi vitae tellus auctor, id scelerisque eros molestie. In a finibus nisi. Vivamus eget efficitur tellus. Mauris erat ante, vulputate sit amet metus quis, sagittis scelerisque tortor. Curabitur mollis tincidunt fermentum. Quisque in lorem porta, vehicula ante malesuada, efficitur metus.

Praesent aliquam lacus sed eros aliquet pulvinar. Aenean sed tellus a massa fringilla euismod. Pellentesque est ante, convallis at porttitor ut, faucibus in velit. Vivamus sodales vehicula justo, eget facilisis erat varius vitae. Cras vestibulum elit in orci porta, non maximus mi interdum. Nullam facilisis ultricies eros sit amet dictum. Aenean quis ultrices leo. Cras pulvinar lacinia dignissim. Phasellus aliquet neque sit amet sem aliquet egestas.

In euismod, metus a sagittis ullamcorper, urna dolor sollicitudin quam, in vehicula dui ligula et dolor. Nulla cursus sit amet massa a pretium. Praesent et massa elementum, gravida nibh ut, tincidunt felis. Fusce blandit, ante sed ullamcorper sagittis, metus mi vehicula nibh, sed ullamcorper massa nulla nec nulla. Maecenas ante lectus, scelerisque eget quam sed, venenatis sollicitudin augue. Phasellus sodales nibh et porttitor accumsan. Sed tincidunt tortor odio, a iaculis leo dapibus nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus sollicitudin, erat eu condimentum lobortis, dui erat fringilla nisi, at vulputate turpis sem et velit.

Aenean at ligula pretium, sollicitudin felis eget, ullamcorper urna. Quisque convallis urna nec eros consequat, a luctus nibh consequat. Integer faucibus erat sed lectus dapibus eleifend. Proin facilisis nibh at interdum fermentum. Integer commodo quam ac sapien lobortis, eu consequat odio sollicitudin. Nunc ullamcorper accumsan vulputate. Sed in sem id urna vehicula ullamcorper.',
                'status' => '1',
                'updated_at' => '2022-03-06 23:51:11',
            ),
            3 => 
            array (
                'contact' => 'umid@gmail.com',
                'created_at' => '2022-03-06 23:42:32',
                'fio' => 'Umid Ikromovich Tojiboyev',
                'id' => 4,
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec libero non lectus placerat sagittis eget vel nibh. Aenean gravida tincidunt augue, a aliquet felis imperdiet nec. Sed accumsan libero sed sodales euismod. Nulla ac tincidunt odio, vitae dictum erat. Cras dolor orci, imperdiet elementum odio at, malesuada blandit velit. Sed eget ornare sem, eu ultrices dolor. Duis bibendum mattis eros id tempor. Nulla aliquam tellus ullamcorper, vestibulum lectus id, molestie nunc. Suspendisse elementum felis id porta suscipit. Integer sit amet turpis lobortis, hendrerit elit eget, gravida elit. Vestibulum ullamcorper tellus et turpis bibendum, a viverra ligula posuere.

Etiam rhoncus nunc odio, eget posuere mauris gravida id. Nulla a porttitor ipsum, sodales consectetur neque. Aliquam placerat odio nec vehicula fermentum. Proin nec ante tellus. Nam dignissim mi vitae tellus auctor, id scelerisque eros molestie. In a finibus nisi. Vivamus eget efficitur tellus. Mauris erat ante, vulputate sit amet metus quis, sagittis scelerisque tortor. Curabitur mollis tincidunt fermentum. Quisque in lorem porta, vehicula ante malesuada, efficitur metus.

Praesent aliquam lacus sed eros aliquet pulvinar. Aenean sed tellus a massa fringilla euismod. Pellentesque est ante, convallis at porttitor ut, faucibus in velit. Vivamus sodales vehicula justo, eget facilisis erat varius vitae. Cras vestibulum elit in orci porta, non maximus mi interdum. Nullam facilisis ultricies eros sit amet dictum. Aenean quis ultrices leo. Cras pulvinar lacinia dignissim. Phasellus aliquet neque sit amet sem aliquet egestas.',
                'status' => '1',
                'updated_at' => '2022-03-06 23:50:56',
            ),
            4 => 
            array (
                'contact' => 'umid@gmail.com',
                'created_at' => '2022-03-06 23:44:06',
                'fio' => 'Umid Ikromovich Tojiboyev',
                'id' => 5,
                'message' => 'In euismod, metus a sagittis ullamcorper, urna dolor sollicitudin quam, in vehicula dui ligula et dolor. Nulla cursus sit amet massa a pretium. Praesent et massa elementum, gravida nibh ut, tincidunt felis. Fusce blandit, ante sed ullamcorper sagittis, metus mi vehicula nibh, sed ullamcorper massa nulla nec nulla. Maecenas ante lectus, scelerisque eget quam sed, venenatis sollicitudin augue. Phasellus sodales nibh et porttitor accumsan. Sed tincidunt tortor odio, a iaculis leo dapibus nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus sollicitudin, erat eu condimentum lobortis, dui erat fringilla nisi, at vulputate turpis sem et velit.

Aenean at ligula pretium, sollicitudin felis eget, ullamcorper urna. Quisque convallis urna nec eros consequat, a luctus nibh consequat. Integer faucibus erat sed lectus dapibus eleifend. Proin facilisis nibh at interdum fermentum. Integer commodo quam ac sapien lobortis, eu consequat odio sollicitudin. Nunc ullamcorper accumsan vulputate. Sed in sem id urna vehicula ullamcorper.',
                'status' => '1',
                'updated_at' => '2022-03-07 18:05:12',
            ),
            5 => 
            array (
                'contact' => 'umid@gmail.com phone',
                'created_at' => '2022-03-07 00:35:32',
                'fio' => 'Umid Ikromovich Tojiboyev phone',
                'id' => 6,
                'message' => 'From Phone',
                'status' => '0',
                'updated_at' => '2022-03-07 00:35:32',
            ),
        ));
        
        
    }
}