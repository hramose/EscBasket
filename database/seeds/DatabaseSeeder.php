<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(ClubTableSeeder::class);
        $this->call(Club_infoTableSeeder::class);
        $this->call(HomepageTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(CategoryTableSeeder::class);

        $this->command->info('EscBasket app seeds finished.');

        Model::reguard();
    }
}
