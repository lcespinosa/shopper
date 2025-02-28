<?php

declare(strict_types=1);

namespace Shopper\Core\Enum;

use Filament\Support\Contracts\HasDescription;
use Filament\Support\Contracts\HasLabel;
use Shopper\Core\Traits\ArrayableEnum;

enum DiscountType: string implements HasDescription, HasLabel
{
    use ArrayableEnum;

    case Percentage = 'percentage';

    case FixedAmount = 'fixed_amount';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Percentage => __('shopper-core::enum/discount.type.percentage'),
            self::FixedAmount => __('shopper-core::enum/discount.type.fixed_amount'),
        };
    }

    public function getDescription(): ?string
    {
        return match ($this) {
            self::Percentage => __('shopper-core::enum/discount.type.percentage_description'),
            self::FixedAmount => __('shopper-core::enum/discount.type.fixed_amount_description'),
        };
    }
}
