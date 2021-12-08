<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============       S O C I A L    S H A R E       ============== 
   ==                                                              ==
   ==  															   ==
\* ================================================================== */

function sy_socialshare_shortC($atts) {  

 	extract(shortcode_atts(array(						
		'ss_backsize'			=> '35',
		'ss_size'				=> '26',
		'ss_borderradius'		=> '0',
		'ss_style'				=> 'hoverColorScheme',
		'ss_backcolor'			=> 'transparent',
		'ss_iconcolor'			=> '#888',
		'ss_iconhovercolor'		=> '#fff',
		'ss_link'				=> '',
		'ss_socialarray'		=> '',
		'ss_align'				=> 'left',		
		'ss_margins'			=> '5',		
 	), $atts));

 	$sa = array(
 		'backsize'			=>	$ss_backsize,
		'size'				=>	$ss_size,
		'borderradius'		=>	$ss_borderradius,
		'style'				=>	$ss_style,
		'backColor'			=>	$ss_backcolor,
		'iconColor'			=>	$ss_iconcolor,
		'iconHoverColor'	=>	$ss_iconhovercolor,
		'link'				=>	$ss_link,
		'align'				=>  $ss_align,
		'margins'			=>  $ss_margins,
 	);

	$socialArray =	explode(',',$ss_socialarray);

	return kameleon_social_share_modern($socialArray, $sa,'share');
 }
add_shortcode( 'sy_socialshare', 'sy_socialshare_shortC' );


?>