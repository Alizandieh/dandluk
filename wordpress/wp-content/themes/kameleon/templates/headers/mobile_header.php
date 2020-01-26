<?php 
	$sy_options = kameleon_get_options_name();
	$mobile_logo = $sy_options['mobilelogo']['url'];
	if($sy_options['mheader_logo_type'] == 'transparent'){
		$mobile_logo = $sy_options['mobiletrslogo']['url'];
	}
?>

<div id="km-mheader">	
	<?php 
		if($sy_options['mheader_top_active'] == 1 ){
			get_template_part('templates/headers/top/top_mobile');
		} 	
	?>	
	<div id="km-mheader-container" data-logo-position="<?php echo esc_attr($sy_options['mheader_logo_position']); ?>" data-icon-position="<?php echo esc_attr($sy_options['mheader_icon_position']); ?>">
		<div id="km-mheader-logo">
			<a href="<?php echo esc_url(home_url('/')); ?>/">
				<img src="<?php echo esc_url($mobile_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">			
			</a>			
		</div>
		<?php if(class_exists( 'woocommerce' ) ){ ?>
		<div id="km-mheader-woocommerce-container">
			<a href="<?php echo esc_url(WC()->cart->get_cart_url()); ?>">
				<i class="fa fa-opencart"></i>
			</a>
		</div>
		<?php } ?>

		<div id="km-mheader-icon-container">
			<?php echo kameleon_hamburger_icon($sy_options['mheader_icon_style'],"km-mheader-icon","showResponsiveMenu()"); ?>					
		</div>
	</div>	
	
	<div id="responsive-menu" data-menu-style="<?php echo esc_attr($sy_options['mheader_menu_style']); ?>" data-situation="hidden">
		<?php if($sy_options['mheader_menu_style'] != 'drop-down'){ ?>
			<div id="responsive-menu-closer" onclick="showResponsiveMenu();">
				<div id="responsive-menu-closer-icon">
					<i class="fa"></i>
				</div>
			</div>
		<?php } ?>
		<?php  get_template_part('templates/headers/menu','responsive'); ?>	
	</div>


</div>