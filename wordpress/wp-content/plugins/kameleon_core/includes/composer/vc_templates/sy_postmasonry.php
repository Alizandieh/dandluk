<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============       	 P   O   S   T      	   ============== 
   ==                  M   A   S   O   N   R   Y				   ==
   ==  															   ==
\* ================================================================== */

function sy_postmasonry_shortC($atts) {  

	//Post Grid Attributes
 	extract(shortcode_atts(array(
		'style' 							=> 'syp-effect-lily',	
		'gutter'							=> 'false',
		'post_number'						=> '8',
		'columns_number'					=> 'syp-item-4',
		'pg_mansory_order'					=> 'DESC',
 		'pg_mansory_order_by'				=> 'date',
		'pg_mansory_type'					=> 'list',
		'pg_mansorysingle_id'				=> '',
		'pg_mansory_categories_enabled'		=> 'off',
		'pg_mansory_categories' 			=> '',
		'pg_masonry_thumbnail_size'			=> 'kameleon-large-thumbnail'	
 	), $atts));
 	
	
	$query_options = array( 'post_type'=> 'post','posts_per_page' => $post_number , 'paged'=> 1  ,'orderby'=> $pg_mansory_order_by , 'order' => $pg_mansory_order);		
	
	if($pg_mansory_categories_enabled == 'on'  ){
		$cats_array = ($pg_mansory_categories != "") ? explode(',',$pg_mansory_categories) : "";
		if(is_array($cats_array) && sizeof($cats_array) >= 1)
			$query_options['category_name'] = $pg_mansory_categories;	
	}

	if($pg_mansory_type == 'single'){
		$columns_number = 'syp-item-1';
		$pId = explode("/", $pg_mansorysingle_id);
		if(is_array($pId))
			$query_options = array('p' => $pId[0] , 'post_type'=> 'post' );
	}
	
	query_posts( $query_options );	

	if($pg_masonry_thumbnail_size == 'full')
		$pg_masonry_thumbnail_size = '';
	
	if($gutter == 'true') $columns_number.='-gutter';
 		$p_classes = $style .' '.$columns_number.' km-masonry-item km-masonry-item-hidden syp-item';
		$gutter_v = ($gutter == 'true') ? '25' : '0';

	$outPut = '<div class="syp-items-wrapper-post" data-gutter="'.$gutter_v.'">'; 		
	if ( have_posts() ) : 
		while ( have_posts() ) : the_post();
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()) ,$pg_masonry_thumbnail_size);	
			$thumbnailUrl = $thumb['0'];
			$categories = get_the_category(); 
			$content_p = "";			
			if($categories):
				foreach($categories as $category) {
					$content_p .= ucfirst($category->cat_name).", ";
				}
			endif;	
			$content_p = trim($content_p,', ');
			$outPut .= '<div class="'.$p_classes.'">	
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

add_shortcode( 'sy_postmasonry', 'sy_postmasonry_shortC' );


?>