<?php

namespace Database\Factories;

use App\Enums\FigureType;
use App\Enums\HairType;
use App\Enums\NationalityType;
use App\Enums\OrientationType;
use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'greeting' => $this->faker->text(random_int(100, 250)),
            'description' => $this->faker->text(random_int(400, 750)),
            'birthdate' => $this->faker->dateTimeBetween('-70 years', '-18 years')->format('Y-m-d'),
            'weight' => $this->faker->numberBetween(30, 120),
            'height' => $this->faker->numberBetween(140, 220),
            'chest' => $this->faker->numberBetween(0, 7),
            'hair' => $this->faker->randomElement(HairType::asArray()),
            'nationality' => $this->faker->randomElement(NationalityType::asArray()),
            'figure' => $this->faker->randomElement(FigureType::asArray()),
            'orientation' => $this->faker->randomElement(OrientationType::asArray()),
            'service_ids' => $this->faker->numberBetween(1, 20),
            'user_id' => 1,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Card $item) {
            $url = 'https://source.unsplash.com/random/1200x800/?people';
            for ($i = 0; $i < $this->faker->numberBetween(1, 5); $i++) {
                $item
                    ->addMediaFromUrl($url)
                    ->toMediaCollection('photos');
            }
        });
    }
}
