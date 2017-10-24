<?php
set_time_limit(0);
/**
* 
*/
class GeneraPDF{
	require_once 'public/mpdf/mpdf.php'; //Libreria mpdf
	
	function generaArchivo($archivo){
		error_reporting(E_ALL);

		require_once 'PDF/mpdf.php';

		$mpdf = new mPDF('utf-8', '', 9, 'dejavusans');

		$file = fopen("$archivo", "r");
		$contador = 0;

		while (!feof($file)) {
			$linea = fgets($file);
			$contador++;
			$partes = explode("|", $linea);
			$numCta = $partes[0];
			$nombre = $partes[1];
			$foja = $partes[2];
			$folio = $partes[3];

			ob_start();
			/* Cargamos el documento que se requiere generar *

			/* mandamos llamar al footer*/

			include 'codigo.php';

			$html = ob_get_clean();

			$stylesheet = file_get_contents('./assets/styles.css');

			$mpdf->WriteHTML($stylesheet, 1);

			$mpdf->WriteHTML($html, 2);
		}

		$mpdf->Output();

		fclose($file);
		# code...
	}
}
?>
