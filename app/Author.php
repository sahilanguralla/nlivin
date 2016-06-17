<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // Author has many posts
    public function posts() {
    	return $this->hasMany('App\Post');
    }
}
