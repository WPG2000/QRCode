<meta charset="utf-8">

<?php

	//$id_escolhido = $_GET['id_escolhido'];
	//$screen_label = $_GET['screen_label'];	
	//$action_nav_btn = $_GET['action_nav_btn'];	
	
	require_once("../../../model/sessions/session-global.php");
	require_once("../../../model/sessions/nav-session.php");
	require_once("../../../model/classes/template.class.php");
	require_once("../../../model/conecta/conecta.php");		
	require_once("../../../model/sql/sql-global.php");	
				
	/* ....................................................................................... */
		
	
		$profile  = new Template("../tpl/index.tpl");
			
		
		//$profile->set("id_escolhido", $id_escolhido);		
		//$profile->set("screen_label", $screen_label);	
		//$profile->set("id_categoria", $id_categoria);		
		//$profile->set("engine_session", $engine_escolhida_session);				
		//$profile->set("action_nav_btn", $action_nav_btn);				
		
		
		echo $profile->output();	
	
	/* ....................................................................................... */
	
?>