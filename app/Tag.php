<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // A tag belongs to many
    public function quotes() {
    	return $this->belongsToMany('App\Role', 'quotes_tags');
    }
}
