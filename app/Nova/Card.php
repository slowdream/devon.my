<?php

namespace App\Nova;

use App\Enums\FigureType;
use App\Enums\HairType;
use App\Models\Service;
use Dniccum\PhoneNumber\PhoneNumber;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Outl1ne\MultiselectField\Multiselect;

class Card extends Resource
{
    public static $model = \App\Models\Card::class;

    public static $title = 'name';

    public static $search = [
        'id',
        'name',
    ];

    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Имя', 'name')
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

            Text::make('Приветственная фраза', 'greeting')
                ->rules('required', 'max:255'),

            Trix::make('Текст на персональной странице', 'description'),

            PhoneNumber::make('Номер телефона', 'phone')
                ->placeholder('+7 (###)-###-####')
                ->format('+7 (###)-###-####')
                ->country('RU'),

            Number::make('Вес', 'weight')->min(30)->max(200),
            Number::make('Рост', 'height')->min(110)->max(300),
            Number::make('Грудь', 'chest')->min(0)->max(5),


            Multiselect::make('Услуги', 'service_ids')
                ->options(
                    Service::all()
                        ->mapWithKeys(fn (Service $service) => [$service->id => $service->name])->toArray()
                ),

            Select::make('Волосы', 'hair')->options(HairType::asSelectArray()),
//            Select::make('Национальность', 'nationality')->options(NationalityType::asSelectArray()),
            Select::make('Фигура', 'figure')->options(FigureType::asSelectArray()),

            BelongsTo::make('Owner', 'owner', User::class)
                ->withMeta(['value' => $request->user()->id])
                ->readonly(),
        ];
    }
}
