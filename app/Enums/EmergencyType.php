<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class EmergencyType extends Enum
{
    const Fire = 1;
    const Accident = 2;
    const Medical = 3;
    const Crime = 4;
    const Disaster = 5;
    const Other = 6;
}
