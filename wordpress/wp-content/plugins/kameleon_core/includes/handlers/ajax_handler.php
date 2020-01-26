<?php 
//File That Will Handle All the Ajax Requests And Rsponses


//Function To Import Demo Data 
add_action('wp_ajax_kameleonImportDemo', 'kameleon_core_demo_importer_handler_callback' );
add_action('wp_ajax_nopriv_kameleonImportDemo', 'kameleon_core_demo_importer_handler_callback');
function kameleon_core_demo_importer_handler_callback(){	
	//Importing Demo Data 
	if(isset($_POST['action'], $_POST['optionsUrl'], $_POST['contentUrl'], $_POST['widgetsUrl']) && trim($_POST['action']) == 'kameleonImportDemo'){ 	
	 	//Checking and Importing Revolution Slider	  
	  	if ( class_exists( 'RevSlider' ) ) {
	  		$revolutionSliderFiles = explode(',',$_POST['revolutionSliderFiles']);	  			  		
	  		if(isset($revolutionSliderFiles) && !empty($revolutionSliderFiles)){				
				foreach ($revolutionSliderFiles as $sliderFile) {
					if(isset($sliderFile) && !empty($sliderFile)){
						$localSlideFile = kameleon_import_revolution_slider($sliderFile);						
						echo $localSlideFile;
						if(file_exists($localSlideFile)){
							$slider = new RevSlider();	
							$slider->importSliderFromPost( true, true, $localSlideFile);													
							
						}
					}				
				}					
				
			}
	 	}

	 	require_once( KAMELEON_PLUGIN_PATH. 'includes/dashboard/importer/radium-importer.php' );
	  	$kameleon_demo_radium = new Radium_Theme_Importer();
	  	$kameleon_demo_radium->content_demo = $_POST['contentUrl'];
	  	$kameleon_demo_radium->theme_options_file = $_POST['optionsUrl'];
	  	$kameleon_demo_radium->widgets  = $_POST['widgetsUrl'];
	  	$kameleon_demo_radium->theme_option_name = kameleon_get_options_slug_plugin();  
	  	$kameleon_demo_radium->start_importing(); 
	 	
	}
	die();
}



 

//function to return the Zip Slider File from server to a temp folder
function kameleon_import_revolution_slider($url){
	$temp_file = download_url( $url, 5);
	if (!is_wp_error( $temp_file )) {
		$file = array(
			'name' => basename($url), 
			'type' => 'application/zip',
			'tmp_name' => $temp_file,
			'error' => 0,
			'size' => filesize($temp_file),
		);
		$overrides = array(
			'test_form' => false,
			'test_size' => true,
			'test_upload' => true, 
		);
		$results = wp_handle_sideload( $file, $overrides );

		if (!empty($results['error'])) {
			return false;		
		} else {
			return $results['file'];
		}
	}else
		return false;

}


//Function TO Save the Custom Advanced JS / CSS / Google Analytics Code 
add_action('wp_ajax_kameleonCustomCode', 'kameleon_custom_code_handler_callback' );
add_action('wp_ajax_nopriv_kameleonCustomCode', 'kameleon_custom_code_handler_callback');
function kameleon_custom_code_handler_callback(){		
	if(isset($_POST['action'], $_POST['customCSS'], $_POST['customJS'], $_POST['gAnalytics']) && trim($_POST['action']) == 'kameleonCustomCode'){ 				 
		$kmslug =kameleon_get_options_slug_plugin();
	 	kameleon_save_option($kmslug.'-customCSS',base64_encode($_POST['customCSS']));
	 	kameleon_save_option($kmslug.'-customJS',base64_encode( $_POST['customJS'] ));
	 	kameleon_save_option($kmslug.'-gAnalytics',base64_encode($_POST['gAnalytics']));
	 	update_option('ultimate_css', 'enable');
	 	update_option('ultimate_js', 'enable');
	 	bsf_update_option('map_key',$_POST['gMapsKey']);
	}
	die();
}


