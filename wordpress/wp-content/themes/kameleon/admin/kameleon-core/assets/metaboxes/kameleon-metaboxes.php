<?php 
/*	===================================================	 *\		
======== Meta Boxes and Options For Kameleon Pages =========
\*	===================================================  */	

//Meta Box for choosing the Tipe of the Header and Type of the Layout & the Background 
function Km_Options_MetaBox(){
	add_meta_box( 
		'km_option_style', 
		esc_html__('Kameleon Options',"kameleon"), 
		'Km_Options_MetaBox_Display', 
		'page', 
		'normal',
 		'high'
 	);
 	add_meta_box( 
		'km_option_style', 
		esc_html__('Kameleon Options',"kameleon"), 
		'Km_Options_MetaBox_Display', 
		'product', 
		'normal',
 		'high'
 	);
 	add_meta_box( 
		'km_option_style', 
		esc_html__('Kameleon Options',"kameleon"), 
		'Km_Options_MetaBox_Display', 
		'post', 
		'normal',
 		'high'
 	);
 	add_meta_box( 
		'km_option_style', 
		esc_html__('Kameleon Options',"kameleon"), 
		'Km_Options_MetaBox_Display', 
		'portfolio', 
		'normal',
 		'high'
 	);
}
add_action('add_meta_boxes','Km_Options_MetaBox');

//Display the MetaBox
function Km_Options_MetaBox_Display( $post ){
	$sy_options = kameleon_get_options_name();
	$path_to_metaboxes = trailingslashit( get_template_directory() )."/admin/kameleon-core/assets/metaboxes/templates/";
	$post_types_np = array("portfolio","post","product");
	$arrowStyleMeta = array(
	      	'style1'		=> '&#8594; Long Arrow',
	      	'style2' 		=> '&#10142; Normal Arrow',
	      	'style3' 		=> '&#62; Arrow Sign',
	      	'style4' 		=> '&#8250; Wide Arrow Sign',
	      	'style5' 		=> '&#10148; ArrowHead  Arrow',
	      	'style6' 		=> '&#10147; Bottom Light Arrow',
	      	'style7' 		=> '&#10146; Top Light Arrow',
	      	'style8' 		=> '&#10139; Drafting Arrow',
	      	'style9' 		=> '&#10137; Heavy Arrow',
	      	'style10' 		=> '&#10140; Heavy Round Arrow',
	      	'style11'		=> '&#8658; Double Arrow',
	      	'style12' 		=> '&#8680; Border Arrow',
	      	'style13' 		=> '&#8702; Open Arrow',
	      	'style14' 		=> '&#10141; Triangle Headed Arrow',
	);
	//Header Section MetaBoxes
	$postype = get_post_type( get_the_ID());
	include_once $path_to_metaboxes.'wrapper.php';
	include_once $path_to_metaboxes.'header-meta.php';
	include_once $path_to_metaboxes.'stickyheader-meta.php';
	include_once $path_to_metaboxes.'intro-meta.php';
	include_once $path_to_metaboxes.'sidebar-meta.php';
	include_once $path_to_metaboxes.'titlebar-meta.php';	
	include_once $path_to_metaboxes.'layout-meta.php';		
	if(in_array($postype, $post_types_np))
		include_once $path_to_metaboxes.'next_previous-meta.php';

	include_once $path_to_metaboxes.'configuration-meta.php';
	if($postype == "product"){
		include_once $path_to_metaboxes.'woocommerce-meta.php';		
	}
	if($postype == "post"){
		include_once $path_to_metaboxes.'post-meta.php';		
	}
	if($postype == "portfolio"){
		include_once $path_to_metaboxes.'portfolio-meta.php';		
	}
	include_once $path_to_metaboxes.'wrapper-end.php';
}

//Saving The Updates For the Metabox Options
function Km_Options_Metabox_Save( $post_id ){	
	if(isset($_POST['options'])){		
		foreach ($_POST['options'] as $name => $value) {
			update_post_meta( $post_id, $name, $value);
		}
	}	
}
add_action('save_post','Km_Options_Metabox_Save');

?>