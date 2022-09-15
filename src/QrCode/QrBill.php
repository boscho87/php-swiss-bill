<?php

namespace Boscho87\PhpSwissBill\QrCode;

use Boscho87\PhpSwissBill\DataObjects\Address;
use Boscho87\PhpSwissBill\DataObjects\CreditorInfo;
use Boscho87\PhpSwissBill\DataObjects\Header;

class QrBill implements IQrCodeable
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

    public function getQrData(): array
    {
        //Todo avoid a loop here!!
        foreach (get_object_vars($this) as $qrCodable) {
            $qrData[] = $qrCodable;
        }
        return $qrData ?? [];
    }
}
