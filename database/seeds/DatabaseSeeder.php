<?php

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
    	Schema::disableForeignKeyConstraints();	
    	DB::table('templates')->insert([						
            'id' => 1,
            'name' => 'redrose',   
        ]);

        DB::table('templates')->insert([						
            'id' => 2,
            'name' => 'oreocream',   
        ]);

        DB::table('templates')->insert([						
            'id' => 3,
            'name' => 'chococream',   
        ]);
        
        DB::table('brides')->insert([
        						
            'id' => 1,
            'intro' => 'Dengan menyebut nama Allah kami bermaksud untuk menyelenggarakan pernikahan putra putri kami',   
            'men_long_name' => 'Rafie Ramadan',
            'men_profil_url' => 'link.jpg',
            'men_parents_name' => 'jonathan',
            'women_profil_url' => 'link.jpg',
            'women_long_name' => 'Novia Pertiwi',
            'women_parents_name' => 'siswanto',
            'outro' => 'Suatu kehormatan bagi kami apabila bapak / ibu / saudara dapat hadir dalam acara yang berbahagia ini',
            'infos_id' => 1,
        ]);
        DB::table('comments')->insert([
        						
            'id' => 1,
            'guest_name' => 'anonymous',
            'comment' => 'selamat ya atas pernikahannya',   
            'infos_id' => 1,
        ]);

        DB::table('events')->insert([
            'id' => 1,
            'name' => 'akad',
            'date' => '2019-11-09',   
            'time_start' => '31:23:18',
            'time_end' => '31:23:18',
            'timezone' => 'WIB',
            'address' => 'Gedung Auditorium Kahar Muzakir Unievrsitas Islam Indonesia Yogyakarta',
            'show_home' => 'false',
            'infos_id' => 1,
        ]);

        DB::table('events')->insert([
            'id' => 2,
            'name' => 'akad',
            'date' => '2019-11-09',   
            'time_start' => '31:23:18',
            'time_end' => '31:23:18',
            'timezone' => 'WIB',
            'address' => 'Gedung Auditorium Kahar Muzakir Unievrsitas Islam Indonesia Yogyakarta',
            'show_home' => 'false',
            'infos_id' => 1,
        ]);

        DB::table('galleries')->insert([
            'id' => 1,
            'image_name' => 'gambar_1',
            'image_url' => 'gambar_1.jpg',
            'infos_id' => 1,
            
        ]);

        DB::table('galleries')->insert([
            'id' => 2,
            'image_name' => 'gambar_2',
            'image_url' => 'gambar_2.jpg',
            'infos_id' => 1,
            
        ]);

        DB::table('galleries')->insert([
            'id' => 3,
            'image_name' => 'gambar_3',
            'image_url' => 'gambar_3.jpg',
            'infos_id' => 1,
        ]);

        DB::table('homes')->insert([
            'id' => 1,
            'men_nick_name' => 'jonathan',
            'woman_nick_name' => 'novia pertiwi',
            'title' => 'walimatul urs',
            'infos_id' => 1,
        ]);

        DB::table('invitation_infos')->insert([
            'id' => 1,
            'permalink' => 'template_1',
            'templates_id' => 1,
        ]);
		
        DB::table('locations')->insert([
            'id' => 1,
            'maps_image_url' => 'template_1',
            'address' => 1,
            'gmaps_url' => 'template_1',
            'infos_id' => 1,
        ]);

        DB::table('quotes')->insert([
            'id' => 1,
            'quote' => 'template_1',
            'terjemah' => 'hahahah',
            'infos_id' => 1,
        ]);

        DB::table('quotes')->insert([
            'id' => 2,
            'quote' => 'template_1',
            'terjemah' => 'hahahaha',
            'infos_id' => 1,
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
