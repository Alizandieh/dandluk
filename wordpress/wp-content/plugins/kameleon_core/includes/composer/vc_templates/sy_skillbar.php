<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============         	 S K I L L B A R    	   ============== 
   ==                                                              ==
   ==  															   ==
\* ================================================================== */


function sy_skillbar_shortC($atts) {  

	//SkillBar Attributes
 	extract(shortcode_atts(array(
		'style' 			=> 'style_1',
		'strips'			=> 'none',
		'percent'			=> '80',
		'bar_bg_color' 		=> '#f6f6f6',
		'bar_color'  		=> '#00AFD1',
		'radius'			=> '0',
		'skill' 			=> 'Skill Title',
		'height' 			=> '5',
		'sk_title_color' 	=> '#333',
		'sk_title_font'		=> '',
		'sk_title_style'	=> '',
		'sk_title_size'		=> '',
 	), $atts));

 	$title_font = sy_composer_font_styles($sk_title_font, $sk_title_size, $sk_title_style);

 	$outPut = '<div class="km-progressbar-container" data-style="'.$style.'" data-strips="'.$strips.'" data-percent="'.$percent.'">';
	if($style != "style_3"):
		$outPut .= '<div class="km-progressbar-info">
						<div class="km-progressbar-tooltip">'.$percent.'%</div>
						<div class="km-progressbar-title" style="color:'.$sk_title_color.'; '.$title_font.'">'.$skill.'</div>			
					</div>';
	endif;
	$outPut .= '<div class="km-progressbar" style="background-color:'.$bar_bg_color.'; line-height: '.$height.'px; height: '.$height.'px; border-radius: '.$radius.'px;">';
	
	if($style == "style_3"):
		$outPut .= '<div class="km-progressbar-title">'.$skill.'</div>';
	endif;
	
	$outPut .= '<div class="km-progressbar-thebar" style="background-color: '.$bar_color.'; border-radius: '.$radius.';px;">';
	
	if($style == "style_3"):
		$outPut .= '<div class="km-progressbar-tooltip" style="color:#fff;">'.$percent.'%</div>';
	endif;

	$outPut .= '</div>
		</div>
	</div>';
	return $outPut;
}

add_shortcode( 'sy_skillbar', 'sy_skillbar_shortC' );


?>