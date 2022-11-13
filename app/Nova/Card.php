<?php

namespace App\Nova;

use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Card extends Resource
{
    public static $model = \App\Models\Card::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name',
    ];

    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Name')
                ->sortable()
                ->rules('required', 'max:255'),

            Images::make('Images', 'photos') // second parameter is the media collection name
            //->conversionOnPreview('medium-size') // conversion used to display the "original" image
            //->conversionOnDetailView('thumb') // conversion used on the model's view
            //->conversionOnIndexView('thumb') // conversion used to display the image on the model's index page
            //->conversionOnForm('thumb') // conversion used to display the image on the model's form
            ->fullSize() // full size column
            //->rules('required', 'size:3') // validation rules for the collection of images
            // validation rules for the collection of images
            ->singleImageRules('dimensions:min_width=100'),

            BelongsTo::make('Owner', 'owner', User::class),
        ];
    }
}
