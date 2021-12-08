<?php
$sy_options = kameleon_get_options_name();
define('Kameleon_Core_Version', '1.3.3');
//Importing Files For The Kameleon Core
require_once( trailingslashit( get_template_directory() ). '/admin/kameleon-core/assets/menu/Kameleon-menu-edit.php');
require_once( trailingslashit( get_template_directory() ). '/admin/kameleon-core/assets/menu/Kameleon-mega-menu.php');
require_once( trailingslashit( get_template_directory() ). '/admin/kameleon-core/assets/menu/Kameleon-mega-menu-responsive.php');
require_once( trailingslashit( get_template_directory() ). '/admin/kameleon-core/assets/menu/Kameleon-fullscreen-menu.php');
require_once( trailingslashit( get_template_directory() ). '/admin/kameleon-core/assets/metaboxes/fields/bundle.php');
require_once( trailingslashit( get_template_directory() ). '/admin/kameleon-core/assets/metaboxes/kameleon-metaboxes.php');
require_once( trailingslashit( get_template_directory() ). '/admin/kameleon-core/options/top-options.php');
require_once( trailingslashit( get_template_directory() ). '/admin/kameleon-core/options/style-functions.php');
require_once( trailingslashit( get_template_directory() ). '/admin/kameleon-core/functions/css-customizer.php');
require_once( trailingslashit( get_template_directory() ). '/admin/kameleon-core/functions/post-functions.php');

if(!get_option(kameleon_get_options_slug())){
  require_once( trailingslashit( get_template_directory() ). '/admin/kameleon-core/functions/options-default.php');
}
include_once(ABSPATH.'wp-admin/includes/plugin.php');
if ( is_plugin_active( 'contact-form-7/wp-contact-form-7.php' ) || defined( 'WPCF7_PLUGIN' ) ) {
  require_once( trailingslashit( get_template_directory() ). '/admin/kameleon-core/cf7-designer/km-cf7-designer-output.php');
  
}







if(class_exists('woocommerce')){
  require_once( trailingslashit( get_template_directory() ). '/admin/kameleon-core/functions/woocommerce-functions.php');  
}

/* ================================================================== *\
   ==                                                              ==   
   ==                                                              ==
   ==============        LOAD STYLES & SCRIPT          ============== 
   ==                                                              ==
   ==                                                              ==   
\* ================================================================== */
function kameleon_style_script_init(){
    if(is_admin()):
      // loading styles
      wp_enqueue_style( 'km-font-awsome', get_template_directory_uri().'/admin/kameleon-core/css/font-awsome/css/font-awesome.min.css' );
      wp_enqueue_style( 'km-admin-style',get_template_directory_uri(). '/admin/kameleon-core/css/admin-style.css' );

      //Loading The Scripts    
      wp_enqueue_script( 'jquery-form',array('jquery'));
      wp_enqueue_script( 'KM-admin.script', get_template_directory_uri().'/admin/kameleon-core/js/admin.script.js' , array( 'jquery' ));  

      $template_uri_admin = array( 'template_uri' => get_template_directory_uri() );
      wp_localize_script( 'KM-admin.script', 'directory', $template_uri_admin );


      $kameleon_uri_admin = array( 'ajax_handler' => admin_url( 'admin-ajax.php' ) );
      wp_localize_script( 'KM-admin.script', 'kameleondir', $kameleon_uri_admin );


      wp_enqueue_media();
    endif;
  
}
add_action('admin_enqueue_scripts', 'kameleon_style_script_init');

/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============              MEGA MENU               ============== 
   ==                                                              ==
   ==                                                              ==
\* ================================================================== */

add_filter( 'wp_edit_nav_menu_walker', 'kameleon_custom_nav_edit_walker',10,2 );
function kameleon_custom_nav_edit_walker($walker,$menu_id) {
    return 'kameleon_walker_Nav_Menu_Edit_Custom';
}

/*
  Adds value of new field to $item object that will be passed to     Walker_Nav_Menu_Edit_Custom
*/

