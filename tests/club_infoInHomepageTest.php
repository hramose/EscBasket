<?php

use App\Club;
use App\Club_info;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class club_infoInHomepageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
    	$club = Club::where('name','=','EscBasket')->first();
    	$club_info = Club_info::where('club_id','=',$club->id)->first();
        $this->visit('/')
             ->see($club_info->vision)
             ->see($club_info->mission)
             ->see($club_info->description);
    }
}
