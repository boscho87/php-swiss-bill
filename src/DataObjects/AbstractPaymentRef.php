<?php

namespace Boscho87\PhpSwissBill\DataObjects;

use Boscho87\PhpSwissBill\QrCode\IQrCodeable;

abstract class AbstractPaymentRef implements IQrCodeable
{
    protected function __construct(
        protected ?string $value
    ) {
    }

    abstract public static function create(?string $value = null): self;

    abstract public function getType(): string;

    abstract public function getData(): string;

    public function getQrData(): array
    {
        return [
            $this->getType(),
            $this->getValue(),
        ];
    }

    public function getValue(): ?string
    {
        return $this->value;
    }
}