//Function TO Create OR Delete Sidebars
add_action('wp_ajax_kameleonSidebarAction', 'kameleon_sidebar_action_handler_callback' );
add_action('wp_ajax_nopriv_kameleonSidebarAction', 'kameleon_sidebar_action_handler_callback');
function kameleon_sidebar_action_handler_callback(){		
	if(isset($_POST['actionName'], $_POST['sidebarName']) && trim($_POST['sidebarName']) != '' && trim($_POST['action']) == 'kameleonSidebarAction'){ 				 
		$sidebars = get_option('kameleon_custom_sidebars');
		//Create New Sidebar
		if($_POST['actionName'] == 'newSidebar'){
			if(!is_array($sidebars))
				$sidebars = array();

			$sidebar = array(
				'name' => $_POST['sidebarName'],
				'date' => date('M d, Y'),
				'id' => str_replace(' ','-',strtolower($_POST['sidebarName'])).time(),
			);
			array_push($sidebars, $sidebar);			
			update_option('kameleon_custom_sidebars', $sidebars);
			echo json_encode($sidebar,true);
		}	
		if($_POST['actionName'] == 'deleteSidebar'){
			unset($sidebars[$_POST['sidebarName']]);
			$sidebars = array_values($sidebars);
			update_option('kameleon_custom_sidebars', $sidebars);			
		}

	}
	die();
}


//Function To Save the Contact Form 7 New Style
add_action('wp_ajax_kameleonCf7Designer', 'kameleon_cf7_designer_handler_callback' );
add_action('wp_ajax_nopriv_kameleonCf7Designer', 'kameleon_cf7_designer_handler_callback');
function kameleon_cf7_designer_handler_callback(){		
	if(isset($_POST['actionName'], $_POST['action']) != '' && trim($_POST['action']) == 'kameleonCf7Designer'){ 				 
		$kmcf7_styles = kameleon_get_single_option('kmcf7_styles'); 
		$kmslug =kameleon_get_options_slug_plugin();	
		$styleID = str_replace(' ','-',strtolower($_POST['styleName']));
		if($_POST['actionName'] == 'save'){
			kmcf7_save_update($styleID,$_POST['styleName'], $_POST['styleType'], $_POST['styleButton'], $_POST['theStyle'],$_POST['buttonCSS']);
		}
		if($_POST['actionName'] == 'delete'){
				unset($kmcf7_styles[$styleID]);		
				//$kmcf7_styles = array_values($kmcf7_styles);	
				kameleon_save_option($kmslug.'-kmcf7_styles',$kmcf7_styles);		
		}
		
	}
	die();
}

function kmcf7_save_update($styleID,$styleName, $styleType, $styleButton, $theStyle,$buttonCSS){
	$kmcf7_styles = kameleon_get_single_option('kmcf7_styles'); 
	$kmslug =kameleon_get_options_slug_plugin();	
	if(!is_array($kmcf7_styles) || empty($kmcf7_styles))
		$kmcf7_styles = array();

	unset($kmcf7_styles[$styleID]);
	//$kmcf7_styles = array_values($kmcf7_styles);
	kameleon_save_option($kmslug.'-kmcf7_styles',$kmcf7_styles);	 			

	$kmcf7_styles[$styleID] = array(
		'styleName' => $styleName,
		'styleType' => $styleType,
		'styleButton' => $styleButton,
		'theStyle' => $theStyle,
		'buttonCSS' => $buttonCSS
	);	
	kameleon_save_option($kmslug.'-kmcf7_styles',$kmcf7_styles);	 	
}

//Function To Return The Form Styler
add_action('wp_ajax_kameleonCf7FormCreator', 'kameleon_cf7_form_styler_creator_handler_callback' );
add_action('wp_ajax_nopriv_kameleonCf7FormCreator', 'kameleon_cf7_form_styler_creator_handler_callback');
function kameleon_cf7_form_styler_creator_handler_callback(){		
	if(isset($_POST['actionName'],$_POST['styleType'], $_POST['action']) != '' && trim($_POST['action']) == 'kameleonCf7FormCreator'){ 
		if($_POST['actionName'] == 'form'){
			$styletypes = kameleon_cf7_styletypes();
			$result = '';
			foreach ($styletypes[$_POST['styleType']]['styleBuilder'] as $key => $value) {	
				$result = kameleon_cf7_formcreator($value);
			}
			
		}
	}
	die();
}

//Function To Return The Form Button Styler
add_action('wp_ajax_kameleonCf7FormCreatorButton', 'kameleon_cf7_form_styler_creator_button_handler_callback' );
add_action('wp_ajax_nopriv_kameleonCf7FormCreatorButton', 'kameleon_cf7_form_styler_creator_button_handler_callback');
function kameleon_cf7_form_styler_creator_button_handler_callback(){
	if(isset($_POST['action']) && trim($_POST['action']) == 'kameleonCf7FormCreatorButton'){ 
		kmcf7_buttonStylerSection();
	}
	die();
}

?>