add_filter( 'wp_setup_nav_menu_item','kameleon_custom_nav_item' );
function kameleon_custom_nav_item($menu_item) {
    $menu_item->mega = get_post_meta( $menu_item->ID, '_menu_item_mega', true );
    //$menu_item->megafullwidth = get_post_meta( $menu_item->ID, '_menu_item_mega_fullwidth', true );
    $menu_item->disptitle = get_post_meta( $menu_item->ID, '_menu_item_disptitle', true );
    return $menu_item;
}


add_action('wp_update_nav_menu_item', 'kameleon_custom_nav_update',10, 3);
function kameleon_custom_nav_update($menu_id, $menu_item_db_id, $args ) { 
        if (isset($_REQUEST['menu-item-mega'][$menu_item_db_id])) {
            $isMega = $_REQUEST['menu-item-mega'][$menu_item_db_id];
            update_post_meta( $menu_item_db_id, '_menu_item_mega', $isMega );                
        }
      /*  if (isset($_REQUEST['menu-item-mega-fullwidth'][$menu_item_db_id])) {
            $isMega = $_REQUEST['menu-item-mega-fullwidth'][$menu_item_db_id];
            update_post_meta( $menu_item_db_id, '_menu_item_mega_fullwidth', $isMega );          
        }*/
        if (isset($_REQUEST['menu-item-disptitle'][$menu_item_db_id])) {
            $isDisptitle = $_REQUEST['menu-item-disptitle'][$menu_item_db_id];
            update_post_meta( $menu_item_db_id, '_menu_item_disptitle', $isDisptitle );          
        }
}


//Fet All Widget Areas
function sy_wdgt_areas(){
  $result = array();
  $rwaS = $GLOBALS['wp_registered_sidebars'];
  foreach ($rwaS as $rwa){
    $result[$rwa["id"]]= $rwa["name"];
  }
  return $result;
}



//Retun All Activated Social Profile Icon
function sy_social_links(){
 $sy_options = kameleon_get_options_name();
  ?>
      <?php if ($sy_options['facebook_url'] != ''){ ?> <a href="<?php echo esc_url($sy_options['facebook_url']); ?>" target="_blank"><i class="Defaults-km-icon-facebook"></i></a> <?php } ?>
      <?php if ($sy_options['twitter_url'] != ''){ ?> <a href="<?php echo esc_url($sy_options['twitter_url']); ?>" target="_blank"><i class="Defaults-km-icon-twitter"></i></a> <?php } ?>
      <?php if ($sy_options['youtube_url'] != ''){ ?> <a href="<?php echo esc_url($sy_options['youtube_url']); ?>" target="_blank"><i class="Defaults-km-icon-youtube"></i></a> <?php } ?>
      <?php if ($sy_options['linkedin_url'] != ''){ ?> <a href="<?php echo esc_url($sy_options['linkedin_url']); ?>" target="_blank"><i class="Defaults-km-icon-linkedin"></i></a> <?php } ?>
      <?php if ($sy_options['google_url'] != ''){ ?> <a href="<?php echo esc_url($sy_options['google_url']); ?>" target="_blank"><i class="Defaults-km-icon-google-plus"></i></a> <?php } ?>
      <?php if ($sy_options['instagram_url'] != ''){ ?> <a href="<?php echo esc_url($sy_options['instagram_url']); ?>" target="_blank"><i class="Defaults-km-icon-instagram"></i></a> <?php } ?>
      <?php if ($sy_options['github_url'] != ''){ ?> <a href="<?php echo esc_url($sy_options['github_url']); ?>" target="_blank"><i class="Defaults-km-icon-github"></i></a> <?php } ?>
      <?php if ($sy_options['pinterest_url'] != ''){ ?> <a href="<?php echo esc_url($sy_options['pinterest_url']); ?>" target="_blank"><i class="Defaults-km-icon-pinterest-p"></i></a> <?php } ?>
      <?php if ($sy_options['tumblr_url'] != ''){ ?> <a href="<?php echo esc_url($sy_options['tumblr_url']); ?>" target="_blank"><i class="Defaults-km-icon-tumblr"></i></a> <?php } ?>
      <?php if ($sy_options['behance_url'] != ''){ ?> <a href="<?php echo esc_url($sy_options['behance_url']); ?>" target="_blank"><i class="Defaults-km-icon-behance"></i></a> <?php } ?>
      <?php if ($sy_options['vimeo_url'] != ''){ ?> <a href="<?php echo esc_url($sy_options['vimeo_url']); ?>" target="_blank"><i class="Defaults-km-icon-vimeo"></i></a> <?php } ?>
      <?php if ($sy_options['flickr_url'] != ''){ ?> <a href="<?php echo esc_url($sy_options['flickr_url']); ?>" target="_blank"><i class="Defaults-km-icon-flickr"></i></a> <?php } ?>
      <?php if ($sy_options['soundcloud_url'] != ''){ ?> <a href="<?php echo esc_url($sy_options['soundcloud_url']); ?>" target="_blank"><i class="Defaults-km-icon-soundcloud"></i></a> <?php } ?>
    <?php
}





