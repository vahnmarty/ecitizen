<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class AnnouncementType extends Enum
{
    const General = 0;
    const ExecutiveOrder = 1;
    const Memorandum = 3;
    const ClassSuspension = 4;
    const Holiday = 5;
    const WeatherAlert = 6;
    const PublicService = 7;
}
