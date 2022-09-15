<?php

namespace Boscho87\PhpSwissBill\DataObjects;

class QrBill
{
    public function __construct(
        private readonly Header $header,
        private readonly ?CreditorInfo $creditorInfo = null,
        private readonly ?Address $address = null
    ) {
    }

    public static function create(): self
    {
        return new self(
            Header::createDefault()
        );
    }
}
