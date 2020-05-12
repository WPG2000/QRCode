$(".btn_remove").click(function(){

	/* -- */

	/* ............................ */
	if(action_nav_btn=='action_nav_btn_removidos'){
		$(".mbw_800x600 .mb_body").load("engine/dynamic-success/php/index.php?action_nav_btn="+action_nav_btn+"_delete&&id_escolhido="+id_escolhido+"&&screen_label="+screen_label);
	}
	/* ............................ */
	
	/* -- */
	
	/* ............................ */
	if(action_nav_btn=='action_nav_btn_edit'){
		$(".mbw_800x600 .mb_body").load("engine/dynamic-success/php/index.php?action_nav_btn="+action_nav_btn+"_remove&&id_escolhido="+id_escolhido+"&&screen_label="+screen_label);
	}
	/* ............................ */
	
	/* -- */
	
	/* ............................ */
	$(".mbw_800x600").fadeIn(400);	
	$(".mbw_800x600 .modal_box").css({marginTop:'-100%'});		
	$(".mbw_800x600 .modal_box").animate({marginTop:'5%'},600);		
	/* ............................ */
	
	/* -- */
	
	/* ............................ */
	if(screen_label=="desocup_pedido"){
		$(".mbw_800x600 .mb_body").load("engine/dynamic-success/php/index.php?action_nav_btn="+action_nav_btn+"_remove&&id_escolhido="+id_escolhido+"&&screen_label="+screen_label);
	}//end if
	/* ............................ */
	
	/* -- */
	
});//end click