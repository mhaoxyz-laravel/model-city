<?php

namespace Mhaoxyz\Laravel\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Messeone\Distribution\Model\Model;

class Province extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    // relations

    public function cities()
    {
        return $this->hasMany(static::getClass('City'));
    }
}
