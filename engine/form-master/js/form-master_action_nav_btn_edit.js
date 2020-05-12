setTimeout(function(){

	if(action_nav_btn=='action_nav_btn_edit'){

		$(".btn_save .text").html("Atualizar");
		$(".btn_decline .text").html("voltar");
		$(".btn_decline .icone").toggleClass("icon-arrow-left");
		$(".btn_generate_link").hide();

		/* ................. */

		if(screen_label=="manutenc_solic"){

			$(".btn_new").show();
			$(".btn_new .text").html("Novo");
			$(".btn_new .icone").toggleClass("icon-playlist_add");

			$(".btn_save").hide();

		}else if(screen_label=="imoveis"){

			$(".btn_decline").show();
			$(".btn_new").hide();
			$(".btn_save").hide();

		}else if(screen_label=="desocup_pedido"){

			//alert(screen_label);

			if(SITUACAO_DESOCUP=="NOVO"){
				$(".btn_remove").show();
			}//end if

			$(".btn_remove .text").html("Desfazer pedido");
			$(".btn_remove .icone").toggleClass("icon-square-cross");

			$(".btn_decline").hide();
			$(".btn_new").hide();
			$(".btn_generate_link").hide();
			$(".btn_save").hide();

		}else if(screen_label=="dimob"){

			$(".btn_decline").show();
			$(".btn_new").hide();
			$(".btn_generate_link").hide();
			$(".btn_save").show();

		}else{

			$(".btn_decline").hide();
			$(".btn_new").hide();
			$(".btn_save").hide();
		}

		/* ................. */

	}//end action_nav_btn_edit

}, 1000);