<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============      V I D E O   M O D A L      	   ============== 
   ==                                                              ==
   ==  															   ==
\* ================================================================== */

function sy_videomodal_shortC($atts,$content){  
	//ModalBox Attributes
 	extract(shortcode_atts(array(						
		'modalv_effect'					=> 'km-effect-1',		 		
 		'modalv_overlay_bg'				=> 'rgba(0,0,0,0.7)',
 		'modalv_iframe'					=> '',
 		'modalv_iframew'				=> '',
 		'modalv_iframeh'				=> '',
 		'modalv_close_color'			=> '#eee',
 		'modalv_close_bg'				=> '#111',
 		'modalv_tgr_image'				=> '',
 		'modalv_tgr_imagew'				=> '',
 		'modalv_tgr_imageh'				=> '',
 		'modalv_tgr_imagealign'			=> '',
 		'modalv_tgr_imagemargin'		=> '',
 	), $atts));
 	$img_src = wp_get_attachment_image_src($modalv_tgr_image,'full');
 	$outPut ='';
 	//Auto Generated Id 
 	$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
 	$modal_id = substr(str_shuffle($chars),0,8);

 	$trigger_style = 'height:'.$modalv_tgr_imageh.'px; width:'.$modalv_tgr_imagew.'px;'.$modalv_tgr_imagemargin; 
 	$modalv_style =  'min-height:'.$modalv_iframeh.'px; width:'.$modalv_iframew.'px;';
 	$closer_style = 'color:'.$modalv_close_color.'; background:'.$modalv_close_bg.';';

 	global $wp_embed;
	$videoembed = '';
	if ( is_object( $wp_embed ) ) {
		$videoembed = $wp_embed->run_shortcode( '[embed]' . $modalv_iframe . '[/embed]' );
	}

 	$outPut .= '<div class="km-modal-video-tgr-container" data-position="'.$modalv_tgr_imagealign.'"><div onclick="show_modalwindow(this);"  class="km-trigger km-modal-video-tgr"  data-modal="'.$modal_id.'" style="'.$trigger_style.'"><img src="'.$img_src[0].'"/></div></div>';

 	$outPut .= '<div class="km-overlay km-frame-left km-frame-right km-frame-top km-frame-bottom km-frame-height km-frame-width" data-modal="'.$modal_id.'"  style="background-color:'.$modalv_overlay_bg.';"><div class="km-modal-video-closer" style="'.$closer_style.'" onclick="close_modalwindow();">&#x2715;</div><div class="km-modal km-modal-video '.$modalv_effect.'" style="'.$modalv_style.'" id="'.$modal_id.'" ><div class="km-content" >'.$videoembed.'</div></div></div>';

 	

 	$trigger_classes = 'km-trigger km-modal-button';	
 	
 	return $outPut;
}

add_shortcode( 'sy_videomodal', 'sy_videomodal_shortC' );
?>