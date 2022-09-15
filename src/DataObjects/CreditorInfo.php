<?php

namespace Boscho87\PhpSwissBill\DataObjects;

class CreditorInfo
{
    public function __construct(
        private readonly string $iban
    ) {
    }


    public static function create(string $iban): self
    {
        return new self($iban);
    }
}
