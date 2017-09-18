<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    public static function quotes()
    {
        return Self::get()->toArray();
    }
}
