<?php

namespace App\Models;

use App\Enums\FigureType;
use App\Enums\HairType;
use App\Enums\NationalityType;
use App\Enums\OrientationType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $casts = [
        'photos' => 'array',
        'birthdate' => 'datetime:Y-m',
        'hair' => HairType::class,
        'nationality' => NationalityType::class,
        'figure' => FigureType::class,
        'orientation' => OrientationType::class,
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
