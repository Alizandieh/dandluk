<?php 
$path_to_fileds = trailingslashit( get_template_directory() ). "/admin/kameleon-core/assets/metaboxes/fields/";
require_once $path_to_fileds.'global_section.php';
require_once $path_to_fileds.'colorpicker.php';
require_once $path_to_fileds.'number.php';
require_once $path_to_fileds.'slider.php';
require_once $path_to_fileds.'select.php';
require_once $path_to_fileds.'selectmodern.php';
require_once $path_to_fileds.'switcher.php';
require_once $path_to_fileds.'text.php';
require_once $path_to_fileds.'text_area.php';
require_once $path_to_fileds.'uploader.php';
require_once $path_to_fileds.'message.php';
require_once $path_to_fileds.'distance.php';
require_once $path_to_fileds.'background.php';
require_once $path_to_fileds.'font.php';
require_once $path_to_fileds.'uploader_multiple.php';
require_once $path_to_fileds.'parallax.php';

//Function For The Overlay Settings
function kameleon_overlay_section($required){
	return  json_encode($required);
}


?>