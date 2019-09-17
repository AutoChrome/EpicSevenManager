<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    public $timestamps = false;
    
    public function hero()
    {
        return $this->belongsTo(Hero::class);
    }
}
