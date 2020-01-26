<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============     W O O   I T E M   M O D E R N	   ============== 
   ==                                                              ==
   ==  															   ==
\* ================================================================== */

function sy_wooitemmodern_shortC($atts) {  
	//WooCommerce Modern Item Attributes
 	extract(shortcode_atts(array(						
		'wooitem_number'					=> '8',
		'wooitem_order'						=> 'DESC',
 		'wooitem_order_by'					=> 'date',
 		'wooitem_type'						=> 'list',
 		'wooitem_columns_number'			=> 'syp-item-4',
 		'wooitem_psingle_id'				=> '',
 		'wooitem_style'						=> 'style1' ,
 		'wooitem_overlay_background'		=> 'rgba(0,0,0,0.8)',
 		'wooitem_title_color'				=> '#fff', 		 	
 		'wooitem_title_font'				=> '',
		'wooitem_title_style'				=> '',
		'wooitem_title_size'				=> '',
 		'wooitem_cats_color'				=> '#aaa', 		
 		'wooitem_subtitle_font'				=> '',
		'wooitem_subtitle_style'			=> '',
		'wooitem_subtitle_size'				=> '',
 		'wooitem_price_font'				=> '',
		'wooitem_price_style'				=> '',
		'wooitem_price_size'				=> '',
 		'wooitem_border_decoration'			=> '#fff',
 		'wooitem_gutter'					=> 'true',
 	), $atts));

 	$title_font = sy_composer_font_styles($wooitem_title_font, $wooitem_title_size, $wooitem_title_style);
 	$subtitle_font = sy_composer_font_styles($wooitem_subtitle_font, $wooitem_subtitle_size, $wooitem_subtitle_style);
 	$price_font = sy_composer_font_styles($wooitem_price_font, $wooitem_price_size, $wooitem_price_style);


 	$query_options = array('post_type'=> 'product','posts_per_page' => $wooitem_number , 'paged'=> 1  ,'orderby'=> $wooitem_order_by , 'order' => $wooitem_order);
	if($wooitem_type == 'single'){
		$wooitem_columns_number = 'syp-item-1';
		$prId = explode("/", $wooitem_psingle_id);
		if(is_array($prId))
			$query_options = array('p' => $prId[0] , 'post_type'=> 'product' );
	}
	query_posts( $query_options );	

	if($wooitem_gutter == 'true') $wooitem_columns_number.='-gutter';
 	$p_classes = 'syp-itemgrid '.$wooitem_columns_number.' syp-item';
	$gutter_v = ($wooitem_gutter == 'true') ? '25' : '0'; 

	$outPut = '<div class="syp-items-wrapper-post" data-gutter="'.$gutter_v.'">'; 	
	$shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
	if ( have_posts() ) : 
		while ( have_posts() ) : the_post();
			$product = new WC_Product( get_the_ID() );
			$image_link  	= wp_get_attachment_url( get_post_thumbnail_id() );
			$cat_count = sizeof( get_the_terms( $product->ID, 'product_cat' ) );
			
			$overlay2 = '';
			$infoInside = '<span class="km-woo-price clst" style="'.$price_font.'">'. $product->get_price_html().'</span>';
			$infoBottom2 = '';
			
			if($wooitem_style == 'style2'){
				$overlay2 = '<div class="km-woo-overlay-s2" style="background:'.$wooitem_overlay_background.'"></div><div class="km-woo-adding">'.kameleon_loader_spinner("style6").'</div>';

				

				$infoInside = apply_filters( 'woocommerce_loop_add_to_cart_link',
					sprintf( '<div class="km-woo-add-cart-c" data-id="woo-item-cart-'.$product->id .'"><div class="km-woo-add-cart"><i class="fa fa-opencart"></i>
										<span class="km-woo-addtxt">'.esc_html__("Add to Cart","kameleon").'</span><a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="ajax_add_to_cart %s product_type_%s"></a></div></div>',
						$shop_page_url.'?add-to-cart='.$product->id ,
						esc_attr( $product->id ),
						esc_attr( $product->get_sku() ),
						esc_attr( isset( $quantity ) ? $quantity : 1 ),
						$product->is_purchasable() && $product->is_in_stock() ? ' add_to_cart_button' : '',
						esc_attr( $product->product_type )
					),
				$product );	
			

				$infoBottom2 = '<div class="km-woo-bottom-info"><span class="km-woo-bottom-title"><a href="'.esc_url(get_the_permalink()).'">'.get_the_title().'</a></span>
								<span class="km-woo-bottom-price clst">'.$product->get_price_html().'</span></div>';
			}

			$outPut .= '<div class="km-masonry-hidden km-masonry-item-hidden km-masonry-item km-woo-item '.$p_classes.'" data-style="'.$wooitem_style.'">
						<div class="km-woo-image">
							<img src="'.$image_link.'">
						</div>
						'.$overlay2.'						
						<div class="km-woo-overlay" style="background:'.$wooitem_overlay_background.'">				
							<div class="km-woo-borders" data-position="top" style="background:'.$wooitem_border_decoration.';"></div>
							<div class="km-woo-borders" data-position="right" style="background:'.$wooitem_border_decoration.';"></div>
							<div class="km-woo-borders" data-position="bottom" style="background:'.$wooitem_border_decoration.';"></div>
							<div class="km-woo-borders" data-position="left" style="background:'.$wooitem_border_decoration.';"></div>
							<div class="km-woo-info">
								<span class="km-woo-title" style="color:'.$wooitem_title_color.';'.$title_font.'"><a href="'.esc_url(get_the_permalink()).'">'.get_the_title().'</a></span>
								<span class="km-woo-cats" style="color:'.$wooitem_cats_color.'; '.$subtitle_font.'">'.$product->get_categories( ', ', '' . _n( '', '', $cat_count, 'kameleon' ) . ' ','' ).'</span>
								'.$infoInside.'
							</div>
							'.$infoBottom2.'
						</div>
					</div>';
		endwhile;
		wp_reset_query();
	endif;	
 	$outPut .= '</div>'; 	
 	
 	return $outPut;
 }
add_shortcode( 'sy_wooitemmodern', 'sy_wooitemmodern_shortC' );


?>