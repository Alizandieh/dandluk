<?php
/*	-------------------------------------------------------------------- *\

			 Kameleon Theme Functions and Definitions

\*	--------------------------------------------------------------------  */
require_once( trailingslashit( get_template_directory() ). '/admin/extern-classes/activate-plugins.php' );
require_once( trailingslashit( get_template_directory() ). '/admin/kameleon-core/core.php');
require_once( trailingslashit( get_template_directory() ). 'ajax_handler.php');


/* Importing StyleSheets and JavaScrit Files */
function kameleon_resources(){
	/* ------------------------------ Register Scripts ------------------------------------ */
	//wp_enqueue_script( 'kameleon-external', get_template_directory_uri().'/assets/js/external.js',array('jquery'));
	wp_enqueue_script( 'kameleon-default.script', get_template_directory_uri().'/assets/js/default.script.js',array('jquery'));
    wp_enqueue_style( 'km-font-awsome-front', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array(), '4.6.3' );
    //wp_enqueue_style( 'km-font-awsome-front', get_template_directory_uri().'/admin/kameleon-core/css/font-awsome/css/font-awesome.min.css' );
   //wp_register_script('km-sidebyside-script', get_template_directory_uri().'/assets/js/sidebyside.js', array('jquery'), null, false);
	//Enqueue Portfolio Scripts
	$portfolio_teamplates = array(
		'portfolio-simple_2_col.php',
		'portfolio-simple_3_col.php',
		'portfolio-simple_4_col.php',
		'portfolio-hover_2_col.php',
		'portfolio-hover_3_col.php',
		'portfolio-hover_4_col.php',
		'portfolio-excerpt_2_col.php',
		'portfolio-full_3_col.php',
		'portfolio-full_4_col.php',
		'portfolio-full_5_col.php',
		'portfolio-card_2_col.php',
		'portfolio-card_3_col.php',
		'portfolio-masonry.php',
	);
	wp_localize_script( 'kameleon-default.script', 'link',array('ajaxurl' => admin_url('admin-ajax.php')	));
	$kameleon_uri_ajax = array( 'ajax_handler' => admin_url( 'admin-ajax.php' ) );
	if(is_page_template($portfolio_teamplates)) {
		wp_register_script( 'kameleon-portfolio-script', get_template_directory_uri().'/assets/js/portfolio.script.js' ,array('jquery'));
		wp_enqueue_script('kameleon-portfolio-script');
      	wp_localize_script( 'kameleon-portfolio-script', 'kameleondir', $kameleon_uri_ajax );
	}

	if ( get_option ( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	/* ----------------------- Register Styles ----------------------- */
	//Custom Visual Composer CSS
	/*if(is_plugin_active('js_composer/js_composer.php')) { 
		wp_enqueue_style('kameleon-visual-composer.style', get_template_directory_uri()."/assets/css/vc_custom.min.css");
	}*/
	wp_enqueue_style('kameleon-style', get_stylesheet_uri());	
	if (class_exists('bbpress')) {
		wp_enqueue_style('kameleon-bbpress.style', get_template_directory_uri()."/assets/css/bbpress.css");
	}
	if (class_exists('woocommerce')) {
		wp_enqueue_style('kameleon-woocommerce.style', get_template_directory_uri()."/assets/css/woocommerce.css");
	}
	//Enqueue Post Scripts For Layouts
	$masonry_blog_layouts = array(
		'blog-grid-1.php',
		'blog-grid-2.php',
		'blog-grid-3.php',								
		'blog-masonry-2col.php',								
		'blog-masonry-3col.php',								
		'blog-masonry-4col.php',								
	);

	if(is_page_template($masonry_blog_layouts)) {
		wp_enqueue_script( 'km-blog-masonry', get_template_directory_uri().'/assets/js/blog-masonry.js',array('jquery'));		
	}
}
add_action('wp_enqueue_scripts','kameleon_resources');

//Adding Supports for the Kameleon theme
function kameleon_setup(){
	// Register Navigation Menus
	register_nav_menus(array(
		'primary_menu' => esc_html__('Primary Menu','kameleon'),
		'center_left_menu' => esc_html__('Center Menu Left','kameleon'),
		'center_right_menu' => esc_html__('Center Menu Right','kameleon'),
		'footer_menu' => esc_html__('Footer Menu','kameleon'),
		'topheader_menu' => esc_html__('Top Header Menu','kameleon'),
		'onepage_menu' => esc_html__('One Page Menu(Not for header 3)','kameleon')
	));


	/*-----------------------------------------------
			    T H E M E     S U P P O R T
	 -----------------------------------------------*/

    //----------------Woocommerce--------------------
	add_theme_support( 'woocommerce' );


    //---------------Post Thumbnails-----------------
	add_theme_support('post-thumbnails');


    //--------------featured content------------------
	add_theme_support( 'featured-content', array(
		'featured_content_filter' => 'sy_get_featured_posts'
	) );

	add_theme_support('automatic-feed-links');	
	add_theme_support( "title-tag" ); 
    //--------------Post Formats------------------
	add_theme_support( 'post-formats',
		 array(
			'image',
			'gallery',
			'quote',
			'video',
			'audio'
		)
	);

	$content_width =  1200;
}
//Add Action for The Theme Setup
add_action('after_setup_theme','kameleon_setup');

/*-----------------------------------------------
			I M A G E     S I Z E S
-----------------------------------------------*/
add_image_size('kameleon-small-thumbnail', 400, 400, true);
add_image_size('kameleon-small-thumbnail-nocrop', 500, 690, false);
add_image_size('kameleon-x-small-thumbnail', 200, 200, true);
add_image_size('kameleon-small-icon', 100, 100, true);
add_image_size('kameleon-x-large-thumbnail', 1200, 600, true);
add_image_size('kameleon-large-thumbnail', 900, 500, true);

//Getter for featured posts and contents
function kameleon_get_featured_posts() {
	return apply_filters( 'kameleon_get_featured_posts', array() );
}
//Checker that returns Boolean if page accepts featured contents
function kameleon_has_featured_posts() {
	return ! is_paged() && (bool) kameleon_get_featured_posts();
}

//ADDING CLASSES NAME TO BODY
add_filter( 'body_class', 'kameleon_body_classes' );
function kameleon_body_classes( $classes ) {	
	$intro_active = (is_page() || is_single()) ? 
					get_post_meta(get_the_ID(),'enable_intro',true) : 0;
	$classes[] ='';
	if($intro_active == 1)
		$classes[] = get_post_meta(get_the_ID(), 'intro_style',true);

	$sy_options = kameleon_get_options_name();
	//Checking for the One Menu
	$one_page = 0;			
	$header_v = ( (is_page() || is_single()) && get_post_meta(get_the_ID(), "header_unique", true) == 1 ) ? 
			get_post_meta(get_the_ID(), "header_v", true) : $sy_options['header_v']; 
	if($header_v != "header_v3")
		$one_page = $sy_options[$header_v.'_onepage'];

	if((is_page() || is_single()) && get_post_meta(get_the_ID(), "header_unique", true) == 1)
		$one_page = get_post_meta(get_the_ID(), "onepage", true);	
	if($one_page == 1)
		$classes[] = ' kameleon-one-page-menu ';

	//checking if the Frame Window is Active
	$frame_enable  = ( (is_page() || is_single()) &&  get_post_meta(get_the_ID(), "frame_enable", true) ) ? get_post_meta(get_the_ID(), "frame_enable", true) : $sy_options['frame_enable'];
	if($frame_enable == 1)
		$classes[] =' kameleon-frame-enabled ';

	return $classes;
}


//Function To Return the Redux Option Array
function kameleon_get_options_name(){
	$opt_name = "kameleon";
	if(is_multisite()){
		$opt_name = "kameleon".get_current_blog_id();
	}
	return get_option($opt_name);
}
//Function to Reurn the Redux Options Slug
function kameleon_get_options_slug(){
	$opt_name = "kameleon";
	if(is_multisite()){
		$opt_name = "kameleon".get_current_blog_id();
	}
	return $opt_name;
}

//Function To Get Single Option Name
function kameleon_get_single_option_theme($optionName){
  if(get_option(kameleon_get_options_slug().'-'.$optionName))    
   return get_option(kameleon_get_options_slug().'-'.$optionName);
 return '';
}


//TinyMCE Configuration
function kameleon_tinymce($buttons) {
	$buttons[] = 'fontselect';
	$buttons[] = 'fontsizeselect';
	$buttons[] = 'styleselect';
	$buttons[] = 'backcolor';
	$buttons[] = 'charmap';
	$buttons[] = 'hr';

	return $buttons;
}
add_filter("mce_buttons_3", "kameleon_tinymce");
function kameleon_format_tinymce( $in ) {
	$in['wordpress_adv_hidden'] = FALSE;
	return $in;
}
add_filter( 'tiny_mce_before_init', 'kameleon_format_tinymce' );
