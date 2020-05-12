$("#"+form_master_attr_id).submit(function(){				


	if(screen_label=="gerarQRcode"){
		
		var url_set = "engine/QRCode/QRCode_formGerar/index.php";
		
	}else{
			
		var url_set = 'model/form-operation/crud/crud.php';		
			
	}
				

		var form = $(this);
			var formdata = false;
			if (window.FormData){
				formdata = new FormData(form[0]);
			}

			var formAction = form.attr('action');
			$.ajax({
				url         : url_set,
				data        : formdata ? formdata : form.serialize(),
				cache       : false,
				contentType : false,
				processData : false,
				type        : 'POST',
				beforeSend : function(){																															
					
					$("#"+form_master_attr_id+" button").attr("disabled",true).css({cursor:'auto'});				
					$("#"+form_master_attr_id+" .btn_save .icone").removeClass("icon-check-square");
					$("#"+form_master_attr_id+" .btn_save .icone").html('<img src="engine/imgs/preloaders-gif/mini-preloader1.gif" style="width:18px;height:18px;color:#FFF;" />');
					
					if((screen_label=="meu_cadastro")||(screen_label=="pedido_desocup")){
						$("#"+form_master_attr_id+" .btn_save .text").html("Enviando...");	
					}else{
						$("#"+form_master_attr_id+" .btn_save .text").html("Aguarde...");	
					}//end if
					
				},	
				success     : function(data, textStatus, jqXHR){

					setTimeout(function(){
						$("#er_modal").load("engine/modal/php/modal.php?screen_label="+screen_label);
					}, 200);

					setTimeout(function(){
						$( ".form_master button" ).attr("disabled",false).css({cursor:''});
						
						if(screen_label!="gerarQRcode"){
							$(".mbw_800x600 .mb_body").load("engine/dynamic-success/php/index.php?action_nav_btn="+action_nav_btn+"&&screen_label="+screen_label);
							$(".mbw_800x600").fadeIn(400);
							$(".mbw_800x600 .modal_box").css({marginTop:'-100%'});
							$(".mbw_800x600 .modal_box").animate({marginTop:'5%'},600);							
						}						

						$("#"+form_master_attr_id+" .btn_save .icone").addClass("icon-check-square");
						$("#"+form_master_attr_id+" .btn_save .icone").html('');

						if(screen_label=="gerarQRcode"){
							
							$("#"+form_master_attr_id+" .btn_save .text").html("Gerado!");
							
						}else{

							$("#"+form_master_attr_id+" .btn_save .text").html("Salvo!");

						}//end if

					}, 600);

					setTimeout(function(){
						
						if(screen_label=="gerarQRcode"){								
							$("#"+form_master_attr_id+" .btn_save .text").html("Gerar");								
						}else{
							$("#"+form_master_attr_id+" .btn_save .text").html("Salvar");
						}//end if
						
						if(screen_label=="gerarQRcode"){
																				
							$(".gerarQRcode_box .gQRcb_title").html("<b>QRCode gerado:</b>");
							$(".gerarQRcode_box .gQRcb_content").html("...").hide();
							$(".gerarQRcode_box .gQRcb_content").html("<img src='engine/QRCode/QRCode_gerados/"+data+"'>").fadeIn(600);							
							
						}
						
					}, 2000);
					
				}//end success
			});//end ajax method
			
			return false
		
	
});//end submit	