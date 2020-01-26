<?php 
$additionalLinks ='';
$sy_options = kameleon_get_options_name();

$is_single = (is_page() || is_single()) ? true : false;


	$isHeaderUnique = ($is_single && get_post_meta(get_the_ID(), "header_unique", true) == 1) ? true : false;

	if(class_exists('woocommerce')){
		$cart_enabled = ($isHeaderUnique) ? get_post_meta(get_the_ID(), "cart_enabled_header", true) : 
		$sy_options['header_v3_cart_enabled_header'];
		if($cart_enabled == 1){
			$additionalLinks .= kameleon_woocommerce_header_cart();
		}	
	}
	//Checking if the Search is Enabled
	$search_enabled = ( $isHeaderUnique ) ? 
				get_post_meta(get_the_ID(), "search_enabled", true) : 
				$sy_options['header_v3_search_enabled'];
	if($search_enabled == 1)
		$additionalLinks .= '<div class="search-link additional-link">
						<div class="search-header-link additional-header-link" onclick="kameleonSearchShow(\'#kameleon-search-container\');">
							<i class="fa fa-search"></i>
						</div>
					</div>';
	
	$swa_enabled = ($isHeaderUnique) ? get_post_meta(get_the_ID(), "swa_enabled", true) : 
			$sy_options['header_v3_swa_enabled'];

	if($swa_enabled == 1)
		$additionalLinks .= '<div class="sliderwidgetarea-link additional-link">
		<div class="sliderwidgetarea-header-link additional-header-link km-hamburger-link">'.kameleon_hamburger_icon($sy_options['header_v3_icon_swa'],"km-swa-icon","showSlideWidgetArea()").'
				</div></div>';		



	$args = array(
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
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s 
								'.$additionalLinks.'
							</ul>',
		'depth'           => 0,
		'walker' => new Kameleon_Mega_Menu()	
		
	);
	if (has_nav_menu('center_right_menu')) {
		wp_nav_menu( $args ); 
	}else
	echo "<span class='ass-menu'>Please assign a right menu on <strong>Appearance/Menus</strong></span>"; 
?>