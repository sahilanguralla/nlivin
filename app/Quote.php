<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    // A Quote belongs to a Author
    public function author() {
    	return $this->belongsTo('App\Author');
    }
}
