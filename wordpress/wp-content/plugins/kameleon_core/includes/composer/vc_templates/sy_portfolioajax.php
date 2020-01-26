<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============      P  O  R  T  F  O  L  I  O       ============== 
   ==                  		A    J    A    X    				   ==
   ==  															   ==
\* ================================================================== */

function sy_portfolioajax_shortC($atts) {  
	$outPut ='';
 	extract(shortcode_atts(array(
		'paj_style' 							=> 'style1',	
		'paj_gutter'							=> 'false',
		'paj_number'							=> '8',
		'paj_columns_number'					=> 'syp-item-4',	
		'paj_filter_active'						=> 'true',
		'paj_order'								=> 'DESC',
 		'paj_order_by'							=> 'date',
		'paj_type'								=> 'list',
		'paj_overlay_bg'						=> 'rgba(0,0,0,.9)',
		'paj_overlay_color'						=> '#888',
		'paj_single_id'							=> '',
		'paj_categories_enabled'				=> 'off',
		'paj_categories' 						=> '',
		'paj_loader_style'						=> 'style1',
		'paj_loader_color'						=> '#888',
		'paj_modalwindow_effect'				=> 'scalecentersmall',
		'paj_fili_style'						=> 'style3',
		'paj_fili_size'							=> '13',				
		'paj_fili_height'						=> '34',				
		'paj_fili_color'						=> '#888',				
		'paj_fili_color_hover'					=> '#289fca',				
		'paj_fili_scheme'						=> '#888',				
		'paj_fili_scheme_hover'					=> '#289fca',				
		'paj_fili_transform'					=> 'uppercase',				
		'paj_fili_weight'						=> '500',				
		'paj_fili_spacing'						=> '1',				
		'paj_fili_align'						=> 'center',			
		'paj_thumbnail_size'					=> 'full',
 	), $atts));
 	$outPut = '';

	$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
 	$ovID = substr(str_shuffle($chars),0,6);

	$query_options = array('post_type' => 'portfolio', 'posts_per_page' => $paj_number , 'paged'=> 1  ,'orderby'=> $paj_order_by , 'order' => $paj_order);			
	
	if($paj_type == 'single'){
		$paj_columns_number = 'syp-item-1';
		$pId = explode("/", $paj_single_id);
		if(is_array($pId))
			$query_options = array('p' => $pId[0] , 'post_type'=> 'portfolio' );
	}

	if($paj_gutter == 'true') $paj_columns_number.='-gutter';
 	$p_classes = $paj_style .' '.$paj_columns_number.' km-masonry-item km-masonry-item-hidden syp-item portfolio-item';
 	$gutter_v = ($paj_gutter == 'true') ? '25' : '0';
 	if($paj_style == "style3")
 	$p_classes .=' km-back-follow ';


 	$link_style = 'font-size:'.$paj_fili_size.'px; color:'.$paj_fili_color.'; text-transform:'.$paj_fili_transform.'; font-weight:'.$paj_fili_weight.'; letter-spacing:'.$paj_fili_spacing.'px; --color-hover:'.$paj_fili_color_hover.'; --scheme-color:'.$paj_fili_scheme.'; --scheme-color-hover:'.$paj_fili_scheme_hover.'; margin-bottom: 25px; ';			
			
	$edge_border = '';
	if($paj_fili_style == "style3"){
		$edge_border = '<div class="km-filter-it-link-edge filteri-edgeright"></div><div class="km-filter-it-link-edge filteri-edgeleft"></div>';
	}

	if($paj_categories_enabled == 'on' )
		$query_options['km-folio-category'] = $paj_categories;

	if($paj_filter_active == 'true' && $paj_type == 'list'){
 		$outPut .= '<div class="km-filter-it-container-c" data-align="'.$paj_fili_align.'">';
 		$cats_array = ($paj_categories != "") ? explode(',',$paj_categories) : "";
 		if($paj_categories_enabled == 'on' && is_array($cats_array) && sizeof($cats_array) >= 1 ){
	 		$outPut .= 	portfolio_filter($cats_array = false, $link_style, $edge_border,$paj_fili_height,$paj_fili_style,$paj_fili_align);
	 		$query_options['km-folio-category'] = $paj_categories;
 		}
 		else
	 		$outPut .= 	portfolio_filter($cats_array = false, $link_style, $edge_border,$paj_fili_height,$paj_fili_style,$paj_fili_align);		
	 	$outPut .= '</div>';
 	}
 	if($paj_thumbnail_size == 'full')
 		$paj_thumbnail_size ='';



 	query_posts( $query_options );	
	$outPut .= '<div class="syp-items-wrapper"  data-gutter="'.$gutter_v.'" style="float:left;">';
	if ( have_posts() ) : 
		while ( have_posts() ) : the_post();
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()) ,$paj_thumbnail_size);	
			$thumbnailUrl = $thumb['0'];
			$pid = get_the_ID();
			$categories = wp_get_object_terms($pid, 'km-folio-category'); 
			$content_p = $folio_classes = "";			
			if($categories):
				foreach($categories as $category) {
					$content_p .= ucfirst($category->name).", ";					
					$folio_classes .= " ".strtolower(str_replace(' ','-',$category->name))." ";
				}
			endif;	
			$content_p = trim($content_p,', ');
			$outPut .= '<div class="paj-element '.$p_classes.' '.$folio_classes.'" data-style="'.$paj_style.'" data-overlayid="km-paj-overlay-'.$ovID.'" data-overlayid="'.$ovID.'" data-id="'.$pid.'" onclick="kameleon_ajax_portfolio(this);">	
							<div class="paj-elem-img"><img src="'.$thumbnailUrl.'"></div>
							<div class="paj-elem-overlay km-overlay-follow">
								<div class="paj-elem-ov-inf">
									<div class="paj-elem-ov-title">'.get_the_title().'</div>
									<div class="paj-elem-ov-date"><span>'.get_the_date().'</span></div>
								</div>
								<div class="paj-elem-ov-icon"><i class="Defaults-km-icon-tumble_dry_normal_medium_heat"></i></div>				
							</div>
						</div>';

		endwhile; 
		wp_reset_query();
	endif; 
	$overlay_style = ' --data-spinner-color:'.$paj_loader_color.';';

	$outPut .= '</div><div id="km-paj-overlay-'.$ovID.'" class="km-paj-overlay fullscreen-section" data-type="fullscreen"  data-animation="'.$paj_modalwindow_effect.'"  style="'.$overlay_style.'" data-situation="hidden"><div class="km-paj-overlay-result"></div><div class="km-paj-loader">'.kameleon_loader_spinner($paj_loader_style).'</div></div>';
	return $outPut;
}

add_shortcode( 'sy_portfolioajax', 'sy_portfolioajax_shortC' );


?>