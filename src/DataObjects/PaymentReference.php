<?php

namespace Boscho87\PhpSwissBill\DataObjects;

use Boscho87\PhpSwissBill\QrCode\IQrCodeable;

class PaymentReference implements IQrCodeable
{
    public const QQR = 'QRR';
    public const SCOR = 'SCOR';
    public const NON = 'NON';

    private function __construct(
        private string $type,
        private ?string $value
    ) {
    }


    public static function create(string $type, ?string $value = null): self
    {
        return new self($type, $value);
    }

    public static function createQQR(?string $value): self
    {
        return self::create(self::QQR, $value);
    }

    public static function createSCOR(?string $value): self
    {
        return self::create(self::SCOR, $value);
    }

    public static function createNON(?string $value): self
    {
        return self::create(self::NON, $value);
    }

    public function getQrData(): array
    {
        // TODO: Implement getQrData() method.
    }
}
