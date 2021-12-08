<?php $sy_options = kameleon_get_options_name(); ?>
<div id="km-footer-menu">
	<?php 
		$args = array(
			'theme_location'  => 'footer_menu',
			'menu'            => '',
			'container'       => '',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'menu',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s </ul>',
			'depth'           => 0				
		);
		if (has_nav_menu('footer_menu')) {
			wp_nav_menu( $args ); 
		}else
		echo "<span class='ass-menu'>Please assign a footer menu on <strong>Appearance/Menus</strong></span>"; 
	?>
</div>		