<?php

namespace Boscho87\PhpSwissBill\DataObjects;

use Boscho87\PhpSwissBill\QrCode\IQrCodeable;

class PaymentLevelInfo implements IQrCodeable
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

    public function getQrData(): array
    {
        // TODO: Implement getQrData() method.
    }
}
