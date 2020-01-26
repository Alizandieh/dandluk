<?php 
/*
	Plugin Name: kameleon core
	Plugin URI: http://themeforest.net/user/sayenthemes
	Description: Kameleon Core Will boost your Kameleon Theme possibilities (This Plugin is MANDATORY if you are using Kameleon Theme)
	Author: SayenThemes
	Version: 1.4
	Author URI: http://themeforest.net/user/sayenthemes
*/

define( 'KAMELEON_PLUGIN_VERSION', '1.4' );
define( 'KAMELEON_PLUGIN_PATH', plugin_dir_path(__FILE__) );
define( 'KAMELEON_PLUGIN_URL', plugin_dir_url(__FILE__) );


//importing files 
require_once(KAMELEON_PLUGIN_PATH . 'post-types/portfolio.php');
require_once(KAMELEON_PLUGIN_PATH . 'includes/options/sayen-options.php');

require_once(KAMELEON_PLUGIN_PATH . 'includes/dashboard/dash.php');
require_once(KAMELEON_PLUGIN_PATH . 'includes/handlers/ajax_handler.php');
require_once(KAMELEON_PLUGIN_PATH . 'includes/multi-post-thumbnails/multi-post-thumbnails.php');
require_once(KAMELEON_PLUGIN_PATH . 'includes/widgets/kamaleon-widget-bundle.php');
require_once(KAMELEON_PLUGIN_PATH. 'includes/fields/fields_bundle.php');


include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if(is_plugin_active('js_composer/js_composer.php')) {  
  require_once( KAMELEON_PLUGIN_PATH. 'includes/composer/sy-composer-param.php');
  require_once( KAMELEON_PLUGIN_PATH. 'includes/composer/sy-shortcodes-bundle.php');
  require_once( KAMELEON_PLUGIN_PATH. 'includes/composer/sy-composer.php');
  require_once(KAMELEON_PLUGIN_PATH . 'includes/composer/Ultimate_VC_Addons/Ultimate_VC_Addons.php');
}

//Contact Form 7 Designer
if(is_plugin_active('contact-form-7/wp-contact-form-7.php')){
  require_once( KAMELEON_PLUGIN_PATH. 'includes/cf7-designer/sy-cf7-designer.php');
}



//Enqueu Scripts and Styles
function kameleon_core_ressources_init(){
    if(is_admin()):     
      wp_enqueue_style( 'kmcore-style',KAMELEON_PLUGIN_URL.'assets/css/admin.css' );     
      wp_enqueue_script( 'kmcore-script', KAMELEON_PLUGIN_URL.'assets/js/script.js' , array( 'jquery' ));  
      wp_register_script('km-code-editor-script', KAMELEON_PLUGIN_URL.'assets/js/code-editor.js', array('jquery'), null, false);
      wp_enqueue_style( 'km-font-awsome-front', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array(), '4.6.3' );
      
      $plugin_uri_admin = array( 
        'ajax_handler' => admin_url( 'admin-ajax.php' ), 
        'customCSSValue'=> stripcslashes(base64_decode(kameleon_get_single_option('customCSS'))), 
        'customJSValue'=> stripcslashes(base64_decode(kameleon_get_single_option('customJS')))
        );
      wp_localize_script( 'kmcore-script', 'plugindir', $plugin_uri_admin );
      wp_localize_script( 'km-code-editor-script', 'custom', $plugin_uri_admin );
    endif;   
}
add_action('admin_enqueue_scripts', 'kameleon_core_ressources_init');

function kameleon_core_plugin_activated(){
      update_option('ultimate_css', 'enable');    update_option('ultimate_js', 'enable');
}
register_activation_hook( __FILE__, 'kameleon_core_plugin_activated' );


//Function to Reurn the Redux Options Slug
function kameleon_get_options_slug_plugin(){
  $opt_name = "kameleon";
  if(is_multisite()){
    $opt_name = "kameleon".get_current_blog_id();
  }
  return $opt_name;
}

//Function To Create A new or Update An Options
function kameleon_save_option($optionName, $optionValue){
   if(get_option($optionName) )
         update_option($optionName, $optionValue);       
    else {
      add_option($optionName, $optionValue);
      update_option($optionName, $optionValue);            
    }
}

//Function To Get Single Option Name
function kameleon_get_single_option($optionName){
  if(get_option(kameleon_get_options_slug_plugin().'-'.$optionName))    
   return get_option(kameleon_get_options_slug_plugin().'-'.$optionName);
 return '';
}


function kameleon_get_options_name_plugin(){
  $opt_name = "kameleon";
  if(is_multisite()){
    $opt_name = "kameleon".get_current_blog_id();
  }
  return get_option($opt_name);
}
//function to return headers type for shared things 
function kameleon_headers_type_plugin(){
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
    'header_v12' => 'hv12',
    'header_v13' => 'hv13',
    'header_v14' => 'hv14',
    'header_v15' => 'hv15',
    'h' => 'h',
  );  
}

function kameleon_headers_no_swa_plugin(){
  return array(
    'header_v8' ,
    'header_v9' ,
    'header_v10',
    'header_v11',
    'header_v12',
    'header_v13',
    'header_v14',
    'header_v15',
  );  
}

function kameleon_headers_side_side_plugin(){
  return array(
    'header_v8' ,
    'header_v9' 
  );  
}

function kameleon_headers_fullscreen_plugin(){
  return array(
    'header_v10' ,
    'header_v11' 
  );  
}

//Get Portfolio Categories Array
function kameleon_portfolio_cats_arr(){
  $categories = get_terms('km-folio-category', array( 'hide_empty' => 0 ));
  $categories_array = array();  
    foreach($categories as $category) {
      array_push($categories_array,$category->name);    
    }
  return $categories_array;
}


//Get Post Categories Array
function kameleon_post_cats_arr(){
  $testcategories = wp_list_categories('title_li=&echo=0&depth=1');
  $categories =get_categories(array( 'hide_empty' => '0' ));
  $categories_array = array();  
    foreach($categories as $category) {
      array_push($categories_array,$category->name);    
    }
  return $categories_array;
}


//Get Contact Form Styles
function kameleon_cf7_styles(){
  $kmcf7_styles = kameleon_get_single_option('kmcf7_styles');
  $cf7_styles = array('Default' => 'default');
 if(!empty($kmcf7_styles)){
    foreach($kmcf7_styles as $myStyleID => $myStyle): 
      if($myStyleID != ''){
        $cf7_styles[$myStyle['styleName']] = $myStyleID;
      }
    endforeach;                  
 }
  return $cf7_styles;
}

function kameleon_cf7_forms(){
  $cf7 = get_posts( 'post_type="wpcf7_contact_form"&numberposts=-1' );
  $contact_forms = array();
  if ( $cf7 ) {
    foreach ( $cf7 as $cform ) {
      $contact_forms[ $cform->post_title ] = $cform->ID;
      }
  } else 
     $contact_forms[ __( 'No contact forms found', 'kameleon' ) ] = 0;

  return $contact_forms;   
}


?>