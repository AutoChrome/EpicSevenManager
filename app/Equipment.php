<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    //Allow any input from a form. MUST VALIDATE IN RULES!
    protected $guarded = [];
    public $timestamps = false;
}
