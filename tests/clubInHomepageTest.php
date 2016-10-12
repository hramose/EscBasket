<?php

use App\Club;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class clubInHomepageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
    	$club = Club::where('name','=','EscBasket')->first();
        $this->visit('/')
             ->see($club->name);
    }
}
