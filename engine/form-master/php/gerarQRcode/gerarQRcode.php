<?php	
		
	/* -- */
	
	/* ....................................................................................... */							
	include("../../../../model/sessions/session-global.php");
	include("../../../../model/sessions/nav-session.php");
	include("../../../../model/functions/acentos.php");
    include("../../../../model/conecta/conecta-imoboffice.php");
	/* ....................................................................................... */						
	
	/* -- */		

	/* .................................. */
	date_default_timezone_set('America/Sao_Paulo');				
	$data_agora = date("d-m-Y");
	$hora_agora = date("H-i-s");	
	$data =  date("d/m/Y - H:i:sa");

	$OBS = $_POST['OBS'];	

	$cliente = $nome_cliente;
	$cliente_codificado = sprintf('=?%s?%s?%s?=', 'UTF-8', 'Q', quoted_printable_encode($cliente));

	$assunto = "Mensagem - Área do Cliente Porthus";
	$assunto_codificado = sprintf('=?%s?%s?%s?=', 'UTF-8', 'Q', quoted_printable_encode($assunto));
	/* .................................. */
	
	/* -- */	
	
	$receber_solicit = '
				  <html>
		  <head>

			<meta http-equiv="content-type" content="text/html; charset=utf-8">
		  </head>
		  <body text="#000000" bgcolor="#FFFFFF">    
			<div class="moz-forward-container"><br>
			  
			  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			  <title></title>
			  <style>
				@media screen and (max-width: 320px) {
					table {
						border-radius: 0 !important;
						border-left: 0 !important;
					}
					.icon-wrapper {
						border-radius: 100% !important;
					}
					.note {
						font-size: 13px !important;
					}
					.parties {
						font-size: 14px !important;
					}
					.subject {
						font-size: 16px !important;
					}
					.activity {
						padding: 20px 0 0 0 !important;
					}
				}
				@media screen and (min-width: 481px) {
					.quote {
						padding: 0 50px;
					}
				}
				@media screen and (max-width: 480px) {
					.activities, .container {
						padding-left: 0 !important;
						padding-right: 0 !important;
					}
					.button {
						padding-left: 20px;
						padding-right: 20px;
					}
					.note {
						font-size: 14px !important;
					}
					.parties {
						font-size: 14px !important;
					}
					.subject {
						font-size: 16px !important;
					}
				}
				td {
					font-family: HelveticaNeue-Light, HelveticaNeue, Arial;
					color: #3D4145;
				}
			</style>
			  <table class="outerWrapper" style="background-color: #F3F5F6;"
				cellspacing="0" cellpadding="0" bgcolor="#F3F5F6" width="100%"
				border="0">
			   
			   <tbody>
				  <tr>
					<td style="padding: 0;">
					  <div class="container" style="padding: 0 10px;"
						width="100%" align="center">
						<!--[if (gte mso 9)|(IE)]>
						<table width="600" align="center" cellpadding="0" cellspacing="0" style="font-size: 18px;">
							<tr>
								<td>
						<![endif]-->
						<table style="max-width: 640px; font-size: 18px;"
						  cellspacing="0" cellpadding="0" bgcolor="#F3F5F6"
						  align="center" width="100%" border="0">
						  <tbody>
						  
							<tr align="center">
							  <td style="padding: 35px 0 30px 0;" align="center"
								height="40"> 
							  </td>
							</tr>
							
							<tr>
								<td>
									<div style="font-size:34px;padding:10px 0 20px 0;">
									Porthus
									</div>
								</td>
							</tr>
							
							<tr>
								<td>							
								</td>
							</tr>
							
							<tr>
							  <td style="padding: 0;" align="left">
								
								<table class="content" style="border-radius:
								  5px; font-family: HelveticaNeue-Light,
								  HelveticaNeue, Segoe UI Semilight, Arial;
								  line-height: 24px; font-size: 18px;"
								  cellspacing="0" cellpadding="0"
								  bgcolor="#FFFFFF" align="center" width="100%"
								  border="0" style="padding:0 0 50px 0;background-color:#FFFFFF;border-top:4px solid #c12;"><!-- Header do painel centralizado -->
								  
								  <tbody>
									<tr>
									  <td class="td" style="color: #3D4145;
										font-family: HelveticaNeue, Segoe UI,
										Arial; font-size: 26px; padding: 20px
										20px 15px 20px;">OBS - '.$cliente.'</td>
									</tr>
									<tr>
									  <td style="color: #3D4145;font-size:15px; font-family:
										HelveticaNeue-Light, HelveticaNeue,
										Arial; padding: 0 20px 20px 20px">
										Esta é uma Mensagem do '.$tipo_de_usuario.' <b>Área do Cliente Porthus</b>.								
										</td>
									</tr>
									<tr>
									  <td class="activities" style="padding: 0
										20px;">
										<table style="border-radius: 5px;"
										  cellspacing="0" cellpadding="0"
										  bgcolor="#F3F5F6" width="100%"
										  border="0">
										  <tbody>
											<tr>
											  <td style="padding: 9px 18px 9px
												18px; font-family:
												HelveticaNeue, Segoe UI, Arial;
												border-bottom: 2px solid #fff">										
												'.$data.'
												</td>
											</tr>
											<tr>
											  <td style="padding: 20px 20px 0
												20px;" class="activity">
												<table style="font-family:
												  HelveticaNeue-Light,
												  HelveticaNeue, Segoe UI
												  Semilight, Arial;
												  border-top-right-radius: 4px;
												  border-top-left-radius: 4px;"
												  cellspacing="0"
												  cellpadding="0"
												  bgcolor="#f9fafa" border="0">
												 
												</table>
												<table style="border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;" cellspacing="0" cellpadding="0" bgcolor="#ffffff" width="100%" border="0">
												  <tbody>
													<tr>
													  <td style="padding: 20px 0 20px 20px; vertical-align: middle;" width="40"></td>
													  <td style="padding: 20px 20px 20px 16px;" cellpadding="20px">
														<table cellspacing="0"
														  cellpadding="0"
														  border="0">
														  <tbody>													
															 
															 
																<tr> 
																  <td style="color:
																	#3D4145;
																	font-family:
																	HelveticaNeue,
																	Segoe UI, Arial;
																	padding: 0;">
																	<div class="subject" style="font-size: 16px;">														  
																		<div style="color: #3D4145; text-decoration:none;" href="#" moz-do-not-send="true"><b>Email:</b></div>
																	</div>													
																  </td>
																</tr>																																																																											
																
																<tr> 
																
																  <td style="color:
																	#3D4145;
																	font-family:
																	HelveticaNeue,
																	Segoe UI, Arial;
																	padding: 0;">
																	<div class="subject" style="font-size: 16px;">														  
																		<div style="color: #3D4145; text-decoration:none;" href="#" moz-do-not-send="true">'.$email_gre_pessoas.'</div>
																	</div>													
																  </td>
																</tr>
															 
																<tr> 
																  <td style="color:
																	#3D4145;
																	font-family:
																	HelveticaNeue,
																	Segoe UI, Arial;
																	padding: 0;">
																	<div class="subject" style="font-size: 16px;">														  
																		<div style="color: #3D4145; text-decoration:none;" href="#" moz-do-not-send="true"><b>Mensagem:</b></div>
																	</div>													
																  </td>
																</tr>																																																																											
																
																<tr> 
																
																  <td style="color:
																	#3D4145;
																	font-family:
																	HelveticaNeue,
																	Segoe UI, Arial;
																	padding: 0;">
																	<div class="subject" style="font-size: 16px;">														  
																		<div style="color: #3D4145; text-decoration:none;" href="#" moz-do-not-send="true">'.$OBS.'</div>
																	</div>													
																  </td>
																</tr>
																																																
																																				
													
													<tr>
													  <td style="line-height: 18px;
														height: 18px; font-size: 1px;
														color: #f9fafa; padding: 0;">.</td>
													</tr>
												  </tbody>
												</table>
												<table cellspacing="0" cellpadding="0"
												  bgcolor="#ffffff" width="100%"
												  border="0">
												  <tbody>
													<tr>
													  <td class="button" style="color:
														#3D4145; border-radius: 5px;
														font-family:
														HelveticaNeue-Light,
														HelveticaNeue, Segoe UI
														Semilight, Arial; font-size:
														20px; padding: 20px 0;"
														width="100%">
														<!--[if mso]>
																	
																	<![endif]--> 
													</td>
													</tr>
													<tr>
													  <td class="td" style="font-size:
														2px; line-height: 2px; padding:
														0;" height="2" width="100%">
														<div style="color: #F3F3F5;
														  background-color:#F3F3F5;
														  height: 2px;">.</div>
													  </td>
													</tr>
										   
												  </tbody>
												</table>
											  </td>
											</tr>
										  </tbody>
										</table>
									  </td>
									</tr>
								  </tbody>
								</table>
								
									<table cellpadding="0" bgcolor="#F3F5F6" align="center" width="100%" border="0" style="background:#F3F5F6;width:100%;"><!-- parte de interna cinza do painel centralizado -->
										<tr>
											<td></td>
										</tr>
										
										<tr>
											<td></td>
										</tr>

										<tr>
											<td></td>
										</tr>		
									</table>
								
								
							  </td>
							</tr>
						  </tbody>
						</table>
						
						<table cellpadding="0" bgcolor="#FFFFFF" align="center" width="100%" border="0" style="background:#FFFFFF;width:100%;"><!-- parte de baixo do painel centralizado -->
							<tr>
								<td></td>
							</tr>
							
							<tr>
								<td></td>
							</tr>
							
							<tr>
								<td></td>
							</tr>
							
							<tr>
								<td></td>
							</tr>
							
							<tr>
								<td></td>
							</tr>													
						</table>
						
						
						<table style="font-size: 18px;" cellspacing="0"
						  cellpadding="0" bgcolor="#F3F5F6" align="center"
						  width="100%" border="0">
						  <tbody>
							<tr>
							  <td style="padding: 60px 0 0 0;" align="center">
								<table style="font-size: 14px; color: #3D4145;"
								  align="center">
								  <tbody>
									<tr align="center">
									  <td style="color: #3D4145; font-family:
										HelveticaNeue-Light, HelveticaNeue,
										Segoe UI Semilight, Arial; padding: 0;">
										<b>GregoriSoft</b>
										
									  </td>
									</tr>
									<tr align="center">
									  <td style="color: #3D4145; font-family:
										HelveticaNeue-Light, HelveticaNeue,
										Segoe UI Semilight, Arial; padding: 0;">
										
										<span style="font-size:9px;">
										Av. Assis Brasil, 4500
										Porto Alegre - RS 
										CEP 91110-000
										</span>
										
										</td>
									</tr>
									<tr align="center">
									  <td style="padding: 0 0 20px 0; color:
										#3D4145; font-family:
										HelveticaNeue-Light, HelveticaNeue,
										Segoe UI Semilight, Arial;">
									  </td>
									</tr>
								  </tbody>
								</table>
							  </td>
							</tr>
						  </tbody>
						</table>
						<!--[if (gte mso 9)|(IE)]>
						</table>
						<![endif]--> </div>
					</td>
				  </tr>
				</tbody>
			  </table>
			  <img
		src="http://email.pipedrive.com/wf/open?upn=AdkfTiApI80cNEyortTzHVe1-2FXzb-2B6ap3APiPNnUKQnDUSRjdkUw6vBH9rN6j0w7006Taj7pkZLOrNL3brOSHEvC21a9XBDph9H8vg3UxfgcEBubM1d2kQR-2BgoeJ2WlgiBlSzi0JKdhcCB-2BUCopLQhzBaqpqLWiR3fVgA0LtVBMByZnZ4qtpYe-2BnY0DgPTJMiw8yecSrVzVQinivvvqOLUsVdJuAvUOsKAcXTdbFAoEorXnPjVSPlvLiPkkwY5QFGP4wRCaLpHBOabYaaRD0Eg-3D-3D"
				alt="" style="height:1px !important;width:1px
				!important;border-width:0 !important;margin-top:0
				!important;margin-bottom:0 !important;margin-right:0
				!important;margin-left:0 !important;padding-top:0
				!important;padding-bottom:0 !important;padding-right:0
				!important;padding-left:0 !important;" moz-do-not-send="true"
				height="1" width="1" border="0">
			</div>
		  </body>
		</html>  
				  ';
		/* .............................................. */
				  
			/*		  
			$enviar_resposta_auto = "
					  <div style='color:#000;font-weight:600;width:100%;text-align:center;padding:25px 0 25px 0;'>
					  Agredecemos o seu contato!<br>Retornaremos em breve.
					  </div>.
					  
					  <div style='background-size:cover;width:100%;height:80px;font-weight:600;font-size:11px;color:#000;'>
					  <p style='display:inline-block;margin:25px 0 0 10px;'>		  
					  <span>Mr.Teste</span><br>
					  <span>email@email.com.br</span><br>
					  <span>9.9999-8888</span>
					  </p>
					  </div>		  
					  ";  
			*/
			
			
			include("../../../phpmailer/class.phpmailer.php");
			include("../../../phpmailer/class.smtp.php");
			
			
			$mail = new PHPMailer();
			//$mail2 = new PHPMailer();
			
			
			/* ................................ Receber solicit ................................... */        
			
			$mail->Username = "trial@gregorisoft.com.br"; // your eMail user name
			$mail->Password = "tata1103";
						
			$mail->AddAddress($preference_email_area_restrita,"Mensagem - Área Cliente porthus"); // recipients email
			
			//$mail->AddAddress("suporte@gregorisoft.com.br","OBS - Área Cliente porthus"); // recipients email
			//$mail->AddAddress("desenvolvimento@gregorisoft.com.br","OBS - Área Cliente porthus"); // recipients email   

			$mail->FromName = utf8_decode($cliente_codificado);//readable name	
			
			//$mail->addBCC('itamar@gregorisoft.com.br');//copia oculta
			
			$mail->Subject = utf8_decode($assunto_codificado);
			$mail->CharSet = 'iso-8859-1';						
			
			//$mail->SetLanguage("br");
			$mail->isHTML(true);
			$mail->Body    = utf8_decode($receber_solicit); 	
			$mail->Host = "smtpi.gregorisoft.com.br"; // eMailSmtp
			$mail->Port = 587;	
			$mail->IsSMTP(); // use SMTP
			$mail->SMTPAuth = true; // turn on SMTP authentication
			$mail->From = $mail->Username;
			
			
			if(!$mail->Send()){
				//echo "Mailer Error: " . $mail->ErrorInfo;
			}else{
                include("../gre_restrita_solicit_formOperation/gre_restrita_solicit_formOperation.php");
			}
			
			/* ............................... /Receber solicit ................................... */    
	
	
?>