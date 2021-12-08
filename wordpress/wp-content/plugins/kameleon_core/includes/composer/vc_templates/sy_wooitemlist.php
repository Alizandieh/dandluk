<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============     		 W O O   I T E M 	       ============== 
   ==                                                              ==
   ==  															   ==
\* ================================================================== */

function sy_wooitemlist_shortC($atts) {  
	//WooCommerce Modern Item Attributes
 	extract(shortcode_atts(array(						
		'wooitemlist_number'					=> '8',
		'wooitemlist_order'						=> 'DESC',
 		'wooitemlist_order_by'					=> 'date',
 		'wooitemlist_type'						=> 'list',
 		'wooitemlist_columns_number'			=> 'syp-item-4',
 		'wooitemlist_psingle_id'				=> '',
 		//'wooitemlist_style'						=> 'style1' ,
 		'wooitemlist_color_scheme'				=> '#111',
 		'wooitemlist_font_color'				=> '#fff', 	
 		'wooitemlist_gutter'					=> 'true',
 	), $atts));

 	$query_options = array('post_type'=> 'product','posts_per_page' => $wooitemlist_number , 'paged'=> 1  ,'orderby'=> $wooitemlist_order_by , 'order' => $wooitemlist_order);
	if($wooitemlist_type == 'single'){
		$wooitemlist_columns_number = 'syp-item-1';
		$prId = explode("/", $wooitemlist_psingle_id);
		if(is_array($prId))
			$query_options = array('p' => $prId[0] , 'post_type'=> 'product' );
	}
	query_posts( $query_options );	

	if($wooitemlist_gutter == 'true') $wooitemlist_columns_number.='-gutter';
 	$p_classes = 'km-masonry-hidden km-masonry-item-hidden km-masonry-item syp-itemgrid '.$wooitemlist_columns_number.' syp-item';
	$gutter_v = ($wooitemlist_gutter == 'true') ? '25' : '0'; 

	$outPut = '<div class="syp-items-wrapper-post" data-gutter="'.$gutter_v.'">'; 	
	
	if ( have_posts() ) : 
		while ( have_posts() ) : the_post();
			$product = new WC_Product( get_the_ID() );
			$attachment_ids = $product->get_gallery_attachment_ids();
			$scd_img = '';
			if ($attachment_ids) {
				$scd_img = wp_get_attachment_image($attachment_ids[0], '');
			}
			$rating_html_print = '';
			if($rating_html = $product->get_rating_html() ){
				$rating_html_print = $rating_html;
			}

			//'.apply_filters( 'woocommerce_sale_flash', '<div class="km-woo-product-sale clsb">' . esc_html__( 'SALE!', 'kameleon' ) . '</div>', $post, $product ).'						
			$outPut .= '<div class="km-woo-product-c woocommerce '.$p_classes.'" data-style="style1" style="padding-top:0px!important;">
							<div class="km-woo-product-image">
								<img class="km-woo-product-image" src="'.wp_get_attachment_url( get_post_thumbnail_id() ).'">
								'.$scd_img.'	
								<a href="'.esc_url(get_the_permalink()).'"></a>
							</div>		
							<div class="km-woo-product-info">		
								<div class="km-woo-product-title" style="background-color:'.$wooitemlist_color_scheme.'; color:'.$wooitemlist_font_color.';">
									<a href="'.esc_url(get_the_permalink()).'">'.get_the_title().'</a>
								</div>
								<div class="km-woo-product-extra" style="background-color:'.$wooitemlist_color_scheme.'; color:'.$wooitemlist_font_color.';">
									<div class="km-woo-product-price clst">'.$product->get_price_html().'</div>
									<div class="km-woo-product-stars" style="color:'.$wooitemlist_color_scheme.'">'.$rating_html_print.'</div>
									<div class="km-woo-product-add">'.apply_filters( 'woocommerce_loop_add_to_cart_link',
										sprintf( '<a  href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="ajax_add_to_cart km-p-add-tocart %s product_type_%s"></a>',
											$product->add_to_cart_url() , esc_attr( $product->id ), esc_attr( $product->get_sku() ),	esc_attr( isset( $quantity ) ? $quantity : 1 ),
											$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',	esc_attr( $product->product_type )
										),
										$product ).
									'</div>	
								</div>
							</div>
						</div>';

		endwhile;
		wp_reset_query();
	endif;	
 	$outPut .= '</div>'; 	
 	
 	return $outPut;
 }
add_shortcode( 'sy_wooitemlist', 'sy_wooitemlist_shortC' );


?>