<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class ServiceType extends Enum
{
    public const MAIN = 'основные';
    public const ADDITION = 'дополнительные';
    public const BDSM = 'садо-мазо';
    public const EXTREME = 'экстрим';
    public const MASSAGE = 'массаж';
}
