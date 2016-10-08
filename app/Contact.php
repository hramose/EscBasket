<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';

    protected $fillable = ['direction', 'ubication', 'phone'];

    public function club()
    {
    	return $this->belongsTo('Club');
    }
}
