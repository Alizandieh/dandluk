<?php 
	//Getting The Title Bar Style 
	$sy_options = kameleon_get_options_name();	
	$titlebar_title = $titlebar_path = $titlebar_info = '';
	$titlebar_title = get_the_title();

	$pageType = $actualPage = 'global';


	switch (true) {
		case is_page():
			$actualPage = 'page';
		break;
		case is_home():
			$pageType = $actualPage = 'global';			
			$titlebar_title = $sy_options['titlebar_home_title'];
			$titlebar_path = $sy_options['titlebar_home_breadcrumbs'];
			$actualPage = 'home';
			if($sy_options['home-titlebar_unique'] == 1)
				$pageType = 'home';
		break;
		
		case is_single():
			$pageType = $actualPage = 'global';			
			$categories = get_the_category(get_the_ID());
			$titlebar_info = get_the_author_meta( 'nickname' , $post->post_author) .'<span class="km-titlebar-separator">|</span>';			
			foreach ($categories as $catTop) {
				$titlebar_path = $catTop->cat_name ." / ";
				$titlebar_info .= $catTop->cat_name .", ";
			}
			$titlebar_info .= '<span class="km-titlebar-separator">|</span>'.get_the_time(get_option('date_format'));
			$titlebar_info = trim($titlebar_info, ', ');			

			$titlebar_path .= str_replace('-',' ',get_page_uri( get_the_ID()));
			$actualPage = 'post';
			if($sy_options['post-titlebar_unique'] == 1)
				$pageType = 'post';
		break;	
		
		case is_search():
			$pageType = $actualPage = 'global';			
			$titlebar_title = "";
			$titlebar_title = esc_html__('Search results for : ','kameleon')." ". get_search_query();
			$titlebar_path = 'Home / Search';
		break;

		case is_archive():
			$pageType = $actualPage = 'global';			
			if(is_category()){
				$titlebar_title = esc_html__('Category Archives :','kameleon' ). single_cat_title("", false);
				$titlebar_path = 'Home / '. single_cat_title("", false);
			}elseif (is_tag()) {
				$titlebar_title = esc_html__('Tag Archives :','kameleon' ). single_tag_title("", false);
				$titlebar_path = 'Home / '. single_tag_title("", false); 
			}elseif (is_author()) {
				the_post();
				$titlebar_title = esc_html__('Author Archives :','kameleon' ). get_the_author();
				$titlebar_path = 'Home / Author / '. get_the_author();
				rewind_posts();
			}elseif (is_day()) {
				$titlebar_title = esc_html__('Daily Archives :','kameleon' ). get_the_date();
				$titlebar_path = 'Home / Date / '. get_the_date();
			}elseif (is_month()) {
				$titlebar_title = esc_html__('Monthly Archives :','kameleon' ). get_the_date("F Y");
				$titlebar_path = 'Home / Date / '. get_the_date("F Y");
			}elseif (is_year()) {
				$titlebar_title = esc_html__('Yearly Archives :','kameleon' ). get_the_date('Y');
				$titlebar_path = 'Home / Date / '. get_the_date('Y');
			}elseif (class_exists( 'WooCommerce' ) && (is_shop() || is_product_category() || is_product_tag())){
				$titlebar_title = (isset($sy_options['shop_name']) && $sy_options['shop_name'] != "" ) ? $sy_options['shop_name'] : esc_html__('Shop', 'kameleon');
				$titlebar_path =  (isset($sy_options['shop_subtitle']) && $sy_options['shop_subtitle'] != "" ) ? $sy_options['shop_subtitle'] : 'Home / Shop';
			}	
			$actualPage = 'archive';
			if($sy_options['archive-titlebar_unique'] == 1)
				$pageType = 'archive';
		break;
		
		case ( is_404() ):
			$titlebar_title = esc_html__('Page Not Found', 'kameleon');
			$titlebar_path = 'Home / 404';
		break;
		
	}	
	
	//Portfolio	 				
	if(get_post_type( get_the_ID() ) == "portfolio"){	
		$pageType = $actualPage = 'global';	
		$titlebar_info = get_the_author_meta( 'nickname' , $post->post_author) .'<span class="km-titlebar-separator">|</span>';		
		$folioCategories =  wp_get_object_terms(get_the_ID(), 'km-folio-category'); 
		foreach ($folioCategories as $cat) {
			$titlebar_info .= $cat->name .", ";			
		}		
		$titlebar_info .= '<span class="km-titlebar-separator">|</span>'.get_the_time(get_option('date_format'));

		$titlebar_path = 'Portfolio / '. get_the_title();	
		$actualPage = 'portfolio';	
		if($sy_options['portfolio-titlebar_unique'] == 1)
			$pageType = 'portfolio';	

		
		$titlebar_info = trim($titlebar_info, ', ');					
	} 

	//WooCommerce
	if ( class_exists( 'WooCommerce' ) ){
		if(is_shop()){
			$pageType = $actualPage = 'global';			
			$actualPage = 'shop';	
			if($sy_options['shop-titlebar_unique'] == 1)
				$pageType = 'shop';			
		}
		if(is_product()){
			$pageType = $actualPage = 'global';						
			$actualPage = 'product';
			if($sy_options['product-titlebar_unique'] == 1)
				$pageType = 'product';	
		}
	}
	
	kameleon_titlebar($pageType, $actualPage, $titlebar_title, $titlebar_path, $titlebar_info);			
?>