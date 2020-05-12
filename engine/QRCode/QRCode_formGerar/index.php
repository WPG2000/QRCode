<?php
	
	$valorDigitado = $_REQUEST['valorDigitado'];
	
	include('../QRCode_phpLib/qrlib.php'); 
	
	QRcode::png("https://wpgmatrix.000webhostapp.com/QRCode/siteDePagamento/index.php?valorDigitado=$valorDigitado", "../QRCode_gerados/QR_code_$valorDigitado.png", QR_ECLEVEL_L, 4);
	
	echo "QR_code_$valorDigitado.png";
	
?>