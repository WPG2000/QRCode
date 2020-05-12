<meta charset="utf8">

<link rel="stylesheet" type="text/css" href="engine/css/estilo.css" />

<title>QRCODE v1</title>

<?php

	$featureName = "QRCode";
	
	echo "Olá $featureName!";	
	echo "<br>";
	
	include('engine/phpqrcode/qrlib.php'); 
	
	QRcode::png("https://wpgmatrix.000webhostapp.com/QRCode/testeRapido/sitePagamento/index.php?valorDigitado=1", "engine/QRCodes_gerados/QR_code.png", QR_ECLEVEL_L, 4);
	
?>

<img src="engine/QRCodes_gerados/QR_code.png">