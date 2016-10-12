<?php

use App\Club;
use App\Category;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class categoriesInHomepageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCategoryInHomepage()
    {
    	$club = Club::where('name','=','EscBasket')->first();
    	$categories = Category::where('club_id','=',$club->id)->get();
    	
    	$this->visit('/');

    	foreach ($categories as $cat) {
    		$this->see($cat->title)
    			->see($cat->description);
    		//fwrite(STDERR, print_r($cat->description, TRUE)); debug en consola!
    	}
    }
}
