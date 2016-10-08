<?php

use App\Club;
use Illuminate\Database\Seeder;

class ClubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('club')->delete();

        $escBasket = Club::create(array(
        	'name'	=> 'EscBasket'
        ));

        $this->command->info('Club EscBasket creado.');
    }
}
