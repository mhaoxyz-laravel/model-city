<?php

namespace App\Model;

use Mhaoxyz\Laravel\Model\City as Model;

class City extends Model
{
    protected $fillable = ['province_id', 'name'];
}
