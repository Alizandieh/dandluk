<?php 
	$sy_options = kameleon_get_options_name();
	//Checking The header Version & if it's one page menu
	$args = array();
	$menu = 'primary_menu';
 	$classes = '';
	
	$is_single = (is_page() || is_single()) ? true : false;
 	$header_v = ( $is_single && get_post_meta(get_the_ID(), "header_unique", true) == 1 ) ? 
				get_post_meta(get_the_ID(), "header_v", true) : 
				$sy_options['header_v']; 
	

	$one_page = 0;			
	
	if(!in_array($header_v,kameleon_noonemenu_headers()))
		$one_page = $sy_options[$header_v.'_onepage'];
	//if Singele Check if One page Menu Is Enabled
	if($is_single)
		$one_page = get_post_meta(get_the_ID(), "onepage", true);	

	if($one_page == 1){
		$menu = 'onepage_menu';
		$classes ='one-page-menu';
	}

	

	$args = array(
		'theme_location'  => $menu,
		'menu'            => '',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'ul-fullec-menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s '.$classes.'">%3$s 							
							</ul>',
		'depth'           => 0,					
	);

	$args['walker'] = new Kameleon_Fullscreen_Menu();
	if (has_nav_menu($menu)) {
		wp_nav_menu( $args ); 
	}else
	echo "<span class='ass-menu'>Please assign a menu on <strong>Appearance/Menus</strong></span>";
?>