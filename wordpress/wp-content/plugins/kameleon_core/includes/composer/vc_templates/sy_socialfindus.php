<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============       S O C I A L    S H A R E       ============== 
   ==                                                              ==
   ==  															   ==
\* ================================================================== */

function sy_socialfindus_shortC($atts) {  

 	extract(shortcode_atts(array(						
		'sf_backsize'			=> '35',
		'sf_size'				=> '26',
		'sf_borderradius'		=> '0',
		'sf_style'				=> 'hoverColorScheme',
		'sf_backcolor'			=> 'transparent',
		'sf_iconcolor'			=> '#888',
		'sf_iconhovercolor'		=> '#fff',				
		'sf_align'				=> 'left',		
		'sf_margins'			=> '5',		
 		'sf_facebook'			=>'',
		'sf_twitter'			=>'',
		'sf_instagram'			=>'',
		'sf_youtube'			=>'',
		'sf_linkedin'			=>'',
		'sf_google'				=>'',
		'sf_behance'			=>'',
		'sf_vimeo'				=>'',
		'sf_flickr'				=>'',
		'sf_skype'				=>'',
		'sf_pinterest'			=>'',
		'sf_dribbble'			=>'',
		'sf_twitch'				=>'',
		'sf_soundcloud'			=>'',
		'sf_github'				=>'',
		'sf_vine'				=>'',
		'sf_tumblr'				=>'',
		'sf_foursquare'			=>'',
		'sf_rss'				=>'',
 	), $atts));

 	$sa = array(
 		'backsize'			=>	$sf_backsize,
		'size'				=>	$sf_size,
		'borderradius'		=>	$sf_borderradius,
		'style'				=>	$sf_style,
		'backColor'			=>	$sf_backcolor,
		'iconColor'			=>	$sf_iconcolor,
		'iconHoverColor'	=>	$sf_iconhovercolor,		
		'align'				=>  $sf_align,
		'margins'			=>  $sf_margins,
 	);
 	$socialArray = array();	
	$socialArray = sy_add_social_aray($socialArray,$sf_facebook,'facebook');
	$socialArray = sy_add_social_aray($socialArray,$sf_twitter,'twitter');
	$socialArray = sy_add_social_aray($socialArray,$sf_instagram,'instagram');
	$socialArray = sy_add_social_aray($socialArray,$sf_youtube,'youtube');
	$socialArray = sy_add_social_aray($socialArray,$sf_linkedin,'linkedin');
	$socialArray = sy_add_social_aray($socialArray,$sf_google,'google');
	$socialArray = sy_add_social_aray($socialArray,$sf_behance,'behance');
	$socialArray = sy_add_social_aray($socialArray,$sf_vimeo,'vimeo');
	$socialArray = sy_add_social_aray($socialArray,$sf_flickr,'flickr');
	$socialArray = sy_add_social_aray($socialArray,$sf_skype,'skype');
	$socialArray = sy_add_social_aray($socialArray,$sf_pinterest,'pinterest');
	$socialArray = sy_add_social_aray($socialArray,$sf_dribbble,'dribbble');
	$socialArray = sy_add_social_aray($socialArray,$sf_twitch,'twitch');
	$socialArray = sy_add_social_aray($socialArray,$sf_soundcloud,'soundcloud');
	$socialArray = sy_add_social_aray($socialArray,$sf_github,'github');
	$socialArray = sy_add_social_aray($socialArray,$sf_vine,'vine');
	$socialArray = sy_add_social_aray($socialArray,$sf_tumblr,'tumblr');
	$socialArray = sy_add_social_aray($socialArray,$sf_foursquare,'foursquare');
	$socialArray = sy_add_social_aray($socialArray,$sf_rss,'rss');

	return kameleon_social_share_modern($socialArray, $sa,'findus',array(),'km-item-bind-view km-item-bind-hidden');
 }
add_shortcode( 'sy_socialfindus', 'sy_socialfindus_shortC' );

function sy_add_social_aray($arraySoc = array() , $socialLink, $name){
	if(trim($socialLink) != '')
		$arraySoc[$name] = $socialLink;
	return $arraySoc;	
}

?>