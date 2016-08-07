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
$pdf = new TCPDF();
$pdf->SetFont('times', '', 8);
// add a page
$pdf->AddPage();
//$pdf->Write(0, $contenido, '', 0, 'J', true, 0, false, false, 0);
$pdf->WriteHTML($contenido, $ln=true, $fondo=false, $reseth=false, $cell=false, $alineacion='L');
// attach an external file
$pdf->Annotation(70, 60, 3, 3, 'Marca 1', array('Subtype'=>'FileAttachment', 'Name' => 'PushPin', 'FS' => "/var/www/attach-pdf-system/app/webroot/audio/audio.mp3"));
$pdf->Annotation(70, 70, 3, 3, 'Marca 2', array('Subtype'=>'FileAttachment', 'Name' => 'PushPin', 'FS' => "/var/www/attach-pdf-system/app/webroot/audio/audio.mp3"));
// ---------------------------------------------------------
//Close and output PDF document
$pdf->Output($name, 'D');

//unlink($url);

//============================================================+
// END OF FILE
//============================================================+
