<?php

use App\Club;
use App\Contact;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->delete();

        $faker = Faker::create();
        $club = Club::where('name','=','EscBasket')->first();

        $escBasket_contact = Contact::create(array(
        	'direction'	=> $faker->streetAddress,
        	'ubication'	=> $faker->latitude($min = -90, $max = 90),
        	'phone'	=> $faker->ean8,
        	'club_id'	=> $club->id
        ));

        $this->command->info('Contacto Club EscBasket creado.');
    }
}
