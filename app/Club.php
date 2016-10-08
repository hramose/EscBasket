<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $table = 'club';

    protected $fillable = ['name'];

    public function club_info() {
        return $this->hasOne('club_info');
    }

    public function homepage() {
        return $this->hasOne('homepage');
    }

    public function contact() {
        return $this->hasOne('contact');
    }

    public function category() {
    	return $this->hasMany('category');
    }
}
