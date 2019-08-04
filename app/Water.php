<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Water extends Model
{
	protected $fillable = [
    	'article',
    	'category',
    	'volume',
    	'name',
    	'producer',
    	'image',
    	'price'
    ];
}
