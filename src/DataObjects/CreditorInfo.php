<?php

namespace Boscho87\PhpSwissBill\DataObjects;



class CreditorInfo extends AbstractDataElement
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

    public function validate(): bool
    {
        // TODO: Implement validate() method.
    }
}
