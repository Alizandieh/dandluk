<?php 
	$sy_options = kameleon_get_options_name();
	//Checking The header Version & if it's one page menu
	$args = array();
	$menu = 'primary_menu';
	$additionalLinks = $classes = '';
	$is_single = (is_page() || is_single()) ? true : false;
	$header_v = ( $is_single && get_post_meta(get_the_ID(), "header_unique", true) == 1 ) ? 
				get_post_meta(get_the_ID(), "header_v", true) : 
				$sy_options['header_v']; 


	$one_page = $cart_enabled = 0;			
	//If Not the Center Menu Check if One Page Menu
	if(!in_array($header_v,kameleon_noonemenu_headers()))
		$one_page = $sy_options[$header_v.'_onepage'];


	//if Singele Check if One page Menu Is Enabled
	if($is_single)
		$one_page = get_post_meta(get_the_ID(), "onepage", true);	

	if($one_page == 1){
		$menu = 'onepage_menu';
		$classes ='one-page-menu';
	}

	
	$isHeaderUnique = ($is_single && get_post_meta(get_the_ID(), "header_unique", true) == 1) ? true : false;
	

	//Checking For the WooCemmerce Cart actvive
	if(class_exists('woocommerce')){
		$cart_enabled = ($isHeaderUnique) ? get_post_meta(get_the_ID(), "cart_enabled_header", true) : 
			$sy_options[$header_v.'_cart_enabled_header'];
		if($cart_enabled == 1){
			$additionalLinks .= kameleon_woocommerce_header_cart();
		}	
	}

	//Checking For the search active
	$search_enabled = ($isHeaderUnique) ? get_post_meta(get_the_ID(), "search_enabled", true) : 
			$sy_options[$header_v.'_search_enabled'];		
	if($search_enabled == 1)
		$additionalLinks .= '<div class="search-link additional-link">
					<div class="search-header-link additional-header-link" onclick="kameleonSearchShow(\'#kameleon-search-container\');">
						<i class="fa fa-search"></i>
					</div>
				</div>';
				
	
	$swa_enabled = ($isHeaderUnique) ? get_post_meta(get_the_ID(), "swa_enabled", true) : 
			$sy_options[$header_v.'_swa_enabled'];

	if($swa_enabled == 1)
		$additionalLinks .= '<div class="sliderwidgetarea-link additional-link">
		<div class="sliderwidgetarea-header-link additional-header-link km-hamburger-link">'.kameleon_hamburger_icon($sy_options[$header_v.'_icon_swa'],"km-swa-icon","showSlideWidgetArea()").'
				</div></div>';		

				
	$headerButtons ='';			
	if($swa_enabled == 1 || $search_enabled == 1 || $cart_enabled==1)
		$headerButtons = '<li class="km-header-buttons">'.$additionalLinks.'</li>';

	$items_wrap = '<ul id="%1$s" class="%2$s '.$classes.'">%3$s 
								'.$headerButtons.'
							</ul>';			
	

	if($header_v == "header_v7")
		$items_wrap = '<ul id="%1$s" class="%2$s '.$classes.'">%3$s</ul><div class="km-header-buttons">'.$additionalLinks.'</div>';

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
		'items_wrap'      => $items_wrap,
		'depth'           => 0,					
	);	
	
	$args['walker'] = new Kameleon_Mega_Menu();
	if (has_nav_menu($menu)) {
		wp_nav_menu( $args ); 
	}else
	echo "<span class='ass-menu'>Please assign a menu on <strong>Appearance/Menus</strong></span>";
?>