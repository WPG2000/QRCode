$(".btn_generate_link").click(function(){
		$(".mbw_800x600_closable").fadeIn(200);			
		$(".mbw_800x600_closable .mb_body").load("engine/generate-link/php/index.php?id_escolhido="+id_escolhido+"&&screen_label="+screen_label).fadeIn(200);			
});//end click