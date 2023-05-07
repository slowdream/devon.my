<?php

namespace Database\Factories;

use App\Enums\FigureType;
use App\Enums\HairType;
use App\Enums\OrientationType;
use App\Enums\OutcallType;
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
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(18, 40),
            'weight' => $this->faker->numberBetween(40, 100),
            'height' => $this->faker->numberBetween(150, 190),
            'breast' => $this->faker->numberBetween(75, 105),
            'appearance' => $this->faker->randomElement(HairType::getValues()),
            'orientation' => $this->faker->randomElement(OrientationType::getValues()),
            'hair_type' => $this->faker->randomElement(HairType::getValues()),
            'body_type' => $this->faker->randomElement(FigureType::getValues()),
            'district' => $this->faker->city(),
            'street' => $this->faker->streetName(),
            'phone_number' => $this->faker->phoneNumber(),
            'messengers' => $this->faker->randomElement(['WhatsApp', 'Telegram', 'Viber']),
            'call_from' => $this->faker->optional()->time(),
            'call_to' => $this->faker->optional()->time(),
            'age_limit_from' => $this->faker->optional()->numberBetween(18, 60),
            'age_limit_to' => $this->faker->optional()->numberBetween(18, 60),
            'contacts_limit' => $this->faker->optional()->numberBetween(1, 5),
            'price_table' => [[ 'name' => '1 hour', 'price' => 1000], [ 'name' => '4 hour', 'price' => 4000], [ 'name' => 'night', 'price' => 7000]],

//            'apartment_hour_1_price' => $this->faker->optional()->numberBetween(100, 1000),
//            'outcall_hour_1_price' => $this->faker->optional()->numberBetween(150, 1500),
//            'apartment_hour_2_price' => $this->faker->optional()->numberBetween(200, 2000),
//            'outcall_hour_2_price' => $this->faker->optional()->numberBetween(300, 3000),
//            'night_apartment_price' => $this->faker->optional()->numberBetween(1000, 5000),
//            'night_outcall_price' => $this->faker->optional()->numberBetween(1500, 10000),
//            'express_program_price' => $this->faker->optional()->numberBetween(10, 50),
            'outcall_type' => $this->faker->optional()->randomElement(OutcallType::getValues()),
            'description' => $this->faker->paragraph,

            'user_id' => 1,
        ];
    }
}
