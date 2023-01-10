<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ArticleStatus extends Enum
{
    const Draft = 0;
    const PendingReview = 1;
    const Published = 2;
}
