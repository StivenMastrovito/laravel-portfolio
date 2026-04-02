<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
