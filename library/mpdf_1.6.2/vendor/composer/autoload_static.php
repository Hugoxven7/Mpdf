<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2e00e9e8e4ec2f7781e07f679c63adce
{
    public static $classMap = array (
        'CGIF' => __DIR__ . '/..' . '/mpdf/mpdf/classes/gif.php',
        'CGIFCOLORTABLE' => __DIR__ . '/..' . '/mpdf/mpdf/classes/gif.php',
        'CGIFFILEHEADER' => __DIR__ . '/..' . '/mpdf/mpdf/classes/gif.php',
        'CGIFIMAGE' => __DIR__ . '/..' . '/mpdf/mpdf/classes/gif.php',
        'CGIFIMAGEHEADER' => __DIR__ . '/..' . '/mpdf/mpdf/classes/gif.php',
        'CGIFLZW' => __DIR__ . '/..' . '/mpdf/mpdf/classes/gif.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'FPDF_TPL' => __DIR__ . '/..' . '/setasign/fpdi/fpdf_tpl.php',
        'FPDI' => __DIR__ . '/..' . '/setasign/fpdi/fpdi.php',
        'FilterASCII85' => __DIR__ . '/..' . '/setasign/fpdi/filters/FilterASCII85.php',
        'FilterASCIIHexDecode' => __DIR__ . '/..' . '/setasign/fpdi/filters/FilterASCIIHexDecode.php',
        'FilterLZW' => __DIR__ . '/..' . '/setasign/fpdi/filters/FilterLZW.php',
        'INDIC' => __DIR__ . '/..' . '/mpdf/mpdf/classes/indic.php',
        'MYANMAR' => __DIR__ . '/..' . '/mpdf/mpdf/classes/myanmar.php',
        'OTLdump' => __DIR__ . '/..' . '/mpdf/mpdf/classes/otl_dump.php',
        'PDFBarcode' => __DIR__ . '/..' . '/mpdf/mpdf/classes/barcode.php',
        'SEA' => __DIR__ . '/..' . '/mpdf/mpdf/classes/sea.php',
        'SVG' => __DIR__ . '/..' . '/mpdf/mpdf/classes/svg.php',
        'TTFontFile' => __DIR__ . '/..' . '/mpdf/mpdf/classes/ttfontsuni.php',
        'TTFontFile_Analysis' => __DIR__ . '/..' . '/mpdf/mpdf/classes/ttfontsuni_analysis.php',
        'UCDN' => __DIR__ . '/..' . '/mpdf/mpdf/classes/ucdn.php',
        'bmp' => __DIR__ . '/..' . '/mpdf/mpdf/classes/bmp.php',
        'cssmgr' => __DIR__ . '/..' . '/mpdf/mpdf/classes/cssmgr.php',
        'directw' => __DIR__ . '/..' . '/mpdf/mpdf/classes/directw.php',
        'fpdi_pdf_parser' => __DIR__ . '/..' . '/setasign/fpdi/fpdi_pdf_parser.php',
        'grad' => __DIR__ . '/..' . '/mpdf/mpdf/classes/grad.php',
        'mPDF' => __DIR__ . '/..' . '/mpdf/mpdf/mpdf.php',
        'meter' => __DIR__ . '/..' . '/mpdf/mpdf/classes/meter.php',
        'mpdfform' => __DIR__ . '/..' . '/mpdf/mpdf/classes/mpdfform.php',
        'otl' => __DIR__ . '/..' . '/mpdf/mpdf/classes/otl.php',
        'pdf_context' => __DIR__ . '/..' . '/setasign/fpdi/pdf_context.php',
        'tocontents' => __DIR__ . '/..' . '/mpdf/mpdf/classes/tocontents.php',
        'wmf' => __DIR__ . '/..' . '/mpdf/mpdf/classes/wmf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit2e00e9e8e4ec2f7781e07f679c63adce::$classMap;

        }, null, ClassLoader::class);
    }
}
