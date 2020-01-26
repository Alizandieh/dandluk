<?php
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============          SHORTCODES BUNDLE    	   ============== 
   ==                                                              ==
   ==  															   ==
\* ================================================================== */


$path_to_composer = KAMELEON_PLUGIN_PATH."includes/composer/";
require_once $path_to_composer.'vc_templates/sy_skillbar.php';
require_once $path_to_composer.'vc_templates/sy_alertbox.php';
require_once $path_to_composer.'vc_templates/sy_modalwindow.php';
require_once $path_to_composer.'vc_templates/sy_postmasonry.php';
require_once $path_to_composer.'vc_templates/sy_postgrid.php';
require_once $path_to_composer.'vc_templates/sy_portfoliomasonry.php';
require_once $path_to_composer.'vc_templates/sy_portfolioajax.php';
require_once $path_to_composer.'vc_templates/sy_teammate.php';
require_once $path_to_composer.'vc_templates/sy_testimonial.php';
require_once $path_to_composer.'vc_templates/sy_radialprogress.php';
require_once $path_to_composer.'vc_templates/sy_hover_image.php';
require_once $path_to_composer.'vc_templates/sy_beforeafterimage.php';
require_once $path_to_composer.'vc_templates/sy_lineseparator.php';
require_once $path_to_composer.'vc_templates/sy_interactiveiconbox.php';
require_once $path_to_composer.'vc_templates/sy_iconboxaction.php';
require_once $path_to_composer.'vc_templates/sy_videomodal.php';
require_once $path_to_composer.'vc_templates/sy_filter_images.php';
require_once $path_to_composer.'vc_templates/sy_socialshare.php';
require_once $path_to_composer.'vc_templates/sy_socialfindus.php';
require_once $path_to_composer.'vc_templates/sy_sidebyside.php';
if(is_plugin_active('woocommerce/woocommerce.php')){
	require_once $path_to_composer.'vc_templates/sy_wooitemmodern.php';
	require_once $path_to_composer.'vc_templates/sy_wooitemlist.php';
}
if(is_plugin_active('contact-form-7/wp-contact-form-7.php')){
	require_once $path_to_composer.'vc_templates/sy_cf7.php';	
}

function sy_composer_font_styles($font, $size, $style){
	$result = $size;
	if($font != ''){
		$font_family = get_ultimate_font_family($font);
		if($font_family != '')
			$result .= 'font-family:\''.$font_family.'\';';
	}
	if($style != '')
		$result .= get_ultimate_font_style($style);

	return $result;
}


?>