$(".btn_new").click(function(){
			
	
	$.ajax({									
			url: "engine/form-master/php/form-master.php?action_nav_btn=action_nav_btn_novo",	
			beforeSend: function(){								
							
				$("#er_title_box").hide();
				$(".recept_box").html('<img src="engine/imgs/preloaders-gif/preloader-gif5.gif" class="preloader" />');								
				
			},	
			success: function( data ){		
				
				setTimeout(function(){
				
					$("#er_title_box").load("engine/nav-bars/title-box/php/index.php").fadeIn(1000);
					$("#rb_"+screen_label).html(data);
					
				}, 1000);
				
				
			}//end success
				
		});//end method		
			
			return false;	
								
});//end click