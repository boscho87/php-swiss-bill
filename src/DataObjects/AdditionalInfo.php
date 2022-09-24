<?php

namespace Boscho87\PhpSwissBill\DataObjects;

use Boscho87\PhpSwissBill\DataValidation\Error;

class AdditionalInfo extends AbstractDataElement
{
    public const TRAILER = 'EPD';

    private function __construct(
        private readonly ?string $message,
        private readonly ?string $billInformation
    ) {
    }

    public static function create(?string $message, ?string $billInformation = null): self
    {
        return new self($message, $billInformation);
    }

    public function getQrData(): array
    {
        return array_values([
            $this->getMessage(),
            self::TRAILER,
            $this->getBillInformation(),
        ]);
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function getBillInformation(): ?string
    {
        return $this->billInformation;
    }

    public function validate(): bool
    {
        if (strlen($this->message) > 140) {
            $this->errors[] = new Error(
                'max 140 chars for additional info message',
                self::class . 'message.too.long'
            );
        }

        if (strlen($this->billInformation) > 140) {
            $this->errors[] = new Error(
                'max 140 chars for additional info billInformation' .
                self::class . 'bill_information.too.long'
            );
        }
        return empty($this->errors);
    }
}
