<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============         VISUAL  COMPOSER  EDIT       ============== 
   ==                                                              ==
   ==                   removing / adding elements                 ==
\* ================================================================== */


/*----------------
    Disable Some of default elements
-----------------*/
vc_set_shortcodes_templates_dir( KAMELEON_PLUGIN_PATH.'includes/composer/vc_templates' );

//Remove WooCommerce elements
/*
function sy_vc_remove_woocommerce() {  
    if ( is_plugin_active('woocommerce/woocommerce.php' ) ) {
        vc_remove_element('woocommerce_cart');
        vc_remove_element('woocommerce_checkout');
        vc_remove_element('woocommerce_order_tracking');              
        vc_remove_element('woocommerce_my_account');       
        vc_remove_element('recent_products');       
        vc_remove_element('featured_products');       
        vc_remove_element('add_to_cart');       
        vc_remove_element('add_to_cart_url');       
        vc_remove_element('product_page');       
        vc_remove_element('product_categories');       
        vc_remove_element('sale_products');           
        vc_remove_element('product_attribute');       
        vc_remove_element('product_category');       
    }
}
add_action( 'vc_build_admin_page', 'sy_vc_remove_woocommerce', 11 );
add_action( 'vc_load_shortcode', 'sye_vc_remove_woocommerce', 11 );

//Remove Wordpress Widget Elements
vc_remove_element('vc_wp_search');       
vc_remove_element('vc_message');       
vc_remove_element('vc_widget_sidebar');       
vc_remove_element('vc_wp_meta');       
vc_remove_element('vc_wp_recentcomments');       
vc_remove_element('vc_wp_calendar');       
vc_remove_element('vc_wp_pages');       
vc_remove_element('vc_wp_tagcloud');       
vc_remove_element('vc_wp_custommenu');       
vc_remove_element('vc_wp_text');       
vc_remove_element('vc_wp_posts');       
vc_remove_element('vc_wp_categories');       
vc_remove_element('vc_wp_archives');       
vc_remove_element('vc_wp_rss');       
vc_remove_element('vc_facebook');       
vc_remove_element('vc_tweetmeme');       
vc_remove_element('vc_googleplus');       
vc_remove_element('vc_pinterest');       
vc_remove_element('vc_toggle');       
vc_remove_element('vc_tta_pageable');       
vc_remove_element('vc_posts_slider');       
vc_remove_element('vc_flickr');       
vc_remove_element('vc_round_chart');       
vc_remove_element('vc_pie');       
vc_remove_element('vc_line_chart');       
vc_remove_element('vc_btn');       
vc_remove_element('vc_cta');       
vc_remove_element('vc_icon');       
vc_remove_element('vc_media_grid');       
vc_remove_element('vc_masonry_grid');       
vc_remove_element('vc_masonry_media_grid');       
vc_remove_element('vc_empty_space');       
vc_remove_element('vc_images_carousel');       
vc_remove_element('vc_gallery');       
vc_remove_element('vc_text_separator'); 
vc_remove_element('vc_custom_heading');       
vc_remove_element('vc_separator');       
vc_remove_element('vc_progress_bar');       
vc_remove_element('rev_slider');       
vc_remove_element('vc_gmaps');       
vc_remove_element('vc_basic_grid');       
vc_remove_element('vc_raw_html');       
vc_remove_element('vc_raw_js');       
vc_remove_element('contact-form-7');    
*/

vc_map_update( 'vc_row', array(
     'name' => __( 'Add Row','kameleon')
) );




/*------------------------------------------------
                SKILLBAR SHORTCODE
------------------------------------------------*/
function sy_skillbar_shortcode() {
   vc_map( array(
      "name" => esc_html__( "Skill Bar", "kameleon" ),
      "base" => "sy_skillbar",
      
      "description" => esc_html__("A percentage bar defining a person skill with load effect", "kameleon"),     
      "class" => "",      
      "params" => array(
        
         array(
            "type" => "textfield",
            "heading" => esc_html__( "Skill Title", "kameleon" ),
            "param_name" => "skill",
            "value" => esc_html__( "Skill Title", "kameleon" ), 
            "admin_label" => true   
         ),

         array(
            "type" => "number",
            "heading" => esc_html__( "Skill Value (%)", "kameleon" ),
            "param_name" => "percent",
            "value" => 50,
            "admin_label" => true,   
         ),
         array(
            "type" => "number",
            "heading" => esc_html__( "Bar Height", "kameleon" ),
            "param_name" => "height",
            "value" => 5,
         ),
         array(
            "type" => "colorpicker",
            "heading" => esc_html__( "Bar Background Color", "kameleon" ),
            "param_name" => "bar_bg_color",
            "value" => '#f6f6f6', 
         ),

         array(
            "type" => "colorpicker",
            "heading" => esc_html__( "Bar Color", "kameleon" ),
            "param_name" => "bar_color",
            "value" => '#00AFD1', 
         ),
         array(
            "type" => "ult_param_heading",
            "param_name" => "sk_title_text_typography",
            "heading" => __("Title Font Settings","kameleon"),
            "value" => "",
            "group" => "Typography",
            'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
        ),
        array(
            "type" => "ultimate_google_fonts",
            "param_name" => "sk_title_font",
            "heading" => __("Font Family","kameleon"),
            "value" => "",
            "group" => "Typography"
        ),
        array(
            "type" => "ultimate_google_fonts_style",
            "param_name" => "sk_title_style",
            "heading" => __("Font Style","kameleon"),
            "value" => "",
            "group" => "Typography"
        ),
        array(
            "type" => "sy_fontsize",
            "param_name" => "sk_title_size",
            "group" => "Typography",                 
            "heading" => esc_html__( "Font Size", "kameleon" ),
            "defaults"=> array("font-size" => "17", "line-height" => "", "letter-spacing" => "",),
            'elements'  => array(
                __("Font Size","kameleon") => "font-size",
                __("Line Height","kameleon") => "line-height",
                __("Letter Spacing","kameleon") => "letter-spacing",                
            )
        ),  
         array(
            "type" => "colorpicker",
            "heading" => esc_html__( "Skill Color", "kameleon" ),
            "param_name" => "sk_title_color",
            "value" => '#333',
            "group" => 'Typography' 
         ),
 
        array(
            'type' => 'dropdown',
            'heading' => esc_html__("Bar Style",'kameleon'),
            'param_name' => 'style',
            'value' => array(
                esc_html__("Style 1",'kameleon') => 'style_1',
                esc_html__("Style 2",'kameleon') => 'style_2',
                esc_html__("Style 3",'kameleon') => 'style_3',
            ),      
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__("Bar Strips",'kameleon'),
            'param_name' => 'strips',
            'value' => array(
                esc_html__("None",'kameleon') => 'none',
                esc_html__("Normal Strips",'kameleon') => 'normal',
                esc_html__("Moving Strips",'kameleon') => 'moving',
            ),      
        ),
         array(
            "type" => "number",          
            "heading" => esc_html__( "Bar Border Radius", "kameleon" ),
            "param_name" => "radius",
            "value" => 0,
         ),

      )
   


   ) );
}
add_action( 'vc_before_init', 'sy_skillbar_shortcode' );


/*------------------------------------------------
                SOCIAL SHARE SHORTCODE
------------------------------------------------*/
function sy_socialshare_shortcode() {
   vc_map( array(
      "name" => esc_html__( "Social Share", "kameleon" ),
      
      "base" => "sy_socialshare",
      "description" => esc_html__("Social share links with effects", "kameleon"),   
      "class" => "",      
      "params" => array(
        array(
            "type" => "number",          
            "heading" => esc_html__( "Icon Size", "kameleon" ),
            "param_name" => "ss_size",
            "value" => 26,
        ),
        array(
            "type" => "number",          
            "heading" => esc_html__( "Backgound Size", "kameleon" ),
            "param_name" => "ss_backsize",
            "value" => 35,
        ),
        array(
            "type" => "number",          
            "heading" => esc_html__( "Icon Margins", "kameleon" ),
            "param_name" => "ss_margins",
            "value" => 5,
        ),
        array(
            "type" => "number",          
            "heading" => esc_html__( "Border Radius", "kameleon" ),
            "param_name" => "ss_borderradius",
            "value" => 0,
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__("Icon Style",'kameleon'),
            'param_name' => 'ss_style',
            'value' => array(
                esc_html__("Hover Color Scheme",'kameleon') => 'hoverColorScheme',
                esc_html__("Hover Background Scheme",'kameleon') => 'hoverBackScheme',
                esc_html__("Show From Background Bottom",'kameleon') => 'hoverShowBottom',
                esc_html__("Show From Background Left",'kameleon') => 'hoverShowLeft',
                esc_html__("Show From Background Top",'kameleon') => 'hoverShowTop',
                esc_html__("Show From Background Right",'kameleon') => 'hoverShowRight',
                esc_html__("Show From Background Scaled",'kameleon') => 'hoverShowScale',
                esc_html__("Show From Background Tada",'kameleon') => 'hoverShowTada',
            ),
        ), 
        array(
            "type" => "colorpicker",
            "heading" => esc_html__( "Icon Backgound Color", "kameleon" ),
            "description" => esc_html__( "Only for some effects", "kameleon" ),            
            "param_name" => "ss_backcolor",
            "value" => 'transparent',
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__( "Icon Color", "kameleon" ),
            "description" => esc_html__( "Only for some effects", "kameleon" ),            
            "param_name" => "ss_iconcolor",
            "value" => '#888',
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__( "Icon Hover Color", "kameleon" ),
            "description" => esc_html__( "Only for some effects", "kameleon" ),            
            "param_name" => "ss_iconhovercolor",
            "value" => '#fff',
        ),
         array(
            "type" => "textfield",
            "heading" => esc_html__( "Link to Share", "kameleon" ),
            "description" => esc_html__( "Leave empty to share the actual page", "kameleon" ),
            "param_name" => "ss_link",
            "value" => '',
        ),
         array(
            'type' => 'sy_multiple_select',
            'heading' => esc_html__( 'Social Sites', 'kameleon' ),                
            'param_name' => 'ss_socialarray',
            'values' => array('facebook','twitter','google','linkedin','pinterest','reddit')
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__("Icon Alignement",'kameleon'),
            'param_name' => 'ss_align',
            'value' => array(
                esc_html__("Left",'kameleon') => 'left',
                esc_html__("Center",'kameleon') => 'center',
                esc_html__("Right",'kameleon') => 'right',
            ),
        ), 
        
     )
    ));
}

add_action( 'vc_before_init', 'sy_socialshare_shortcode' );

/*------------------------------------------------
                SOCIAL FIND US SHORTCODE
------------------------------------------------*/
function sy_socialfindus_shortcode() {
   vc_map( array(
      "name" => esc_html__( "Social Find Us", "kameleon" ),      
      "base" => "sy_socialfindus",
      "description" => esc_html__("Social findus links with effects", "kameleon"),   
      "class" => "",      
      "params" => array(
        array(
            "type" => "number",          
            "heading" => esc_html__( "Icon Size", "kameleon" ),
            "param_name" => "sf_size",
            "value" => 26,
        ),
        array(
            "type" => "number",          
            "heading" => esc_html__( "Backgound Size", "kameleon" ),
            "param_name" => "sf_backsize",
            "value" => 35,
        ),
        array(
            "type" => "number",          
            "heading" => esc_html__( "Icon Margins", "kameleon" ),
            "param_name" => "sf_margins",
            "value" => 5,
        ),
        array(
            "type" => "number",          
            "heading" => esc_html__( "Border Radius", "kameleon" ),
            "param_name" => "sf_borderradius",
            "value" => 0,
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__("Icon Style",'kameleon'),
            'param_name' => 'sf_style',
            'value' => array(
                esc_html__("Hover Color Scheme",'kameleon') => 'hoverColorScheme',
                esc_html__("Hover Background Scheme",'kameleon') => 'hoverBackScheme',
                esc_html__("Show From Background Bottom",'kameleon') => 'hoverShowBottom',
                esc_html__("Show From Background Left",'kameleon') => 'hoverShowLeft',
                esc_html__("Show From Background Top",'kameleon') => 'hoverShowTop',
                esc_html__("Show From Background Right",'kameleon') => 'hoverShowRight',
                esc_html__("Show From Background Scaled",'kameleon') => 'hoverShowScale',
                esc_html__("Show From Background Tada",'kameleon') => 'hoverShowTada',
            ),
        ), 
        array(
            "type" => "colorpicker",
            "heading" => esc_html__( "Icon Backgound Color", "kameleon" ),
            "description" => esc_html__( "Only for some effects", "kameleon" ),            
            "param_name" => "sf_backcolor",
            "value" => 'transparent',
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__( "Icon Color", "kameleon" ),
            "description" => esc_html__( "Only for some effects", "kameleon" ),            
            "param_name" => "sf_iconcolor",
            "value" => '#888',
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__( "Icon Hover Color", "kameleon" ),
            "description" => esc_html__( "Only for some effects", "kameleon" ),            
            "param_name" => "sf_iconhovercolor",
            "value" => '#fff',
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__("Icon Alignement",'kameleon'),
            'param_name' => 'sf_align',
            'value' => array(
                esc_html__("Left",'kameleon') => 'left',
                esc_html__("Center",'kameleon') => 'center',
                esc_html__("Right",'kameleon') => 'right',
            ),
        ), 
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Facebook Link", "kameleon" ),
            "param_name" => "sf_facebook",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Twitter Link", "kameleon" ),
            "param_name" => "sf_twitter",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Instagram Link", "kameleon" ),
            "param_name" => "sf_instagram",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "YouTube Link", "kameleon" ),
            "param_name" => "sf_youtube",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "LinkedIn Link", "kameleon" ),
            "param_name" => "sf_linkedin",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Google + Link", "kameleon" ),
            "param_name" => "sf_google",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Behance Link", "kameleon" ),
            "param_name" => "sf_behance",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Vimeo Link", "kameleon" ),
            "param_name" => "sf_vimeo",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Flickr Link", "kameleon" ),
            "param_name" => "sf_flickr",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Skype Link", "kameleon" ),
            "param_name" => "sf_skype",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Pinterest Link", "kameleon" ),
            "param_name" => "sf_pinterest",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Dribbble Link", "kameleon" ),
            "param_name" => "sf_dribbble",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Twitch Link", "kameleon" ),
            "param_name" => "sf_twitch",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "SoundCloud Link", "kameleon" ),
            "param_name" => "sf_soundcloud",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "GitHub Link", "kameleon" ),
            "param_name" => "sf_github",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Vine Link", "kameleon" ),
            "param_name" => "sf_vine",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Tumblr Link", "kameleon" ),
            "param_name" => "sf_tumblr",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "FourSquare Link", "kameleon" ),
            "param_name" => "sf_foursquare",           
            "group" => "Social Links" 
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "RSS Link", "kameleon" ),
            "param_name" => "sf_rss",           
            "group" => "Social Links" 
        ),
        
     )
    ));
}

add_action( 'vc_before_init', 'sy_socialfindus_shortcode' );
/*------------------------------------------------
                ALERTBOX SHORTCODE
------------------------------------------------*/
function sy_alertbox_shortcode() {
   vc_map( array(
      "name" => esc_html__( "Alert Box", "kameleon" ),
      
      "base" => "sy_alertbox",
      "description" => esc_html__("Text alert box representing a type of message", "kameleon"),   
      "class" => "",      
      "params" => array(
        
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Alert Title", "kameleon" ),
            "param_name" => "title_text",
            "value" => esc_html__( "Title", "kameleon" ),
            "group" => "Box"  ,
            "admin_label" => true   
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__( "Alert Message", "kameleon" ),
            "param_name" => "message_text",
            "value" => esc_html__( "Message", "kameleon" ), 
            "group" => "Box" ,
            "admin_label" => true   
        ),
        array(
            "type" => "icon_manager",       
            "heading" => esc_html__("Select Icon ","kameleon"),
            "param_name" => "icon",
            "value" => "",
            "group" => "Box" ,
            "description" => esc_html__("Click and select icon of your choice. If you can't find the one that suits for your purpose","kameleon").", ".esc_html__("you can","kameleon")." <a href='admin.php?page=font-icon-Manager' target='_blank'>".esc_html__("add new here","kameleon")."</a>.",
        ),

        array(
            "type" => "colorpicker",
            "heading" => esc_html__( "Text Color", "kameleon" ),
            "param_name" => "color",
            "value" => '',
            "group" => "Box" 
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__( "Box Background Color", "kameleon" ),
            "param_name" => "box_bg_color",
            "value" => '', 
            "group" => "Box" 
        ),

        array(
            "type" => "number",          
            "heading" => esc_html__( "Border Thickness", "kameleon" ),
            "param_name" => "border_thickness",
            "value" => 0,
            "group" => "Box" 
        ),

        array(
            "type" => "colorpicker",
            "heading" => esc_html__( "Border Color", "kameleon" ),
            "param_name" => "border_color",
            "value" => '', 
            "group" => "Box" 
        ),

        array(
            "type" => "number",          
            "heading" => esc_html__( "Border Radius (px)", "kameleon" ),
            "param_name" => "radius",
            "value" => 0,
            "group" => "Box" 
        ),


        array(
            "type" => "sy_distance",
            "distance" => "margin",
            "heading" => "Element Margins",
            "param_name" => "alb_margin",
            "positions" => array(
                esc_html__("Top","kameleon") => "top",
                esc_html__("Bottom","kameleon") => "bottom"
            ),
            "group" => "Margins"
        ),
    )

    ));       
}
add_action( 'vc_before_init', 'sy_alertbox_shortcode' );

