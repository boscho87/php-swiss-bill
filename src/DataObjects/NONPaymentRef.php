<?php

namespace Boscho87\PhpSwissBill\DataObjects;

class NONPaymentRef extends AbstractPaymentRef
{
    public static function create(?string $reference = null): AbstractPaymentRef
    {
        return new NONPaymentRef($reference);
    }

    public function getType(): string
    {
        return 'NON';
    }

    public function getData(): string
    {
        return $this->value;
    }
}
