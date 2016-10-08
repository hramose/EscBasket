<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $table = 'homepage';

    protected $fillable = [
    	'menu_color',
    	'title_color',
    	'font_color',
    	'background_color',
    	'ci_button_color',
    	'ci_button_font_color',
    	'template',
    	'image'
    ];

    public function club()
    {
    	return $this->belongsTo('Club');
    }
}
