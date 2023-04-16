<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class OutcallType extends Enum
{
    public const APARTMENT = 'На квартиру';
    public const HOTEL = 'В гостиницу';
    public const OFFICE = 'В офис';
    public const HOUSE = 'В загородный дом';
    public const SAUNA = 'В сауну';
}
