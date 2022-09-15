<?php

namespace Boscho87\PhpSwissBill\QrCode;

interface IQrCodeable
{
    public function getQrData(): array;
}
