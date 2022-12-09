<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class HotlineCategory extends Enum
{
    const PoliceStation = 0;
    const MedicalAssistance = 1;
    const FireStation = 2;
    const LocalDisaster = 3;
    const TrafficAssistance = 4;
    const RedCross = 5;
    const LocalGovernment = 6;
}
