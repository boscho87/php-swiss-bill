<?php

namespace Boscho87\PhpSwissBill\DataValidation;

class Error
{
    public function __construct(
        private string $message,
        private string $key = '',
    ) {
    }
}
