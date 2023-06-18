<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Card::factory(50)->create()->each(static function (Card $card) {
            for ($i = 0; $i < random_int(20, 35); $i++) {
                $card
                    ->addMedia(__DIR__ . '/default_photo.jpg')
                    ->preservingOriginal()
                    ->toMediaCollection('photos');
            }
        });
    }
}
