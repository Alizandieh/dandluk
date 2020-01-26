<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============         H O V E R   I M A GE     	   ============== 
   ==                                                              ==
   ==  															   ==
\* ================================================================== */

function sy_beforeafterimage_shortC($atts) {  
	
 	extract(shortcode_atts(array(								
		'before_image' => '',
		'after_image' => '',
		'bai_orientation' => 'horizontal',
		'bai_colorscheme' => '#fff',
		'bai_overlay_enabled' => 'on',
		'bai_overlay_bg' => 'rgba(0,0,0,0.5)',
		'bai_overlay_button_color' => '#fff',
		'bai_overlay_button_bg' => '#269ac1',
		'bai_boxshadow_enabled' => 'off',
		'bai_boxshadow_hover_enabled' => 'on',
		'bai_boxshadow_color' => 'rgba(0,0,0,0.8)',
		'bai_boxshadow_style' => 'style2',
		'bai_border' => '0',
		'bai_border_color' => 'transparent',
		'bai_margin' => '',
 	), $atts));

 	$before_image_src = wp_get_attachment_image_src($before_image,'full');
 	$after_image_src = wp_get_attachment_image_src($after_image,'full');

 	$overlay_button_style = 'color:'.$bai_overlay_button_color.'; background:'.$bai_overlay_button_bg.'; ';
 	$container_style = 'border:'.$bai_border.'px solid '.$bai_border_color.'; --box-shadow-color:'.$bai_boxshadow_color.';';
 	$container_style .= $bai_margin;

 	$outPut = '<div class="km-beforeafter-image km-element-box-shadow" style="'.$container_style.'" data-boxshadow="'.$bai_boxshadow_enabled.'" data-boxshadow-hover="'.$bai_boxshadow_hover_enabled.'" data-boxshadow-style="'.$bai_boxshadow_style.'">
		<div class="km-twentytwenty-container " data-orientation="'.$bai_orientation.'" data-overlay="'.$bai_overlay_enabled.'" >
	        <img src="'.$before_image_src[0].'"/>
			<img src="'.$after_image_src[0].'"/>
	        <div class="km-twentytwenty-overlay" style="background:'.$bai_overlay_bg.'">
	        	<div class="km-twentytwenty-before-label" style="'.$overlay_button_style.'">Before</div>
	        	<div class="km-twentytwenty-after-label" style="'.$overlay_button_style.'">After</div>
	        </div>
	        <div class="km-twentytwenty-handle" style="border-color:'.$bai_colorscheme.'">   
	        	<div class="km-twentytwenty-handle-icon"></div>
	        	<div class="km-twentytwenty-'.$bai_orientation.'-line-1"></div>
	        	<div class="km-twentytwenty-'.$bai_orientation.'-line-2"></div>
	        	<span class="km-twentytwenty-handle-'.$bai_orientation.'-1"></span>
	        	<span class="km-twentytwenty-handle-'.$bai_orientation.'-2"></span>
	        </div>
		</div>
		
	</div>';

 	return $outPut;
 }
add_shortcode( 'sy_beforeafterimage', 'sy_beforeafterimage_shortC' );


?>