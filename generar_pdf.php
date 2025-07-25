<?php
require_once __DIR__ . '/library/mpdf_1.6.2/vendor/autoload.php';

try {
    // Configuración inicial de mPDF (versión antigua)
    $mpdf = new \mPDF(
        'utf-8',                // mode
        'A4',                   // format
        '',                     // default font size
        '',                     // default font
        15,                     // margin_left
        15,                     // margin right
        15,                     // margin top
        15,                     // margin bottom
        9,                      // margin header
        9,                      // margin footer
        'P'                     // orientation
    );

    // EJEMPLO D: Proteger PDF con contraseña (sintaxis antigua)
    $mpdf->SetProtection(
        array('copy', 'print'), // permisos
        'clave_usuario_pepinillo',        // password usuario
        'clave_propietario_passw34'     // password propietario
    );

    // EJEMPLO B: Encabezado y pie de página
    $mpdf->SetHeader('|Página {PAGENO} de {nb}|');
    $mpdf->SetFooter('{DATE j-m-Y H:i}|Documento generado|');

    // EJEMPLO A: CSS externo (formato antiguo)
    $stylesheet = file_get_contents('assets/estilo.css');
    $mpdf->WriteHTML($stylesheet, 1); // 1 = CSS mode

    // Contenido HTML principal
    $html = '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Documento PDF</title>
        <style>
            body { font-family: Arial; }
            h1 { color: #0066cc; }
        </style>
    </head>
    <body>
        <h1>PDF con funciones básicas</h1>
        <p>Documento compatible con PHP 5.6 y mPDF 1.6.2</p>
        <p>Nota: Algunas características avanzadas pueden no estar disponibles</p>
    </body>
    </html>';

    $mpdf->WriteHTML($html);
    $mpdf->Output('documento_compatible.pdf', 'I');

} catch (\Exception $e) {
    die('Error al generar PDF: ' . $e->getMessage());
}