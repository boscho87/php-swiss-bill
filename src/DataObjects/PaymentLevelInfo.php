<?php

namespace Boscho87\PhpSwissBill\DataObjects;

class PaymentLevelInfo
{
    public function __construct(
        private string $currency,
        private ?float $amount = null
    ) {
    }

    public static function create(string $currency, float $amount): self
    {
        return new self($currency, $amount);
    }
}
