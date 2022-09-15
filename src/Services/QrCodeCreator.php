<?php

namespace Boscho87\PhpSwissBill\Services;

use Boscho87\PhpSwissBill\QrCode\QrBill;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\SvgWriter;

//Todo implement this class
class QrCodeCreator
{
    protected const SVG_CROSS_LOGO = __DIR__ . '/../../_data/CH-Kreuz_7mm.svg';
    protected const CODE_SIZE = 540;
    protected const SWISS_LOGO_SIZE = 80;
    protected const OUTPUT_SVG = 'svg';
    protected const OUTPUT_PNG = 'png';

    protected QrCode $qrCode;
    protected Logo $logo;

    protected function __construct(string $codeData)
    {
        $this->qrCode = QrCode::create($codeData)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(self::CODE_SIZE)
            ->setMargin(0)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin());

        $this->logo = Logo::create(self::SVG_CROSS_LOGO)
            ->setResizeToHeight(self::SWISS_LOGO_SIZE)
            ->setResizeToWidth(self::SWISS_LOGO_SIZE);

        //Todo create a function for this
        $pngWriter = new SvgWriter();
        $dataUri = $pngWriter->write($this->qrCode, $logo, $label ?? null)->getDataUri();
        echo sprintf('<img src="%s"/>', $dataUri);
        die();
    }


    //todo specify the return type
    public static function create(QrBill $bill, string $format = self::OUTPUT_PNG): self
    {
        //todo validate the bill first

        $codeData = $bill->getQrCodeData();

        return new self('');
    }
}
