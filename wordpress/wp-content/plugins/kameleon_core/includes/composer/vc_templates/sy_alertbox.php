<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============         A L E R T     B O X    	   ============== 
   ==                                                              ==
   ==  															   ==
\* ================================================================== */

function sy_alertbox_shortC($atts) {  
	//AlertBox Attributes
 	extract(shortcode_atts(array(						
		'box_bg_color'  	=> '#f6f6f6',
		'color'  			=> '#777',
		'radius'			=> '0',
		'icon'				=> '',
		'title_text' 		=> '',	
		'message_text' 		=> '',
		'border_thickness'	=> '',
		'border_color'	 	=> '',
		'alb_margin'		=> '',
 	), $atts));

 	$icon_output = ($icon != null && $icon !="") ? '<i class="km-icon-alert '.$icon.'"></i>' : '';  
 	$box_style = 'background-color: '.$box_bg_color.'; color:'.$color.'; border-radius: '.$radius.'px; border: '.$border_thickness.'px solid '.$border_color.';';
 	$box_style .=  $alb_margin;
 	
 	$outPut = '<div class="km-alert-box" style="'.$box_style.'">
					<div class="km-alert-box-text">
						'.$icon_output.'
						<span class="km-alert-title">'.$title_text.'</span>
						<span class="km-alert-message">'.$message_text.'</span>
					</div>
					<a class="km-alert-box-close" onclick="close_alert(this);"><i class="fa fa-times"></i></a>	
				</div>';

 	return $outPut;
 }
add_shortcode( 'sy_alertbox', 'sy_alertbox_shortC' );


?>