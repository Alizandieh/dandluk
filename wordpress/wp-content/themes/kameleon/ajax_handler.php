<?php 

//File That Will Handle The Ajax Actions and Requests


//Search Post/Portfolio/Product for the Visual Composer Shortcodes
add_action('wp_ajax_kameleonPostShorcodesSearch', 'kameleon_posttype_shortcodesearch_callback' );
add_action('wp_ajax_nopriv_kameleonPostShorcodesSearch', 'kameleon_posttype_shortcodesearch_callback');
function kameleon_posttype_shortcodesearch_callback(){  
  if(isset($_POST['type'],$_POST['title'])){
      kameleon_search_post_type($_POST['type'],$_POST['title']);
  } 
  die();
}


function kameleon_search_post_type($type,$title){
  global $wpdb;
  $site = $wpdb->prefix.''.'posts';
  if(is_multisite() && !is_main_site(get_current_blog_id()))
    $site = $wpdb->prefix.''.get_current_blog_id().'_posts';

  $posts = $wpdb->get_results( $wpdb->prepare("SELECT * FROM $site WHERE  post_type = '%s' AND post_title LIKE '%s'", $type , '%'.$title.'%' ) );  
  $json = array();
  if(is_array($posts)){
    foreach ( $posts as $p ) {
        $post = get_post( $p );
    array_push($json,array(
      'id'=> $post->ID,
      'title'=> $post->post_title
    ));   
    }    
  echo json_encode($json);
  }
}


//Load More Portfolio Posts 
add_action('wp_ajax_kameleonLoadMorePortfolios', 'kameleon_load_more_portfolios_callback' );
add_action('wp_ajax_nopriv_kameleonLoadMorePortfolios', 'kameleon_load_more_portfolios_callback');
function kameleon_load_more_portfolios_callback(){  
  $folios_number = (isset($_POST['folios_number'])) ? $_POST['folios_number'] : 0;
  $page = (isset($_POST['page'])) ? $_POST['page'] : 0;
  $portfolio_layout = (isset($_POST['portfolio_layout'])) ? $_POST['portfolio_layout'] : "simple";
  query_posts(array(
         'post_type' => 'portfolio',
         'posts_per_page' => $folios_number,
         'paged'          => $page
  ));
  if ( have_posts() ) : 
    while ( have_posts() ) : the_post();    
        get_template_part('templates/portfolio/portfolio',$portfolio_layout);           
    endwhile;
  endif;
  wp_reset_query();
  die();
}


// Portfolio Ajax Shortcode 
add_action('wp_ajax_kameleonPortfolioAjaxShortcode', 'kameleon_portfolio_ajax_shortcode_callback' );
add_action('wp_ajax_nopriv_kameleonPortfolioAjaxShortcode', 'kameleon_portfolio_ajax_shortcode_callback');
function kameleon_portfolio_ajax_shortcode_callback(){
  
  if(isset($_POST['folio_id']) && $_POST['folio_id'] != "" && isset($_POST['ovy_id']) && $_POST['ovy_id'] != "")
    kameleon_portfolio_ajax_print($_POST['folio_id'], $_POST['ovy_id']);
  die(); 
}
?>