<?php declare(strict_types=1);

namespace App\Enums\Payment;

use BenSampo\Enum\Enum;

/**
 * @method static static DEPOSIT()
 * @method static static WITHDRAWAL()
 */
final class TransactionType extends Enum
{
    const DEPOSIT = 'deposit';
    const WITHDRAWAL = 'withdrawal';
}
