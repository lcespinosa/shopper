<?php

declare(strict_types=1);

namespace Shopper\Actions;

class DisableTwoFactorAuthentication
{
    public function __invoke($user): void
    {
        $user->forceFill([
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
        ])->save();
    }
}
