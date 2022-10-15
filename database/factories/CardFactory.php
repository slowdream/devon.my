<?php

namespace Database\Factories;

use App\Enums\FigureType;
use App\Enums\HairType;
use App\Enums\NationalityType;
use App\Enums\OrientationType;
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
            'photo' => $this->faker->imageUrl,
            'photos' => [
                $this->faker->imageUrl,
                $this->faker->imageUrl,
                $this->faker->imageUrl,
            ],
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
        ];
    }
}