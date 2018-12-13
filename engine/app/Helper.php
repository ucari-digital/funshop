<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    public static function typeProduct($number)
    {
        if($number == 1 || $number == 4)
        {
            return 'new';
        }
        if($number == 2 || $number == 5)
        {
            return 'sale';
        }
        if($number == 3 || $number == 6)
        {
            return 'hot';
        }
    }
}
