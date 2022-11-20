<?php

namespace App\Models;

use App\Enums\FigureType;
use App\Enums\HairType;
use App\Enums\NationalityType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Card extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $casts = [
        'photos' => 'array',
        'birthdate' => 'datetime:Y-m',
        'hair' => HairType::class,
        'nationality' => NationalityType::class,
        'figure' => FigureType::class,
        'service_ids' => 'array',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('photos');
    }
}
