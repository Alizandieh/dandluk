<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============         T E A M     M A T E    	   ============== 
   ==                                                              ==
   ==  															   ==
\* ================================================================== */

function sy_teammate_shortC($atts,$content) {  
	//Teammate Attributes
 	extract(shortcode_atts(array(						
		'style'  			=> 'style1',
		'name'  			=> '',
		'name_color'		=> '',
	
		'team_name_font'	=>'',
		'team_name_style'	=>'',
		'team_name_size'	=>'',
		'team_position_font'	=>'',
		'team_position_style'	=>'',
		'team_position_size'	=>'',	

		'position' 			=> '',	
		'position_color' 	=> '',
		
 		'fb_link'			=> '',
 		'gplus_link'		=> '',
 		'tw_link'			=> '',
 		'lk_link'			=> '',
 		'insta_link'		=> '',
 		'git_link'			=> '',
 		'scl_color'			=> '',
 		'img'				=> ''
  	), $atts));
	$name_font = sy_composer_font_styles($team_name_font, $team_name_size, $team_name_style);
	$position_font = sy_composer_font_styles($team_position_font, $team_position_size, $team_position_style);


  	$img_src = wp_get_attachment_image_src($img,'full');

	$outPut ='<div class="km-teammate-container" data-style="'.$style.'">
			<div class="km-teammate-img">
				<div class="km-teammate-img-overlay"></div>
				<img src="'.$img_src[0].'">
			</div>	
			<div class="km-teammate-info">	
				<div class="km-teammate-np">
					<div class="km-teammate-name" style="color:'.$name_color.';'.$name_font.'">'.$name.'</div>	
					<div class="km-teammate-position" style="color:'.$position_color.'; '.$position_font.'">'.$position.'</div>					
				</div>
				<div class="km-teammate-soc" style="color:'.$scl_color.';">';
	
	$outPut .= (trim($fb_link) != "") ? '<a href="'.esc_url($fb_link).'"><i class="fa fa-facebook"></i></a>' : '';	
	$outPut .= (trim($tw_link) != "") ? '<a href="'.esc_url($tw_link).'"><i class="fa fa-twitter"></i></a>' : '';	
	$outPut .= (trim($gplus_link) != "") ? '<a href="'.esc_url($gplus_link).'"><i class="fa fa-google-plus"></i></a>' : '';	
	$outPut .= (trim($lk_link) != "") ? '<a href="'.esc_url($lk_link).'"><i class="fa fa-linkedin"></i></a>' : '';	
	$outPut .= (trim($insta_link) != "") ? '<a href="'.esc_url($insta_link).'"><i class="fa fa-instagram"></i></a>' : '';	
	$outPut .= (trim($git_link) != "") ? '<a href="'.esc_url($git_link).'"><i class="fa fa-github"></i></a>' : '';						
	$outPut .='</div>
				<div class="km-teammate-content">'.do_shortcode($content).'</div>
			</div>
		</div>';	
 	return $outPut;
 }
add_shortcode( 'sy_teammate', 'sy_teammate_shortC' );

?>