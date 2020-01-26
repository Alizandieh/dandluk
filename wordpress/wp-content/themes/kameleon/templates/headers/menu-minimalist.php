<?php 
	$sy_options = kameleon_get_options_name();
	//Checking The header Version & if it's one page menu
	
	$additionalLinks ='';
	$is_single = (is_page() || is_single()) ? true : false;
 	$header_v = ( $is_single && get_post_meta(get_the_ID(), "header_unique", true) == 1 ) ? 
				get_post_meta(get_the_ID(), "header_v", true) : 
				$sy_options['header_v']; 
	
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

	if($header_v != "header_v9" && $header_v != "header_v10"){
		$headersArray = kameleon_headers_type_theme();			
		$additionalLinks .= '<div class="km-side-header-icon-link km-hamburger-container additional-link">
			<div class="km-side-header-icon-header-link km-hamburger-link additional-header-link">'.kameleon_hamburger_icon($sy_options[$header_v.'_icon_side'],"km-side-icon","showSideHeaderMinimalist('".$headersArray[$header_v]."')").'
					</div></div>';							
		
	}	
	if($header_v == "header_v10"){
		$headersArray = kameleon_headers_type_theme();			
		$additionalLinks .= '<div class="km-side-header-icon-link km-hamburger-container additional-link">
			<div class="km-side-header-icon-header-link km-hamburger-link additional-header-link">'.kameleon_hamburger_icon($sy_options[$header_v.'_icon_side'],"km-fullscreen-icon","showFullscreenHeaderMinimalist('".$headersArray[$header_v]."')").'
					</div></div>';							
		
	}			



	echo '<div class="km-header-buttons">'.$additionalLinks.'</div>';
?>