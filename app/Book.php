<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //-----------//
    protected $fillable = [
        'name', 'author', 'quantity', 'image'
    ];

    public function catagory()
    {
    	return $this->belongsTo('App\Book_catagory','id','cat_id'); //Relate with Book catagory
    }
}
