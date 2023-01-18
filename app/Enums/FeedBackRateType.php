<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class FeedBackRateType extends Enum
{
    const NULL = 0;
    const POOR = 1;
    const MEDIUM = 2;
    const FAIR = 3;
    const GOOD= 4;
    const EXCELLENT= 5;
}
