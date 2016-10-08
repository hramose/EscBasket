<?php

namespace App\Http\Controllers;

use App\Club;
use App\Club_info;
use App\Homepage;
use App\Contact;
use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index(){
    	$club = Club::where('name','EscBasket')->first();
    	$club_info = Club_info::where('club_id',$club->id)->first();
    	$homepage = Homepage::where('club_id',$club->id)->first();
    	$contact = Contact::where('club_id',$club->id)->first();
    	$categories = Category::all();
    	return view('welcome',compact('club','club_info', 'homepage', 'contact', 'categories'));
    }
}
