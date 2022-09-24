<?php

namespace Boscho87\PhpSwissBill\DataObjects;

use Boscho87\PhpSwissBill\DataValidation\Validateable;
use Boscho87\PhpSwissBill\QrCode\IQrCodeable;

abstract class AbstractDataElement implements Validateable, IQrCodeable
{
    protected array $errors = [];
}
