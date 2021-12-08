<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php 		
		$sy_options = kameleon_get_options_name();
		if($sy_options['responsive']== true): 
	?>
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<?php endif;	
		wp_head(); 
	?>
	<script src='https://www.google.com/recaptcha/api.js' async defer></script>
</head>
<?php 
	//Page Layout Settings
	$layout = $sy_options['layout'];
	$full_width = $sy_options['full_width'];
	$is_single = (is_page() || is_single()) ? true : false;
	$p_id = get_the_ID();

	//Check if Unique Layout On This Page
	if( $is_single && get_post_meta($p_id, "unique_layout", true) == 1 ){
		$layout = get_post_meta($p_id, "layout", true);
		$full_width = get_post_meta($p_id, "full_width", true);
	}	
	//Check if the Page Loader is Enabled
	$pageloader_enable  = ( $is_single &&  get_post_meta(get_the_ID(), "pageloader_enable", true) !="") ? 
		get_post_meta(get_the_ID(), "pageloader_enable", true) : $sy_options['pageloader_enable'];

	//Check if Unique Header On This Page	
	$header_v = ( $is_single && get_post_meta($p_id, "header_unique", true) == 1 ) ? 
				get_post_meta($p_id, "header_v", true) : 
				$sy_options['header_v']; 

	//Check if Header Active On This Page	
	$header_active =( $is_single &&  get_post_meta($p_id, "header_active", true) !=""  ) ? 
					get_post_meta($p_id, "header_active", true) : 
					$sy_options['header_active'];
	
	//Check if Intro Effect On This Page	
	$intro_active = ($is_single) ? 
					get_post_meta($p_id,'enable_intro',true) : 0;
	

	//Check if Revolution Slider On This Page					
	$slider_revolution = ($is_single  && get_post_meta($p_id,'slider_enable',true) == 1) ? true : false; 				
	
	if($slider_revolution){
		$slider_rev = get_post_meta($p_id,'slider_rev',true);				
		$slider_pos = get_post_meta($p_id,'slider_above_header',true);			
	}				

	$footer_effect  =( (is_page() || is_single()) &&  get_post_meta(get_the_ID(), "footer_effect", true) !="" && get_post_meta(get_the_ID(), "footer_unique", true) ) ? get_post_meta(get_the_ID(), "footer_effect", true) : $sy_options['footer_effect'];
	$footer_effect_en  = ($footer_effect == 1) ? 'true' : 'false';

	//Check fo The Ajax Link Effect 
	$link_ajax_effect = (isset($sy_options['link_ajax_effect']) && $sy_options['link_ajax_effect'] == 1) ? "true" : "false";

?>
<body id="body" <?php body_class(); ?> data-layout="<?php echo esc_attr($layout); ?>" data-fullwidth="<?php echo esc_attr($full_width); ?>" data-header="<?php echo esc_attr($header_v); ?>" data-footer-effect="<?php echo esc_attr($footer_effect_en); ?>" data-ajax-effect="<?php echo esc_attr($link_ajax_effect) ?>">	
	<?php 
		$wrapper_attr ="";		
		if($pageloader_enable == 1): 
			$pageloader_hide_style = (isset($sy_options['pageloader_hide_style'])) ? $sy_options['pageloader_hide_style'] : 'fade';			
			$wrapper_attr .= (isset($sy_options['pageloader_finish_effect']) && $sy_options['pageloader_finish_effect']==1) ? 'data-situation="hide"' : '';			

		?>
			<div id="km-pageloader" data-style="<?php echo esc_attr($pageloader_hide_style); ?>" data-situation="shown">					
				<?php echo kameleon_loader_spinner($sy_options['spinner_style']); ?>
			</div>	
	<?php endif; 
		$swa_enabled = 0;	
		if(!in_array($header_v, kameleon_headers_no_swa())){
			$swa_enabled = ($is_single && get_post_meta(get_the_ID(), "header_unique", true) == 1 ) ? get_post_meta(get_the_ID(), "swa_enabled", true) : 
			$sy_options[$header_v.'_swa_enabled']; 			
		}

		if($swa_enabled == 1) kameleon_header_sidebar(); 
		if (isset($header_active) &&  $header_active == 1 && $header_v =='header_v6') { 
			get_template_part('templates/headers/header_v6'); 
		}
		
		//Check if The Header Type Exist And It's A SIDE MINIMALIST HEADER
		if($header_active == 1 && in_array($header_v,kameleon_minmalist_headers()))
			kameleon_side_header_minimalist($header_v); 

		//Check if The Header Type Exist And It's A FULLSCEEN MINIMALIST HEADER
		if($header_active == 1 && in_array($header_v,kameleon_fullscreen_headers()))
			kameleon_fullscreen_header_minimalist($header_v); 

		$dotEnabled = (is_page() && get_post_meta(get_the_ID(), "dot_nav_enabled", true) !="" && get_post_meta(get_the_ID(), "dot_nav_enabled", true) == 1) ? true : false;
		$wrapper_attr .= ($dotEnabled) ? 'data-dotenabled="true"' : ''; 
	?>
	 <div id="km-theboss" <?php echo wp_kses_data($wrapper_attr); ?>>
	 <?php 
	 	if($dotEnabled)
		 	kameleon_dot_navigation();
	
		if($intro_active == 1)
			get_template_part('templates/page-intro');
	 
		if(class_exists('woocommerce')){ 		
			$w_cart_enabled = ($is_single && get_post_meta(get_the_ID(), "w_cart_enabled", true) !="") ? get_post_meta(get_the_ID(), "w_cart_enabled", true) : $sy_options['w_cart_enabled'];		
			
			if($w_cart_enabled == 1)
				sy_live_cart(); 
		}
	?>
	<!-- Kameleon The Boss Open !-->
	
		<!-- Wrapper Open !-->
		<div id="km-wrapper" class="km-wrapper">
			<?php if($slider_revolution && $slider_pos == 1){
					echo '<div class="sy-revslider">'.do_shortcode('[rev_slider '.$slider_rev.']').'</div>'; 
				} 
			?>
			<!-- Container Open !-->
			<div id="km-container">
				<?php 
					get_template_part('templates/topslidingbar/topslidingbar');
					
					if (isset($header_active) &&  $header_active == 1 && $header_v !='header_v6') { 
						get_template_part('templates/headers/'.$header_v); 
					} 
					
					if (isset($header_active) &&  $header_active == 1 ){
						get_template_part('templates/headers/mobile_header');
					}

					get_template_part('templates/titlebar/wrapper');										

					if($slider_revolution && $slider_pos == 0){
						echo '<div class="sy-revslider">'.do_shortcode('[rev_slider '.$slider_rev.']').'</div>'; 
					}
				
				?>