<?php

namespace Boscho87\PhpSwissBill\DataObjects;

class PaymentLevelInfo
{
    private function __construct(
        private string $currency,
        private ?float $amount
    ) {
    }

    public static function create(string $currency, ?float $amount = null): self
    {
        return new self($currency, $amount);
    }
}
