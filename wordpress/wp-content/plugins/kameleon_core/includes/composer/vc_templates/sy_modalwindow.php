<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============       M O D A L    W I N D O W   	   ============== 
   ==                                                              ==
   ==  															   ==
\* ================================================================== */

function sy_modalwindow_shortC($atts,$content){  
	//ModalBox Attributes
 	extract(shortcode_atts(array(						
		'modal_bg_color'  				=> '#f6f6f6',
		'color'  						=> '#777',		
		'title' 						=> 'My Title',	
		'effect'						=> 'km-effect-1',		
 		'close_text'					=> 'Close Me!',
 		'trigger_b_text'				=> 'Open Window',
 		'trigger_b_size'				=> 'normal',
 		'trigger_b_color'				=> '#fff',
 		'trigger_b_bg'					=> '#222',
 		'trigger_b_fs'					=> '16',
 		'trigger_b_border_thickness'	=> '0',
 		'trigger_b_border_color'		=> '#111',
 		'trigger_position'				=> 'left',
 		'trigger_b_margin'				=> '', 		
 		'modal_overlay_bg'				=> 'rgba(0,0,0,0.7)',

 	), $atts));

 	//Auto Generated Id 
 	$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
 	$modal_id = substr(str_shuffle($chars),0,6);



 	$outPut = $modal_outPut = $modal_style = '';
 	$trigger_b_style = 'color:'.$trigger_b_color.'; background-color:'.$trigger_b_bg.'; font-size:'.$trigger_b_fs.'px; border:'.$trigger_b_border_thickness.'px solid '.$trigger_b_border_color.';'.$trigger_b_margin;
 	$outPut .= '<div onclick="show_modalwindow(this);" data-position="'.$trigger_position.'" class="km-trigger km-modal-button" data-modal="'.$modal_id.'" style="'.$trigger_b_style.'" data-size="'.$trigger_b_size.'">'.$trigger_b_text.'</div>';

 	$modal_style .= 'background-color:'.$modal_bg_color.'; color:'.$color.';';
 	$outPut .= '<div class="km-overlay km-frame-left km-frame-right km-frame-top km-frame-bottom km-frame-height km-frame-width" data-modal="'.$modal_id.'"  style="background-color:'.$modal_overlay_bg.';"><div class="km-modal '.$effect.'" id="'.$modal_id.'" ><div class="km-content" style="'.$modal_style.'"><h3>'.$title.'</h3><div>'.trim(do_shortcode($content),'"').'</div><button class="km-close" onclick="close_modalwindow();">'.$close_text.'</button></div></div></div>';
 	
 	return $outPut;
}

add_shortcode( 'sy_modalwindow', 'sy_modalwindow_shortC' );
?>