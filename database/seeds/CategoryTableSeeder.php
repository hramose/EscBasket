<?php

use App\Club;
use App\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->delete();

        factory(Category::class)->times(3)->create();

        $this->command->info('Categorias Club EscBasket creado.');
    }
}
