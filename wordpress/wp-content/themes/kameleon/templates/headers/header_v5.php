<?php 
	//Getting Options for the header Version One
	$sy_options = kameleon_get_options_name();
	$h_logo_type = $sy_options['hv5_logo_type'];

	
?>
<header id="km-header-side" class="header_v5 kameleon-side-header nores km-frame-top km-frame-height" data-situation="hidden" data-content-position="<?php echo esc_attr($sy_options['hv5_content_position']); ?>" data-bar-position="<?php echo esc_attr($sy_options['hv5_position']); ?>">	
	<div id="km-hv5-top">
		<div id="hv5-closer-icon" data-position="<?php echo esc_attr($sy_options['hv5_position']); ?>" onclick="showSideMenu();">
			<i class="fa"></i>
		</div>		
	</div>

	<div id="main-logo-container">
		<?php include trailingslashit( get_template_directory() ).'/templates/headers/logo-style-side.php'; ?>						
	</div>
	<div id="side-menu-container">
		<?php  get_template_part('templates/headers/menu','side'); ?>				
	</div>
	<div id="km-hv5-bottom">
		<?php if ($sy_options['hv5_social_active'] == 1){ ?>
			<div id="km-hv5-social"><?php sy_social_links(); ?></div>		
		<?php } ?>

		<form action="<?php echo esc_url(home_url( '/' )); ?>" method="get" id="km-hv5-search" tabindex="0">
			<input type="text" name="s" autocomplete="off" placeholder="<?php echo esc_html__('SEARCH','kameleon'); ?>">			
		</form>	
	</div>

</header>	
<?php 
	$button_positions = explode('-', $sy_options['hv5_button_position']);
	$button_classes = '';
	if(is_array($button_positions)){
		$button_classes .= ' km-frame-'.$button_positions[0].' km-frame-'.$button_positions[1];
	}
?>

<div id="km-hv5-ic-container" data-position="<?php echo esc_attr($sy_options['hv5_button_position']); ?>" class="nores <?php echo esc_attr($button_classes); ?>">
	<?php echo kameleon_hamburger_icon($sy_options['hv5_icon_style'],"km-hv5_icon","showSideMenu()"); ?>					
</div>