<?php

namespace App\Models;

use App\Enums\FigureType;
use App\Enums\HairType;
use App\Enums\MessengerList;
use App\Enums\OrientationType;
use App\Enums\OutcallType;
use Illuminate\Database\Eloquent\Casts\AsEnumCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
use Staudenmeir\EloquentJsonRelations\Relations\BelongsToJson;

class Card extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasJsonRelationships;

    protected $casts = [
        'hair_type' => HairType::class,
        'orientation' => OrientationType::class,
        'figure_type' => FigureType::class,
        'outcall_type' => AsEnumCollection::class.':'.OutcallType::class,
        'messengers' => AsEnumCollection::class.':'.MessengerList::class,
        'services' => 'array',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('photos');
    }

    public function services(): BelongsToJson
    {
        return $this->belongsToJson(Service::class, 'services[]->service_id');
    }
}
