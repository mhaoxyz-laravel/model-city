<?php

namespace Mhaoxyz\Laravel\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Messeone\Distribution\Model\Model;

class City extends Model
{
    use SoftDeletes;

    protected $fillable = ['province_id', 'name'];

    // relations

    public function province()
    {
        return $this->belongsTo(static::getClass('Province'));
    }
}