/*------------------------------------------------
                VIDEO MODAL SHORTCODE
------------------------------------------------*/
function sy_videomodal_shortcode() {
   vc_map( array(
      "name" => esc_html__( "Video Modal", "kameleon" ),
      
      "description" => esc_html__("Modal window with iframe video", "kameleon"),        
      "base" => "sy_videomodal",      
      "params" => array(
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Video Link", "kameleon" ),
            "param_name" => "modalv_iframe",
            "group" => "General"   
        ),
        array(
            "type" => "number",          
            "heading" => esc_html__( "Video Width", "kameleon" ),
            "param_name" => "modalv_iframew",
            "value" => 750,
            "group" => "General"     
        ),
        array(
            "type" => "number",          
            "heading" => esc_html__( "Video Height", "kameleon" ),
            "param_name" => "modalv_iframeh",
            "value" => 450,
            "group" => "General"     
        ),        
        array(
            'type' => 'dropdown',
            'heading' => esc_html__("Modal Window Effect",'kameleon'),
            'param_name' => 'modalv_effect',
            'value' => array(
                esc_html__("Fade in / Scale",'kameleon') => 'km-effect-1',
                esc_html__("Slide in (right)",'kameleon') => 'km-effect-2',
                esc_html__("Slide in (bottom)",'kameleon') => 'km-effect-3',
                esc_html__("Newspaper",'kameleon') => 'km-effect-4',
                esc_html__("Fall",'kameleon') => 'km-effect-5',
                esc_html__("Side Fall",'kameleon') => 'km-effect-6',
                esc_html__("Sticky Up",'kameleon') => 'km-effect-7',
                esc_html__("3D Flip (horizontal)",'kameleon') => 'km-effect-8',
                esc_html__("3D Flip (vertical)",'kameleon') => 'km-effect-9',
                esc_html__("3D Sign",'kameleon') => 'km-effect-10',
                esc_html__("Super Scaled",'kameleon') => 'km-effect-11',
                esc_html__("Just Me",'kameleon') => 'km-effect-12',
                esc_html__("3D Slit",'kameleon') => 'km-effect-13',
                esc_html__("3D Rotate Bottom",'kameleon') => 'km-effect-14',
                esc_html__("3D Rotate In Left",'kameleon') => 'km-effect-15',
                esc_html__("Blur",'kameleon') => 'km-effect-16'            
            ),
            "group" => "General"       
        ), 
        array(
            "type" => "colorpicker",
            "heading" => esc_html__( "Overlay Background Color", "kameleon" ),
            "param_name" => "modalv_overlay_bg",
            "value" => 'rgba(0,0,0,0.7)', 
            "group" => "General"     
        ), 
        array(
            "type" => "colorpicker",
            "heading" => esc_html__( "Close Button Color", "kameleon" ),
            "param_name" => "modalv_close_color",
            "value" => '#eee', 
            "group" => "General"     
        ), 
        array(
            "type" => "colorpicker",
            "heading" => esc_html__( "Close Button Background", "kameleon" ),
            "param_name" => "modalv_close_bg",
            "value" => '#111', 
            "group" => "General"     
        ), 
        
        array(
            "type" => "attach_image",
             "group" => "Image Trigger", 
            "heading" => esc_html__( "Picture", "kameleon" ),
            "param_name" => "modalv_tgr_image"
        ),
        array(
            "type" => "dropdown", 
             "group" => "Image Trigger",            
            "heading" => esc_html__("Alignement ", "kameleon"),
            "param_name" => "modalv_tgr_imagealign",
            "value" => array(
                esc_html__("Left","kameleon") => 'left',
                esc_html__("Center","kameleon") => 'center',
                esc_html__("Right","kameleon") => 'right',
            )
        ),
        array(
            "type" => "number",          
            "heading" => esc_html__( "Image Width", "kameleon" ),
            "param_name" => "modalv_tgr_imagew",            
            "group" => "Image Trigger"     
        ),  
        array(
            "type" => "number",          
            "heading" => esc_html__( "Image Height", "kameleon" ),
            "param_name" => "modalv_tgr_imageh",            
            "group" => "Image Trigger"     
        ),  

        array(
            "type" => "sy_distance",
            "distance" => "margin",
            "heading" => "Image Margins",
            "param_name" => "modalv_tgr_imagemargin",
            'group' => 'Image Trigger',
            "positions" => array(
                __("Top","kameleon") => "top",
                __("Bottom","kameleon") => "bottom",
            )
        ),   
     )

  ));
}
add_action( 'vc_before_init', 'sy_videomodal_shortcode' );


/*------------------------------------------------
                MODAL WINDOW SHORTCODE
------------------------------------------------*/
function sy_modalwindow_shortcode() {
   vc_map( array(
      "name" => esc_html__( "Modal Window", "kameleon" ),
      
      "description" => esc_html__("A hidden window triggered when clicking a button!", "kameleon"),        
      "base" => "sy_modalwindow",      
      "params" => array(
        
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Button Text", "kameleon" ),
            "param_name" => "trigger_b_text",
            "value" => esc_html__( "Open Modal", "kameleon" ),           
            "group" => "Trigger Button"   
        ),

        array(
            'type' => 'dropdown',
            'heading' => esc_html__("Button Size",'kameleon'),
            'param_name' => 'trigger_b_size',
            'value' => array(
                esc_html__("Normal",'kameleon') => 'normal',
                esc_html__("Small",'kameleon') => 'small',
                esc_html__("Big",'kameleon') => 'big',
            ),
            "group" => "Trigger Button"     
        ),

        array(
            "type" => "colorpicker",
            "heading" => esc_html__( "Text Color", "kameleon" ),
            "param_name" => "trigger_b_color",
            "value" => '#fff', 
            "group" => "Trigger Button"     
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__( "Background Color", "kameleon" ),
            "param_name" => "trigger_b_bg",
            "value" => '#222', 
            "group" => "Trigger Button"     
        ), 

        array(
            "type" => "number",          
            "heading" => esc_html__( "Font Size (px)", "kameleon" ),
            "param_name" => "trigger_b_fs",
            "value" => 16,
            "group" => "Trigger Button"     
        ),

        array(
            "type" => "number",          
            "heading" => esc_html__( "Border Thickness (px)", "kameleon" ),
            "param_name" => "trigger_b_border_thickness",
            "value" => 0,
            "group" => "Trigger Button"     
        ),

        array(
            "type" => "colorpicker",          
            "heading" => esc_html__( "Border Color", "kameleon" ),
            "param_name" => "trigger_b_border_color",
            "value" => '',
            "group" => "Trigger Button"     
        ),

        array(
            'type' => 'dropdown',
            'heading' => esc_html__("Button Position",'kameleon'),
            'param_name' => 'trigger_position',
            'value' => array(
                esc_html__("Left",'kameleon') => 'left',
                esc_html__("Center",'kameleon') => 'center',
                esc_html__("Right",'kameleon') => 'right',
            ),
            "group" => "Trigger Button"     
        ),
        
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Window Title", "kameleon" ),
            "param_name" => "title",
            "value" => esc_html__( "Window Title", "kameleon" ), 
            "admin_label" => true,
            "group" => "Modal Window"   
        ),

        array(
            "type" => "textarea_html",
            "heading" => esc_html__( "Content", "kameleon" ),
            "param_name" => "content",
            "value" => "",           
            "group" => "Modal Window",
            "edit_field_class" => "ult_hide_editor_fullscreen vc_col-xs-12 vc_column wpb_el_type_textarea_html vc_wrapper-param-type-textarea_html vc_shortcode-param",  
        ),
        
        array(
            "type" => "colorpicker",          
            "heading" => esc_html__( "Backgound Color", "kameleon" ),
            "param_name" => "modal_bg_color",
            "value" => "",
            "group" => "Modal Window"       
        ),
        array(
            "type" => "colorpicker",          
            "heading" => esc_html__( "Overlay Backgound Color", "kameleon" ),
            "param_name" => "modal_overlay_bg",
            "value" => "rgba(0,0,0,0.7)",
            "group" => "Modal Window"       
        ),

        array(
            "type" => "colorpicker",          
            "heading" => esc_html__( "Text Color", "kameleon" ),
            "param_name" => "color",
            "value" => '#fff',
            "group" => "Modal Window"       
        ),

         array(
            'type' => 'dropdown',
            'heading' => esc_html__("Modal Window Effect",'kameleon'),
            'param_name' => 'effect',
            'value' => array(
                esc_html__("Fade in / Scale",'kameleon') => 'km-effect-1',
                esc_html__("Slide in (right)",'kameleon') => 'km-effect-2',
                esc_html__("Slide in (bottom)",'kameleon') => 'km-effect-3',
                esc_html__("Newspaper",'kameleon') => 'km-effect-4',
                esc_html__("Fall",'kameleon') => 'km-effect-5',
                esc_html__("Side Fall",'kameleon') => 'km-effect-6',
                esc_html__("Sticky Up",'kameleon') => 'km-effect-7',
                esc_html__("3D Flip (horizontal)",'kameleon') => 'km-effect-8',
                esc_html__("3D Flip (vertical)",'kameleon') => 'km-effect-9',
                esc_html__("3D Sign",'kameleon') => 'km-effect-10',
                esc_html__("Super Scaled",'kameleon') => 'km-effect-11',
                esc_html__("Just Me",'kameleon') => 'km-effect-12',
                esc_html__("3D Slit",'kameleon') => 'km-effect-13',
                esc_html__("3D Rotate Bottom",'kameleon') => 'km-effect-14',
                esc_html__("3D Rotate In Left",'kameleon') => 'km-effect-15',
                esc_html__("Blur",'kameleon') => 'km-effect-16'            
            ),
            "group" => "Modal Window"       
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Close Button Text", "kameleon" ),
            "param_name" => "close_text",           
            "value" => esc_html__( "Close Me !", "kameleon" ), 
            "group" => "Modal Window"   
        ),  


        array(
            "type" => "sy_distance",
            "distance" => "margin",
            "heading" => "Margins",
            "param_name" => "trigger_b_margin",
            'group' => 'Button Margins',
            "positions" => array(
                __("Top","kameleon") => "top",
                __("Bottom","kameleon") => "bottom",
                __("Left","kameleon") => "left",
                __("Right","kameleon") => "right",
            )
        ),
      )
    )
   );
}

add_action( 'vc_before_init', 'sy_modalwindow_shortcode' );

/*------------------------------------------------
                POST MASONRY SHORTCODE
------------------------------------------------*/

function sy_postmasonry_shortcode() {
    vc_map( array(
        "name" => esc_html__( "Post Masonry", "kameleon" ),
        
        "description" => esc_html__("Blog Posts list in Masonry Layout with 15 Hover effect style", "kameleon"),         
        "base" => "sy_postmasonry",      
        "params" => array(
            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Post Mansory Type",'kameleon'),                
                'param_name' => 'pg_mansory_type',
                'value' => array(                    
                    esc_html__("List",'kameleon') => 'list',
                    esc_html__("Single",'kameleon')  => 'single'
                )            
            ),
             array(
                "type" => "sy_search",          
                "heading" => esc_html__( "Search Post By Title", "kameleon" ),                
                "param_name" => "pg_mansorysingle_id",                
                "item_type" => "post",                
                "dependency" => Array("element" => "pg_mansory_type","value" => array("single")),                
            ),

            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Post Display Style",'kameleon'),
                'param_name' => 'style',
                'value' => array(
                    esc_html__("Style 1",'kameleon') => 'syp-effect-lily',
                    esc_html__("Style 2",'kameleon') => 'syp-effect-sadie',
                    esc_html__("Style 3",'kameleon') => 'syp-effect-layla',
                    esc_html__("Style 4",'kameleon') => 'syp-effect-oscar',    
                    esc_html__("Style 5",'kameleon') => 'syp-effect-marley',
                    esc_html__("Style 6",'kameleon') => 'syp-effect-ruby',    
                    esc_html__("Style 7",'kameleon') => 'syp-effect-roxy',
                    esc_html__("Style 8",'kameleon') => 'syp-effect-bubba',
                    esc_html__("Style 9",'kameleon') => 'syp-effect-dexter',
                    esc_html__("Style 10",'kameleon') => 'syp-effect-sarah',
                    esc_html__("Style 11",'kameleon') => 'syp-effect-chico',
                    esc_html__("Style 12",'kameleon') => 'syp-effect-milo',
                    esc_html__("Style 13",'kameleon') => 'syp-effect-jazz',
                    esc_html__("Style 14",'kameleon') => 'syp-effect-lexi',
                    esc_html__("Style 15",'kameleon') => 'syp-effect-apollo'
                )            
            ),
            
            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Columns Number",'kameleon'),
                'param_name' => 'columns_number',
                 "dependency" => Array("element" => "pg_mansory_type","value" => array("list")), 
                'value' => array(                    
                    esc_html__("4 Columns",'kameleon') => 'syp-item-4',
                    esc_html__("1 Column",'kameleon')  => 'syp-item-1',
                    esc_html__("2 Columns",'kameleon') => 'syp-item-2',
                    esc_html__("3 Columns",'kameleon') => 'syp-item-3',
                    esc_html__("5 Columns",'kameleon') => 'syp-item-5'
                )            
            ),

            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Thumbnail Size",'kameleon'),
                'param_name' => 'pg_masonry_thumbnail_size',
                'value' => array(
                    esc_html__("Full Size",'kameleon') => 'full',                  
                    esc_html__("Small Thumbnail",'kameleon') => 'kameleon-small-thumbnail',                  
                    esc_html__("Large Image",'kameleon') => 'kameleon-large-thumbnail',                  
                    esc_html__("X Large Image",'kameleon') => 'kameleon-x-large-thumbnail',                  
                )            
            ),
            array(
                "type" => "number",          
                "heading" => esc_html__( "Number of Posts to Show", "kameleon" ),
                "param_name" => "post_number",
                 "dependency" => Array("element" => "pg_mansory_type","value" => array("list")), 
                "value" => 8
            ),
            array(
                "type" => "dropdown",            
                "heading" => esc_html__("Enable Gutter", "kameleon"),
                "param_name" => "gutter",
                "value" => array(
                    esc_html__("No","kameleon") => 'false',
                    esc_html__("Yes","kameleon") => 'true',
                )
            ),
            array(
                "type" => "dropdown",  
                "multiple" => 1,        
                "heading" => esc_html__( "Sort Order : ", "kameleon" ),
                'group' => 'Query Options',
                "param_name" => "pg_mansory_order",
                "dependency" => Array("element" => "pg_mansory_type","value" => array("list")),  
                "default" => 'DESC',
                "value" => array(
                    esc_html__("Descending","kameleon") => 'DESC',
                    esc_html__("Ascending","kameleon") => 'ASC',
                )
            ),

            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Order by', 'kameleon' ),
                'group' => 'Query Options',
                'param_name' => 'pg_mansory_order_by',
                "dependency" => Array("element" => "pg_mansory_type","value" => array("list")),  
                'value' => array(
                    esc_html__( 'Date', 'kameleon' ) => 'date',
                    esc_html__( 'Order by post ID', 'kameleon' ) => 'ID',
                    esc_html__( 'Author', 'kameleon' ) => 'author',
                    esc_html__( 'Title', 'kameleon' ) => 'title',
                    esc_html__( 'Number of comments', 'kameleon' ) => 'comment_count'                   
                )               
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Display from specific Categories', 'kameleon' ),
                'group' => 'Query Options',
                'param_name' => 'pg_mansory_categories_enabled',
                "dependency" => Array("element" => "pg_mansory_type","value" => array("list")),  
                'value' => array(
                    esc_html__( 'No', 'kameleon' ) => 'off',
                    esc_html__( 'Yes', 'kameleon' ) => 'on',                  
                )               
            ),

            array(
                'type' => 'sy_multiple_select',
                'heading' => esc_html__( 'Choose Categories', 'kameleon' ),
                'group' => 'Query Options',
                'param_name' => 'pg_mansory_categories',
                 "dependency" => Array("element" => "pg_mansory_categories_enabled","value" => 'on'),  
                'values' => kameleon_post_cats_arr()
            ),
       
        )
    ));
} 
add_action( 'vc_before_init', 'sy_postmasonry_shortcode' );

