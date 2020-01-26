<?php 
	//Getting Options for the header Version One
	$sy_options = kameleon_get_options_name();
	$h_logo_type = $sy_options['hv6_logo_type'];
	echo $h_logo_type;
	
?>
<header id="km-header-side-shown" class="header_v6 kameleon-side-header nores km-frame-top km-frame-height km-frame-<?php echo esc_attr($sy_options['hv6_position']); ?>" data-situation="hidden" data-content-position="<?php echo esc_attr($sy_options['hv6_content_position']); ?>" data-bar-position="<?php echo esc_attr($sy_options['hv6_position']); ?>">	
	<div id="km-hv6-top">
	</div>

	<div id="main-logo-container">
		<?php include trailingslashit( get_template_directory() ).'/templates/headers/logo-style-side.php'; ?>						
	</div>
	<div id="side-menu-container">
		<?php  get_template_part('templates/headers/menu','side'); ?>				
	</div>
	<div id="km-hv6-bottom">
		<?php if ($sy_options['hv6_social_active'] == 1){ ?>
			<div id="km-hv6-social"><?php sy_social_links(); ?></div>		
		<?php } ?>

		<form action="<?php echo esc_url(home_url( '/' )); ?>" method="get" id="km-hv6-search" tabindex="0">
			<input type="text" name="s" autocomplete="off" placeholder="<?php echo esc_html__('SEARCH','kameleon'); ?>">			
		</form>	
	</div>

</header>	

