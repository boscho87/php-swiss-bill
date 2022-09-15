<?php

namespace Boscho87\PhpSwissBill\DataObjects;

use Boscho87\PhpSwissBill\QrCode\IQrCodeable;

class CreditorInfo implements IQrCodeable
{
    public function __construct(
        private readonly string $iban
    ) {
    }


    public static function create(string $iban): self
    {
        return new self($iban);
    }

    public function getQrData(): array
    {
        // TODO: Implement getQrData() method.
    }
}
