<?php

namespace Boscho87\PhpSwissBill\DataObjects;

class AdditionalInfo
{


    private function __construct(
        private ?string $message,
        private ?string $billInformation
    ) {
    }

    public static function create(?string $message, ?string $billInformation = null): self
    {
        return new self($message, $billInformation);
    }

}
