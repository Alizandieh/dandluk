<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============I N T E R A C T I V E    I C O N B O X============== 
   ==                                                              ==
   ==  															   ==
\* ================================================================== */

function sy_interactiveiconbox_shortC($atts) {  
 	extract(shortcode_atts(array(						
		'iib_height' 			=> '220',
		'iib_padding' 			=> '',				
		'iib_margin' 			=> '',
		'iib_icon_align' 		=> 'left',
		'iib_hover_style' 		=> 'toleft',
		'iib_icon_area_bg'		=> 'transparent',
		'iib_icon'				=> '',
		'iib_icon_size'			=> '36',
		'iib_icon_color'		=> '#555',		
		'iib_title_font_family' =>'',
		'iib_title_font_style' 	=>'',
		'iib_title_font_size' 	=>'',
		'iib_title'				=> '',	
		'iib_title_color'		=> '#666',
		'iib_subtitle_font_family' =>'',
		'iib_subtitle_font_style' =>'',
		'iib_subtitle_font_size' =>'',
		'iib_subtitle'			=>'',	
		'iib_subtitle_color'	=> '#999',
		'iib_info_area_bg'		=> '#f9f9f9',	
		'iib_info_font_family'	=>'',
		'iib_info_font_style'	=>'',
		'iib_info_font_size'	=>'',
		'iib_info_color'		=> '#777',
		'iib_info_align'		=> 'left',
		'iib_info_content'		=> ''

 	), $atts));

 	$iib_title_style = sy_composer_font_styles($iib_title_font_family, $iib_title_font_size, $iib_title_font_style);
 	$iib_subtitle_style = sy_composer_font_styles($iib_subtitle_font_family, $iib_subtitle_font_size, $iib_subtitle_font_style);
 	$iib_info_style = sy_composer_font_styles($iib_info_font_family, $iib_info_font_size, $iib_info_font_style);
 	

 	$containerStyle = 'background-color:'.$iib_icon_area_bg.';height:'.$iib_height.'px; min-height:'.$iib_height.'px;'.$iib_margin;
 	$thatPadding = $iib_padding;	

 	$outPut = '<div class="km-interactive-iconbox-container" data-icon-style="'.$iib_icon_align.'" data-hover-style="'.$iib_hover_style.'" style="'.$containerStyle.'">
				<div class="km-inter-i-area1" style="background:'.$iib_icon_area_bg.'; '.$thatPadding.'">
					<div class="km-inter-insider">
						<div class="km-inter-i-a1-icon" style="font-size:'.$iib_icon_size.'px; color:'.$iib_icon_color.';">
							<i class="'.$iib_icon.'"></i>
						</div>			
						<div class="km-inter-i-a1-title-c" style="padding-'.$iib_icon_align.':'.intval($iib_icon_size+15).'px;">
							<div class="km-inter-i-title" style="color:'.$iib_title_color.';'.$iib_title_style.'">'.$iib_title.'</div>
							<div class="km-inter-i-subtitle" style="color:'.$iib_subtitle_color.';'.$iib_subtitle_style.'">'.$iib_subtitle.'</div>
						</div>				
					</div>
				</div>		
				
				<div class="km-inter-i-area2" style="background:'.$iib_info_area_bg.'; '.$iib_info_style.' color:'.$iib_info_color.'; text-align:'.$iib_info_align.'; '.$thatPadding.'">
					<div class="km-inter-insider">'.$iib_info_content.'</div>
				</div>		
			</div>';

 	return $outPut;
 }
add_shortcode( 'sy_interactiveiconbox', 'sy_interactiveiconbox_shortC' );


?>