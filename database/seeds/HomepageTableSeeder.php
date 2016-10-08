<?php

use App\Homepage;
use App\Club;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HomepageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homepage')->delete();

        $faker = Faker::create();
        $club = Club::where('name','=','EscBasket')->first();

        $escBasket_homepage = Homepage::create(array(
        	'menu_color'	=> "#2c3e50",
        	'title_color'	=> "#1abc9c",
        	'font_color'	=> "#fff",
        	'background_color'	=> "#fff",
        	'ci_button_color'	=> "#fff",
        	'ci_button_font_color'	=> "#333",
        	'template'	=> "template1",
        	'image'	=> "logo",
        	'club_id'	=> $club->id
        ));

        $this->command->info('Homepage Club EscBasket creado.');
    }
}
