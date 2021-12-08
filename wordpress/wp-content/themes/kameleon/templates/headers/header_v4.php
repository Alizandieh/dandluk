<?php 
	//Getting Options for the header Version One
	$sy_options = kameleon_get_options_name();
	$is_single = (is_page() || is_single()) ? true : false;

	$headerwrapper_style = $header_top_style = '';	
	$header_background = (isset($sy_options['hv4_background']['rgba'])) ? $sy_options['hv4_background']['rgba'] : '#fff';	
	
	$hv_sticky  = ( (is_page() || is_single()) && null !== get_post_meta(get_the_ID(), "hv_sticky", true)) ? 
		get_post_meta(get_the_ID(), "hv_sticky", true) : $sy_options['hv4_sticky'];

	$h_logo_type = $sy_options['hv4_logo_type'];	
	$hv_logo_matgintop = $sy_options['hv4_logo_matgintop'];		
	$border_color = $sy_options['hv4_border_color'];
	$border_px = $sy_options['hv4_border_thickness'];
	$text_color = $sy_options['hv4_text_color'];
	$height = $sy_options['hv4_height']+35; 
	$logo_height = $sy_options['hv4_logo_height']; 
	$logo_width = $sy_options['hv4_logo_width']; 
	$hv_transparent = $sy_options['hv4_transparent'];	
	$hv_sticky_width = $sy_options['hv4_sticky_width'];
	
	$sticky_height = $sy_options['sticky_height']+35;
	$hv_width = $sy_options['hv4_width'];
	
	include trailingslashit( get_template_directory() ).'/templates/headers/sticky-options.php';
	$header_v = ( $is_single && get_post_meta(get_the_ID(), "header_unique", true) == 1 ) ? 
				get_post_meta(get_the_ID(), "header_v", true) : 
				$sy_options['header_v']; 

	
?>
<header id="km-header" class="header_v4" data-sticky-full-width="<?php echo esc_attr($hv_sticky_width); ?>" data-starter-width="<?php echo esc_attr($hv_width); ?>" data-width="<?php echo esc_attr($hv_width); ?>" style="--border-color-header:<?php echo $border_color; ?>; background-color: <?php echo wp_kses_data($header_background); ?>;" data-fixed="<?php echo esc_attr($hv_transparent); ?>">	
	<?php get_template_part('templates/headers/top/top_container'); ?>
	<div id="km-header-wrapper" style="<?php echo esc_attr($headerwrapper_style); ?>" <?php echo wp_kses_data($wraper_data); ?>>			
		<div id="km-header-content" class="center-content">			
			<div id="km-header-logo-center">
				<?php include trailingslashit( get_template_directory() ).'/templates/headers/logo-style1_2.php'; ?>							
			</div>			
		</div>	
		<div id="km-header-menu-center">
			<div id="km-main-menu" class="center-content">
				<?php  get_template_part('templates/headers/menu','full'); ?>	
			</div>
		</div>	
		<?php kameleon_search_area($header_v); ?>				
	</div>
</header>	