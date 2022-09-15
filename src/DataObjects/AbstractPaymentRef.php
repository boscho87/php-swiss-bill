<?php

namespace Boscho87\PhpSwissBill\DataObjects;

use Boscho87\PhpSwissBill\QrCode\IQrCodeable;

abstract class AbstractPaymentRef implements IQrCodeable
{
    public const QQR = 'QRR';
    public const SCOR = 'SCOR';
    public const NON = 'NON';

    protected function __construct(
        protected ?string $value
    ) {
    }


    abstract public static function create(?string $reference = null): self;

    abstract public function getType(): string;

    abstract public function getData(): string;

    public function getQrData(): array
    {
        $type = $this->getType();
        // TODO: Implement getQrData() method.
        return [];
    }
}
