<?php

namespace Boscho87\PhpSwissBillTest\src\QCode;

use Boscho87\PhpSwissBill\QrCode\QrBill;
use Boscho87\PhpSwissBillTest\BaseTestCase;

class QRBillTest extends BaseTestCase
{
    public function testIfQRBillCanBeCreated(): void
    {
        $qrBill = QrBill::create();
        $this->assertInstanceOf(QrBill::class, $qrBill);
    }
}
