<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============    R A D I A L     P R O G R E S S   ============== 
   ==                                                              ==
   ==  															   ==
\* ================================================================== */
function sy_radialprogress_shortC($atts) {  
	
 	extract(shortcode_atts(array(						
		'content_bacground'      => '#fafafe',
		'content_color'          => '#444',
		'content_fontsize'       => '16',
		'rad_percent'            => '50',
		'rad_size'               => '150',
		'rad_border_size'        => '7',
		'rad_border_color'       => '#eee',
		'rad_color'              => '#289fca',
		'radial_position'        => 'center',
    'rad_icon_enabled'       => 'off', 
    'rad_style'              => 'style1', 
    'rad_icon'               => '', 
    'rad_icon_size'          => '24', 
    'rad_icon_color'         => '#444', 
 	), $atts));

 	$maskClip = 'clip: rect(0px, '.$rad_size.'px, '.$rad_size.'px, '.($rad_size/2).'px) ';
 	$fillClip = 'clip: rect(0px, '.($rad_size/2).'px, '.$rad_size.'px, 0px)';
	$insetMargins = $rad_border_size.'px';
	$insetSize = 'calc(100% - '.($rad_border_size*2).'px)';
	$insetStyle = 'left:'.$insetMargins.'; top:'.$insetMargins.'; width:'.$insetSize.'; height:'.$insetSize.';';

  $radialStyle = $radialIconContainer = '';
  if($rad_icon_enabled == 'on'){
    $radialStyle = 'data-style="'.$rad_style.'"';
    $radialIconContainer = '<div class="km-radial-iconc" style="color:'.$rad_icon_color.'; font-size:'.$rad_icon_size.'px;"><i class="'.$rad_icon.'"></i></div>';
  }

  $icon_perc_content = $radialIconContainer.'<div class="km-rad-percentc"><span class="perc-value">0</span> %</div>';
  
  if($rad_icon_enabled == 'on' && ($rad_style == 'style3' || $rad_style == 'style5'))
      $icon_perc_content = '<div class="km-rad-percentc"><span class="perc-value">0</span> %</div>'.$radialIconContainer;

	$outPut = '<div class="km-radial-progressbar-container" data-position="'.$radial_position.'" '.$radialStyle.'><div class="km-radial-progressbar" data-progress="0" style="background-color:'.$rad_border_color.'; width: '.$rad_size.'px; height: '.$rad_size.'px;" data-value="'.$rad_percent.'" >
    <div class="circle">
        <div class="mask full" style="'.$maskClip.';">
            <div class="fill" style="'.$fillClip.'; background-color: '.$rad_color.';"></div>
        </div>
        <div class="mask half" style="'.$maskClip.';">
            <div class="fill" style="'.$fillClip.'; background-color: '.$rad_color.';"></div>
            <div class="fill fix" style="'.$fillClip.'; background-color: '.$rad_color.';"></div>
        </div>        
    </div>
    <div class="inset" style="'.$insetStyle.'">
        <div class="percentage" style="background: '.$content_bacground.'; font-size: '.$content_fontsize.'px; color:'.$content_color.'">
            <div class="numbers">
              '.$icon_perc_content.'
            </div>
        </div>
    </div>
</div></div>';
 	return $outPut;
 }
add_shortcode( 'sy_radialprogress', 'sy_radialprogress_shortC' );

?>