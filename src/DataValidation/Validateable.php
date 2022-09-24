<?php

namespace Boscho87\PhpSwissBill\DataValidation;

interface Validateable
{
    public function validate(): bool;
}
