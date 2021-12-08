<?php
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============         THEME CSS CUSTOMIZER         ============== 
   ==                                                              ==
   ==                                                              ==
\* ================================================================== */


function kameleon_css_customizer(){
	//Checking The Layout Settings
	$sy_options = kameleon_get_options_name();	
	$bodystyle = kameleon_font_setter('body','sy_font');
	$boxed_layout_style = kameleon_get_background_style('layout_background');	
	$footer_style  = kameleon_get_background_style('footer_background');
	$content_background = $sy_options['content_background'];
	//Footer Borders 
	$footer_borders_style = '';
	if(isset($sy_options['footer_borders']) && $sy_options['footer_borders'] == 1){
		$footer_borders_style .= ' border-top:'.$sy_options['footer_border_thickness_top'].'px solid '.$sy_options['footer_border_color_top'].'; border-bottom:'.$sy_options['footer_border_thickness_bottom'].'px solid '.$sy_options['footer_border_color_bottom'].';';
	}

	$slidingbar_style = kameleon_get_background_style('slidingbar_background');
	$layout = $sy_options['layout'];
	$full_width = $sy_options['full_width'];
	$boxed_margin = $sy_options['boxed_margin'];
	$boxed_margin = $sy_options['boxed_margin'];
	$boxed_border = $sy_options['boxed_border'];
	
	//Checking if Single Page has unique Layout
	if( (is_page() || is_single()) && get_post_meta(get_the_ID(), "unique_layout", true) == 1 ){
		$layout = get_post_meta(get_the_ID(), "layout", true);
		$full_width = get_post_meta(get_the_ID(), "full_width", true);
		$boxed_layout_style = kameleon_get_background_style_meta('layout_background');	
		$boxed_margin = get_post_meta(get_the_ID(), "boxed_margin", true);
		$boxed_border = get_post_meta(get_the_ID(), "boxed_border", true);
		$content_background = get_post_meta(get_the_ID(), "content_background", true);
	}

	$container_responsive_width = '1200px';
	if ($layout == 'boxed') {
		$container_responsive_width = $sy_options['boxed_width'].'px';
	}	
	if ($layout == 'full_width') {
		if ($full_width == 0) {
			$container_responsive_width = $sy_options['layout_width'].'px';
		}else{
			$container_responsive_width = '1800px';
		}
	}

	$custom_typography = '';
	$custom_typography .= kameleon_font_setter('#km-main-menu > ul > li > a','header_font');
	$custom_typography .= kameleon_font_setter('#km-main-menu > ul > li ul li','dropmenu_font');
	$custom_typography .= kameleon_font_setter('#km-main-menu > ul > li ul .km-megamenu-column .mega-menu-ul li','megamenu_font');
	$custom_typography .= kameleon_font_setter('.km-megamenu-column h3','megamenutitle_font');
	//Custom Typography settings
	if($sy_options['custom_typography'] == 1){
		$custom_typography .= kameleon_font_setter('#km-footer-content h3','footerwidgettitle_font');
		$custom_typography .= kameleon_font_setter('#kameleon-sidebar h3','sidebarwidgettitle_font');
	}

	//Checking for the Side Header Type 6
	$footer_fixed = 'right: 0px; left:initial; float:right;';
	if($sy_options['hv6_position'] == 'right')
		$footer_fixed = 'right: initial; left:0px; float:left;';
		
	$mobile_header = $sy_options['mobile_header'];	
	$header_v = ( (is_page() || is_single()) && get_post_meta(get_the_ID(), "header_unique", true) == 1 ) ? 
				get_post_meta(get_the_ID(), "header_v", true) : 
				$sy_options['header_v']; 

	if($header_v == 'header_v6')
		$mobile_header = $sy_options['mobile_header_version6'];			
	
	
	$sy_vc_responsive = 800;
	$sy_vc_responsive = ((is_page() || is_single()) && get_post_meta(get_the_ID(),'unique_responsive_width',true) == 1) ? get_post_meta(get_the_ID(),'sy_responsive_width',true) : $sy_options['sy_responsive_width'];

	$sy_vc_resp_v = $sy_vc_responsive.'px';
	$sy_vc_resp_v_two = intval(intval($sy_vc_responsive) - 1).'px';

	//echo $sy_vc_resp_v.' <br/><br/><br/><br/><br/><br/> '.$sy_vc_resp_v_two;

	$footer_bottom_background = isset($sy_options['footer_bottom_background']['rgba']) ? $sy_options['footer_bottom_background']['rgba'] : 'rgba(22,22,22,1)'; 
	$footer_copyright_background = isset($sy_options['footer_copyright_background']['rgba']) ? $sy_options['footer_copyright_background']['rgba'] : 'rgba(17,17,17,1)'; 
?>
	<style type="text/css" media="screen">
		<?php echo wp_kses_data($bodystyle); ?>

		body{--site-color-scheme: <?php echo esc_html($sy_options['color_scheme']); ?>;}
		#km-main-menu > ul > li:hover > a,#km-main-menu > ul > li.current-menu-item > a , #km-main-menu > ul > li.current-menu-ancestor,
		#km-footer-copyright-content a,#km-footer-bottom-content #km-footer-icons a:hover,.clst,.clst-hover:hover, .clst-hover:hover a,#km-hv5-social a:hover,
		#km-hv6-social a:hover,.km-quote-author,.bbp-forum-title:hover,.bbp-topic-permalink:hover,.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
		.woocommerce .star-rating span:before,.woocommerce p.stars a:hover:after,.cart_totals  .order-total strong,
		.woocommerce div.product div.summary .price,.km-woo-cart-action-item:hover,.item-info:hover .item-name,.km-global-total span,
		.widget ul li > a:hover,.woocommerce div.product form.cart .reset_variations:hover,.woocommerce div.product p.price del span, .woocommerce a.remove:hover,
		.widget_recent_comments > ul li > a,.syp-itemgrid-title:hover,#km-single-content table tr th a,.wishlist-in-stock,.km-footer-compact-menu a:hover,.km-review-ordertable table tr:last-of-type .amount,
		 .km-pn-basic-section:hover .km-pn-arrow-basic-icon, .km-pn-titlebar-section:hover .km-pn-arrow-titlebar,.woocommerce-account .woocommerce-MyAccount-navigation ul li:hover,
.woocommerce-account .woocommerce-MyAccount-navigation ul li.is-active
		{color: <?php echo esc_html($sy_options['color_scheme']); ?>!important;}
		.spinner > div,.spinner2,.spinner8 .sk-cube:before{background-color: <?php echo esc_html($sy_options['spinner_color']); ?>!important;}
		.spinner6{border-left:3px solid <?php echo esc_html($sy_options['spinner_color']); ?>!important;}
		.spinner7{box-shadow: inset 0 0 0 1em <?php echo esc_html($sy_options['spinner_color']); ?>!important;}
		.clsb,.clsb-hover:hover , .clsb-hover-parent a:hover,.form-submit input[type='submit']:hover,.km-pfull-left a div,
		#bbpress-forums #bbp-search-form #bbp_search_submit:hover,#bbpress-forums fieldset .submit:hover,.bbp-author-role,.kmo-tab:hover,.kmo-tab-active,.woocommerce span.onsale,.km-p-add-tocart.added,.icon-card-number,.woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,.tagcloud a:hover,.user-submit:hover,#wc-backward:hover
		.woocommerce .widget_price_filter .ui-slider .ui-slider-range,.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,.woocommerce .widget_price_filter .ui-slider,
		.km-porfolio-trigger:hover,.km-porfolio-filter[data-active="true"] .km-porfolio-trigger, .ajax-loading-folio .spinner > div, .kmwSocial-link:hover,.km-woo-item[data-style="style1"] .km-woo-price:after,.km-woo-adding.added,.woocommerce .widget_price_filter .ui-slider .ui-slider-range,body.woocommerce-cart .kameleon-cart-collaterals .wc-proceed-to-checkout  a.checkout-button,.km-pn-arrow-basic-icon:after,.km-pn-basic-gohome:hover .km-gohome-square,.km-pn-arrow-titlebar:after,
			#km-main-menu > ul > li:hover > a:before , #km-main-menu > ul > li.current-menu-item  > a:before, #km-main-menu > ul > li.current-menu-ancestor  > a:before,.woocommerce-account .woocommerce-MyAccount-navigation ul li:after
		{background-color: <?php echo esc_html($sy_options['color_scheme']); ?>!important;}
		.woocommerce-message,.woocommerce ul.products li.product .onsale:after, #km-main-menu > ul > li > ul,#km-main-menu ul > li .km-mega-menu-container > ul{
			border-top-color: <?php echo esc_html($sy_options['color_scheme']); ?>!important;
		}
		.woocommerce-message:before{color: <?php echo esc_html($sy_options['color_scheme']); ?>!important;}
		<?php 
			echo kameleon_pagination_styling("normal"); 
			//if(class_exists('woocommerce')){
				echo kameleon_pagination_styling("woocommerce"); 
				echo kameleon_woocommerce_style();
			//}
		?>
		

		.km-pagination-container[data-pagination-style="pagination_line_top"] .km-pagination a.current,.km-pagination-container[data-pagination-style="pagination_line_top"] .km-pagination a:hover,
		.km-pagination-container[data-pagination-style="pagination_line_bottom"] .km-pagination a.current,.km-pagination-container[data-pagination-style="pagination_line_bottom"] .km-pagination a:hover,
		.km-pagination-container[data-pagination-style="pagination_line_center"] .km-pagination a.current,.km-pagination-container[data-pagination-style="pagination_line_center"] .km-pagination a:hover{
			color: <?php echo esc_html($sy_options['color_scheme']); ?>!important;
		}

		
		
		#km-hv5-search input:focus,#km-hv6-search input:focus,.description_tab.active,.hr-bottom,body.woocommerce-cart .kameleon-cart-collaterals .wc-proceed-to-checkout  a.checkout-button,.km-pn-arrow-basic-icon:after,.km-pn-basic-gohome:hover .km-gohome-square,.km-pn-arrow-titlebar:after{border-color: <?php echo esc_html($sy_options['color_scheme']); ?>!important;}
		#km-main-menu > ul > li ul li{border-color: <?php echo esc_html($sy_options['menu_border_color']); ?>; background: <?php echo esc_html($sy_options['menu_background']); ?>;
			color: <?php echo esc_html($sy_options['menu_color']); ?>;}
		#km-main-menu > ul > li ul li:hover{background: <?php echo esc_html($sy_options['menu_hover_background']); ?>; color: <?php echo esc_html($sy_options['menu_hover_color']); ?>;}
		.km-megamenu-column h3, #km-main-menu > ul > li ul .km-megamenu-column:hover h3{color: <?php echo esc_html($sy_options['menu_mega_title_color']); ?>!important;}
		
		#km-main-menu > ul > li ul .km-megamenu-column .mega-menu-ul li{color: <?php echo esc_html($sy_options['menu_mega_text_color']); ?>;}
		#km-main-menu > ul > li ul .km-megamenu-column .mega-menu-ul li:hover{color: <?php echo esc_html($sy_options['menu_mega_text_hover_color']); ?>;}

		#km-main-menu ul > li .km-mega-menu-container{background: <?php echo esc_html($sy_options['menu_mega_background_color']); ?>;}
		#km-main-menu > ul > li ul .km-megamenu-column{border-right-color: <?php echo esc_html($sy_options['menu_mega_border_color']); ?>;}
		.effect_menu3 li a::before{color: <?php echo esc_html($sy_options['menu_mega_text_hover_color']); ?>;}
		
		.km-porfolio-filter-style2 .km-filter-link.clst, .km-porfolio-filter-style2 .km-filter-link:hover{
			border-bottom: 1px solid  <?php echo esc_html($sy_options['color_scheme']); ?>;
		}

		body[data-layout='boxed']{<?php echo wp_kses_data($boxed_layout_style); ?>}
		#km-container{background-color: <?php echo esc_html($content_background); ?>;}

		body[data-layout='boxed']{padding: <?php echo wp_kses_data($boxed_margin); ?>px 0px;}
		body[data-layout='boxed'] #km-container{width: <?php echo esc_html($sy_options['boxed_width']); ?>px; border: <?php echo esc_html($boxed_border['border-top']); ?> <?php echo esc_html($boxed_border['border-style']); ?> <?php echo esc_html($boxed_border['border-color']); ?> ;}
		body[data-layout='boxed'] #km-footer{width: <?php echo esc_html($sy_options['boxed_width']); ?>px; float: none; margin: auto; }
		
		body[data-layout='full_width'][data-fullwidth='0'] #km-content,#km-header[data-width='boxed-header'] #km-header-content, #km-header[data-width='boxed-header'] #km-header-top-content,
		body[data-layout='full_width'][data-fullwidth='0'] .center-content,
		.header_v4[data-width='boxed-header'] #km-main-menu,#km-header[data-width='boxed-header']  #search-content,#km-footer[data-footer-width='boxed'] .center-content,
		#km-slidingbar[data-slidingbar-width='boxed'] .center-content{
			width: <?php echo esc_html($sy_options['layout_width']); ?>px;
		}
		body[data-layout='full_width'][data-fullwidth='1'] #km-container{width: 100%;}		
		#km-footer{<?php echo wp_kses_data($footer_style) .' '. $footer_borders_style; ?>}
		#km-footer-content{padding-top: <?php echo esc_html($sy_options['footer_paddingTop']); ?>px; font-size: <?php echo esc_html($sy_options['footer_fontsize']) ?>px; color: <?php echo esc_html($sy_options['footer_color']); ?>;}
		#km-footer-content h3{font-size: <?php echo esc_html($sy_options['footer_title_fontsize']) ?>px;color: <?php echo esc_html($sy_options['footer_title_color']); ?>;}
		
		#km-slidingbar{<?php echo wp_kses_data($slidingbar_style); ?>}
		#km-slidingbar-content{ font-size: <?php echo esc_html($sy_options['slidingbar_fontsize']) ?>px; color: <?php echo esc_html($sy_options['slidingbar_color']); ?>;}
		#km-slidingbar-content h3{font-size: <?php echo esc_html($sy_options['slidingbar_title_fontsize']) ?>px;color: <?php echo esc_html($sy_options['slidingbar_title_color']); ?>;}
		#km-slidingbar-buttonshow[data-position='left'],#km-slidingbar-buttonshow[data-position='right']{color: <?php echo esc_html($sy_options['slidingbar_background']['background-color']); ?>}
		#km-slidingbar-buttonshow[data-position='center']{background: <?php echo esc_html($sy_options['slidingbar_background']['background-color']); ?>}
		#km-slidingbar-buttonshow i{color: <?php echo esc_html($sy_options['slidingbar_color']); ?>;}

		#km-footer-bottom-container{
			background-color: <?php echo esc_html($footer_bottom_background); ?>; color: <?php echo esc_html($sy_options['footer_bottom_color']); ?>;
			min-height: <?php echo esc_html($sy_options['footer_bottom_height']) ?>px; font-size: <?php echo esc_html($sy_options['footer_bottom_font']) ?>px;}	
		#km-footer-bottom-content > div{line-height: <?php echo esc_html($sy_options['footer_bottom_height']) ?>px;}

		#km-footer-copyright-container{
			background-color: <?php echo esc_html($footer_copyright_background); ?>; color: <?php echo esc_html($sy_options['footer_copyright_color']); ?>;
			height: <?php echo esc_html($sy_options['footer_copyright_height']) ?>px; line-height: <?php echo esc_html($sy_options['footer_copyright_height']) ?>px; 	
			font-size: <?php echo esc_html($sy_options['footer_copyright_font']) ?>px; text-align: <?php echo esc_html($sy_options['footer_copyright_alignment']) ?>;
		}
		
		.footer-column{padding-bottom: <?php echo esc_html($sy_options['footer_paddingBottom']); ?>px;}
		#footer-column-1{width: <?php echo esc_html($sy_options['footer_col_1_width']); ?>%;}
		#footer-column-2{width: <?php echo esc_html($sy_options['footer_col_2_width']); ?>%;}
		#footer-column-3{width: <?php echo esc_html($sy_options['footer_col_3_width']); ?>%;}
		#footer-column-4{width: <?php echo esc_html($sy_options['footer_col_4_width']); ?>%;}
		.slidingbar-column{padding-bottom: <?php echo esc_html($sy_options['slidingbar_padding']['padding-bottom']); ?>; padding-top: <?php echo esc_html($sy_options['slidingbar_padding']['padding-top']); ?>;}
		#slidingbar-column-1{width: <?php echo esc_html($sy_options['slidingbar_col_1_width']); ?>%;} 
		#slidingbar-column-2{width: <?php echo esc_html($sy_options['slidingbar_col_2_width']); ?>%;}
		#slidingbar-column-3{width: <?php echo esc_html($sy_options['slidingbar_col_3_width']); ?>%;}
		#slidingbar-column-4{width: <?php echo esc_html($sy_options['slidingbar_col_4_width']); ?>%;}
		
		<?php  echo kameleon_sidebar_style(); echo kameleon_mobile_header_style(); echo kameleon_side_header_sh_style(); echo kameleon_side_header_fixed_style(); echo kameleon_minimalist_headers_styles(); ?>
		#km-pageloader{background: <?php echo esc_html($sy_options['pageloader_background']); ?>;}
		
		
		#km-slide-widgetarea[data-colorscheme="dark"] h3{color: <?php echo esc_html($sy_options['swa_title_color-dark']); ?>!important;}
		#km-slide-widgetarea[data-colorscheme="dark"]{color: <?php echo esc_html($sy_options['swa_text_color-dark']); ?>!important;}
		#km-slide-widgetarea[data-colorscheme="dark"] .widget_search input[type="text"],
		#km-slide-widgetarea[data-colorscheme="dark"] .widget_display_search input[type="text"],
		#km-slide-widgetarea[data-colorscheme="dark"] .woocommerce-product-search input[type="search"]{border-color: <?php echo esc_html($sy_options['swa_border_color-dark']); ?>!important;}

		#km-slide-widgetarea[data-colorscheme="light"] h3{color: <?php echo esc_html($sy_options['swa_title_color-light']); ?>!important;}
		#km-slide-widgetarea[data-colorscheme="light"]{color: <?php echo esc_html($sy_options['swa_text_color-light']); ?>!important;}
		#km-slide-widgetarea[data-colorscheme="light"] .widget_search input[type="text"],
		#km-slide-widgetarea[data-colorscheme="light"] .widget_display_search input[type="text"],
		#km-slide-widgetarea[data-colorscheme="light"] .woocommerce-product-search input[type="search"]{border-color: <?php echo esc_html($sy_options['swa_border_color-light']); ?>!important;}
	
		.km-paj-overlay{background: <?php echo esc_html($sy_options['paj_background']); ?>;}
		.km-paj-title{color: <?php echo esc_html($sy_options['paj_title_color']); ?>; font-size: <?php echo esc_html($sy_options['paj_title_size']); ?>px;}
		.km-paj-top{border-bottom-color: <?php echo esc_html($sy_options['paj_borders_color']); ?>;}
		.km-paj-icon-c.km-paj-close,.km-prnx-iconcontainer-c{color: <?php echo esc_html($sy_options['paj_icons_color']); ?>;}
		.km-paj-pn:after{background: <?php echo esc_html($sy_options['paj_icons_color']); ?>;}
		.km-paj-about-tit{color: <?php echo esc_html($sy_options['paj_contenttitle_color']); ?>; font-size: <?php echo esc_html($sy_options['paj_contenttitle_size']); ?>px;}
		.km-paj-about-tit:after{background: <?php echo esc_html($sy_options['paj_contenttitle_color']); ?>;}
		.km-paj-overlay .km-p-data-item{background: <?php echo esc_html($sy_options['paj_details_background']); ?>; color:<?php echo esc_html($sy_options['paj_details_color']); ?>;}
		.km-paj-overlay .km-p-data-item .km-p-data-info a, .km-paj-overlay .km-p-data-item .km-p-data-info span{color:<?php echo esc_html($sy_options['paj_details_color']); ?>}
		.km-paj-overlay #km-portfolio-content{color: <?php echo esc_html($sy_options['paj_content_color']); ?>; font-size: <?php echo esc_html($sy_options['paj_content_size']); ?>px;}

		#km-single-content blockquote{background-color: <?php echo esc_html($sy_options['blockquote_background']); ?>; color: #<?php echo esc_html($sy_options['blockquote_color']); ?>; border-color: <?php echo esc_html($sy_options['color_scheme']); ?>;}
		body[data-header="header_v6"] #km-container,
		body[data-layout='full_width'][data-fullwidth='1'][data-header="header_v6"] #km-container
		{width: calc(100% - <?php echo esc_html($sy_options['hv6_width']); ?>px); }
		#km-gotop{background: <?php echo esc_html($sy_options['gotop_background']); ?>; bottom:<?php echo esc_html($sy_options['gotop_bottom']); ?>px; color: <?php echo esc_html($sy_options['gotop_color']); ?>; border-radius:<?php echo esc_html($sy_options['gotop_radius']) ?>%; border: <?php echo esc_html($sy_options['gotop_border']); ?>px solid <?php echo esc_html($sy_options['gotop_border_color']); ?>; }
		#km-gotop:hover{background: <?php echo esc_html($sy_options['gotop_hover_background']); ?>;}
		body[data-header="header_v6"] #km-footer{width: calc(100% - <?php echo esc_html($sy_options['hv6_width']); ?>px); <?php echo wp_kses_data($footer_fixed); ?>}	
		.woocommerce ul.products li.product:after, .woocommerce-page ul.products li.product:after{
			border-bottom: 1px solid <?php echo esc_html($sy_options['color_scheme']); ?>;
		}
		.km-footer-compact-logo{margin-top:  <?php echo esc_html($sy_options['footer_compact-logo_section_margin_top']); ?>px; margin-bottom:  <?php echo esc_html($sy_options['footer_compact-logo_section_margin_bottom']); ?>px; }	
		.km-footer-compact-social{margin-top:  <?php echo esc_html($sy_options['footer_compact-social_section_margin_top']); ?>px; margin-bottom:  <?php echo esc_html($sy_options['footer_compact-social_section_margin_bottom']); ?>px; }	
		.km-footer-compact-menu{margin-top:  <?php echo esc_html($sy_options['footer_compact-menu_section_margin_top']); ?>px; margin-bottom:  <?php echo esc_html($sy_options['footer_compact-menu_section_margin_bottom']); ?>px; }	
		
		.header_v7 #km-main-menu{width: calc(100% - <?php echo $sy_options['hv7_logo_width']; ?>px);}

		<?php echo kameleon_window_frame_style(); ?>
		.kameleon-frame-enabled.page[data-header="header_v6"] .wc-row-parent[data-vc-full-width="true"][data-vc-stretch-content="true"][data-vc-full-width-init="true"]{padding-right:initial!important; padding-left:initial!important; width: initial!important; left: initial!important;}
		@media screen and (min-width: 300px) and (max-width: <?php echo wp_kses_data($container_responsive_width); ?>) {
			body[data-layout='full_width'][data-fullwidth='0'] #km-content,#km-header[data-width='boxed-header'] #km-header-content, #km-header[data-width='boxed-header'] #km-header-top-content,
			.header_v4[data-width='boxed-header'] #km-main-menu,#km-header[data-width='boxed-header']  #search-content,
			#km-footer[data-footer-width='boxed'] .center-content,#km-slidingbar[data-slidingbar-width='boxed'] .center-content,body[data-header="header_v6"] #km-footer, #km-container,body[data-layout='boxed'] #km-footer{
				width: 100%!important;left: 0;right: 0;
			}
			
			.center-content,#km-header[data-width='boxed-header'] #km-header-content, #km-header[data-width='boxed-header'] #km-header-top-content,
			.header_v4[data-width='boxed-header'] #km-main-menu,#km-header[data-width='boxed-header']  #search-content,
			#km-footer[data-footer-width='boxed'] .center-content,#km-slidingbar[data-slidingbar-width='boxed'] .center-content, body[data-layout='full_width'][data-fullwidth='0'] .center-content{
				padding-left:20px; padding-right:20px; box-sizing:border-box;  width: 100%!important;	
			}
			#km-slidingbar-buttonshow,#km-sb{
				display: none;
			}
		}
		

		@media screen and (min-width: 300px) and (max-width: <?php echo wp_kses_data($mobile_header); ?>px) {
			#km-header,.nores{ visibility: hidden!important; display: none!important;}			
			#km-mobile-header{ visibility: visible; display: block;}
			#km-mheader{visibility: visible; display: block;}	
			.km-global-card{display: none;}
			body[data-header="header_v6"] #km-container,body[data-layout='full_width'][data-fullwidth='1'][data-header="header_v6"] #km-container{width: 100%;}					
		}
		.spinner8 div{background: transparent!important;}
		<?php 
			print($custom_typography);
			echo stripcslashes(base64_decode( kameleon_get_single_option_theme('customCSS') ));
		?>
	</style>
	<?php 
}
add_action('wp_head','kameleon_css_customizer');
?>