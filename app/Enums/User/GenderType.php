<?php declare(strict_types=1);

namespace App\Enums\User;

use BenSampo\Enum\Enum;

/**
 * @method static static MALE()
 * @method static static FEMAL()
 * @method static static OTHER()
 */
final class GenderType extends Enum
{
    const MALE = 'M';
    const FEMALE = 'F';
    const OTHER = 'O';
}
