<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $table = 'room';

    public function scopeLateId($query)
    {
        return $query->orderBy('id_room','DESC');
    }

}
