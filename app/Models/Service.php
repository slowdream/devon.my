<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentJsonRelations\HasJsonRelationships;

class Service extends Model
{
    use HasFactory;
    use HasJsonRelationships;

    public function cards()
    {
        return $this->belongsToJson(Card::class, 'services');
    }
}
