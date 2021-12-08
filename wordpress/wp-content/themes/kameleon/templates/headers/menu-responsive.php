<?php 
	$sy_options = kameleon_get_options_name();
	//Cheking The Type of Menu for Respnsive Header	
	$header_v = ( (is_page() || is_single()) && get_post_meta(get_the_ID(), "header_unique", true) == 1 ) ? get_post_meta(get_the_ID(), "header_v", true) : $sy_options['header_v']; 
	$menu = 'primary_menu';	
	if($header_v == 'header_v3'){		
		$args_left = array(
			'theme_location'  => 'center_left_menu',
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
			'items_wrap'      => '<div id="%1$s" class="%2$s">%3$s',
			'depth'           => 0,
			'walker' => new Kameleon_Mega_Menu_Responsive()				
		);
		if (has_nav_menu('center_left_menu')) {
			wp_nav_menu( $args_left );
		} 
		$args_right = array(
			'theme_location'  => 'center_right_menu',
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
			'items_wrap'      => '%3$s</div>',
			'depth'           => 0,
			'walker' => new Kameleon_Mega_Menu_Responsive()				
		);
		if (has_nav_menu('center_right_menu')) {
			wp_nav_menu( $args_right );
		} 
	}	
	else if($header_v != 'header_v3'){
		$menu = 'primary_menu';
				
		$args = array(
			'theme_location'  => $menu,
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
			'items_wrap'      => '<div id="%1$s" class="%2$s">%3$s</div>',
			'depth'           => 0,
			'walker' => new Kameleon_Mega_Menu_Responsive()	
			
		);


		if (has_nav_menu($menu)) {
			wp_nav_menu( $args ); 
		}else
		echo "<span class='ass-menu'>Please assign a menu on <strong>Appearance/Menus</strong></span>";
	}
?>