<?php
//============================================================+
// File name   : example_041.php
// Begin       : 2008-12-07
// Last Update : 2013-05-14
//
// Description : Example 041 for TCPDF class
//               Annotation - FileAttachment
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Annotation - FileAttachment
 * @author Nicola Asuni
 * @since 2008-12-07
 */

// Include the main TCPDF library (search for installation path).

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);

// set font
$pdf->SetFont('times', '', 16);
// add a page
$pdf->AddPage();
$txt = 'GENERANDO ACTA DEL AYUNTAMIENTO, Doble click en el icono para abrir escuchar la session.';
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);


// attach an external file
$pdf->Annotation(70, 18, 5, 5, 'Archivo de audio', array('Subtype'=>'FileAttachment', 'Name' => 'PushPin', 'FS' => $url));

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output($name, 'D');

unlink($url);

//============================================================+
// END OF FILE
//============================================================+
