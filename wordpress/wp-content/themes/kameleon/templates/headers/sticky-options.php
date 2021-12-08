<?php 
$sticky_border_color = $sy_options['sticky_border_color'];
$sticky_background = isset($sy_options['sticky_background']['rgba']) ? $sy_options['sticky_background']['rgba'] : 'rgba(0, 0, 0, 0.9)';
$sticky_color = $sy_options['sticky_color'];
$sticky_logo = $sy_options['sticky_logo'];
if ( (is_page() || is_single()) ) {
	if(get_post_meta(get_the_ID(), "header_unique", true) == 1){
		$hv_transparent = get_post_meta(get_the_ID(), "hv_transparent", true);
		$h_logo_type= get_post_meta(get_the_ID(), "hv_logo_type", true);
		$header_background = get_post_meta(get_the_ID(), "hv_background", true);
		$border_color = get_post_meta(get_the_ID(), "hv_border_color", true);
		$text_color = get_post_meta(get_the_ID(), "hv_text_color", true);
		$hv_width = get_post_meta(get_the_ID(), "hv_width", true);
		
	}
	if(get_post_meta(get_the_ID(), "sticky_header_unique", true) == 1){
		$sticky_border_color = get_post_meta(get_the_ID(), "sticky_border_color", true); 
		$sticky_background = get_post_meta(get_the_ID(), "sticky_background", true); 
		$sticky_color = get_post_meta(get_the_ID(), "sticky_color", true); 
		$sticky_logo = get_post_meta(get_the_ID(),"sticky_logo",true);
		$hv_sticky_width = get_post_meta(get_the_ID(),"hv_sticky_width",true);
	}
	
}
$headerwrapper_style =  'height: '.$height.'px; color: '.$text_color. '; line-height:'.$height.'px; border:'.$border_px.'px solid '.$border_color.'; --hamburger-color:'.$text_color.';';	
$logo_style = 'width : '.$logo_width.'px; height: '.$logo_height.'px; margin-top:'.$hv_logo_matgintop.'px;';	

if($hv_sticky == 1 ){
	$wraper_data = 'data-sticky="true" data-slogo-height="'.$sy_options['sticky_logo_height'].'" data-slogo-width="'.$sy_options['sticky_logo_width'].'" data-slogo-marginTop="'.$sy_options['sticky_logo_marginTop'].'" data-sborder="'.$sticky_border_color.'" data-sbackground="'.$sticky_background.'" data-scolor="'.$sticky_color.'" data-sheight="'.$sticky_height.'"	data-logo-height="'.$logo_height.'" data-logo-width="'.$logo_width.'" data-logo-marginTop="'.$hv_logo_matgintop.'" data-border="'.$border_color.'" data-color="'.$text_color.'"  data-height="'.$height.'"';
}else{
	$wraper_data = 'data-sticky="false"  data-color="'.$text_color.'" ';
}
?>