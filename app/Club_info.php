<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club_info extends Model
{
    protected $table = 'club_info';

    protected $fillable = ['description', 'vision', 'mission'];

    public function club()
    {
    	return $this->belongsTo('Club');
    }
}
