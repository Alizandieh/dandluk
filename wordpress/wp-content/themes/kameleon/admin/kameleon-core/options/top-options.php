<?php 
	
	//Creating a function to return the top header section style for all headers 1 2 3 4 & page unique headers
	function sy_topheader_style($header_v){
		$sy_options = kameleon_get_options_name();
		$values = array();
		$hv = 'h';
		$headersArray =  kameleon_headers_type_theme();
		if(array_key_exists($header_v , $headersArray))
			$hv = $headersArray[$header_v];
			
		$top_active =  $sy_options[$headersArray[$header_v].'_top'];				
		if($hv != 'h'){
			$hv = ($sy_options[$hv.'_unique_top'] == 0) ? 'h' : $hv;
		}
		$top_background =$sy_options[$hv.'_top_background'];
		
		$topScheme = $sy_options[$hv.'-top_scheme'];
		$top_color =$sy_options[$hv.'_'.$topScheme.'-top_color'];


		if( (is_page() || is_single()) && get_post_meta(get_the_ID(), 'header_unique', true) == 1){			
			$top_active = get_post_meta( get_the_ID(), "h_top", true) ;
			$page_top_unique = get_post_meta( get_the_ID(), "h_top_unique", true);
			$top_background = ($page_top_unique == 1) ?  get_post_meta( get_the_ID(), "h_top_background", true) : $sy_options[$hv.'_top_background'];

			$top_color = ($page_top_unique == 1) ? $sy_options[$hv.'_'.get_post_meta( get_the_ID(), "h_top_scheme", true).'-top_color'] : $sy_options[$hv.'_'.$topScheme.'-top_color'];
		}		
		$values = array(			
			'active' => $top_active,
			'style' => $sy_options[$hv.'_top_style'],
			'height' => $sy_options[$hv.'_top_height'],
			'background' => $top_background,
			'color' => $top_color,
			'menu_style' =>  $sy_options[$hv.'_top_menu_style']
		);	
		return $values;
	}


//Function to Retunr The top Options Header Type
function kameleon_top_header_type(){
	$sy_options = kameleon_get_options_name();

	$header_v = ( (is_single() || is_page() ) && get_post_meta(get_the_ID(), "header_unique", true) == 1 ) ? 
					get_post_meta(get_the_ID(), "header_v", true) : 
					$sy_options['header_v']; 
	$headersArray = kameleon_headers_type_theme();
	$header_v = (isset($sy_options[$headersArray[$header_v].'_unique_top']) && $sy_options[$headersArray[$header_v].'_unique_top'] == 1 ) ? $header_v : 'h'; 
	
	if(array_key_exists($header_v , $headersArray))
		$hv = $headersArray[$header_v];

	$topScheme = ((is_page() || is_single()) && get_post_meta(get_the_ID(), 'header_unique', true) == 1 && get_post_meta( get_the_ID(), "h_top_unique", true) == 1) ? 
				get_post_meta( get_the_ID(), "h_top_scheme", true) : 
				$sy_options[$hv.'-top_scheme'];

	return array(
		"header_v" => $headersArray[$header_v],
		"top_scheme" => $headersArray[$header_v].'-'.$topScheme,
	);
}

?>