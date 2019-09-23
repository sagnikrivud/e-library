<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'reserve_period', 'fine_amount', 'toggle'
    ];
}
