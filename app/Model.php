<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    // Whitelisted
    // protected $fillable = ['title', 'body'];

    // Blacklisted (if empty, nothing is guarded)
    protected $guarded = [];
}
