<?php

use App\Club;
use App\Contact;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class contactInHomepageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testContactInHomepage()
    {
        $club = Club::where('name','=','EscBasket')->first();
    	$contact = Contact::where('club_id','=',$club->id)->first();
        $this->visit('/')
             //->see($contact->ubication)
             ->see($contact->phone)
             ->see($contact->location);
    }
}
