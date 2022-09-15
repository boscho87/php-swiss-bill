<?php

namespace Boscho87\PhpSwissBill\Services;

use Boscho87\PhpSwissBill\QrCode\QrBill;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\SvgWriter;

//Todo implement this class
class QrCodeCreator
{
    //todo specify the return type
    public static function createCode(QrBill $bill, ?string $codeLabel = null)
    {
        //todo validate the bill first

        $codeData = $bill->getQrCodeData();

        $pngWriter = new SvgWriter();
        $qrCode = QrCode::create($codeData)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        $logo = Logo::create(__DIR__ . '/../../_data/CH-Kreuz_7mm.svg')
            ->setResizeToHeight(30)
            ->setResizeToWidth(30);

        if ($codeLabel) {
            $label = Label::create($codeLabel)
                ->setTextColor(new Color(255, 0, 0));
        }

        $dataUri = $pngWriter->write($qrCode, $logo, $label ?? null)->getDataUri();
        echo sprintf('<img src="%s"/>', $dataUri);
        die();
    }
}
