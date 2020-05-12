setTimeout(function(){

	if(action_nav_btn=='action_nav_btn_novo'){

		$(".btn_save").show();

		if(screen_label=="meu_cadastro"){

			$(".btn_save").hide();

			$("input").keyup(function(){
				$(".btn_save").show();
			});//end keyUp
			$("input").change(function(){
				$(".btn_save").show();
			});//end keyUp
			$("select").change(function(){
				$(".btn_save").show();
			});//end change

			$(".btn_save .text").html("Enviar solicitação por email");

			$(".btn_enable").show();
			$(".btn_enable .text").html("Editar");
			$(".btn_enable .icone").toggleClass("icon-edit");

		}else if((screen_label=="pedido_desocup")||(screen_label=="mensagem")||(screen_label=="ressarcimento")){
			$(".btn_save .text").html("Enviar");
		}else if(screen_label=="gerarQRcode"){
			$(".btn_save .text").html("Gerar");
		}else{
			$(".btn_save .text").html("Salvar");
		}

		if(screen_label=="manutenc_solic"){

			$(".btn_decline").show();
			$(".btn_decline .text").html("voltar");
			$(".btn_decline .icone").toggleClass("icon-arrow-left");

			$(".btn_new").hide();
			//$(".btn_new .text").html("Novo");
			//$(".btn_new .icone").toggleClass("icon-playlist_add");

		}else if(screen_label=="desocup_pedido"){

			//alert(screen_label);

			if(id_primary!=""){

				if(SITUACAO_DESOCUP=="NOVO"){
					$(".btn_remove").show();
				}//end if

				$(".btn_remove .text").html("Desfazer pedido");
				$(".btn_remove .icone").toggleClass("icon-square-cross");
			}//end if

			$(".btn_decline").hide();
			$(".btn_new").hide();
			$(".btn_generate_link").hide();

		}else if(screen_label=="desocup_anexos"){

			$(".btn_save").hide();
			$(".btn_decline").hide();
			$(".btn_new").hide();
			$(".btn_generate_link").hide();

		}else if(screen_label=="desocup_agendamento"){

			$(".btn_save").hide();
			$(".btn_decline").hide();
			$(".btn_new").hide();
			$(".btn_generate_link").hide();

		}else if(screen_label=="dimob"){

			$(".btn_decline").show();
			$(".btn_decline .icone").toggleClass("icon-arrow-left");
			$(".btn_decline .text").html("Voltar");
			$(".btn_new").hide();
			$(".btn_generate_link").hide();
			$(".btn_remove").hide();
			$(".btn_reactive").hide();

		}else{

			$(".btn_decline").hide();
			$(".btn_new").hide();
			$(".btn_generate_link").hide();
			$(".btn_remove").hide();
			$(".btn_reactive").hide();
		}

			$(".btn_generate_link").hide();


	}//end action_nav_btn_novo

}, 1000);