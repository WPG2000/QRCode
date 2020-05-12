$(".btn_decline").click(function(){

	if(screen_label=="dimob"){
		if(action_nav_btn=="action_nav_btn_edit"){
			var url_set = "engine/dynamic-grid/php/"+screen_label_session+"/"+screen_label_session+"_gridDetails.php?id_escolhido="+id_escolhido+"&&action_nav_btn=action_nav_btn_edit&&details=yes";
			window.location.hash = screen_label_session+"_view";
		}
		if(action_nav_btn=="action_nav_btn_novo"){
			var url_set = "engine/dynamic-grid/php/dynamic-grid.php?action_nav_btn=action_nav_btn_novo";
			window.history.pushState("", screen_label, "#"+screen_label);
		}
		function beforeSendFunc(){
			$(".recept_box").html('<img src="engine/imgs/preloaders-gif/preloader-gif5.gif" class="preloader" />');
			$("#er_title_box").hide();
		}
	}else{
		var url_set = "engine/dynamic-grid/php/dynamic-grid.php?action_nav_btn=action_nav_btn_novo";
		function beforeSendFunc(){
			$(".recept_box").html('<img src="engine/imgs/preloaders-gif/preloader-gif5.gif" class="preloader" />');
			$("#er_title_box").hide();
			window.history.pushState("", screen_label, "#"+screen_label);
		}
	}

	$.ajax({
		url: url_set,
		beforeSend: function(){
			beforeSendFunc();
		},
		success: function( data ){
			
			setTimeout(function(){
														
				$("#er_title_box").load("engine/nav-bars/title-box/php/index.php").fadeIn(1000);							
				$(".recept_box").html("").hide();
				$("#rb_"+screen_label).html(data).show();				
			
			}, 600);
		}//end success
		
	});//end ajax	
	
	return false;
	
								
});//end click