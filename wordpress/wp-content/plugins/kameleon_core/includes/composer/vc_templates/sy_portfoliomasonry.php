<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============      P  O  R  T  F  O  L  I  O       ============== 
   ==                  M   A   S   O   N   R   Y				   ==
   ==  															   ==
\* ================================================================== */

function sy_portfoliomasonry_shortC($atts) {  
	$outPut ='';	
 	extract(shortcode_atts(array(
		'style' 							=> 'syp-effect-lily',	
		'gutter'							=> 'false',
		'portfolio_number'					=> '8',
		'columns_number'					=> 'syp-item-4',	
		'filter_active'						=> 'true',
		'pg_pmansory_order'					=> 'DESC',
 		'pg_pmansory_order_by'				=> 'date',
		'pg_pmansory_type'					=> 'list',
		'pg_pmansorysingle_id'				=> '',
		'pg_pmansory_categories_enabled'	=> 'off',
		'pg_pmansory_categories' 			=> '',
		'pg_fili_style'						=> 'style3',
		'pg_fili_size'						=> '13',				
		'pg_fili_height'					=> '34',				
		'pg_fili_color'						=> '#888',				
		'pg_fili_color_hover'				=> '#289fca',				
		'pg_fili_scheme'					=> '#888',				
		'pg_fili_scheme_hover'				=> '#289fca',				
		'pg_fili_transform'					=> 'uppercase',				
		'pg_fili_weight'					=> '500',				
		'pg_fili_spacing'					=> '1',				
		'pg_fili_align'						=> 'center',	
		'pg_thumbnail_size'					=> 'kameleon-large-thumbnail',	
 	), $atts));
 	$outPut = '';

	$query_options = array('post_type' => 'portfolio', 'posts_per_page' => $portfolio_number , 'paged'=> 1  ,'orderby'=> $pg_pmansory_order_by , 'order' => $pg_pmansory_order);		
	
	$link_style = 'font-size:'.$pg_fili_size.'px; color:'.$pg_fili_color.'; text-transform:'.$pg_fili_transform.'; font-weight:'.$pg_fili_weight.'; letter-spacing:'.$pg_fili_spacing.'px; --color-hover:'.$pg_fili_color_hover.'; --scheme-color:'.$pg_fili_scheme.'; --scheme-color-hover:'.$pg_fili_scheme_hover.'; margin-bottom: 25px; ';			
			
	$edge_border = '';
	if($pg_fili_style == "style3"){
		$edge_border = '<div class="km-filter-it-link-edge filteri-edgeright"></div><div class="km-filter-it-link-edge filteri-edgeleft"></div>';
	}

	if($pg_pmansory_type == 'single'){
		$columns_number = 'syp-item-1';
		$pId = explode("/", $pg_pmansorysingle_id);
		if(is_array($pId))
			$query_options = array('p' => $pId[0] , 'post_type'=> 'portfolio' );
	}

	if($gutter == 'true') $columns_number.='-gutter';
 	$p_classes = $style .' '.$columns_number.' km-masonry-hidden km-masonry-item-hidden km-masonry-item syp-item portfolio-item';
 	$gutter_v = ($gutter == 'true') ? '25' : '0';
 	if($pg_pmansory_categories_enabled == 'on' )
		$query_options['km-folio-category'] = $pg_pmansory_categories;
 	
 	if($filter_active == 'true' && $pg_pmansory_type == 'list'){
 		$outPut .= '<div class="km-filter-it-container-c" data-align="'.$pg_fili_align.'">';
 		$cats_array = ($pg_pmansory_categories != "") ? explode(',',$pg_pmansory_categories) : "";
 		if($pg_pmansory_categories_enabled == 'on' && is_array($cats_array) && sizeof($cats_array) >= 1 ){
	 		$outPut .= 	portfolio_filter($cats_array = false, $link_style, $edge_border,$pg_fili_height,$pg_fili_style,$pg_fili_align);
	 		$query_options['km-folio-category'] = $pg_pmansory_categories;
 		}
 		else
	 		$outPut .= 	portfolio_filter($cats_array = false, $link_style, $edge_border,$pg_fili_height,$pg_fili_style,$pg_fili_align);		
	 	$outPut .= '</div>';
 	}

 	if($pg_thumbnail_size == 'full')
 		$pg_thumbnail_size ='';
 	
	query_posts( $query_options );	
 	$outPut .= '<div class="syp-items-wrapper" data-gutter="'.$gutter_v.'" style="float:left">'; 

	if ( have_posts() ) : 
		while ( have_posts() ) : the_post();
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()) ,$pg_thumbnail_size);	
			$thumbnailUrl = $thumb['0'];
			$categories = wp_get_object_terms(get_the_ID(), 'km-folio-category'); 
			$content_p = $folio_classes = "";			
			if($categories):
				foreach($categories as $category) {
					$content_p .= ucfirst($category->name).", ";					
					$folio_classes .= " ".strtolower(str_replace(' ','-',$category->name))." ";
				}
			endif;	
			$content_p = trim($content_p,', ');
			$outPut .= '<div class="'.$p_classes.' '.$folio_classes.'">	
							<div class="syp-overlay"></div>	
							<img src="'.$thumbnailUrl.'" alt="'.get_the_title().'"/>
							<div class="figcaption">									
								<h2>'.get_the_title().'</h2>
								<p>'.$content_p.'</p>
							</div>
							<a href="'.esc_url(get_the_permalink()).'" class="link-container"></a>	
						</div>';
		endwhile; 
		wp_reset_query();
	endif; 	

	$outPut .= '</div>';
	
	return $outPut;
}

add_shortcode( 'sy_portfoliomasonry', 'sy_portfoliomasonry_shortC' );



//Show The Filter on the Masonry Portfolio Shortcode
function portfolio_filter($array_filter = false, $link_style, $edge_border,$fili_height,$fili_style,$fili_align){	
	$linkStyle = 'style="height:'.$fili_height.'px; line-height:'.$fili_height.'px;"';
	$catgeories_filter = get_terms('km-folio-category' , array( 'hide_empty' => 0 ));
	if($array_filter != false && is_array($array_filter))
		$catgeories_filter = $array_filter;

	$filters  = '';
	if(is_array($catgeories_filter) && sizeof($catgeories_filter) >= 1): 
		foreach ($catgeories_filter as $cat){
			if($array_filter == false)
				$filters .= '<div class="km-filter-it-link km-filter-link" '.$linkStyle.' data-active="false" data-filter=".'.strtolower(str_replace(' ','-',$cat->name)).'">'.ucfirst($cat->name).''.$edge_border.'</div>';
		
			else
				$filters .= '<div class="km-filter-it-link km-filter-link" '.$linkStyle.' data-active="false" data-filter=".'.strtolower(str_replace(' ','-',$cat)).'">'.ucfirst($cat).''.$edge_border.'</div>';

				
		}
	endif;	
	return '<div class="km-filteri-cats km-porfolio-filter syp-portfolio-filter" data-style="'.$fili_style.'" style="text-align:'.$fili_align.'; '.$link_style.'">
				<div class="km-filter-it-link km-filter-link" data-filter=".portfolio-item" data-active="true" '.$linkStyle.'>All'.$edge_border.'</div>
								'.$filters.'
							</div>';
}

?>