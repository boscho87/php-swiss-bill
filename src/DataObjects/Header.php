<?php

namespace Boscho87\PhpSwissBill\DataObjects;

use Boscho87\PhpSwissBill\QrCode\IQrCodeable;

class Header implements IQrCodeable
{
    public const QR_TYPE = 'SCP';
    public const VERSION = '0200';
    public const CODING = '1';

    private function __construct(
        private readonly string $type,
        private readonly string $version,
        private readonly string $coding
    ) {
    }

    public static function createDefault(): self
    {
        return new self(
            self::QR_TYPE,
            self::VERSION,
            self::CODING
        );
    }

    public function getQrData(): array
    {
        // TODO: Implement getQrData() method.
    }
}
