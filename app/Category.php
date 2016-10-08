<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = ['title', 'description', 'principal_image'];

    public function club()
    {
    	return $this->belongsTo('Club');
    }
}
