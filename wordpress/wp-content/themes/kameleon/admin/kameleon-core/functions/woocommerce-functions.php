<?php 
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_up_sell_products', 20);
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );
// Update WooCommerce GLobal Card
add_filter( 'woocommerce_add_to_cart_fragments', 'sy_woocommerce_header_add_to_cart_fragment' );
function sy_woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	sy_live_cart();
	?>
	<script type="text/javascript">
	  	  jQuery(function($) {
	  		setTimeout(function(){
	  			$('.add_to_cart_button.added').parents('.km-woo-item').find('.km-woo-adding').removeClass('clicked').addClass('added');		  			  	  
	  		},2000);
	  	  });
	    </script>
	<?php
	$fragments['.km-cart-obclean'] = ob_get_clean();		
	return $fragments;
}



//WooCommerce Live Cart
function sy_live_cart(){
	$sy_options = kameleon_get_options_name();
	$w_cart_position = (isset($sy_options['w_cart_position']) && $sy_options['w_cart_position']!="") ? $sy_options['w_cart_position'] : "right";
	global $woocommerce; $qty = $woocommerce->cart->get_cart_contents_count(); $total = $woocommerce->cart->get_cart_total();	 ?>				
		<div class="km-global-card km-cart-obclean km-frame-<?php echo esc_attr($w_cart_position); ?>" data-position="<?php echo esc_attr($w_cart_position); ?>">
			<a href="<?php echo esc_url(WC()->cart->get_cart_url()); ?>" class="icon-card">
				<i class="Defaults-km-icon-uniE7BD"></i>
				<span <?php if($qty < 1): ?>style="display:none;"<?php endif; ?> class="icon-card-number">
					<?php $qty_display = ($qty > 99) ? '+99' : $qty;  echo esc_attr($qty_display); ?>
				</span>
			</a>
			<?php if($qty >= 1): ?>
				<div class="km-woo-hover">
					<div class="km-global-total">
						<?php echo esc_html__('Total :','kameleon') . '<span>'.$total.'</span>'; ?>
					</div>
					<?php echo sy_woo_hover_cart_items(); ?>
					<div class="km-woo-cart-action">
						<a class="km-woo-cart-action-item" href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>">
							<i class="Defaults-km-icon-cart-plus"></i>
							<?php  echo esc_html__("View Cart","kameleon");?>				
						</a>		
						<a class="km-woo-cart-action-item" href="<?php echo esc_url($woocommerce->cart->get_checkout_url()); ?>">
							<i class="Defaults-km-icon-check-square-o"></i>
							<?php  echo esc_html__("Checkout","kameleon");?>				
						</a>	
					</div>
				</div>
			<?php endif; ?>
		</div>	
<?php 
}

// WooCommerce GLobal Card ITEMS
function sy_woo_hover_cart_items(){
	$wooItems = '';
	$number = 0;	
	foreach ( array_reverse( WC()->cart->get_cart()) as $cart_item_key => $cart_item ) {
		if($number == 3){
			break;
		}
		$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
		$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
		if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
			$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );				
			$wooItems .='<div class="km-woo-cart-item">
							<a class="item-info" href="'.esc_url($_product->get_permalink( $cart_item )).'">
								'.$thumbnail.'
								<span class="item-name">'.$_product->get_title().'</span>
								<span class="item-price">'.WC()->cart->get_product_price( $_product ).'</span>
							</a>
						</div>';

		}
		$number += 1;
	}
	return $wooItems;	
	
}



function custom_woo_after_shop_loop() {
    ?>
    <script>
	    jQuery(function($) {
	    	$(document).on( 'click', '.add_to_cart_button', function() {
	  			$(this).addClass('adding_to_card');	
	  			$(this).parents('.km-woo-item').find('.km-woo-adding').removeClass('added').addClass('clicked');	  				  		
	  		});
	    });
    </script>
    <?php
}
add_action( 'wp_footer', 'custom_woo_after_shop_loop' );
add_action('woocommerce_after_add_to_cart_button', 'custom_woo_after_shop_loop_after_add' );
function custom_woo_after_shop_loop_after_add() {
?>
		<script type="text/javascript">
	  	  jQuery(function($) {	  	  	
	  		$('.add_to_cart_button.added').parents('.km-woo-item').find('.km-woo-adding').removeClass('clicked').addClass('added');		  			  	  
	  	  });
	    </script>
<?php 	
}

if(function_exists( 'YITH_WCWL' ) ){
	//Dont Forget to Add the Check for the Yith Plugin Activation
	function yith_loop_add_to_shortcode_button(){
	    echo do_shortcode( '[yith_wcwl_add_to_wishlist]' );
	}
	add_action( 'woocommerce_after_shop_loop_item', 'yith_loop_add_to_shortcode_button' );
	add_action( 'woocommerce_after_add_to_cart_button', 'yith_loop_add_to_shortcode_button' );	
}


add_filter( 'woocommerce_add_to_cart_fragments', 'sy_woocommerce_header_add_to_cart_fragment_header' );
function sy_woocommerce_header_add_to_cart_fragment_header( $fragments ) {
	ob_start();
	echo kameleon_woocommerce_header_cart();
	?>
	<script type="text/javascript">
	  	  jQuery(function($) {
	  		setTimeout(function(){
	  			$('.add_to_cart_button.added').parents('.km-woo-item').find('.km-woo-adding').removeClass('clicked').addClass('added');		  			  	  
	  		},2000);
	  	  });
	    </script>
	<?php
	$fragments['.km-cart-obclean1'] = ob_get_clean();		
	return $fragments;
}


//WooCommerce Header Hover Cart
function kameleon_woocommerce_header_cart(){
	global $woocommerce; $qty = $woocommerce->cart->get_cart_contents_count(); $total = $woocommerce->cart->get_cart_total();
	$wooCartLayout ='';
	$qty_display = ($qty > 99) ? '+99' : $qty;  
	$wooCartLayout = '<div class="cart-link additional-link km-cart-obclean1">
		<a href="'.esc_url(WC()->cart->get_cart_url()).'" class="icon-card"> 
		<i class="Defaults-km-icon-uniE7BD"></i><span ';	
	if($qty < 1) 
		$wooCartLayout .= ' style="display:none;"';
	else
		$wooCartLayout .= ' style="background-color: transparent !important;"';
		 
	$wooCartLayout .= ' class="icon-card-number">'.$qty_display.'</span></a>';
	if($qty >= 1): 
		$wooCartLayout .= '<div class="km-woo-hover"><div class="km-global-total">'.esc_html__('Total :','kameleon') . '<span>'.$total.'</span></div>'.sy_woo_hover_cart_items().'<div class="km-woo-cart-action">
				<a class="km-woo-cart-action-item" href="'.esc_url($woocommerce->cart->get_cart_url()).'"><i class="Defaults-km-icon-cart-plus"></i>'.esc_html__("View Cart","kameleon").'</a>		
				<a class="km-woo-cart-action-item" href="'.esc_url($woocommerce->cart->get_checkout_url()).'">
					<i class="Defaults-km-icon-check-square-o"></i>
					'.esc_html__("Checkout","kameleon").'
				</a>	
			</div>
		</div>';
	endif;	
	$wooCartLayout .= '</div>';

	return $wooCartLayout;
}



?>