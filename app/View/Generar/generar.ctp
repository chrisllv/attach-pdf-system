<?php

	// Instancia de PDF_EDIT para modificar el archivo
	$parser = new PDF_EDIT(file_get_contents($file));

	// Se reemplaza el texto TCPDF por PDF_EDIT

	// Se obtiene el archivo editado
	$a = $parser->Output();

	$pdf = new TCPDF();
	$pdf->AddPage();
	$pdf->up_buffer($a);
	$pdf->Output("juan.pdf", 'D');

?>