<meta charset="utf-8">

<title>Site de Pagamento - QRCode</title>

<link rel="stylesheet" type="text/css" href="engine/css/estilo.css">

<script src="engine/js/jquery-3.4.1.min.js"></script>

<?php			
	$valorDigitado = $_GET['valorDigitado'];
?>

<div class="preload"><img src="engine/imgs/preloaders-gif/preloader-gif5-bkp3.gif" style="width:150px;height:150px;" /></div>

<div class="contentBox">
	<h1>Site de Pagamento</h1>
	<p class="cB_small">Você está realizando o pagamento de:</p>
	<p class="cB_big"><b>R$ <?php echo $valorDigitado; ?></b></p>
</div>

<script>
$(document).ready(function(){
	setTimeout(function(){
		$(".preload").hide();
	}, 1500);
	setTimeout(function(){
		$(".contentBox").css({
			opacity:'1'
		});
	}, 1600);
	setTimeout(function(){
		$(".contentBox h1").css({
			opacity:'1'
		});
	}, 2000);
	setTimeout(function(){
		$(".contentBox .cB_small").css({
			opacity:'1'
		});
	}, 3000);
	setTimeout(function(){
		$(".contentBox .cB_big").css({
			opacity:'1'
		});
	}, 4000);
});
</script>