/*------------------------------------------------
            PORTFOLIO AJAX SHORTCODE
------------------------------------------------*/
function sy_portfolioajax_shortcode() {
    vc_map( array(
        "name" => esc_html__( "Ajax Portfolio", "kameleon" ),
        "description" => esc_html__("Portfolios list in Masonry Layout with 15 Hover effect style", "kameleon"), 
        
        "base" => "sy_portfolioajax",      
        "params" => array(
            
            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Portfolio Mansory Type",'kameleon'),                
                'param_name' => 'paj_type',
                'value' => array(                    
                    esc_html__("List",'kameleon') => 'list',
                    esc_html__("Single",'kameleon')  => 'single'
                )            
            ),
            array(
                "type" => "sy_search",          
                "heading" => esc_html__( "Search Portfolio By Title", "kameleon" ),                
                "param_name" => "paj_single_id",                
                "item_type" => "portfolio",                
                "dependency" => Array("element" => "paj_type","value" => array("single")),                
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Layout Style",'kameleon'),
                'param_name' => 'paj_style',
                'value' => array(
                    esc_html__("Style 1",'kameleon') => 'style1',                  
                    esc_html__("Style 2",'kameleon') => 'style2',                  
                    esc_html__("Style 3",'kameleon') => 'style3',                  
                )            
            ),

            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Thumbnail Size",'kameleon'),
                'param_name' => 'paj_thumbnail_size',
                'value' => array(
                    esc_html__("Full Size",'kameleon') => 'full',                  
                    esc_html__("Small Thumbnail",'kameleon') => 'kameleon-small-thumbnail',                  
                    esc_html__("Large Image",'kameleon') => 'kameleon-large-thumbnail',                  
                    esc_html__("X Large Image",'kameleon') => 'kameleon-x-large-thumbnail',                  
                )            
            ),
             array(
                "type" => "colorpicker",
                "heading" => esc_html__( "Item Overlay Backgound", "kameleon" ),
                "param_name" => "paj_overlay_bg",
                "value" => 'rgba(0,0,0,.9)', 
            ),
            array(
                "type" => "colorpicker",
                "heading" => esc_html__( "Item Text Color", "kameleon" ),
                "param_name" => "paj_overlay_color",
                "value" => '#fff', 
            ),
            
            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Columns Number",'kameleon'),
                'param_name' => 'paj_columns_number',
                 "dependency" => Array("element" => "paj_type","value" => array("list")), 
                'value' => array(                    
                    esc_html__("4 Columns",'kameleon') => 'syp-item-4',
                    esc_html__("1 Column",'kameleon')  => 'syp-item-1',
                    esc_html__("2 Columns",'kameleon') => 'syp-item-2',
                    esc_html__("3 Columns",'kameleon') => 'syp-item-3',
                    esc_html__("5 Columns",'kameleon') => 'syp-item-5'
                )            
            ),

            array(
                "type" => "number",          
                "heading" => esc_html__( "Number of Portfolios to Show", "kameleon" ),
                "param_name" => "paj_number",
                 "dependency" => Array("element" => "paj_type","value" => array("list")), 
                "value" => 8
            ),
            array(
                "type" => "dropdown",            
                "heading" => esc_html__("Enable Gutter", "kameleon"),
                "param_name" => "paj_gutter",
                "value" => array(
                    esc_html__("No","kameleon") => 'false',
                    esc_html__("Yes","kameleon") => 'true',
                )
            ),
           
            
            array(
                "type" => "dropdown",  
                "heading" => esc_html__( "Loader Style", "kameleon" ),
                "param_name" => "paj_loader_style",
                "value" => array(                    
                    'Style 1' => 'style1', 
                    'Style 2' => 'style2', 
                    'Style 3' => 'style3', 
                    'Style 4' => 'style4', 
                    'Style 5' => 'style5',                  
                    'Style 6' => 'style6',                  
                    'Style 7' => 'style7',                  
                    'Style 8' => 'style8', 
               )
            ),
            
            array(
                "type" => "colorpicker",
                "heading" => esc_html__( "Loader Color", "kameleon" ),
                "param_name" => "paj_loader_color",
                "value" => '#888', 
            ),
            array(
                "type" => "dropdown",  
                "heading" => esc_html__( "Modal Window Show Effect", "kameleon" ),
                "param_name" => "paj_modalwindow_effect",
                "value" => array(                    
                    esc_html__("Center Scale Small","kameleon") => "scalecentersmall",
                    esc_html__("Radius","kameleon") => "radius",
                    esc_html__("Show From Left","kameleon") => "leftshow",
                    esc_html__("Show From Right","kameleon") => "rightshow",
                    esc_html__("Show From Top","kameleon") => "topshow",
                    esc_html__("Show From Bottom","kameleon") => "bottomshow",
                    esc_html__("Scale From Bottom","kameleon") => "scalebottom",
                    esc_html__("Scale From Top","kameleon") => "scaletop",
                    esc_html__("Center Scale","kameleon") => "scalecenter",
                    esc_html__("Center Scale Radius","kameleon") => "scalecenterradius",
                    esc_html__("Show From Top Left Corner","kameleon") => "topleftcorner",
                    esc_html__("Show From Bottom Left Corner","kameleon") => "bottomleftcorner",
                    esc_html__("Show From Top Right Corner","kameleon") => "toprightcorner",
                    esc_html__("Show From Bottom Right Corner","kameleon") => "bottomrightcorner"

               )
            ),

            array(
                "type" => "dropdown",  
                "multiple" => 1,        
                "heading" => esc_html__( "Sort Order : ", "kameleon" ),
                'group' => 'Query Options',
                "param_name" => "paj_order",
                "dependency" => Array("element" => "paj_type","value" => array("list")),  
                "default" => 'DESC',
                "value" => array(
                    esc_html__("Descending","kameleon") => 'DESC',
                    esc_html__("Ascending","kameleon") => 'ASC',
                )
            ),

            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Order by', 'kameleon' ),
                'group' => 'Query Options',
                'param_name' => 'paj_order_by',
                "dependency" => Array("element" => "paj_type","value" => array("list")),  
                'value' => array(
                    esc_html__( 'Date', 'kameleon' ) => 'date',
                    esc_html__( 'Order by post ID', 'kameleon' ) => 'ID',
                    esc_html__( 'Author', 'kameleon' ) => 'author',
                    esc_html__( 'Title', 'kameleon' ) => 'title',
                    esc_html__( 'Number of comments', 'kameleon' ) => 'comment_count'                   
                )               
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Display from specific Categories', 'kameleon' ),
                'group' => 'Query Options',
                'param_name' => 'paj_categories_enabled',
                "dependency" => Array("element" => "paj_type","value" => array("list")),  
                'value' => array(
                    esc_html__( 'No', 'kameleon' ) => 'off',
                    esc_html__( 'Yes', 'kameleon' ) => 'on',                  
                )               
            ),

            array(
                'type' => 'sy_multiple_select',
                'heading' => esc_html__( 'Choose Categories', 'kameleon' ),
                'group' => 'Query Options',
                'param_name' => 'paj_categories',
                 "dependency" => Array("element" => "paj_categories_enabled","value" => 'on'),  
                'values' => kameleon_portfolio_cats_arr()
            ),

            //filter Styling
            array(
                "type" => "dropdown",            
                "heading" => esc_html__("Enable Portfolio Filter", "kameleon"),
                "param_name" => "paj_filter_active",
                'group' => 'Filter Section',
                "value" => array(
                    esc_html__("Yes","kameleon") => 'true',
                    esc_html__("No","kameleon") => 'false',
                ),
                "dependency" => Array("element" => "paj_type","value" => array("list")),          
                
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Filter Style', 'kameleon' ),
                'group' => 'Filter Section',
                'param_name' => 'paj_fili_style',
                "dependency" => Array("element" => "paj_filter_active","value" => array("true")),                          
                'value' => array(
                    esc_html__( 'Style 3','kameleon') => 'style3',
                    esc_html__( 'Style 1','kameleon') => 'style1',
                    esc_html__( 'Style 2','kameleon') => 'style2',
                    esc_html__( 'Style 4','kameleon') => 'style4',
                    esc_html__( 'Style 5','kameleon') => 'style5',
                )               
            ),
            array(
                "type" => "number",
                'group' => 'Filter Section',
                "dependency" => Array("element" => "paj_filter_active","value" => array("true")),                                          
                "value" => 13,
                "heading" => esc_html__( "Link Font Size", "kameleon" ),                             
                "param_name" => "paj_fili_size"
            ), 
            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Filter Alignement', 'kameleon' ),
                'group' => 'Filter Section',
                'param_name' => 'paj_fili_align',
                "dependency" => Array("element" => "paj_filter_active","value" => array("true")),                          
                'value' => array(
                    esc_html__( 'Center','kameleon') => 'center',
                    esc_html__( 'Left','kameleon') => 'left',
                    esc_html__( 'Right','kameleon') => 'right',                  
                )               
            ),
            
            array(
                "type" => "number",
                'group' => 'Filter Section',
                "dependency" => Array("element" => "paj_filter_active","value" => array("true")),                                          
                "value" => 34,
                "heading" => esc_html__( "Link Height", "kameleon" ),                            
                "param_name" => "paj_fili_height"
            ), 
            array(
                "type" => "number",
                'group' => 'Filter Section',
                "dependency" => Array("element" => "paj_filter_active","value" => array("true")),                                          
                "value" => 0,
                "min" => 0,
                "max" => 3,
                "heading" => esc_html__( "Font Spacing", "kameleon" ),                           
                "param_name" => "paj_fili_spacing"
            ), 
            array(
                "type" => "colorpicker",
                'group' => 'Filter Section',
                "dependency" => Array("element" => "paj_filter_active","value" => array("true")),                                          
                "heading" => esc_html__( "Color", "kameleon" ),
                "param_name" => "paj_fili_color",
                "value" => '#888', 
            ),
            array(
                "type" => "colorpicker",
                'group' => 'Filter Section', 
                "dependency" => Array("element" => "paj_filter_active","value" => array("true")),                                                                         
                "heading" => esc_html__( "Color onHover", "kameleon" ),
                "param_name" => "paj_fili_color_hover",
                "value" => '#289fca', 
            ),
            array(
                "type" => "colorpicker",
                'group' => 'Filter Section',
                "dependency" => Array("element" => "paj_filter_active","value" => array("true")),                                          
                "heading" => esc_html__( "Color Scheme", "kameleon" ),
                "param_name" => "paj_fili_scheme",
                "value" => '#888', 
            ),
            array(
                "type" => "colorpicker",
                'group' => 'Filter Section',
                "dependency" => Array("element" => "paj_filter_active","value" => array("true")),                                          
                "heading" => esc_html__( "Color Scheme onHover", "kameleon" ),
                "param_name" => "paj_fili_scheme_hover",
                "value" => '#289fca', 
            ),
            
            array(
                'type' => 'dropdown',
                'group' => 'Filter Section',                                
                'heading' => esc_html__( 'Font Weight', 'kameleon' ),
                'group' => 'Filter Section',
                "dependency" => Array("element" => "paj_filter_active","value" => array("true")),                                          
                'param_name' => 'paj_fili_weight',
                'value' => array(
                    esc_html__( '500','kameleon') => '500',
                    esc_html__( '300','kameleon') => '300',
                    esc_html__( '400','kameleon') => '400',
                    esc_html__( '600','kameleon') => '600',
                    esc_html__( '700','kameleon') => '700',
                )               
            ),  
            
            array(
                'type' => 'dropdown',
                'group' => 'Filter Section',  
                "dependency" => Array("element" => "paj_filter_active","value" => array("true")),                                                                        
                'heading' => esc_html__( 'Font Style', 'kameleon' ),
                'group' => 'Filter Section',
                'param_name' => 'paj_fili_transform',
                'value' => array(
                    esc_html__( 'Uppercase','kameleon') => 'uppercase',
                    esc_html__( 'Capitalize','kameleon') => 'capitalize',
                    esc_html__( 'Lowercase','kameleon') => 'lowercase',
                )               
            ), 

        )
    ));
}     
add_action( 'vc_before_init', 'sy_portfolioajax_shortcode' );


/*------------------------------------------------
            PORTFOLIO MASONRY SHORTCODE
------------------------------------------------*/

function sy_portfoliomasonry_shortcode() {
    vc_map( array(
        "name" => esc_html__( "Portfolio Masonry", "kameleon" ),
        "description" => esc_html__("Portfolios list in Masonry Layout with 15 Hover effect style", "kameleon"), 
        
        "base" => "sy_portfoliomasonry",      
        "params" => array(
            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Portfolio Mansory Type",'kameleon'),                
                'param_name' => 'pg_pmansory_type',
                'value' => array(                    
                    esc_html__("List",'kameleon') => 'list',
                    esc_html__("Single",'kameleon')  => 'single'
                )            
            ),
             array(
                "type" => "sy_search",          
                "heading" => esc_html__( "Search Portfolio By Title", "kameleon" ),                
                "param_name" => "pg_pmansorysingle_id",                
                "item_type" => "portfolio",                
                "dependency" => Array("element" => "pg_pmansory_type","value" => array("single")),                
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Portfolio Display Style",'kameleon'),
                'param_name' => 'style',
                'value' => array(
                    esc_html__("Style 1",'kameleon') => 'syp-effect-lily',
                    esc_html__("Style 2",'kameleon') => 'syp-effect-sadie',
                    esc_html__("Style 3",'kameleon') => 'syp-effect-layla',
                    esc_html__("Style 4",'kameleon') => 'syp-effect-oscar',    
                    esc_html__("Style 5",'kameleon') => 'syp-effect-marley',
                    esc_html__("Style 6",'kameleon') => 'syp-effect-ruby',    
                    esc_html__("Style 7",'kameleon') => 'syp-effect-roxy',
                    esc_html__("Style 8",'kameleon') => 'syp-effect-bubba',
                    esc_html__("Style 9",'kameleon') => 'syp-effect-dexter',
                    esc_html__("Style 10",'kameleon') => 'syp-effect-sarah',
                    esc_html__("Style 11",'kameleon') => 'syp-effect-chico',
                    esc_html__("Style 12",'kameleon') => 'syp-effect-milo',
                    esc_html__("Style 13",'kameleon') => 'syp-effect-jazz',
                    esc_html__("Style 14",'kameleon') => 'syp-effect-lexi',
                    esc_html__("Style 15",'kameleon') => 'syp-effect-apollo'
                )            
            ),
            
            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Columns Number",'kameleon'),
                'param_name' => 'columns_number',
                'value' => array(                    
                    esc_html__("4 Columns",'kameleon') => 'syp-item-4',
                    esc_html__("1 Column",'kameleon') => 'syp-item-1',
                    esc_html__("2 Columns",'kameleon') => 'syp-item-2',
                    esc_html__("3 Columns",'kameleon') => 'syp-item-3',
                    esc_html__("5 Columns",'kameleon') => 'syp-item-5'
                ),
                "dependency" => Array("element" => "pg_pmansory_type","value" => array("list")),          
            ),

            array(
                "type" => "number",          
                "heading" => esc_html__( "Number of Portfolio Projects to Show", "kameleon" ),
                "param_name" => "portfolio_number",
                "value" => 8,
                "dependency" => Array("element" => "pg_pmansory_type","value" => array("list")),          

            ),

            array(
                "type" => "dropdown",            
                "heading" => esc_html__("Enable Gutter", "kameleon"),
                "param_name" => "gutter",
                "value" => array(
                    esc_html__("No","kameleon") => 'false',
                    esc_html__("Yes","kameleon") => 'true',

                )
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Thumbnail Size",'kameleon'),
                'param_name' => 'pg_thumbnail_size',
                'value' => array(
                    esc_html__("Large Image",'kameleon') => 'kameleon-large-thumbnail',                  
                    esc_html__("Small Thumbnail",'kameleon') => 'kameleon-small-thumbnail',                  
                    esc_html__("X Large Image",'kameleon') => 'kameleon-x-large-thumbnail',                  
                    esc_html__("Full Size",'kameleon') => 'full',                  
                )            
            ),
            array(
                "type" => "dropdown",  
                "multiple" => 1,        
                "heading" => esc_html__( "Sort Order : ", "kameleon" ),
                'group' => 'Query Options',
                "param_name" => "pg_pmansory_order",
                "dependency" => Array("element" => "pg_pmansory_type","value" => array("list")),  
                "default" => 'DESC',
                "value" => array(
                    esc_html__("Descending","kameleon") => 'DESC',
                    esc_html__("Ascending","kameleon") => 'ASC',
                )
            ),

            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Order by', 'kameleon' ),
                'group' => 'Query Options',
                'param_name' => 'pg_pmansory_order_by',
                "dependency" => Array("element" => "pg_pmansory_type","value" => array("list")),  
                'value' => array(
                    esc_html__( 'Date', 'kameleon' ) => 'date',
                    esc_html__( 'Order by post ID', 'kameleon' ) => 'ID',
                    esc_html__( 'Author', 'kameleon' ) => 'author',
                    esc_html__( 'Title', 'kameleon' ) => 'title',
                    esc_html__( 'Number of comments', 'kameleon' ) => 'comment_count'                   
                )               
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Display from specific Categories', 'kameleon' ),
                'group' => 'Query Options',
                'param_name' => 'pg_pmansory_categories_enabled',
                "dependency" => Array("element" => "pg_pmansory_type","value" => array("list")),  
                'value' => array(
                    esc_html__( 'No', 'kameleon' ) => 'off',
                    esc_html__( 'Yes', 'kameleon' ) => 'on',                  
                )               
            ),

            array(
                'type' => 'sy_multiple_select',
                'heading' => esc_html__( 'Choose Categories', 'kameleon' ),
                'group' => 'Query Options',
                'param_name' => 'pg_pmansory_categories',
                 "dependency" => Array("element" => "pg_pmansory_categories_enabled","value" => 'on'),  
                'values' =>kameleon_portfolio_cats_arr()     
            ),
             array(
                "type" => "dropdown",            
                "heading" => esc_html__("Enable Portfolio Filter", "kameleon"),
                'group' => 'Filter Section',
                "param_name" => "filter_active",
                "value" => array(
                    esc_html__("Yes","kameleon") => 'true',
                    esc_html__("No","kameleon") => 'false',
                ),
                "dependency" => Array("element" => "pg_pmansory_type","value" => array("list")),          
                
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Filter Style', 'kameleon' ),
                "dependency" => Array("element" => "filter_active","value" => array("true")),                                                          
                'group' => 'Filter Section',
                'param_name' => 'pg_fili_style',
                'value' => array(
                    esc_html__( 'Style 3','kameleon') => 'style3',
                    esc_html__( 'Style 1','kameleon') => 'style1',
                    esc_html__( 'Style 2','kameleon') => 'style2',
                    esc_html__( 'Style 4','kameleon') => 'style4',
                    esc_html__( 'Style 5','kameleon') => 'style5',
                )               
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Filter Alignement', 'kameleon' ),
                "dependency" => Array("element" => "filter_active","value" => array("true")),                                                          
                'group' => 'Filter Section',
                'param_name' => 'pg_fili_align',
                'value' => array(
                    esc_html__( 'Center','kameleon') => 'center',
                    esc_html__( 'Left','kameleon') => 'left',
                    esc_html__( 'Right','kameleon') => 'right',
                )               
            ),

            
            array(
                "type" => "number",
                'group' => 'Filter Section',
                "dependency" => Array("element" => "filter_active","value" => array("true")),                                                          
                "value" => 13,
                "heading" => esc_html__( "Link Font Size", "kameleon" ),                             
                "param_name" => "pg_fili_size"
            ), 
            array(
                "type" => "number",
                'group' => 'Filter Section',
                "dependency" => Array("element" => "filter_active","value" => array("true")),                                                          
                "value" => 34,
                "heading" => esc_html__( "Link Height", "kameleon" ),                            
                "param_name" => "pg_fili_height"
            ), 
            array(
                "type" => "number",
                'group' => 'Filter Section',
                "dependency" => Array("element" => "filter_active","value" => array("true")),                                                          
                "value" => 0,
                "min" => 0,
                "max" => 3,
                "heading" => esc_html__( "Font Spacing", "kameleon" ),                           
                "param_name" => "pg_fili_spacing"
            ), 
            array(
                "type" => "colorpicker",
                'group' => 'Filter Section',
                "dependency" => Array("element" => "filter_active","value" => array("true")),                                                          
                "heading" => esc_html__( "Color", "kameleon" ),
                "param_name" => "pg_fili_color",
                "value" => '#888', 
            ),
            array(
                "type" => "colorpicker",
                'group' => 'Filter Section',                                
                "dependency" => Array("element" => "filter_active","value" => array("true")),                                                          
                "heading" => esc_html__( "Color onHover", "kameleon" ),
                "param_name" => "pg_fili_color_hover",
                "value" => '#289fca', 
            ),
            array(
                "type" => "colorpicker",
                'group' => 'Filter Section',
                "dependency" => Array("element" => "filter_active","value" => array("true")),                                                          
                "heading" => esc_html__( "Color Scheme", "kameleon" ),
                "param_name" => "pg_fili_scheme",
                "value" => '#888', 
            ),
            array(
                "type" => "colorpicker",
                'group' => 'Filter Section',
                "dependency" => Array("element" => "filter_active","value" => array("true")),                                                          
                "heading" => esc_html__( "Color Scheme onHover", "kameleon" ),
                "param_name" => "pg_fili_scheme_hover",
                "value" => '#289fca', 
            ),
            
            array(
                'type' => 'dropdown',
                'group' => 'Filter Section',                                
                "dependency" => Array("element" => "filter_active","value" => array("true")),                                                          
                'heading' => esc_html__( 'Font Weight', 'kameleon' ),
                'group' => 'Filter Section',
                'param_name' => 'pg_fili_weight',
                'value' => array(
                    esc_html__( '500','kameleon') => '500',
                    esc_html__( '300','kameleon') => '300',
                    esc_html__( '400','kameleon') => '400',
                    esc_html__( '600','kameleon') => '600',
                    esc_html__( '700','kameleon') => '700',
                )               
            ),  
            
            array(
                'type' => 'dropdown',
                'group' => 'Filter Section',                                
                "dependency" => Array("element" => "filter_active","value" => array("true")),                                                          
                'heading' => esc_html__( 'Font Style', 'kameleon' ),
                'group' => 'Filter Section',
                'param_name' => 'pg_fili_transform',
                'value' => array(
                    esc_html__( 'Uppercase','kameleon') => 'uppercase',
                    esc_html__( 'Capitalize','kameleon') => 'capitalize',
                    esc_html__( 'Lowercase','kameleon') => 'lowercase',
                )               
            ), 
       
        )
    ));
} 
add_action( 'vc_before_init', 'sy_portfoliomasonry_shortcode' );


