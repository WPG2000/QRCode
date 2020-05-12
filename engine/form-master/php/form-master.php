<?php

	$screen_label = $_GET['screen_label']; 
	$action_nav_btn = $_REQUEST['action_nav_btn'];	
	$id_escolhido = $_REQUEST['id_escolhido'];

	require_once("../../../model/classes/template.class.php");
	require_once("../../../model/sessions/session-global.php");			
	require_once("../../../model/sessions/nav-session.php");

		switch ($screen_label_session) {
			case "contratos":
				$whereChoosedId = "AND gre_contratos_loc.id = $id_escolhido";
				include("../../../model/sql/sql_contratos.php");
			break;

			case "dimob":
				if($action_nav_btn=="action_nav_btn_edit"){
					$whereChoosedId = "WHERE id = $id_escolhido";
				}
				include("../../../model/sql/sql_dimob.php");

				if($action_nav_btn=="action_nav_btn_novo") {
					$gre_contratos_loc_id = $_REQUEST['gre_contratos_loc_id'];
					$gre_pessoas_id = $_REQUEST['gre_pessoas_id'];
				}
			break;
		}//end switch

		$list_result = array(				 		 
				   array(			
						"id_primary" =>  $id_primary, 				   					 																				   							   									
				   ));

						foreach ($list_result as $list_r) {	

							$profile = new Template("../html/$screen_label_session/index.html");															

                                foreach ($list_r as $key => $value) {
                                    $profile->set($key, $value);
                                }//end foreach
					
							$listTemplates[] = $profile;	
						
					}//end foreach

	$listContents = Template::merge($listTemplates);

	$profile  = new Template("../html/form-master.html");
	$profile->set("form_master_fields", $listContents);

    $profile->set("action_nav_btn", $action_nav_btn);
    $profile->set("id_escolhido", $id_escolhido);
    $profile->set("form_mode_session", $form_mode_session);
    $profile->set("screen_label", $screen_label_session);
    $profile->set("engine_session", $engine_session);
    $profile->set("user_loc_session", $user_loc_session);
    $profile->set("user_prop_session", $user_prop_session);
    $profile->set("id_usuario", $_SESSION['id']);
    $profile->set("id_empr", $id_empr);

    $inc_sets = $screen_label_session."/".$screen_label_session."-layout-sets.php";
    include($inc_sets);

    echo $profile->output();
	
?>
