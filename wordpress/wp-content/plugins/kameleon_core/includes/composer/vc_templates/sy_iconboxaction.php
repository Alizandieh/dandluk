<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============     I C O N B O X    B U T T O N 	   ============== 
   ==                                                              ==
   ==  															   ==
\* ================================================================== */

function sy_iconboxaction_shortC($atts) {  
	//IconBox Attributes Attributes
 	extract(shortcode_atts(array(						
		'icbb_icon'			 			=> 		'',	
		'icbb_height'			 		=> 		'',	
		'icbb_icon_color' 				=> 		'#eee',	
		'icbb_icon_size' 				=> 		'36',	
		'icbb_icon_hover_color' 		=> 		'',	
		'icbb_icon_bb_height'	 		=> 		'',	
		'icbb_icon_bb_width' 			=> 		'',	
		'icbb_icon_bb_color' 			=> 		'',	
		'icbb_title' 					=> 		'',	
		
		'icbb_title_font'				=>		'',
		'icbb_title_style'				=>		'',
		'icbb_title_size'				=>		'',
		
		'icbb_title_color' 				=> 		'',	
		'icbb_title_bb_height'	 		=> 		'',	
		'icbb_title_bb_width' 			=> 		'',	
		'icbb_title_bb_color' 			=> 		'',	
		'icbb_subtitle' 				=> 		'',	
		
		
		'icbb_subtitle_font'			=>		'',
		'icbb_subtitle_style'			=>		'',
		'icbb_subtitle_size'			=>		'',
		
		'icbb_subtitle_color' 			=> 		'',	
		'icbb_info' 					=> 		'',	
		
		'icbb_info_font'				=>		'',
		'icbb_info_style'				=>		'',
		'icbb_info_size'				=>		'',

		'icbb_info_color' 				=> 		'',
		'icbb_button_text'				=> 		'Button Text',	
		'icbb_button_height'			=> 		'32',	
		'icbb_button_link'				=> 		'',	
		'icbb_button_target'			=> 		'_blank',	
		

		'icbb_button_font'				=>		'',
		'icbb_button_style'				=>		'',
		'icbb_button_size'				=>		'',	

		'icbb_button_color' 			=> 		'#ddd',	
		'icbb_button_bg' 				=> 		'#121212',		
		'icbb_button_border_color'		=> 		'#111',	
		'icbb_button_border_size'		=> 		'1',	
		'icbb_button_color_hover' 		=> 		'#fff',	
		'icbb_button_bg_hover' 			=> 		'#111',	
		'icbb_button_border_hover'		=> 		'#111',	
		'icbb_button_hover_enabled'		=> 		'on',	
		'icbb_style' 					=> 		'effect1',	
		'icbb_icon_hover_style_2' 		=> 		'scale',	
		'icbb_icon_hover_style_3' 		=> 		'scaleup',
		'icbb_icon_padding'				=>		'',
		'icbb_title_padding'			=>		'',
		'icbb_info_padding'				=>		'',	
 	), $atts));

 
 	//Button Style
 	$button_font = sy_composer_font_styles($icbb_button_font, $icbb_button_size, $icbb_button_style);
 	$button_style = 'color:'.$icbb_button_color.'; background:'.$icbb_button_bg.'; height:'.$icbb_button_height.'px; line-height:'.$icbb_button_height.'px;'.$button_font.' border:'.$icbb_button_border_size.'px solid '.$icbb_button_border_color.'; --button-hover-bg:'.$icbb_button_bg_hover.'; --button-hover-color:'.$icbb_button_color_hover.'; --button-hover-border-color:'.$icbb_button_border_hover.';';

 	//Info Style
 	$info_font = sy_composer_font_styles($icbb_info_font, $icbb_info_size, $icbb_info_style);
 	$info_style = 'color:'.$icbb_info_color.';'.$info_font.''.$icbb_info_padding;
 	//Title Style
 	$title_font = sy_composer_font_styles($icbb_title_font, $icbb_title_size, $icbb_title_style);
 	$title_style = 'color:'.$icbb_title_color.';'.$title_font;
 	//SubTitle Style
 	$subtitle_font = sy_composer_font_styles($icbb_subtitle_font, $icbb_subtitle_size, $icbb_subtitle_style);
 	$subtitle_style = 'color:'.$icbb_subtitle_color.';'.$subtitle_font; 
 	//Icon Style 
	$icon_style = 'color:'.$icbb_icon_color.'; font-size:'.$icbb_icon_size.'px; --icon-hover-color:'.$icbb_icon_hover_color.';'. $icbb_icon_padding;	
	//Container Style 
	$container_style = 'height:'.$icbb_height.'px; min-height:'.$icbb_height.'px; --icon-hover-color:'.$icbb_icon_hover_color.';';

	$icbb_icon_hover_style = '';
	if($icbb_style == "effect2")
		$icbb_icon_hover_style = $icbb_icon_hover_style_2;
	if($icbb_style == "effect3")	
		$icbb_icon_hover_style = $icbb_icon_hover_style_3;


 	$outPut = '<div class="km-iconbox-with-button" style="'.$container_style.'" data-style="'.$icbb_style.'" data-hover-icon="'.$icbb_icon_hover_style.'" data-activehover-button="'.$icbb_button_hover_enabled.'" >
					<div class="km-inter-insider">
						<div class="km-iconboxb-iconc" style="'.$icon_style.'">
							<i class="'.$icbb_icon.'"></i>
							<div class="km-icbb-bbottom" style="height:'.$icbb_icon_bb_height.'px; width:'.$icbb_icon_bb_width.'px; background:'.$icbb_icon_bb_color.'"></div>
						</div>	
						<div class="km-iconboxb-title-c" style="'.$icbb_title_padding.'">
							<div class="km-iconboxb-title" style="'.$title_style.'">'.$icbb_title.'</div>
							<div class="km-iconboxb-subtitle" style="'.$subtitle_style.'">'.$icbb_subtitle.'</div>
							<div class="km-icbb-bbottom" style="height:'.$icbb_title_bb_height.'px; width:'.$icbb_title_bb_width.'px; background:'.$icbb_title_bb_color.'"></div>
						</div>
						<div class="km-iconboxb-info" style="'.$info_style.'">'.$icbb_info.'</div>
						<div class="km-iconboxb-buttonc">
							<a href="'.$icbb_button_link.'" target="'.$icbb_button_target.'" class="km-iconboxb-button" style="'.$button_style.'">'.$icbb_button_text.'</a>
						</div>			
					</div>
				</div>';

 	return $outPut;
 }
add_shortcode( 'sy_iconboxaction', 'sy_iconboxaction_shortC' );
?>