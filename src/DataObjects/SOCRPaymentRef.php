<?php

namespace Boscho87\PhpSwissBill\DataObjects;

class SOCRPaymentRef extends AbstractPaymentRef
{
    public static function create(?string $reference = null): AbstractPaymentRef
    {
        return new SOCRPaymentRef($reference);
    }

    public function getType(): string
    {
        return 'SOCR';
    }

    public function getData(): string
    {
        return $this->value;
    }
}
