<!DOCTYPE html>
<html>
<head>
    <title>QR code Generator</title>
</head>
<body>
<div class="visible-print text-center">
    <h1>Laravel 7 - QR Code Generator Example</h1>

    <div class="container mt-4">
        <div class="mb-3">{!! DNS2D::getBarcodeHTML('4445645656', 'QRCODE') !!}</div>

        <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'PHARMA') !!}</div>

        <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'PHARMA2T') !!}</div>

        <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'CODABAR') !!}</div>

        <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'KIX') !!}</div>

        <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'RMS4CC') !!}</div>

        <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'UPCA') !!}</div>
        <?php
        echo DNS1D::getBarcodeSVG('4445645656', 'PHARMA2T');
        echo DNS1D::getBarcodeHTML('4445645656', 'PHARMA2T');
        echo '<img src="data:image/png,' . DNS1D::getBarcodePNG('4', 'C39+') . '" alt="barcode"   />';
        echo DNS1D::getBarcodePNGPath('4445645656', 'PHARMA2T');
        echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG('4', 'C39+') . '" alt="barcode"   />';

        ?>
    </div>
</div>
</body>
</html>
