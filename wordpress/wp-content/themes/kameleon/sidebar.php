<?php 
	$sy_options = kameleon_get_options_name();
	$sidebar = 'kameleon-sidebar-1';	
	
	if(is_page() || is_single()){
		$sidebar = (get_post_meta(get_the_ID(),'sidebar_id',true) != null) ? get_post_meta(get_the_ID(),'sidebar_id',true) : 'kameleon-sidebar-1' ;
	}
	if( class_exists( 'woocommerce' )  && is_shop()){
		$sidebar = 'kameleon-shop';
	}
	if( class_exists( 'woocommerce' )  && is_product()){
		$sidebar = 'kameleon-shop-single';		
	}

?>


<div id="kameleon-sidebar-content">
	<?php 
		if (is_active_sidebar($sidebar) ) {
			dynamic_sidebar($sidebar);
		}
	?>
</div>