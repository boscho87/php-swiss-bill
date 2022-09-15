<?php

namespace Boscho87\PhpSwissBill\DataObjects;

use Boscho87\PhpSwissBill\QrCode\IQrCodeable;

class AdditionalInfo implements IQrCodeable
{
    public const TRAILER = 'EPD';

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
        return array_values([
            $this->getMessage(),
            self::TRAILER,
            $this->getBillInformation(),
        ]);
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function getBillInformation(): ?string
    {
        return $this->billInformation;
    }
}
