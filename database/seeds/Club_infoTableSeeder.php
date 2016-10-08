<?php

use App\Club_info;
use App\Club;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Club_infoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('club_info')->delete();

        $faker = Faker::create();
        $club = Club::where('name','=','EscBasket')->first();

        $escBasket_info = Club_info::create(array(
        	'description'	=> $faker->paragraph,
        	'vision'	=> $faker->paragraph,
        	'mission'	=> $faker->paragraph,
        	'club_id'	=> $club->id
        ));

        $this->command->info('Información Club EscBasket creado.');
    }
}
