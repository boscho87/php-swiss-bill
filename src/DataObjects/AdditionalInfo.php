<?php

namespace Boscho87\PhpSwissBill\DataObjects;

use Boscho87\PhpSwissBill\QrCode\IQrCodeable;

class AdditionalInfo implements IQrCodeable
{
    private function __construct(
        private ?string $message,
        private ?string $billInformation
    ) {
    }

    public static function create(?string $message, ?string $billInformation = null): self
    {
        return new self($message, $billInformation);
    }

    public function getQrData(): array
    {
        // TODO: Implement getQrData() method.
    }
}