/*------------------------------------------------
            ICONBOXACTION  SHORTCODE
------------------------------------------------*/
function sy_iconboxaction_shortcode() {
    vc_map( array(
        "name" => esc_html__( "Icon Box Action", "kameleon" ),
        
        "description" => esc_html__("Icon box ingfo with button", "kameleon"),                 
        "base" => "sy_iconboxaction",      
        "params" => array(            
            array(
                "type" => "dropdown", 
                "group" => "General",            
                "heading" => esc_html__("Box Style", "kameleon"),
                "param_name" => "icbb_style",
                "value" => array(
                    esc_html__("Normal","kameleon") => 'effect1',
                    esc_html__("Hover Effect","kameleon") => 'effect2',
                    esc_html__("Icon in The Back","kameleon") => 'effect3'
                )
            ), 
            array(
                "type" => "number",          
                "heading" => esc_html__( "Box Min Height", "kameleon" ),
                "group" => "General",
                "param_name" => "icbb_height",          
                "value" => 250
            ),
            array(
                "type" => "icon_manager",
                "class" => "",
                "heading" => __("Select Icon ","kameleon"),
                "param_name" => "icbb_icon",
                "value" => "",
                "description" => __("Click and select icon of your choice. If you can't find the one that suits for your purpose","kameleon").", ".__("you can","kameleon")." <a href='admin.php?page=bsf-font-icon-manager' target='_blank'>".__("add new here","kameleon")."</a>.",
                "group" => "General",
            ), 
            array(
                "type" => "number",          
                "heading" => esc_html__( "Icon Size", "kameleon" ),
                "group" => "General",
                "param_name" => "icbb_icon_size",          
                "value" => 36
            ),           
            array(
                "type" => "colorpicker",
                "group" => "General", 
                "heading" => esc_html__( "Icon Color", "kameleon" ),
                "param_name" => "icbb_icon_color"           
            ),
            array(
                "type" => "colorpicker",
                "group" => "General", 
                "heading" => esc_html__( "Icon Color on Hover", "kameleon" ),
                "param_name" => "icbb_icon_hover_color"           
            ),            
            array(
                "type" => "dropdown", 
                "group" => "General",            
                "heading" => esc_html__("Hover Style", "kameleon"),
                "param_name" => "icbb_icon_hover_style_3",
                "dependency" => Array("element" => "icbb_style","value" => array("effect3")),                
                "value" => array(
                    esc_html__("Scale Up","kameleon") => 'scaleup',
                    esc_html__("Scale Down","kameleon") => 'scaledown',
                    esc_html__("Move Up","kameleon") => 'moveup',
                    esc_html__("Move Down","kameleon") => 'movedown',
                )
            ), 
            array(
                "type" => "dropdown", 
                "group" => "General",            
                "heading" => esc_html__("Hover Style", "kameleon"),
                "param_name" => "icbb_icon_hover_style_2",
                "dependency" => Array("element" => "icbb_style","value" => array("effect2")),                
                "value" => array(
                    esc_html__("Scale","kameleon") => 'scale',
                    esc_html__("Translate","kameleon") => 'translate'
                )
            ), 
            array(
                "type" => "number",          
                "heading" => esc_html__( "Icon Area Border Bottom Height", "kameleon" ),
                "group" => "General",
                "param_name" => "icbb_icon_bb_height",          
                "value" => 0
            ), 
            array(
                "type" => "number",          
                "heading" => esc_html__( "Icon Area Border Bottom Width", "kameleon" ),
                "group" => "General",
                "param_name" => "icbb_icon_bb_width",          
                "value" => 0
            ),                       
            array(
                "type" => "colorpicker",
                "group" => "General", 
                "heading" => esc_html__( "Icon Area Border Bottomn Color", "kameleon" ),
                "param_name" => "icbb_icon_bb_color"           
            ),
            
            //Content Area
            array(
                "type" => "textfield",
                "group" => "Content", 
                "heading" => esc_html__( "Title", "kameleon" ),
                "param_name" => "icbb_title"
            ),            
            array(
                "type" => "ult_param_heading",
                "param_name" => "icbb_title_typography",
                "heading" => __("Title Font Settings","kameleon"),
                "value" => "",
                "group" => "Typography",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "icbb_title_font",
                "heading" => __("Font Family","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "icbb_title_style",
                "heading" => __("Font Style","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "icbb_title_size",
                "group" => "Typography",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "17", "line-height" => "", "letter-spacing" => ""),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),  
            array(
                "type" => "colorpicker",
                "group" => "Typography", 
                "heading" => esc_html__( "Title Color", "kameleon" ),
                "param_name" => "icbb_title_color" ,
                "value" => "#444"         
            ),            
            array(
                "type" => "textfield",
                "group" => "Content", 
                "heading" => esc_html__( "Sub-Title", "kameleon" ),
                "param_name" => "icbb_subtitle"
            ),

             array(
                "type" => "ult_param_heading",
                "param_name" => "icbb_subtitle_typography",
                "heading" => __("Sub-Title Font Settings","kameleon"),
                "value" => "",
                "group" => "Typography",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "icbb_subtitle_font",
                "heading" => __("Font Family","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "icbb_subtitle_style",
                "heading" => __("Font Style","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "icbb_subtitle_size",
                "group" => "Typography",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "14", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),                     
            array(
                "type" => "colorpicker",
                "group" => "Typography", 
                "heading" => esc_html__( "Sub-Title Color", "kameleon" ),
                "param_name" => "icbb_subtitle_color" ,
                "value" => "#888"         
            ),
            
            array(
                "type" => "textarea",
                "group" => "Content", 
                "heading" => esc_html__( "Info Text", "kameleon" ),
                "param_name" => "icbb_info"
            ),

            array(
                "type" => "ult_param_heading",
                "param_name" => "icbb_info_typography",
                "heading" => __("Info Font Settings","kameleon"),
                "value" => "",
                "group" => "Typography",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "icbb_info_font",
                "heading" => __("Font Family","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "icbb_info_style",
                "heading" => __("Font Style","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "icbb_info_size",
                "group" => "Typography",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "14", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),   
                 
            array(
                "type" => "colorpicker",
                "group" => "Typography", 
                "heading" => esc_html__( "Info Color", "kameleon" ),
                "param_name" => "icbb_info_color" ,
                "value" => "#888"         
            ),

            array(
                "type" => "number",          
                "heading" => esc_html__( "Title Area Border Bottom Height", "kameleon" ),
                "group" => "Content",
                "param_name" => "icbb_title_bb_height",          
                "value" => 0
            ), 
            array(
                "type" => "number",          
                "heading" => esc_html__( "Title Area Border Bottom Width", "kameleon" ),
                "group" => "Content",
                "param_name" => "icbb_title_bb_width",          
                "value" => 0
            ),                       
            array(
                "type" => "colorpicker",
                "group" => "Content", 
                "heading" => esc_html__( "Title Area Border Bottom Color", "kameleon" ),
                "param_name" => "icbb_title_bb_color"           
            ),
            
            //Button Settings
            //icbb_button
            array(
                "type" => "textfield",
                "group" => "Button", 
                "heading" => esc_html__( "Button Text", "kameleon" ),
                "param_name" => "icbb_button_text",
                "value" => "Button Text"
            ),
            array(
                "type" => "number",          
                "heading" => esc_html__( "Button Height", "kameleon" ),
                "group" => "Button",
                "param_name" => "icbb_button_height",          
                "value" => 35
            ), 
            array(
                "type" => "ult_param_heading",
                "param_name" => "icbb_button_typography",
                "heading" => __("Button Font Settings","kameleon"),
                "value" => "",
                "group" => "Typography",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "icbb_button_font",
                "heading" => __("Font Family","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "icbb_button_style",
                "heading" => __("Font Style","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "icbb_button_size",
                "group" => "Typography",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "14", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),  
            array(
                "type" => "colorpicker",
                "group" => "Button", 
                "heading" => esc_html__( "Text Color", "kameleon" ),
                "param_name" => "icbb_button_color",
                "value" => '#ddd'           
            ),
            array(
                "type" => "colorpicker",
                "group" => "Button", 
                "heading" => esc_html__( "Background Color", "kameleon" ),
                "param_name" => "icbb_button_bg",
                "value" => '#222'              
            ),
            array(
                "type" => "number",          
                "heading" => esc_html__( "Border Size", "kameleon" ),
                "group" => "Button",
                "param_name" => "icbb_button_border_size",          
                "value" => 1
            ), 
            array(
                "type" => "colorpicker",
                "group" => "Button", 
                "heading" => esc_html__( "Border Color", "kameleon" ),
                "param_name" => "icbb_button_border_color",
                "value" => '#1a1a1a'              
            ),
            
            array(
                "type" => "colorpicker",
                "group" => "Button", 
                "heading" => esc_html__( "Text Color (onHover)", "kameleon" ),
                "param_name" => "icbb_button_color_hover",
                "value" => '#fff'           
            ),
            array(
                "type" => "colorpicker",
                "group" => "Button", 
                "heading" => esc_html__( "Background Color (onHover)", "kameleon" ),
                "param_name" => "icbb_button_bg_hover",
                "value" => '#222'              
            ),
            array(
                "type" => "colorpicker",
                "group" => "Button", 
                "heading" => esc_html__( "Border Color (onHover)", "kameleon" ),
                "param_name" => "icbb_button_border_hover",
                "value" => '#000'              
            ),            

            array(
                "type" => "textfield",
                "group" => "Button", 
                "heading" => esc_html__( "Button Link", "kameleon" ),
                "param_name" => "icbb_button_link"
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Open Link In', 'kameleon' ),
                'group' => 'Button',
                'param_name' => 'icbb_button_target',
                'value' => array(
                    esc_html__( 'New Tab','kameleon') => '_blank',
                    esc_html__( 'Same Window','kameleon') => '_self'
                )               
            ),
            
            array(
               "type" => "dropdown",
                "heading" => esc_html__( 'Enable Button Hover','kameleon'),
                "param_name" => "icbb_button_hover_enabled",           
                "dependency" => Array("element" => "icbb_style","value" => array("effect1","effect3")),                
                "value" => array(
                        "Yes" => "on",
                        "No" => "off",
                    ),         
                "group" => "Button",
            ),
            //Margins
            array(
                "type" => "sy_distance",
                "distance" => "padding",
                "heading" => "Icon Margins",
                "param_name" => "icbb_icon_padding",
                "defaults"=> array(
                    "top" => "0px",
                    "bottom" => "15px"
                ),
                'group' => 'Margins',
                "positions" => array(
                    __("Top","kameleon") => "top",
                    __("Bottom","kameleon") => "bottom",
                )
            ),
            array(
                "type" => "sy_distance",
                "distance" => "padding",
                "heading" => "Title Margins",
                "param_name" => "icbb_title_padding",
                "defaults"=> array(
                    "top" => "0px",
                    "bottom" => "15px"
                ),
                'group' => 'Margins',
                "positions" => array(
                    __("Top","kameleon") => "top",
                    __("Bottom","kameleon") => "bottom",
                )
            ),
            array(
                "type" => "sy_distance",
                "distance" => "padding",
                "heading" => "Info Margins",
                "param_name" => "icbb_info_padding",
                "defaults"=> array(
                    "top" => "0px",
                    "bottom" => "15px"
                ),
                'group' => 'Margins',
                "positions" => array(
                    __("Top","kameleon") => "top",
                    __("Bottom","kameleon") => "bottom",
                )
            ), 
        )
    ));
} 
add_action( 'vc_before_init', 'sy_iconboxaction_shortcode' );



/*------------------------------------------------
            TEAMMATE  SHORTCODE
------------------------------------------------*/
function sy_teammate_shortcode() {
    vc_map( array(
        "name" => esc_html__( "Team Mate", "kameleon" ),
        
        "description" => esc_html__("Information module about a teammate", "kameleon"),                 
        "base" => "sy_teammate",      
        "params" => array(
            array(
                "type" => "attach_image",
                 "group" => "Information", 
                "heading" => esc_html__( "Picture", "kameleon" ),
                "param_name" => "img"
            ),
            array(
                "type" => "dropdown", 
                 "group" => "Information",            
                "heading" => esc_html__("Style ", "kameleon"),
                "param_name" => "style",
                "value" => array(
                    esc_html__("Normal","kameleon") => 'style1',
                    esc_html__("With Hover","kameleon") => 'style2',
                )

            ),
            array(
                "type" => "textfield",
                 "group" => "Information", 
                "heading" => esc_html__( "Name", "kameleon" ),
                "param_name" => "name"
            ),
            array(
                "type" => "textfield",
                 "group" => "Information", 
                "heading" => esc_html__( "Team mate Title", "kameleon" ),
                "param_name" => "position"
            ),
             array(
                "type" => "textarea_html",
                 "group" => "Information", 
                "heading" => esc_html__( "Content", "kameleon" ),
                "param_name" => "content",
                "edit_field_class" => "ult_hide_editor_fullscreen vc_col-xs-12 vc_column wpb_el_type_textarea_html vc_wrapper-param-type-textarea_html vc_shortcode-param",  
            ),
            array(
                "type" => "colorpicker",
                 "group" => "Social", 
                "heading" => esc_html__( "Link Color", "kameleon" ),
                "param_name" => "scl_color"
            ),
            array(
                "type" => "textfield",
                 "group" => "Social", 
                "heading" => esc_html__( "Facebook Link", "kameleon" ),
                "param_name" => "fb_link"
            ),
            array(
                "type" => "textfield",
                 "group" => "Social", 
                "heading" => esc_html__( "Twitter Link", "kameleon" ),
                "param_name" => "tw_link"
            ),
            array(
                "type" => "textfield",
                 "group" => "Social", 
                "heading" => esc_html__( "Google+ Link", "kameleon" ),
                "param_name" => "gplus_link"
            ),
            array(
                "type" => "textfield",
                 "group" => "Social", 
                "heading" => esc_html__( "Linkedin Link", "kameleon" ),
                "param_name" => "lk_link"
            ),
            array(
                "type" => "textfield",
                 "group" => "Social", 
                "heading" => esc_html__( "Github Link", "kameleon" ),
                "param_name" => "git_link"
            ),
            array(
                "type" => "textfield",
                 "group" => "Social", 
                "heading" => esc_html__( "Instagram Link", "kameleon" ),
                "param_name" => "insta_link"
            ),

            array(
                "type" => "ult_param_heading",
                "param_name" => "team_name_typography",
                "heading" => __("Name Font Settings","kameleon"),
                "value" => "",
                "group" => "Typography",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "team_name_font",
                "heading" => __("Font Family","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "team_name_style",
                "heading" => __("Font Style","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "team_name_size",
                "group" => "Typography",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "17", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),  

            array(
                "type" => "colorpicker",
                 "group" => "Typography", 
                "heading" => esc_html__( "Name Text Color", "kameleon" ),
                "param_name" => "name_color"
            ),
            array(
                "type" => "ult_param_heading",
                "param_name" => "team_position_typography",
                "heading" => __("Position Font Settings","kameleon"),
                "value" => "",
                "group" => "Typography",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "team_position_font",
                "heading" => __("Font Family","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "team_position_style",
                "heading" => __("Font Style","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "team_position_size",
                "group" => "Typography",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "14", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),  
            array(
                "type" => "colorpicker",
                "group" => "Typography", 
                "heading" => esc_html__( "Title Color", "kameleon" ),
                "param_name" => "position_color"
            ),
        )
    ));
} 
add_action( 'vc_before_init', 'sy_teammate_shortcode' );



/*------------------------------------------------
            TESTMONIAL  SHORTCODE
------------------------------------------------*/
function sy_interactiveiconbox_shortcode() {
    vc_map( array(
        "name" => esc_html__( "Interactive Iconbox", "kameleon" ),
        
        "description" => esc_html__("Hover iconbox with title and information", "kameleon"),                 
        "base" => "sy_interactiveiconbox",      
        "params" => array(                    
            array(
                "type" => "number",
                "group" => "General", 
                "value" => 220,
                "heading" => esc_html__( "Min Box Height", "kameleon" ),
                "param_name" => "iib_height"
            ),
            array(
               "type" => "textfield",
                "group" => "General", 
               "heading" => esc_html__( "Title", "kameleon" ),
               "param_name" => "iib_title"
            ),
            array(
               "type" => "textfield",
                "group" => "General", 
               "heading" => esc_html__( "Sub-Title", "kameleon" ),
               "param_name" => "iib_subtitle"
            ),
            array(
                "type" => "dropdown", 
                "group" => "General",            
                "heading" => esc_html__("Hover Style", "kameleon"),
                "param_name" => "iib_hover_style",
                "value" => array(
                    esc_html__("To Left","kameleon") => 'toleft',
                    esc_html__("To Top","kameleon") => 'totop',
                    esc_html__("To Right","kameleon") => 'toright',
                    esc_html__("To Bottom","kameleon") => 'tobottom',
                    esc_html__("Scale","kameleon") => 'toscale',
                )
            ),  
            array(
               "type" => "textarea",
                "group" => "General", 
               "heading" => esc_html__( "Content Text", "kameleon" ),
               "param_name" => "iib_info_content"
            ),
            
            //Icon Area
            array(
                "type" => "icon_manager",
                "class" => "",
                "heading" => __("Select Icon ","kameleon"),
                "param_name" => "iib_icon",
                "value" => "",
                "description" => __("Click and select icon of your choice. If you can't find the one that suits for your purpose","kameleon").", ".__("you can","kameleon")." <a href='admin.php?page=bsf-font-icon-manager' target='_blank'>".__("add new here","kameleon")."</a>.",
                "group" => "Icon Area",
            ),
            array(
                "type" => "dropdown", 
                "group" => "Icon Area",            
                "heading" => esc_html__("Elements Alignement", "kameleon"),
                "param_name" => "iib_icon_align",
                "value" => array(
                    esc_html__("Left","kameleon") => 'left',
                    esc_html__("Center","kameleon") => 'center',
                    esc_html__("Right","kameleon") => 'Right',
                )
            ),  
            array(
                "type" => "colorpicker",
                "group" => "Icon Area", 
                "value" => "transparent",
                "heading" => esc_html__( "Background Color", "kameleon" ),
                "param_name" => "iib_icon_area_bg"
            ),
            array(
                "type" => "number",
                "group" => "Icon Area", 
                "value" => 36,
                "heading" => esc_html__( "Icon Size", "kameleon" ),
                "param_name" => "iib_icon_size"
            ),
            array(
                "type" => "colorpicker",
                "group" => "Icon Area", 
                "value" => "#555",
                "heading" => esc_html__( "Icon Color", "kameleon" ),
                "param_name" => "iib_icon_color"
            ),
            
            array(
                "type" => "ult_param_heading",
                "param_name" => "iib_title_typography",
                "heading" => __("Title settings","kameleon"),
                "value" => "",
                "group" => "Typography",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "iib_title_font_family",
                "heading" => __("Font Family","Kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "iib_title_font_style",
                "heading" => __("Font Style","Kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "iib_title_font_size",
                "group" => "Typography",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "17", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),  
            array(
                "type" => "colorpicker",
                "group" => "Typography", 
                "value" => "#666",
                "heading" => esc_html__( "Sub-Title Color", "kameleon" ),
                "param_name" => "iib_title_color"
            ),

            array(
                "type" => "ult_param_heading",
                "param_name" => "iib_subtitle_typography",
                "heading" => __("Sub-Title settings","kameleon"),
                "value" => "",
                "group" => "Typography",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "iib_subtitle_font_family",
                "heading" => __("Font Family","Kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "iib_subtitle_font_style",
                "heading" => __("Font Style","Kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "iib_subtitle_font_size",
                "group" => "Typography",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "14", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),  
            array(
                "type" => "colorpicker",
                "group" => "Typography", 
                "value" => "#999",
                "heading" => esc_html__( "Sub-Title Color", "kameleon" ),
                "param_name" => "iib_subtitle_color"
            ),

             //Content Area            
            array(
                "type" => "dropdown", 
                "group" => "Content Area",            
                "heading" => esc_html__("Text Alignement", "kameleon"),
                "param_name" => "iib_info_align",
                "value" => array(
                    esc_html__("Left","kameleon") => 'left',
                    esc_html__("Center","kameleon") => 'center',
                    esc_html__("Right","kameleon") => 'Right',
                )
            ),  
            array(
                "type" => "colorpicker",
                "group" => "Content Area", 
                "value" => "#f9f9f9",
                "heading" => esc_html__( "Background Color", "kameleon" ),
                "param_name" => "iib_info_area_bg"
            ),
            
             array(
                "type" => "ult_param_heading",
                "param_name" => "iib_info_typography",
                "heading" => __("Content settings","kameleon"),
                "value" => "",
                "group" => "Content Area",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "iib_info_font_family",
                "heading" => __("Font Family","Kameleon"),
                "value" => "",
                "group" => "Content Area"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "iib_info_font_style",
                "heading" => __("Font Style","Kameleon"),
                "value" => "",
                "group" => "Content Area"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "iib_info_font_size",
                "group" => "Content Area",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "15", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ), 
            array(
                "type" => "colorpicker",
                "group" => "Content Area", 
                "value" => "#777",
                "heading" => esc_html__( "Text Color", "kameleon" ),
                "param_name" => "iib_info_color"
            ),
            
            //Distances
            array(
                "type" => "sy_distance",
                "distance" => "padding",
                "heading" => "Element Paddings",
                "param_name" => "iib_padding",
                "defaults"=> array(
                    "top" => "50px",
                    "bottom" => "50px",
                    "left" => "50px",
                    "right" => "50px",
                ),
                'group' => 'Distances',
                "positions" => array(
                    __("Top","kameleon") => "top",
                    __("Bottom","kameleon") => "bottom",
                    __("Left","kameleon") => "left",
                    __("Right","kameleon") => "right",
                )
            ),
            array(
                "type" => "sy_distance",
                "distance" => "margin",
                "heading" => "Element Margins",
                "param_name" => "iib_margin",
                'group' => 'Distances',
                "positions" => array(
                    __("Top","kameleon") => "top",
                    __("Bottom","kameleon") => "bottom",
                )
            ),          

        )
    ));
}
add_action( 'vc_before_init', 'sy_interactiveiconbox_shortcode' );


/*------------------------------------------------
            TESTMONIAL  SHORTCODE
------------------------------------------------*/
function sy_testmonial_shortcode() {
    vc_map( array(
        "name" => esc_html__( "Testimonial", "kameleon" ),
        
        "description" => esc_html__("Testimonial area with different layout and design", "kameleon"),                 
        "base" => "sy_testmonial",      
        "params" => array(
             array(
                "type" => "attach_image",
                 "group" => "Information", 
                "heading" => esc_html__( "Thumbnail", "kameleon" ),
                "param_name" => "img"
            ),

            array(
                "type" => "dropdown", 
                 "group" => "Information",            
                "heading" => esc_html__("Style ", "kameleon"),
                "param_name" => "style",
                "value" => array(
                    esc_html__("Normal","kameleon") => 'style1',
                    esc_html__("Bubble","kameleon") => 'style2',
                    esc_html__("Modern","kameleon") => 'style3',
                )
            ),
            //Normal Style Effects 
            array(
                "type" => "dropdown", 
                 "group" => "Information",            
                "heading" => esc_html__("Normal Layout Style", "kameleon"),
                "dependency" => Array("element" => "style","value" => array("style1")),                
                "param_name" => "tm_normal_layout",
                "value" => array(
                    esc_html__("Style 1","kameleon") => 'style1',
                    esc_html__("Style 2","kameleon") => 'style2',
                    esc_html__("Style 3","kameleon") => 'style3',
                    esc_html__("Style 4","kameleon") => 'style4',
                    esc_html__("Style 5","kameleon") => 'style5',
                    //  esc_html__("Style 6","kameleon") => 'style6',
                )
            ),

            array(
                "type" => "dropdown",
                "group" => "Information", 
                "heading" => esc_html__( "Thumbnail Position", "kameleon" ),
                "description" => esc_html__( "Only for style Modern & Bubble ", "kameleon" ),
                "param_name" => "position", 
                "value" => array(
                    esc_html__("Left","kameleon") => 'left',
                    esc_html__("Right","kameleon") => 'right'
                ),
                "dependency" => Array("element" => "style","value" => array("style2","style3")),
            ),
            array(
                "type" => "textfield",
                 "group" => "Information", 
                "heading" => esc_html__( "Name", "kameleon" ),
                "param_name" => "name"
            ),
            array(
                "type" => "textfield",
                "group" => "Information", 
                "heading" => esc_html__( "Title", "kameleon" ),
                "param_name" => "title"
            ), 
            array(
                "type" => "textarea_html",
                "group" => "Information", 
                "heading" => esc_html__( "Content", "kameleon" ),
                "param_name" => "content",
                "edit_field_class" => "ult_hide_editor_fullscreen vc_col-xs-12 vc_column wpb_el_type_textarea_html vc_wrapper-param-type-textarea_html vc_shortcode-param",  
            ),

             array(
                "type" => "ult_param_heading",
                "param_name" => "test_name_text_typography",
                "heading" => __("Name Font Settings","kameleon"),
                "value" => "",
                "group" => "Typography",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "test_name_font",
                "heading" => __("Font Family","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "test_name_style",
                "heading" => __("Font Style","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "test_name_size",
                "group" => "Typography",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "16", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),  

            array(
                "type" => "colorpicker",
                "group" => "Typography", 
                "heading" => esc_html__( "Name Text Color", "kameleon" ),
                "param_name" => "name_color"
            ),
            
            array(
                "type" => "ult_param_heading",
                "param_name" => "test_title_text_typography",
                "heading" => __("Title Font Settings","kameleon"),
                "value" => "",
                "group" => "Typography",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "test_title_font",
                "heading" => __("Font Family","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "test_title_style",
                "heading" => __("Font Style","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "test_title_size",
                "group" => "Typography",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "12", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),  

            array(
                "type" => "colorpicker",
                "group" => "Typography", 
                "heading" => esc_html__( "Title Color", "kameleon" ),
                "param_name" => "title_color"
            ),

            array(
                "type" => "ult_param_heading",
                "param_name" => "test_content_text_typography",
                "heading" => __("Content Font Settings","kameleon"),
                "value" => "",
                "group" => "Typography",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "test_content_font",
                "heading" => __("Font Family","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "test_content_style",
                "heading" => __("Font Style","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "test_content_size",
                "group" => "Typography",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "14", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),  

            array(
                "type" => "colorpicker",
                "group" => "Typography", 
                "heading" => esc_html__( "Content Color", "kameleon" ),
                "param_name" => "content_color"
            ),
            array(
                "type" => "colorpicker",
                "group" => "Colors", 
                "heading" => esc_html__( "Background Color", "kameleon" ),
                "param_name" => "bg",
                'value' => "transparent"
            ),
            array(
                "type" => "colorpicker",
                "group" => "Colors", 
                "heading" => esc_html__( "Content Background", "kameleon" ),
                "param_name" => "bubble_bg", 
                'value' => "transparent", 
                //"dependency" => Array("element" => "style","value" => array("style2","style3")),
            ),
            array(
                "type" => "colorpicker",
                "group" => "Colors", 
                "heading" => esc_html__( "Icon Color", "kameleon" ),
                "param_name" => "tm_icon_color", 
                'value' => "#eee", 
            ),

            array(
                "type" => "dropdown",
                "group" => "Colors", 
                "heading" => esc_html__( "Icon Style", "kameleon" ),
                "description" => esc_html__( "Choose the quote icon", "kameleon" ),
                "param_name" => "icon_style", 
                "value" => array(
                    esc_html__("Normal","kameleon") => 'Defaults-km-icon-quote-',
                    esc_html__("Rounded","kameleon") => 'Defaults-km-icon-quotes-',
                ),         
            ),

             array(
                "type" => "dropdown",
                "group" => "Colors", 
                "heading" => esc_html__( "Icon Orientation", "kameleon" ),
                "description" => esc_html__( "Choose the quote icon orientation", "kameleon" ),
                "param_name" => "icon_orientation", 
                "value" => array(
                    esc_html__("Right","kameleon") => 'right',
                    esc_html__("Left","kameleon") => 'left',
                ),         
            ),

            array(
                "type" => "sy_distance",
                "distance" => "margin",
                "heading" => "Container Margins",
                "param_name" => "testi_container_margin",
                'group' => 'Styling',
                "positions" => array(
                    __("Top","kameleon") => "top",
                    __("Bottom","kameleon") => "bottom",
                )
            ),
            array(
                "type" => "sy_distance",
                "distance" => "padding",
                "heading" => "Content Paddings",
                "param_name" => "testi_content_padding",
                "defaults"=> array(
                    "top" => "6px",
                    "bottom" => "6px"
                ),
                'group' => 'Styling',
                "dependency" => Array("element" => "style","value" => "style1"),                
                "positions" => array(
                    __("Top","kameleon") => "top",
                    __("Bottom","kameleon") => "bottom",
                )
            ), 
            array(
                "type" => "text",
                "heading" => '<h4 class="vc-param-h4">'.esc_html__('Icon Styling','kameleon').'</h4>',
                "param_name" => "testii_text",
                "group" => "Styling",
                "dependency" => Array("element" => "style","value" => "style1"),                                
            ),         
            array(
                "type" => "sy_distance",
                "distance" => "padding",
                "heading" => "Icon Paddings",
                "param_name" => "testi_icon_padding",
                "defaults"=> array(
                    "top" => "6px",
                    "bottom" => "6px"
                ),
                'group' => 'Styling',
                "dependency" => Array("element" => "style","value" => "style1"),                
                "positions" => array(
                    __("Top","kameleon") => "top",
                    __("Bottom","kameleon") => "bottom",
                )
            ),

            array(
                "type" => "sy_distance",
                "distance" => "border",
                "heading" => "Icon Borders",
                "param_name" => "testi_icon_border",
                'group' => 'Styling',
                "dependency" => Array("element" => "style","value" => "style1"),                
                "positions" => array(
                    __("Top","kameleon") => "top",
                    __("Bottom","kameleon") => "bottom",               
                    __("Width","kameleon") => "width",
                )
            ),
            array(
                "type" => "colorpicker",
                "group" => "Styling", 
                "heading" => esc_html__( "Icon Border Color", "kameleon" ),
                "dependency" => Array("element" => "style","value" => "style1"),                
                "param_name" => "icon_b_color",
                'value' => "#eee"
            ),
            array(
                "type" => "number",
                "heading" => esc_html__( "Icon Size", "kameleon" ),
                "param_name" => "icon_size",
                "dependency" => Array("element" => "style","value" => "style1"),                
                "value" => 32,
                "group" => "Styling"   
            ),    
             array(
                "type" => "text",
                "heading" => '<h4 class="vc-param-h4">'.esc_html__('Picture Styling','kameleon').'</h4>',
                "param_name" => "testipic_text",
                "group" => "Styling",
                "dependency" => Array("element" => "style","value" => "style1"),                                
            ),           
            array(
                "type" => "sy_distance",
                "distance" => "padding",
                "heading" => "Picture Paddings",
                "param_name" => "testi_picture_padding",
                "defaults"=> array(
                    "top" => "6px",
                    "bottom" => "6px"
                ),
                'group' => 'Styling',
                "dependency" => Array("element" => "style","value" => "style1"),                
                "positions" => array(
                    __("Top","kameleon") => "top",
                    __("Bottom","kameleon") => "bottom",
                )
            ),
            array(
                "type" => "sy_distance",
                "distance" => "border",
                "heading" => "Picture Borders",
                "param_name" => "testi_picture_border",
                "defaults"=> array(
                    "width" => "50%",
                ),
                'group' => 'Styling',
                "dependency" => Array("element" => "style","value" => "style1"),                
                "positions" => array(
                    __("Top","kameleon") => "top",
                    __("Bottom","kameleon") => "bottom",
                    __("Through","kameleon") => "through",
                    __("Width","kameleon") => "width",
                )
            ),

            array(
                "type" => "colorpicker",
                "group" => "Styling", 
                "heading" => esc_html__( "Picture Border Color", "kameleon" ),
                "dependency" => Array("element" => "style","value" => "style1"),                
                "param_name" => "picture_b_color",
                'value' => "#eee"
            ),
             array(
                "type" => "text",
                "heading" => '<h4 class="vc-param-h4">'.esc_html__('Information Styling','kameleon').'</h4>',
                "param_name" => "testii_text",
                "group" => "Styling",
                "dependency" => Array("element" => "style","value" => "style1"),                                
            ),  
            array(
                "type" => "sy_distance",
                "distance" => "padding",
                "heading" => "Info Paddings",
                "param_name" => "testi_info_padding",
                "defaults"=> array(
                    "top" => "6px",
                    "bottom" => "6px"
                ),
                'group' => 'Styling',
                "dependency" => Array("element" => "style","value" => "style1"),                
                "positions" => array(
                    __("Top","kameleon") => "top",
                    __("Bottom","kameleon") => "bottom",
                )
            ),

            array(
                "type" => "sy_distance",
                "distance" => "border",
                "heading" => "Information Borders",
                "param_name" => "testi_info_border",
                'group' => 'Styling',
                "dependency" => Array("element" => "style","value" => "style1"),                
                "positions" => array(
                    __("Top","kameleon") => "top",
                    __("Bottom","kameleon") => "bottom",               
                    __("Width","kameleon") => "width",
                )
            ),
            array(
                "type" => "colorpicker",
                "group" => "Styling", 
                "heading" => esc_html__( "Information Border Color", "kameleon" ),
                "dependency" => Array("element" => "style","value" => "style1"),                
                "param_name" => "info_b_color",
                'value' => "#eee"
            ),


        )
    ));
} 
add_action( 'vc_before_init', 'sy_testmonial_shortcode' );

add_action( 'vc_before_init', 'sy_lineseparator_shortcode' );
function sy_lineseparator_shortcode() {
    vc_map( array(
        "name" => esc_html__( "Line Separator", "kameleon" ),
        "description" => esc_html__("Line Seperator with effects", "kameleon"),                 
        "base" => "sy_lineseparator",      
        "params" => array(                      
            array(
                "type" => "number",              
                "value" => 0,
                "heading" => esc_html__( "Line Height", "kameleon" ),
                "param_name" => "ls_height"
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Line Width ex (10px, 10%, 10em)", "kameleon" ),
                "param_name" => "ls_width"
            ),
             array(
                "type" => "colorpicker",             
                "heading" => esc_html__( "Line Color", "kameleon" ),
                "param_name" => "ls_color",
                'value' => "#333"
            ),
            array(
               "type" => "dropdown",
                "heading" => esc_html__( 'Line Alignement','kameleon'),
                "param_name" => "ls_alignement",           
                "value" => array(
                        "Center " => "center",
                        "Left " => "left",
                        "Right" => "right",
                ),                      
            ),
            array(
               "type" => "dropdown",
                "heading" => esc_html__( 'Style Effect','kameleon'),
                "param_name" => "ls_style",           
                "value" => array(
                        "None " => "none",
                        "From Center" => "from-center",
                        "From Left " => "from-left",
                        "From Right" => "from-right",
                        "From Top" => "from-top",
                        "From Bottom" => "from-bottom",
                ),                      
            ),
            array(
                "type" => "sy_distance",
                "distance" => "margin",
                "heading" => "Line Margins",
                "param_name" => "ls_margins",
                "defaults"=> array(
                    "top" => "0px",
                    "bottom" => "0px",
                    "left" => "0px",
                    "right" => "0px",
                ),                
                "positions" => array(
                    __("Top","kameleon") => "top",
                    __("Bottom","kameleon") => "bottom",
                    __("Left","kameleon") => "left",
                    __("Right","kameleon") => "right",
                )
            ),
        )
    ));
}

            

/*------------------------------------------------
            RADIAL PROGRESS  SHORTCODE
------------------------------------------------*/
function sy_radialprogress_shortcode() {
    vc_map( array(
        "name" => esc_html__( "Radial Progress", "kameleon" ),
        
        "description" => esc_html__("A Percentage radial progress with percentage animation", "kameleon"),                 
        "base" => "sy_radialprogress",      
        "params" => array(                      
            array(
                "type" => "number",
                "group" => "Content", 
                "max" => 100,
                "value" => 50,
                "heading" => esc_html__( "Percentage Value", "kameleon" ),
                "param_name" => "rad_percent"
            ),
            array(
               "type" => "dropdown",
                "heading" => esc_html__( 'Enable Icon','kameleon'),
                "param_name" => "rad_icon_enabled",           
                "value" => array(
                        "No" => "off",
                        "Yes" => "on",
                    ),         
                "group" => "Content",
            ),
            array(
               "type" => "dropdown",
                "heading" => esc_html__( 'Radial Style','kameleon'),
                "param_name" => "rad_style",           
                "value" => array(
                        "Icon Only " => "style1",
                        "Icon Top " => "style2",
                        "Icon Bottom" => "style3",
                        "Icon Letf" => "style4",
                        "Icon Right" => "style5",
                    ),      
                "dependency" => Array("element" => "rad_icon_enabled","value" => "on"),        
                "group" => "Content",
            ),
            array(
                "type" => "icon_manager",
                "class" => "",
                "heading" => __("Select Icon ","kameleon"),
                "param_name" => "rad_icon",
                "value" => "",
                "dependency" => Array("element" => "rad_icon_enabled","value" => "on"),        
                "description" => __("Click and select icon of your choice. If you can't find the one that suits for your purpose","kameleon").", ".__("you can","kameleon")." <a href='admin.php?page=bsf-font-icon-manager' target='_blank'>".__("add new here","kameleon")."</a>.",
                "group" => "Content",
            ),
            array(
                "type" => "number",
                "value" => 26,
                "group" => "Content", 
                "max" => 250,
                "dependency" => Array("element" => "rad_icon_enabled","value" => "on"),        
                "heading" => esc_html__( "Icon Size", "kameleon" ),
                "param_name" => "rad_icon_size"
            ),
            array(
                "type" => "colorpicker",
                "group" => "Content", 
                "value" => "#444",
                "dependency" => Array("element" => "rad_icon_enabled","value" => "on"),        
                "heading" => esc_html__( "Icon Color", "kameleon" ),
                "param_name" => "rad_icon_color"
            ),

            array(
                "type" => "colorpicker",
                "group" => "Content", 
                "value" => "#fafafe",
                "heading" => esc_html__( "Content Background Color", "kameleon" ),
                "param_name" => "content_bacground"
            ),
            array(
                "type" => "colorpicker",
                "value" => "#444",
                "group" => "Content", 
                "heading" => esc_html__( "Content Font Color", "kameleon" ),
                "param_name" => "content_color"
            ),  
             array(
                "type" => "number",
                "value" => 16,
                "group" => "Content", 
                "max" => 85,
                "heading" => esc_html__( "Content Font Size", "kameleon" ),
                "param_name" => "content_fontsize"
            ),

            array(
                "type" => "number",
                "group" => "Radial Circle", 
                "value" => 150,
                "max" => 650,
                "heading" => esc_html__( "Circle Size", "kameleon" ),
                "param_name" => "rad_size"
            ),

            array(
                "type" => "number",
                "group" => "Radial Circle", 
                "value" => 7,
                "max" => 90,
                "heading" => esc_html__( "Circle Border Size", "kameleon" ),
                "param_name" => "rad_border_size"
            ),

            array(
                "type" => "colorpicker",
                "value" => "#eee",
                "group" => "Radial Circle", 
                "heading" => esc_html__( "Border Color", "kameleon" ),
                "param_name" => "rad_border_color"
            ),

            array(
                "type" => "colorpicker",
                "value" => "#289fca",
                "group" => "Radial Circle", 
                "heading" => esc_html__( "Progress Border Color", "kameleon" ),
                "param_name" => "rad_color"
            ),
             array(
                "type" => "dropdown", 
                "group" => "Radial Circle",            
                "heading" => esc_html__("Alignement ", "kameleon"),
                "param_name" => "radial_position",
                "value" => "center",
                "value" => array(
                    esc_html__("Center","kameleon") => 'center',
                    esc_html__("Left","kameleon") => 'left',
                    esc_html__("Right","kameleon") => 'right',
                )

            ),
        )
    ));
} 
add_action( 'vc_before_init', 'sy_radialprogress_shortcode' );



/*------------------------------------------------
                POST GRID SHORTCODE
------------------------------------------------*/
function sy_postgrid_shortcode() {
    vc_map( array(
        "name" => esc_html__( "Post Grid", "kameleon" ),
        
        "description" => esc_html__("Blog Posts list in a grid layout", "kameleon"),         
        "base" => "sy_postgrid",      
        "params" => array(                   
            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Post Grid Type",'kameleon'),
                'group' => 'General',
                'param_name' => 'pg_gr_type',
                'value' => array(                    
                    esc_html__("List",'kameleon') => 'list',
                    esc_html__("Single",'kameleon')  => 'single'
                )            
            ),
             array(
                "type" => "sy_search",          
                "heading" => esc_html__( "Search Post By Title", "kameleon" ),
                'group' => 'General',
                "param_name" => "pg_psingle_id",                
                "item_type" => "post",                
                "dependency" => Array("element" => "pg_gr_type","value" => array("single")),                
            ),
            array(
                "type" => "number",          
                "heading" => esc_html__( "Number of Posts to Show", "kameleon" ),
                'group' => 'General',
                "param_name" => "pg_number",
                "value" => 8,
                "dependency" => Array("element" => "pg_gr_type","value" => array("list")),                
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Columns Number",'kameleon'),
                'group' => 'General',
                'param_name' => 'pg_columns_number',
                "dependency" => Array("element" => "pg_gr_type","value" => array("list")),  
                'value' => array(                    
                    esc_html__("4 Columns",'kameleon') => 'syp-item-4',
                    esc_html__("1 Column",'kameleon')  => 'syp-item-1',
                    esc_html__("2 Columns",'kameleon') => 'syp-item-2',
                    esc_html__("3 Columns",'kameleon') => 'syp-item-3',
                    esc_html__("5 Columns",'kameleon') => 'syp-item-5'
                )            
            ),

            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Post Grid Style",'kameleon'),
                'group' => 'General',
                'param_name' => 'pg_style',
                'value' => array(                    
                    esc_html__("Style 1",'kameleon') => 'style1',
                    esc_html__("Style 2",'kameleon')  => 'style2',
                    esc_html__("Style 3",'kameleon')  => 'style3',
                    esc_html__("Style 4",'kameleon')  => 'style4'
                )            
            ),

            array(
                "type" => "number",          
                "heading" => esc_html__( "Padding Left & Right", "kameleon" ),
                'group' => 'General',
                "param_name" => "pg_paddingleftright",
                "value" => 30,
                "dependency" => Array("element" => "pg_style","value" => array("style2","style3")),
            ),

            array(
                "type" => "number",          
                "heading" => esc_html__( "Padding Top & Bottom", "kameleon" ),
                'group' => 'General',
                "param_name" => "pg_paddingtopbottom",
                "value" => 30,
                "dependency" => Array("element" => "pg_style","value" => array("style2","style3")),
            ),

             array(
                "type" => "number",          
                "heading" => esc_html__( "Image Avatar Radius", "kameleon" ),
                'group' => 'General',
                "param_name" => "pg_usrbradius",
                "value" => 0,
                "dependency" => Array("element" => "pg_style","value" => array("style2","style3","style4")),
            ),

            array(
                "type" => "dropdown",            
                "heading" => esc_html__("Enable Gutter", "kameleon"),
                'group' => 'General',
                "param_name" => "pg_gutter",
                "value" => array(
                    esc_html__("Yes","kameleon") => 'true',
                    esc_html__("No","kameleon") => 'false',
                )
            ),

            array(
                "type" => "number",          
                "heading" => esc_html__( "Excerpt Char Number", "kameleon" ),
                'group' => 'General',
                "param_name" => "pg_excerpt_num",
                "value" => 150
            ),    

            array(
                "type" => "number",          
                "heading" => esc_html__( "Border Radius", "kameleon" ),
                'group' => 'General',
                "param_name" => "pg_border_radius",
                "dependency" => Array("element" => "pg_style","value" => array("style1","style2","style3")),
                "value" => 0
            ),    


            array(
                "type" => "colorpicker",
                "value" => "#fff",
                "group" => "Font & Colors", 
                "heading" => esc_html__( "Post Background Color", "kameleon" ),
                "param_name" => "pg_background"
            ),  

            array(
                "type" => "colorpicker",
                "value" => "#f1f1f1",
                "group" => "Font & Colors", 
                "heading" => esc_html__( "Post Container Border Color", "kameleon" ),
                "dependency" => Array("element" => "pg_style","value" => array("style1","style2","style3")),
                "param_name" => "pg_border"
            ),  
            array(
                "type" => "number",          
                "heading" => esc_html__( "Post Container Border Thickness", "kameleon" ),
                'group' => 'Font & Colors',
                "param_name" => "pg_border_thickness",
                "dependency" => Array("element" => "pg_style","value" => array("style1","style2","style3")),
                "value" => 1,
                "max" => 10
            ),


            array(
                "type" => "colorpicker",
                "value" => "#fafafa",
                "group" => "Font & Colors", 
                "heading" => esc_html__( "Post Border Inside Color", "kameleon" ),
                "dependency" => Array("element" => "pg_style","value" => array("style1","style2","style3")),
                "param_name" => "pg_border_inside"
            ), 
            array(
                "type" => "number",          
                "heading" => esc_html__( "Post Border Inside Thickness", "kameleon" ),
                'group' => 'Font & Colors',
                "param_name" => "pg_border_inside_thickness",
                "dependency" => Array("element" => "pg_style","value" => array("style1","style2","style3")),
                "value" => 1,
                "max" => 10
            ),
 
            array(
                "type" => "ult_param_heading",
                "param_name" => "pg_title_typography",
                "heading" => __("Title Font Settings","kameleon"),
                "value" => "",
                "group" => "Font & Colors",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "pg_title_font",
                "heading" => __("Font Family","kameleon"),
                "value" => "",
                "group" => "Font & Colors"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "pg_title_style",
                "heading" => __("Font Style","kameleon"),
                "value" => "",
                "group" => "Font & Colors"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "pg_title_size",
                "group" => "Font & Colors",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "19", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),  
            array(
                "type" => "colorpicker",
                "value" => "#444",
                "group" => "Font & Colors", 
                "heading" => esc_html__( "Post Title Color", "kameleon" ),
                "param_name" => "pg_title_color"
            ),  

            array(
                "type" => "ult_param_heading",
                "param_name" => "pg_excerpt_typography",
                "heading" => __("Title Font Settings","kameleon"),
                "value" => "",
                "group" => "Font & Colors",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "pg_excerpt_font",
                "heading" => __("Font Family","kameleon"),
                "value" => "",
                "group" => "Font & Colors"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "pg_excerpt_style",
                "heading" => __("Font Style","kameleon"),
                "value" => "",
                "group" => "Font & Colors"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "pg_excerpt_size",
                "group" => "Font & Colors",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "15", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),  

            array(
                "type" => "colorpicker",
                "value" => "#777",
                "group" => "Font & Colors", 
                "heading" => esc_html__( "Excerpt Font Color", "kameleon" ),
                "param_name" => "pg_excerpt_color"
            ),            
            
             array(
                "type" => "dropdown",  
                "multiple" => 1,        
                "heading" => esc_html__( "Sort Order : ", "kameleon" ),
                'group' => 'Query Options',
                "param_name" => "pg_order",
                "dependency" => Array("element" => "pg_gr_type","value" => array("list")),  
                "default" => 'DESC',
                "value" => array(
                    esc_html__("Descending","kameleon") => 'DESC',
                    esc_html__("Ascending","kameleon") => 'ASC',
                )
            ),

            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Order by', 'kameleon' ),
                'group' => 'Query Options',
                'param_name' => 'pg_order_by',
                "dependency" => Array("element" => "pg_gr_type","value" => array("list")),  
                'value' => array(
                    esc_html__( 'Date', 'kameleon' ) => 'date',
                    esc_html__( 'Order by post ID', 'kameleon' ) => 'ID',
                    esc_html__( 'Author', 'kameleon' ) => 'author',
                    esc_html__( 'Title', 'kameleon' ) => 'title',
                    esc_html__( 'Number of comments', 'kameleon' ) => 'comment_count'                   
                )               
            ),

        )
    ));
} 
add_action( 'vc_before_init', 'sy_postgrid_shortcode' );

/*------------------------------------------------
         Hover Image  SHORTCODE
------------------------------------------------*/
function sy_hoverimage_shortcode() {
     vc_map( array(
        "name" => esc_html__( "Hover Single Image", "kameleon" ),
        
        "description" => esc_html__("Single Image with hover effect and link", "kameleon"),         
        "base" => "sy_hoverimage",      
        "params" => array(                   
            array(
                "type" => "attach_image",
                'group' => 'General',
                "heading" => esc_html__( "Upload Image", "kameleon" ),
                "param_name" => "hover_image_image"
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Image Hover Style', 'kameleon' ),
                'group' => 'General',
                'param_name' => 'hover_image_style',
                'value' => array(
                    esc_html__( 'Style 1','kameleon') => 'style1',
                    esc_html__( 'Style 2','kameleon') => 'style2',
                    esc_html__( 'Style 3','kameleon') => 'style3',
                    esc_html__( 'Style 4','kameleon') => 'style4',
                    esc_html__( 'Style 5','kameleon') => 'style5'
                )               
            ),
            array(
               "type" => "dropdown",
                "heading" => esc_html__( 'Enable Box Shadow','kameleon'),
                "param_name" => "hover_image_bxshadow_enabled",           
                "value" => array(
                        "No" => "off",
                        "Yes" => "on",
                    ),         
                "group" => "General",
            ),
             array(
               "type" => "dropdown",
                "heading" => esc_html__( 'Enable Box Shadow On Hover','kameleon'),
                "param_name" => "hover_image_bxshadow_hover_enabled",          
                "value" => array(
                        "Yes" => "on",
                        "No" => "off",
                    ),         
                "group" => "General",
            ),
            
            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Box Shadow Style', 'kameleon' ),
                'group' => 'General',
                'param_name' => 'hover_image_bxshadow_style',                
                'value' => array(
                    esc_html__( 'Style 1','kameleon') => 'style1',
                    esc_html__( 'Style 2','kameleon') => 'style2',
                    esc_html__( 'Style 3','kameleon') => 'style3',
                    esc_html__( 'Style 4','kameleon') => 'style4',
                    esc_html__( 'Style 5','kameleon') => 'style5',
                    esc_html__( 'Style 6','kameleon') => 'style6',
                    esc_html__( 'Style 7','kameleon') => 'style7',
                    esc_html__( 'Style 8`','kameleon') => 'style8',
                    esc_html__( 'Style 9','kameleon') => 'style9'
                )               
            ),
            array(
                "type" => "colorpicker",
                "value" => "rgba(0,0,0,0.8)",
                "group" => "General", 
                "heading" => esc_html__( "Box Shadow Color", "kameleon" ),
                "param_name" => "hover_image_bxshadow_color"
            ), 

            array(
                "type" => "colorpicker",
                "value" => "#fff",
                "group" => "General", 
                "heading" => esc_html__( "Element Backgound", "kameleon" ),
                "param_name" => "hover_image_background"
            ),  
            array(
                "type" => "number",          
                "heading" => esc_html__( "Border Width", "kameleon" ),
                'group' => 'General',
                "param_name" => "hover_image_border_width",
                "value" => 0
            ),
            array(
                "type" => "colorpicker",
                "value" => "transparent",
                "group" => "General", 
                "heading" => esc_html__( "Border Color", "kameleon" ),
                "param_name" => "hover_image_border_color"
            ),  
             array(
               "type" => "dropdown",
                 "heading" => esc_html__( 'Enable Image Overlay','kameleon'),
                "param_name" => "hover_image_overlay_enabled",          
                "value" => array(
                        "Yes" => "on",
                        "No" => "off",
                    ),         
                "group" => "General",
            ),
            array(
                "type" => "colorpicker",
                "value" => "rgba(0,0,0,0.5)",
                "dependency" => Array("element" => "hover_image_overlay_enabled","value" => array("on")),                
                "group" => "General", 
                "heading" => esc_html__( "Image Overlay Backgound Color", "kameleon" ),
                "param_name" => "hover_image_overlay_bg"
            ),  
            array(
                "type" => "textfield",
                "group" => "General", 
                "heading" => esc_html__( "Image Link", "kameleon" ),
                "param_name" => "hover_image_link"
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Open Link In', 'kameleon' ),
                'group' => 'General',
                'param_name' => 'hover_image_link_target',
                'value' => array(
                    esc_html__( 'New Tab','kameleon') => '_blank',
                    esc_html__( 'Same Window','kameleon') => '_self'
                )               
            ),
            array(
                "type" => "textfield",
                "group" => "General", 
                "heading" => esc_html__( "Images Classes", "kameleon" ),
                "description" => esc_html__( "Add new classes sperated by (space)", "kameleon" ),
                "param_name" => "hover_image_classes"
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( 'Enable Button','kameleon'),
                "param_name" => "hover_image_button_enabled",         
                "value" => array(
                        "Yes" => "on",
                        "No" => "off",
                    ),         
                "group" => "Button",
            ),

            array(
                "type" => "colorpicker",
                "value" => "#fff",
                "group" => "Button", 
                "heading" => esc_html__( "Text Color", "kameleon" ),
                "dependency" => Array("element" => "hover_image_button_enabled","value" => array("on")),                                
                "param_name" => "hover_image_button_color"
            ), 
             array(
                "type" => "number",          
                "heading" => esc_html__( "Button Height (px)", "kameleon" ),
                "dependency" => Array("element" => "hover_image_button_enabled","value" => array("on")),                                
                'group' => 'Button',
                "param_name" => "hover_image_button_height",
                "value" => 32
            ),

             array(
                "type" => "colorpicker",
                "value" => "#121212",
                "group" => "Button", 
                "heading" => esc_html__( "Button Backgound Color", "kameleon" ),
                "dependency" => Array("element" => "hover_image_button_enabled","value" => array("on")),                                
                "param_name" => "hover_image_button_bg"
            ),  
            array(
                "type" => "textfield",
                "group" => "Button", 
                "value" => "Go Button",
                "heading" => esc_html__( "Button Text", "kameleon" ),
                "dependency" => Array("element" => "hover_image_button_enabled","value" => array("on")),                                
                "param_name" => "hover_image_button_text"
            ),
            
            array(
                "type" => "dropdown",
               "heading" => esc_html__( 'Enable Information Area','kameleon'),
                "param_name" => "hover_image_info_enabled",       
                "value" => array(
                        "Yes" => "on",
                        "No" => "off",
                    ),         
                "group" => "Information",
            ),
       

            array(
                "type" => "textfield",
                "group" => "Information", 
                "value" => "My Title",
                "dependency" => Array("element" => "hover_image_info_enabled","value" => array("on")),                                                
                "heading" => esc_html__( "Title", "kameleon" ),
                "param_name" => "hover_image_title"
            ), 
            
            

             array(
                "type" => "ult_param_heading",
                "param_name" => "himg_title_typography",
                "dependency" => Array("element" => "hover_image_info_enabled","value" => array("on")),                                                
                "heading" => __("Title Font Settings","kameleon"),
                "value" => "",
                "group" => "Typography",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "himg_title_font",
                "dependency" => Array("element" => "hover_image_info_enabled","value" => array("on")),                                                
                "heading" => __("Font Family","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "himg_title_style",
                "dependency" => Array("element" => "hover_image_info_enabled","value" => array("on")),                                                
                "heading" => __("Font Style","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "himg_title_size",
                "group" => "Typography",                 
                "dependency" => Array("element" => "hover_image_info_enabled","value" => array("on")),                                                
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "16", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),  
            array(
                "type" => "colorpicker",
                "value" => "#333",
                "group" => "Typography",
                "dependency" => Array("element" => "hover_image_info_enabled","value" => array("on")),   
                "heading" => esc_html__( "Title Color", "kameleon" ),
                "param_name" => "hover_image_title_color"
            ), 
             array(
                "type" => "dropdown",
                "heading" => esc_html__( 'Enable SubTitle','kameleon'),
                "dependency" => Array("element" => "hover_image_info_enabled","value" => array("on")),  
                "param_name" => "hover_image_info_subtitle_enabled",    
                "value" => array(
                        "Yes" => "on",
                        "No" => "off",
                    ),         
                "group" => "Information",
            ),
            
            array(
                "type" => "textfield",
                "group" => "Information", 
                "value" => "My Title",
                "dependency" => Array("element" => "hover_image_info_enabled","value" => array("on")),  
                "heading" => esc_html__( "SubTitle", "kameleon" ),
                "param_name" => "hover_image_subtitle"
            ), 
            
            
            
            array(
                "type" => "ult_param_heading",
                "param_name" => "himg_subtitle_typography",
                "dependency" => Array("element" => "hover_image_info_enabled","value" => array("on")),                                                
                "heading" => __("Sub-Title Font Settings","kameleon"),
                "value" => "",
                "group" => "Typography",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "himg_subtitle_font",
                "dependency" => Array("element" => "hover_image_info_enabled","value" => array("on")),                                                
                "heading" => __("Font Family","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "himg_subtitle_style",
                "dependency" => Array("element" => "hover_image_info_enabled","value" => array("on")),                                                
                "heading" => __("Font Style","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "himg_subtitle_size",
                "group" => "Typography",                 
                "dependency" => Array("element" => "hover_image_info_enabled","value" => array("on")),                                                
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "14", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),  
            array(
                "type" => "colorpicker",
                "value" => "#777",
                "group" => "Typography", 
                "dependency" => Array("element" => "hover_image_info_enabled","value" => array("on")),  
                "heading" => esc_html__( "SubTitle Color", "kameleon" ),
                "param_name" => "hover_image_subtitle_color"
            ), 

             array(
                "type" => "ult_param_heading",
                "param_name" => "himbutton_button_typography",
                "heading" => __("Button Font Settings","kameleon"),
                "dependency" => Array("element" => "hover_image_button_enabled","value" => array("on")),                                
                "value" => "",
                "group" => "Typography",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "himg_button_font",
                "dependency" => Array("element" => "hover_image_button_enabled","value" => array("on")),                                
                "heading" => __("Font Family","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "dependency" => Array("element" => "hover_image_button_enabled","value" => array("on")),                                
                "param_name" => "himg_button_style",
                "heading" => __("Font Style","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "himg_button_size",
                "dependency" => Array("element" => "hover_image_button_enabled","value" => array("on")),                                
                "group" => "Typography",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "15", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),  
            
             array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Text Align', 'kameleon' ),
                'group' => 'Information',
                "dependency" => Array("element" => "hover_image_info_enabled","value" => array("on")),  
                'param_name' => 'hover_image_info_align',
                'value' => array(
                    esc_html__( 'Center','kameleon') => 'center',
                    esc_html__( 'Left','kameleon') => 'left',
                    esc_html__( 'Right','kameleon') => 'right'
                )               
            ),
            array(
                "type" => "sy_distance",
                "distance" => "margin",
                "heading" => "Element Margins",
                "param_name" => "hover_image_el_margin",
                "defaults"=> array(
                    "top" => "20px",
                    "bottom" => "50px"
                ),
                'group' => 'Margins',
                "positions" => array(
                    __("Top","kameleon") => "top",
                    __("Bottom","kameleon") => "bottom",
                )
            ),

        )
    )
    );
 }

add_action( 'vc_before_init', 'sy_hoverimage_shortcode' );

/*------------------------------------------------
         Hover Image  SHORTCODE
------------------------------------------------*/

function sy_beforeafterimage_shortcode() {
     vc_map( array(
        "name" => esc_html__( "Before / After Image", "kameleon" ),
        
        "description" => esc_html__("Single Image with hover effect and link", "kameleon"),         
        "base" => "sy_beforeafterimage",      
        "params" => array(                   
            array(
                "type" => "attach_image",
                'group' => 'General',
                "heading" => esc_html__( "Before Image", "kameleon" ),
                "param_name" => "before_image"
            ),
            array(
                "type" => "attach_image",
                'group' => 'General',
                "heading" => esc_html__( "After Image", "kameleon" ),
                "param_name" => "after_image"
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Choose Orientation', 'kameleon' ),
                'group' => 'General',                
                'param_name' => 'bai_orientation',
                'value' => array(
                    esc_html__( 'Horizontal','kameleon') => 'horizontal',
                    esc_html__( 'Vertical','kameleon') => 'vertical'
                )               
            ),
            array(
                "type" => "colorpicker",
                "value" => "#fff",
                "group" => "General", 
                "heading" => esc_html__( "Handle Color Scheme", "kameleon" ),
                "param_name" => "bai_colorscheme"
            ), 
            array(
               "type" => "dropdown",
                "heading" => esc_html__( 'Enable Box Shadow','kameleon'),
                "param_name" => "bai_boxshadow_enabled",           
                "value" => array(
                        "No" => "off",
                        "Yes" => "on",
                    ),         
                "group" => "General",
            ),
             array(
               "type" => "dropdown",
                "heading" => esc_html__( 'Enable Box Shadow On Hover','kameleon'),
                "param_name" => "bai_boxshadow_hover_enabled",          
                "value" => array(
                        "Yes" => "on",
                        "No" => "off",
                    ),         
                "group" => "General",
            ),
            
            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Box Shadow Style', 'kameleon' ),
                'group' => 'General',
                'param_name' => 'bai_boxshadow_style',                
                'value' => array(
                    esc_html__( 'Style 1','kameleon') => 'style1',
                    esc_html__( 'Style 2','kameleon') => 'style2',
                    esc_html__( 'Style 3','kameleon') => 'style3',
                    esc_html__( 'Style 4','kameleon') => 'style4',
                    esc_html__( 'Style 5','kameleon') => 'style5',
                    esc_html__( 'Style 6','kameleon') => 'style6',
                    esc_html__( 'Style 7','kameleon') => 'style7',
                    esc_html__( 'Style 8`','kameleon') => 'style8',
                    esc_html__( 'Style 9','kameleon') => 'style9'
                )               
            ),
            array(
                "type" => "colorpicker",
                "value" => "rgba(0,0,0,0.8)",
                "group" => "General", 
                "heading" => esc_html__( "Box Shadow Color", "kameleon" ),
                "param_name" => "bai_boxshadow_color"
            ), 

            array(
               "type" => "dropdown",
                "heading" => esc_html__( 'Enable Overlay','kameleon'),
                "param_name" => "bai_overlay_enabled",          
                "value" => array(
                        "Yes" => "on",
                        "No" => "off",
                    ),         
                "group" => "Overlay",
            ),
            array(
                "type" => "colorpicker",
                "value" => "rgba(0,0,0,0.5)",
                "group" => "Overlay", 
                "heading" => esc_html__( "Overlay Backgound", "kameleon" ),
                "dependency" => Array("element" => "bai_overlay_enabled","value" => array("on")),                  
                "param_name" => "bai_overlay_bg"
            ), 
            array(
                "type" => "colorpicker",
                "value" => "#269ac1",
                "group" => "Overlay", 
                "heading" => esc_html__( "Before / After Backgound", "kameleon" ),
                "dependency" => Array("element" => "bai_overlay_enabled","value" => array("on")),                  
                "param_name" => "bai_overlay_button_bg"
            ),             
            array(
                "type" => "colorpicker",
                "value" => "#fff",
                "group" => "Overlay", 
                "heading" => esc_html__( "Before / After Color", "kameleon" ),
                "dependency" => Array("element" => "bai_overlay_enabled","value" => array("on")),                  
                "param_name" => "bai_overlay_button_color"
            ),

            array(
                "type" => "sy_distance",
                "distance" => "margin",
                "heading" => "Element Margins",
                "param_name" => "bai_margin",
                "defaults"=> array(
                    "top" => "20px",
                    "bottom" => "50px"
                ),
                'group' => 'Margins',
                "positions" => array(
                    __("Top","kameleon") => "top",
                    __("Bottom","kameleon") => "bottom",
                )
            ),
            
            array(
                "type" => "number",          
                "heading" => esc_html__( "Border (px)", "kameleon" ),
                'group' => 'Margins',
                "param_name" => "bai_border",
                "value" => 0
            ),
            array(
                "type" => "colorpicker",
                "value" => "transparent",
                "group" => "Margins", 
                "heading" => esc_html__( "Border Color", "kameleon" ),          
                "param_name" => "bai_border_color"
            ),
              
    
        )
    ));
}  
add_action( 'vc_before_init', 'sy_beforeafterimage_shortcode' );



/*------------------------------------------------
         WooCommerce Modern SHORTCODE
------------------------------------------------*/
if(is_plugin_active('woocommerce/woocommerce.php')){
function sy_wooitemmodern_shortcode() {
     vc_map( array(
        "name" => esc_html__( "Woo Modern Products", "kameleon" ),
        
        "description" => esc_html__("WooCommerce Product items in modern design with cool effects", "kameleon"),         
        "base" => "sy_wooitemmodern",      
        "params" => array(                   
            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Products Type",'kameleon'),
                'group' => 'General',
                'param_name' => 'wooitem_type',
                'value' => array(                    
                    esc_html__("List",'kameleon') => 'list',
                    esc_html__("Single",'kameleon')  => 'single'
                )            
            ),
             array(
                "type" => "sy_search",          
                "heading" => esc_html__( "Search Product By Name", "kameleon" ),
                'group' => 'General',
                "param_name" => "wooitem_psingle_id",                
                "item_type" => "product",                
                "dependency" => Array("element" => "wooitem_type","value" => array("single")),                
            ),
            array(
                "type" => "number",          
                "heading" => esc_html__( "Number of Products to Show", "kameleon" ),
                'group' => 'General',
                "param_name" => "wooitem_number",
                "value" => 8,
                "dependency" => Array("element" => "wooitem_type","value" => array("list")),                
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Columns Number",'kameleon'),
                'group' => 'General',
                'param_name' => 'wooitem_columns_number',
                "dependency" => Array("element" => "wooitem_type","value" => array("list")),  
                'value' => array(                    
                    esc_html__("4 Columns",'kameleon') => 'syp-item-4',
                    esc_html__("1 Column",'kameleon')  => 'syp-item-1',
                    esc_html__("2 Columns",'kameleon') => 'syp-item-2',
                    esc_html__("3 Columns",'kameleon') => 'syp-item-3',
                    esc_html__("5 Columns",'kameleon') => 'syp-item-5'
                )            
            ),

            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Product Design Style",'kameleon'),
                'group' => 'General',
                'param_name' => 'wooitem_style',           
                'value' => array(                    
                    esc_html__("Style 1",'kameleon') => 'style1',
                    esc_html__("Style 2",'kameleon') => 'style2',
                )            
            ),

            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Enable Gutter",'kameleon'),
                'group' => 'General',
                'param_name' => 'wooitem_gutter',           
                'value' => array(                    
                    esc_html__("Yes",'kameleon') => 'true',
                    esc_html__("No",'kameleon') => 'false',
                )            
            ),

            array(
                "type" => "colorpicker",
                "value" => "rgba(0,0,0,0.8)",
                "group" => "Styling", 
                "heading" => esc_html__( "Hover Overlay Background", "kameleon" ),
                "param_name" => "wooitem_overlay_background"
            ),  

            array(
                "type" => "ult_param_heading",
                "param_name" => "wooitem_text_typography",
                "heading" => __("Title Font Settings","kameleon"),
                "value" => "",
                "group" => "Typography",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "wooitem_title_font",
                "heading" => __("Font Family","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "wooitem_title_style",
                "heading" => __("Font Style","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "wooitem_title_size",
                "group" => "Typography",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "19", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),  
            array(
                "type" => "colorpicker",
                "value" => "#fff",
                "group" => "Typography", 
                "heading" => esc_html__( "Title Font Color", "kameleon" ),
                "param_name" => "wooitem_title_color"
            ), 

            array(
                "type" => "ult_param_heading",
                "param_name" => "wooitem_subtext_typography",
                "heading" => __("SubTitle Font Settings","kameleon"),
                "value" => "",
                "group" => "Typography",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "wooitem_subtitle_font",
                "heading" => __("Font Family","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "wooitem_subtitle_style",
                "heading" => __("Font Style","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "wooitem_subtitle_size",
                "group" => "Typography",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "14", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),


            array(
                "type" => "colorpicker",
                "value" => "#aaa",
                "group" => "Typography", 
                "heading" => esc_html__( "SubTitle Font Color", "kameleon" ),
                "param_name" => "wooitem_cats_color"
            ),   
            

            array(
                "type" => "ult_param_heading",
                "param_name" => "wooitem_price_typography",
                "heading" => __("Price Font Settings","kameleon"),
                "value" => "",
                "group" => "Typography",
                'edit_field_class' => 'ult-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                "type" => "ultimate_google_fonts",
                "param_name" => "wooitem_price_font",
                "heading" => __("Font Family","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "ultimate_google_fonts_style",
                "param_name" => "wooitem_price_style",
                "heading" => __("Font Style","kameleon"),
                "value" => "",
                "group" => "Typography"
            ),
            array(
                "type" => "sy_fontsize",
                "param_name" => "wooitem_price_size",
                "group" => "Typography",                 
                "heading" => esc_html__( "Font Size", "kameleon" ),
                "defaults"=> array("font-size" => "17", "line-height" => "", "letter-spacing" => "",),
                'elements'  => array(
                    __("Font Size","kameleon") => "font-size",
                    __("Line Height","kameleon") => "line-height",
                    __("Letter Spacing","kameleon") => "letter-spacing",                
                )
            ),   

             array(
                "type" => "colorpicker",
                "value" => "#fff",
                "group" => "Typography", 
                "heading" => esc_html__( "Hover Border Color Effect", "kameleon" ),
                "param_name" => "wooitem_border_decoration"
            ),           
  
           
          
            array(
                "type" => "dropdown",  
                "multiple" => 1,        
                "heading" => esc_html__( "Sort Order : ", "kameleon" ),
                'group' => 'Query Options',
                "param_name" => "wooitem_order",
                "dependency" => Array("element" => "wooitem_type","value" => array("list")),  
                "default" => 'DESC',
                "value" => array(
                    esc_html__("Descending","kameleon") => 'DESC',
                    esc_html__("Ascending","kameleon") => 'ASC',
                )
            ),

            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Order by', 'kameleon' ),
                'group' => 'Query Options',
                'param_name' => 'wooitem_order_by',
                "dependency" => Array("element" => "wooitem_type","value" => array("list")),  
                'value' => array(
                    esc_html__( 'Date', 'kameleon' ) => 'date',
                    esc_html__( 'Order by product ID', 'kameleon' ) => 'ID',
                    esc_html__( 'Author', 'kameleon' ) => 'author',
                    esc_html__( 'Title', 'kameleon' ) => 'title',
                    esc_html__( 'Number of comments', 'kameleon' ) => 'comment_count'                   
                )               
            ),

        )
      )
    );
}

    add_action( 'vc_before_init', 'sy_wooitemmodern_shortcode' );
}



/*------------------------------------------------
         WooCommerce List  SHORTCODE
------------------------------------------------*/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
function sy_wooitemlist_shortcode() {
     vc_map( array(
        "name" => esc_html__( "Woo Products List", "kameleon" ),
        "description" => esc_html__("WooCommerce Product items list", "kameleon"),         
        "base" => "sy_wooitemlist",      
        "params" => array(                   
            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Products Type",'kameleon'),
                'group' => 'General',
                'param_name' => 'wooitemlist_type',
                'value' => array(                    
                    esc_html__("List",'kameleon') => 'list',
                    esc_html__("Single",'kameleon')  => 'single'
                )            
            ),
             array(
                "type" => "sy_search",          
                "heading" => esc_html__( "Search Product By Name", "kameleon" ),
                'group' => 'General',
                "param_name" => "wooitemlist_psingle_id",                
                "item_type" => "product",                
                "dependency" => Array("element" => "wooitemlist_type","value" => array("single")),                
            ),
            array(
                "type" => "number",          
                "heading" => esc_html__( "Number of Products to Show", "kameleon" ),
                'group' => 'General',
                "param_name" => "wooitemlist_number",
                "value" => 8,
                "dependency" => Array("element" => "wooitemlist_type","value" => array("list")),                
            ),

            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Columns Number",'kameleon'),
                'group' => 'General',
                'param_name' => 'wooitemlist_columns_number',
                "dependency" => Array("element" => "wooitemlist_type","value" => array("list")),  
                'value' => array(                    
                    esc_html__("4 Columns",'kameleon') => 'syp-item-4',
                    esc_html__("1 Column",'kameleon')  => 'syp-item-1',
                    esc_html__("2 Columns",'kameleon') => 'syp-item-2',
                    esc_html__("3 Columns",'kameleon') => 'syp-item-3',
                    esc_html__("5 Columns",'kameleon') => 'syp-item-5'
                )            
            ),
             
            array(
                'type' => 'dropdown',
                'heading' => esc_html__("Enable Gutter",'kameleon'),
                'group' => 'General',
                'param_name' => 'wooitemlist_gutter',           
                'value' => array(                    
                    esc_html__("Yes",'kameleon') => 'true',
                    esc_html__("No",'kameleon') => 'false',
                )            
            ),
            array(
                "type" => "colorpicker",
                "value" => "#111",
                "group" => "Styling", 
                "heading" => esc_html__( "Color Scheme", "kameleon" ),
                "param_name" => "wooitemlist_color_scheme"
            ), 
            array(
                "type" => "colorpicker",
                "value" => "#fff",
                "group" => "Styling", 
                "heading" => esc_html__( "Font Color", "kameleon" ),
                "param_name" => "wooitemlist_font_color"
            ), 
            array(
                "type" => "dropdown",  
                "multiple" => 1,        
                "heading" => esc_html__( "Sort Order : ", "kameleon" ),
                'group' => 'Query Options',
                "param_name" => "wooitemlist_order",
                "dependency" => Array("element" => "wooitemlist_type","value" => array("list")),  
                "default" => 'DESC',
                "value" => array(
                    esc_html__("Descending","kameleon") => 'DESC',
                    esc_html__("Ascending","kameleon") => 'ASC',
                )
            ),

            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Order by', 'kameleon' ),
                'group' => 'Query Options',
                'param_name' => 'wooitemlist_order_by',
                "dependency" => Array("element" => "wooitemlist_type","value" => array("list")),  
                'value' => array(
                    esc_html__( 'Date', 'kameleon' ) => 'date',
                    esc_html__( 'Order by product ID', 'kameleon' ) => 'ID',
                    esc_html__( 'Author', 'kameleon' ) => 'author',
                    esc_html__( 'Title', 'kameleon' ) => 'title',
                    esc_html__( 'Number of comments', 'kameleon' ) => 'comment_count'                   
                )               
            ),

        )
      )
    );
}   
    add_action( 'vc_before_init', 'sy_wooitemlist_shortcode' );
}


/*------------------------------------------------
         CONTACT FORM 7 SHORTCODE
------------------------------------------------*/
if(is_plugin_active('contact-form-7/wp-contact-form-7.php')){
    function sy_cf7_shortcode(){
        vc_map( array(
            "name" => esc_html__( "Contat Form 7", "kameleon" ),
            "description" => esc_html__("Contact Form 7 Element", "kameleon"),         
            "base" => "sy_cf7",      
            "params" => array(                   
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__("Select Contact Form",'kameleon'),                  
                    'param_name' => 'cf7_id',
                    'value' => kameleon_cf7_forms()          
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__("Select CF7 Style",'kameleon'),                  
                    'param_name' => 'cf7_style',
                    'value' => kameleon_cf7_styles()          
                ),            
            )
        ));        
    }
   add_action( 'vc_before_init', 'sy_cf7_shortcode' ); 
}



//Custom ROW & COLUMNS Params for Kameleon Theme
$responsive_options_padding = array(
    esc_html__( 'None', 'kameleon' ) => 'sy_pnone',
    esc_html__( 'Remove Padding Left', 'kameleon' ) => 'sy_rm_pleft',
    esc_html__( 'Remove Padding Right', 'kameleon' ) => 'sy_rm_pright',
    __( 'Remove Padding Left & Right', 'kameleon' ) => 'sy_rm_pall'   
);
$responsive_options_margin = array(
    esc_html__( 'None', 'kameleon' ) => 'sy_mnone',
    esc_html__( 'Remove Margin Left', 'kameleon' ) => 'sy_rm_mleft',
    esc_html__( 'Remove Margin Right', 'kameleon' ) => 'sy_rm_mright',
    __( 'Remove Margin Left & Right', 'kameleon' ) => 'sy_rm_mall',   
);
$responsive_options_border = array(
    esc_html__( 'None', 'kameleon' ) => 'sy_bnone',
    esc_html__( 'Remove Border Left', 'kameleon' ) => 'sy_rm_bleft',
    esc_html__( 'Remove Border Right', 'kameleon' ) => 'sy_rm_bright',
    __( 'Remove Border Left & Right', 'kameleon' ) => 'sy_rm_ball',
);


$attributes_padding = array(
    'type'          => 'dropdown',
    'heading'       => esc_html__('Responsive Paddings Action','kameleon'),
    'param_name'    => 'sy_presponsive',
    'group'         => 'Responsive Dimenssions',
    'value'         => $responsive_options_padding
);
$attributes_margin = array(
    'type'          => 'dropdown',
    'heading'       => esc_html__('Responsive Margins Action','kameleon'),
    'param_name'    => 'sy_mresponsive',
    'group'         => 'Responsive Dimenssions',
    'value'         => $responsive_options_margin
);
$attributes_border = array(
    'type'          => 'dropdown',
    'heading'       => esc_html__('Responsive Borders Action','kameleon'),
    'param_name'    => 'sy_bresponsive',
    'group'         => 'Responsive Dimenssions',
    'value'         => $responsive_options_border
);

//Row Vertical Line Seperator
$attributes_line_separator = array(
    array(
       "type" => "dropdown",
        "heading" => esc_html__( 'Enable Vertical Line Separator','kameleon'),
        "param_name" => "sy_row_sep_enabled",           
        "value" => array(
                "No" => "off",
                "Yes" => "on",
            ),                
    ),
    array(
        "type" => "number",
        "value" => 100,
        "heading" => esc_html__( "Vertical Line Separator Height (px)", "kameleon" ),
        "dependency" => Array("element" => "sy_row_sep_enabled","value" => "on"), 
        "param_name" => "sy_row_sep_height"
    ),    
    array(
        "type" => "number",
        "value" => 1,
        "heading" => esc_html__( "Vertical Line Separator Width (px)", "kameleon" ),
        "dependency" => Array("element" => "sy_row_sep_enabled","value" => "on"), 
        "param_name" => "sy_row_sep_width"
    ),    
    array(
        "type" => "colorpicker",
        "value" => "#444",
        "dependency" => Array("element" => "sy_row_sep_enabled","value" => "on"),        
        "heading" => esc_html__( "Vertical Line Separator Color", "kameleon" ),
        "param_name" => "sy_row_sep_color"
    ),
    array(
       "type" => "dropdown",
        "heading" => esc_html__( 'Vertical Line Separator Position','kameleon'),
        "param_name" => "sy_row_sep_position",          
        "dependency" => Array("element" => "sy_row_sep_enabled","value" => "on"),   
        "value" => array(
            "Bottom" => "bottom",
            "Top" => "top",
            "Both" => "both",
        ),                
    ),
     array(
       "type" => "dropdown",
        "heading" => esc_html__( 'Bottom Seperator Align','kameleon'),
        "param_name" => "sy_row_sep_bottom_align",          
        "dependency" => Array("element" => "sy_row_sep_enabled","value" => "on"),   
        "value" => array(
            "Center" => "center",
            "Left" => "left",
            "Right" => "right",
        ),                
    ),
    array(
       "type" => "dropdown",
        "heading" => esc_html__( 'Top Seperator Align','kameleon'),
        "param_name" => "sy_row_sep_top_align",          
        "dependency" => Array("element" => "sy_row_sep_enabled","value" => "on"),   
        "value" => array(
            "Center" => "center",
            "Left" => "left",
            "Right" => "right",
        ),                
    )
);

$attributes_min_height = array(
    array(
       "type" => "dropdown",
        "heading" => esc_html__( 'Activate Min Height','kameleon'),
        "param_name" => "sy_column_minheight_enable",           
        "value" => array(
                "No" => "off",
                "Yes" => "on",
        ),                
    ),
    array(
        "type" => "number",
        "param_name" => "sy_column_minheight",        
        "heading" => esc_html__( "Column Min Height (px)", "kameleon" ),
        "dependency" => Array("element" => "sy_column_minheight_enable","value" => "on"), 
    )
);


vc_add_params( 'vc_row', $attributes_line_separator );
vc_add_param( 'vc_row', $attributes_padding );
vc_add_param( 'vc_row', $attributes_border );
vc_add_param( 'vc_row', $attributes_margin );
vc_add_param( 'vc_row_inner', $attributes_padding );
vc_add_param( 'vc_row_inner', $attributes_border );
vc_add_param( 'vc_row_inner', $attributes_margin );

vc_add_param( 'vc_column', $attributes_padding );
vc_add_param( 'vc_column', $attributes_border );
vc_add_param( 'vc_column', $attributes_margin );
vc_add_param( 'vc_column_inner', $attributes_padding );
vc_add_param( 'vc_column_inner', $attributes_border );
vc_add_param( 'vc_column_inner', $attributes_margin );

vc_add_params( 'vc_column', $attributes_min_height );
vc_add_params( 'vc_column_inner', $attributes_min_height );
?>