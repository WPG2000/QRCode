$(".btn_reactive").click(function(){

	/* -- */

	/* ............................ */	
	$(".mbw_800x600 .mb_body").load("engine/dynamic-success/php/index.php?action_nav_btn="+action_nav_btn+"_reactive&&id_escolhido="+id_escolhido+"&&screen_label="+screen_label);	
	/* ............................ */
	
	/* -- */
	
	/* ............................ */
	$(".mbw_800x600").fadeIn(400);	
	$(".mbw_800x600 .modal_box").css({marginTop:'-100%'});		
	$(".mbw_800x600 .modal_box").animate({marginTop:'5%'},600);		
	/* ............................ */
	
	/* -- */
	
});//end click	