<?php

	require_once("../../../../model/classes/template.class.php");	
	require_once("../../../../model/sessions/session-global.php");
	require_once("../../../../model/sessions/nav-session.php");

	$profile  = new Template("../html/index.html");	

	$profile->set("screen_label_session", $screen_label_session);
	$profile->set("site_cliente", $site_cliente);
    $profile->set("tipo_de_usuario", $tipo_de_usuario);

	echo $profile->output();

?>