<?php

namespace Database\Factories;

use App\Enums\FigureType;
use App\Enums\HairType;
use App\Enums\NationalityType;
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
            'phone' => '+7 (999)-624-' . $this->faker->numberBetween(1111, 9999),
            'greeting' => $this->faker->text(random_int(100, 250)),
            'description' => $this->faker->text(random_int(400, 750)),
            'birthdate' => $this->faker->dateTimeBetween('-70 years', '-18 years')->format('Y-m-d'),
            'weight' => $this->faker->numberBetween(30, 120),
            'height' => $this->faker->numberBetween(140, 220),
            'chest' => $this->faker->numberBetween(0, 7),
            'hair' => $this->faker->randomElement(HairType::asArray()),
            //            'nationality' => $this->faker->randomElement(NationalityType::asArray()),
            'figure' => $this->faker->randomElement(FigureType::asArray()),
            'service_ids' => [$this->faker->numberBetween(1, 20)],
            'user_id' => 1,
        ];
    }
}