/*-----------------------------------------------
  R E G I S T E R    W I D G E T    A R E A S
-----------------------------------------------*/


apply_filters( 'custom_sidebars_cap_required', 'switch_themes' );
function kameleon_widget_init(){
  //--------------Sidebar 1------------------
  register_sidebar(array(
    'name' => esc_html__('Sidebar 1','kameleon'),
    'id' => 'kameleon-sidebar-1',
    'description'   => esc_html__( 'Kameleon main sidebar 1', 'kameleon' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));



  //--------------Contact Us------------------
  register_sidebar(array(
    'name' => esc_html__('Contact Sidebar','kameleon'),
    'id' => 'kameleon-contact-us',
    'description'   => esc_html__( 'Kameleon sidebar for Contact us template number 2', 'kameleon' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));



  //--------------Footer 1------------------
  register_sidebar(array(
    'name' => esc_html__('Footer Column 1','kameleon'),
    'id' => 'kameleon-footer-1',
    'description'   => esc_html__( 'Kameleon footer Column 1 area', 'kameleon' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));



  //--------------Footer 2------------------
  register_sidebar(array(
    'name' => esc_html__('Footer Column 2','kameleon'),
    'id' => 'kameleon-footer-2',
    'description'   => esc_html__( 'Kameleon footer Column 2 area', 'kameleon' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));



  //--------------Footer 3------------------
  register_sidebar(array(
    'name' => esc_html__('Footer Column 3','kameleon'),
    'id' => 'kameleon-footer-3',
    'description'   => esc_html__( 'Kameleon footer Column 3 area', 'kameleon' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));




  //--------------Footer 4------------------
  register_sidebar(array(
    'name' => esc_html__('Footer Column 4','kameleon'),
    'id' => 'kameleon-footer-4',
    'description'   => esc_html__( 'Kameleon footer Column 4 area', 'kameleon' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));


  //--------------Sliding Bar1------------------
  register_sidebar(array(
    'name' => esc_html__('Sliding Bar Column 1','kameleon'),
    'id' => 'kameleon-slidingbar-1',
    'description'   => esc_html__( 'Kameleon Sliding Bar Column 1 area', 'kameleon' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));



  //--------------Sliding Bar2------------------
  register_sidebar(array(
    'name' => esc_html__('Sliding Bar Column 2','kameleon'),
    'id' => 'kameleon-slidingbar-2',
    'description'   => esc_html__( 'Kameleon Sliding Bar Column 2 area', 'kameleon' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));



  //--------------Sliding Bar3------------------
  register_sidebar(array(
    'name' => esc_html__('Sliding Bar Column 3','kameleon'),
    'id' => 'kameleon-slidingbar-3',
    'description'   => esc_html__( 'Kameleon Sliding Bar Column 3 area', 'kameleon' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));



  //--------------Sliding Bar4------------------
  register_sidebar(array(
    'name' => esc_html__('Sliding Bar Column 4','kameleon'),
    'id' => 'kameleon-slidingbar-4',
    'description'   => esc_html__( 'Kameleon Sliding Bar Column 4 area', 'kameleon' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));



  //--------------Shop------------------
  register_sidebar(array(
    'name' => esc_html__('Shop','kameleon'),
    'id' => 'kameleon-shop',
    'description'   => esc_html__( 'Kameleon main shop page sidebar', 'kameleon' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));



  //--------------Single Product------------------
  register_sidebar(array(
    'name' => esc_html__('Shop Single ','kameleon'),
    'id' => 'kameleon-shop-single',
    'description'   => esc_html__( 'Kameleon main shop page sidebar', 'kameleon' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));



  //--------------BBpress------------------
  register_sidebar(array(
    'name' => esc_html__('BBpress Forum ','kameleon'),
    'id' => 'kameleon-bbpress',
    'description'   => esc_html__( 'BBpress Forum sidebar', 'kameleon' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));

  //--------------Sidebar 1------------------
  register_sidebar(array(
    'name' => esc_html__('Slide Widget Area ','kameleon'),
    'id' => 'kameleon-slidewidget',
    'description'   => esc_html__( 'Hidden Slide Widget Area', 'kameleon' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));



  //--------------CUSTOM SIDEBAR------------------
  $kameleon_custom_sidebars = get_option('kameleon_custom_sidebars');
  if(is_array($kameleon_custom_sidebars)){
    foreach ($kameleon_custom_sidebars as $s) {
      register_sidebar(array(
        'name' => $s['name'],
        'id' => $s['id'],
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
      ));
      
    }
  }

}
add_action("widgets_init","kameleon_widget_init");


/*-----------------------------------------------
      K A M E L E O N     P A G I N A T I O N
-----------------------------------------------*/
function kameleon_pagination( $type = 'normal', $pages = '', $range = 2){
     global $paged;
     global $sy_options; 
     $showitems = ($range * 2)+1;
     if(empty($paged)) $paged = 1;
     if($pages == ''){
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages){
             $pages = 1;
         }
     }   
    
    $prefix = (isset($type) && $type=='woocommerce') ? 'w_' : 's_';  
    
    $s_pagination_style = (isset($sy_options[$prefix.'pagination_style']) && $sy_options[$prefix.'pagination_style'] != "" ) ? $sy_options[$prefix.'pagination_style'] : "pagination_circle";
    $s_pagination_align = (isset($sy_options[$prefix.'pagination_align']) && $sy_options[$prefix.'pagination_align'] != "" ) ? $sy_options[$prefix.'pagination_align'] : "center";      
    


     if(1 != $pages){
         echo "<div class='km-pagination-container' data-pagination-type='".$type."' data-pagination-align='".$s_pagination_align."' data-pagination-style='".$s_pagination_style."'>
              <div class='km-pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".esc_url(get_pagenum_link(1))."'><span>&larr;</span></a>";
         if($paged > 1 ) echo "<a class='np-icon' href='".esc_url(get_pagenum_link($paged - 1))."'><span>&larr;</span></a>";


         for ($i=1; $i <= $pages; $i++){
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                 echo ($paged == $i)? "<a href='".esc_url(get_pagenum_link($i))."' class='current'><span>".$i."</span></a>":"<a href='".esc_url(get_pagenum_link($i))."' class='inactive' ><span>".$i."</span></a>";
             }
         }
         if ($paged < $pages ) echo "<a class='np-icon' href='".esc_url(get_pagenum_link($paged + 1))."'><span>&rarr;</span></a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".esc_url(get_pagenum_link($pages))."'><span>&rarr;</span></a>";
         echo "</div></div>\n";
     }
}



//Changing the Pagination Styling For WooCommerce Page
remove_action('woocommerce_pagination', 'woocommerce_pagination', 10 , 0);
function woocommerce_pagination() {
    kameleon_pagination('woocommerce');    
}
add_action( 'woocommerce_pagination', 'woocommerce_pagination', 10 , 0);




#Page Title Filter
function kameleon_filter_wp_title( $title, $sep ) {
    global $paged, $page;
    if ( is_feed() ){
        return $title;
    }
    // Add the site name.
    $title .= get_bloginfo( 'name' );
    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";
    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( esc_html__( 'Page %s', 'kameleon' ), max( $paged, $page ) );
    return $title;
}
add_filter( 'wp_title', 'kameleon_filter_wp_title', 10, 2 );


#Strip Slashes
if ( get_magic_quotes_gpc() ) {
    $_POST      = array_map( 'stripslashes_deep', $_POST );
    $_GET       = array_map( 'stripslashes_deep', $_GET );
    $_COOKIE    = array_map( 'stripslashes_deep', $_COOKIE );
    $_REQUEST   = array_map( 'stripslashes_deep', $_REQUEST );
}



/**
 * [getSideBarArray description]
 * @return [type] [description]
 */
function kameleon_getSideBarArray(){
  $result = Array();
  $rwaS = $GLOBALS['wp_registered_sidebars'];
  foreach ($rwaS as $rwa){

    $result = $result + array($rwa["id"]=>$rwa["name"]);
  }
  return $result;
}


//Creating Multiple Post & Porfolio Thumbnails
if(class_exists('MultiPostThumbnails')){
  $thumbnails_number = isset($sy_options["thumbnails_number"]) ? $sy_options["thumbnails_number"] : 3;
  for ($i=2; $i <= $thumbnails_number ; $i++) { 
    new MultiPostThumbnails(array(
      'label' => 'Featured Image '.$i,
      'id' => 'featured-image'.$i,
      'post_type' => 'post'
    ) ); 
  } 
}

/*-----------------------------------------------
  R E T U R N    T H E    A R R O W    T Y P E
-----------------------------------------------*/
function kameleon_get_arrow_type($arrowType){
  $arrowArray = array(
          'style1'    => '&#8594;',
          'style2'    => '&#10142;',
          'style3'    => '&#62;',
          'style4'    => '&#8250;',
          'style5'    => '&#10148;',
          'style6'    => '&#10147;',
          'style7'    => '&#10146;',
          'style8'    => '&#10139;',
          'style9'    => '&#10137;',
          'style10'   => '&#10140;',
          'style11'   => '&#8658;',
          'style12'   => '&#8680;',
          'style13'   => '&#8702;',
          'style14'   => '&#10141;'
        );

  return $arrowArray[$arrowType];

}

function kameleon_headers_type_theme(){
  return array(
    'header_v1' => 'hv1',
    'header_v2' => 'hv2',
    'header_v3' => 'hv3',
    'header_v4' => 'hv4',
    'header_v7' => 'hv7',
    'header_v8' => 'hv8',
    'header_v9' => 'hv9',
    'header_v10' => 'hv10',
    'header_v11' => 'hv11',
    'h' => 'h',
  );  
}

//Header With No SWA
function kameleon_headers_no_swa(){
  return array(
    'header_v6',
    'header_v5',
    'header_v8',
    'header_v9',
    'header_v10',
    'header_v11',
  );  
}

//Minimalist Header With Side Hamburger
function kameleon_minmalist_headers(){
  return array(
    'header_v8' ,
    'header_v9'     
  );  
}

//FullScreen Header With Side Hamburger
function kameleon_fullscreen_headers(){
  return array(
    'header_v10' ,
    'header_v11'     
  );  
}


//Headers With No One Menu Page Option
function kameleon_noonemenu_headers(){
  return array(
    'header_v3' ,
    'header_v10' ,
    'header_v11'     
  );  
}


//Show The Filter on the Masonry Portfolio Shortcode
function kameleon_portfolio_filter($array_filter = false, $link_style, $edge_border,$fili_height,$fili_style,$fili_align,$new_classes){ 
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
  return '<div class="km-filteri-cats km-porfolio-filter syp-portfolio-filter '.$new_classes.'" data-style="'.$fili_style.'" style="text-align:'.$fili_align.'; '.$link_style.'">
        <div class="km-filter-it-link km-filter-link" data-filter=".portfolio-item" data-active="true" '.$linkStyle.'>All'.$edge_border.'</div>
                '.$filters.'
              </div>';
}
?>