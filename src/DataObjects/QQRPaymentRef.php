<?php

namespace Boscho87\PhpSwissBill\DataObjects;

class QQRPaymentRef extends AbstractPaymentRef
{
    public static function create(?string $reference = null): self
    {
        return new QQRPaymentRef($reference);
    }

    public function getType(): string
    {
        return 'QQR';
    }

    public function getData(): string
    {
        return $this->value;
    }
}
