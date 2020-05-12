if(action_nav_btn=='action_nav_btn_removidos'){
	$(".btn_save").hide();
	$(".btn_decline .text").html("");
	$(".btn_decline .icone").toggleClass("icon-arrow-left");	
	$(".btn_decline").addClass("btn_decline_on_update");
	$(".btn_remove").show();		
	$(".btn_remove .icone").toggleClass("icon-delete_forever");		
	$(".btn_reactive").show();	
	$(".btn_reactive .icone").toggleClass("icon-folder-download");
	
	$("#form_[@screen_label]").find('input,select,textarea').attr('readonly', 'readonly').addClass('disabled_fields');
	$("#form_[@screen_label]").find('select').attr('disabled', true).addClass('disabled_fields');		
}//end action_nav_btn_removidos