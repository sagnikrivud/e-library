<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    //
    public function issue()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }

    public function reserve()
    {
    	return $this->hasMany('App\Book','id','book_id');
    }
}
