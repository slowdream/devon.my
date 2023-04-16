<?php

namespace Database\Seeders;

use App\Enums\ServiceType;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public final const SERVICE_MAP = [
        ServiceType::MAIN => [
            'Классический секс',
            'Минет в презервативе',
            'Анальный секс',
            'Групповой секс',
            'Секс лесбийский',
            'Секс в машине',
        ],
        ServiceType::ADDITION => [
            'Минет без презерватива',
            'Минет глубокий',
            'Минет в машине',
            'Куннилингус',
            'Поза 69',
            'Окончание на грудь',
            'Окончание на лицо',
            'Окончание в рот',
            'Игрушки',
            'Ролевые игры',
            'Услуги семейной паре',
            'Эскорт',
            'Стриптиз профи',
            'Стриптиз любительский',
            'Лесби-шоу легкое',
            'Виртуальный секс',
        ],
        ServiceType::BDSM => [
            'Бандаж',
            'Госпожа',
            'Рабыня',
            'Доминация',
            'Порка',
            'Фетиш',
            'Трамплинг',
        ],
        ServiceType::EXTREME => [
            'Страпон',
            'Аннилингус делаю',
            'Золотой дождь выдача',
            'Золотой дождь прием',
            'Копрофагия выдача',
            'Фистигн анальный',
            'Фистинг классический',
        ],
        ServiceType::MASSAGE => [
            'Массаж классический',
            'Массаж эротический',
            'Массаж расслабляющий',
            'Массаж профессиональный',
            'Боди массаж',
            'Массаж урологический',
            'Массаж ветка сакуры',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (self::SERVICE_MAP as $serviceType => $names) {
            foreach ($names as $name) {
                Service::create([
                    'name' => $name,
                    'type' => $serviceType,
                ]);
            }
        }
    }
}
