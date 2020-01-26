<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ========= S I D E    B Y    S I D E    C O N T A I N E R ========= 
   ==                                                              ==
   ==  															   ==
\* ================================================================== */

if(!class_exists('Kameleon_sidebyside_container')){
	class Kameleon_sidebyside_container{
		function __construct(){
			add_action('init',array($this,'Kameleon_sidebyside_container_init'));
			add_shortcode('kmsidebyside_container',array($this,'Kameleon_sidebyside_container_shortcode'));
			add_shortcode('kmsidebyside_left',array($this,'Kameleon_sidebyside_left_shortcode'));
			add_shortcode('kmsidebyside_right',array($this,'Kameleon_sidebyside_right_shortcode'));
			add_shortcode('kmsidebyside_element_container',array($this,'Kameleon_sidebyside_element_container_shortcode'));

		}
		function Kameleon_sidebyside_container_init(){
			if(function_exists('vc_map')){
				//Big Container
				vc_map(
					array(
						"name" => __("Screen Splitter","kameleon"),
						"base" => "kmsidebyside_container",
						
						"description" => __("Side By Side Container.","kameleon"),
						"as_parent" => array('only' => 'kmsidebyside_left,kmsidebyside_right'), 
						"content_element" => true,
						"show_settings_on_create" => true,						
						"js_view" => 'VcColumnView',
						"params" => array(
								
							array(
								'type' => 'checkbox',
								'heading' => __( 'Enable CSS3', 'kameleon' ),
								'param_name' => 'sbs_c_css3',						
								'value' => array( __( 'Yes', 'kameleon' ) => 'true' ),
							),
							array(
								'type' => 'checkbox',
								'heading' => __( 'Enable Loop', 'kameleon' ),
								'param_name' => 'sbs_c_loop',
								'value' => array( __( 'Yes', 'kameleon' ) => 'true' ),
							),
							array(
								'type' => 'checkbox',
								'heading' => __( 'Enable Navigation', 'kameleon' ),
								'param_name' => 'sbs_c_navigation',							
								'value' => array( __( 'Yes', 'kameleon' ) => 'true' ),
							),
							array(
						        "type" => "number",
						        "value" => 500,
						        "max" => 5000,
						        "min" => 100,
						        "step" => 100,
						        "heading" => esc_html__( "Scrolling Speed", "kameleon" ),						     
						        "param_name" => "sbs_c_speed"
						    ), 
						    array(
				                'type' => 'dropdown',
				                'heading' => esc_html__( 'Easing Animation', 'kameleon' ),
				                'description' => esc_html__( 'Applied only if CSS3 is disabled', 'kameleon' ),
				                'param_name' => 'sbs_c_easing',			               				
				                'value' => array(
				                    'easeOutQuad'	=>'easeOutQuad','jswing'	=>'jswing','def'	=>'def','easeInQuad'	=>'easeInQuad','easeInOutQuad'	=>'easeInOutQuad','easeInCubic'	=>'easeInCubic','easeOutCubic'	=>'easeOutCubic','easeInOutCubic'	=>'easeInOutCubic','easeInQuart'	=>'easeInQuart','easeOutQuart'	=>'easeOutQuart','easeInOutQuart'	=>'easeInOutQuart','easeInQuint'	=>'easeInQuint','easeOutQuint'	=>'easeOutQuint','easeInOutQuint'	=>'easeInOutQuint','easeInSine'	=>'easeInSine','easeOutSine'	=>'easeOutSine','easeInOutSine'	=>'easeInOutSine','easeInExpo'	=>'easeInExpo','easeOutExpo'	=>'easeOutExpo','easeInOutExpo'	=>'easeInOutExpo','easeInCirc'	=>'easeInCirc','easeOutCirc'	=>'easeOutCirc','easeInOutCirc'	=>'easeInOutCirc','easeInElastic'	=>'easeInElastic','easeOutElastic'	=>'easeOutElastic','easeInOutElastic'	=>'easeInOutElastic','easeInBack'	=>'easeInBack','easeOutBack'	=>'easeOutBack','easeInOutBack'	=>'easeInOutBack','easeInBounce'	=>'easeInBounce','easeOutBounce'	=>'easeOutBounce','easeInOutBounce'	=>'easeInOutBounce',           )               
				            ),
				            array(
					            "type" => "colorpicker",				                
					            "heading" => esc_html__( "Navigation Color", "kameleon" ),
               					"dependency" => Array("element" => "sbs_c_navigation","value" => array("true")),                
					            "param_name" => "sbs_c_color",
					            "value" => '#000', 
					        ),
					         array(
				                'type' => 'dropdown',
				                'heading' => esc_html__( 'Navigation Position', 'kameleon' ),
               					"dependency" => Array("element" => "sbs_c_navigation","value" => array("true")),                
				                'param_name' => 'sbs_c_position',
				                'value' => array(
				                   'right' => 'right',
				                   'left' => 'left',
								)               
				            ),
							array(
				                "type" => "textfield",
				                "heading" => esc_html__( "CSS Class", "kameleon" ),
				                "heading" => esc_html__( "Add custom CSS classes", "kameleon" ),
				                "param_name" => "sbs_c_classes"
				            ),	


						)
					)
				);	

				//Left Side
				vc_map(
					array(
						"name" => __("Left Side Container","kameleon"),
						"base" => "kmsidebyside_left",
						"class" => "",
						
						"description" => __("Side By Side Left Container.","kameleon"),
						'as_parent' => array('only' => 'kmsidebyside_element_container'),
						'as_child' => array('only' => 'kmsidebyside_container'),
						"content_element" => true,
						"show_settings_on_create" => false,						
						"js_view" => 'VcColumnView',
						"params" => array(
							array(
				                "type" => "textfield",
				                "heading" => esc_html__( "CSS Class", "kameleon" ),
				                "heading" => esc_html__( "Add custom CSS classes", "kameleon" ),
				                "param_name" => "sbs_le_classes"
				            ),	
						)
					)
				);	

				//Right Side
				vc_map(
					array(
						"name" => __("Right Side Container","kameleon"),
						"base" => "kmsidebyside_right",
						"class" => "",
						
						"description" => __("Side By Side Right Container.","kameleon"),
						'as_parent' => array('only' => 'kmsidebyside_element_container'),
						'as_child' => array('only' => 'kmsidebyside_container'),
						"content_element" => true,
						"show_settings_on_create" => false,						
						"js_view" => 'VcColumnView',
						"params" => array(
							array(
				                "type" => "textfield",
				                "heading" => esc_html__( "CSS Class", "kameleon" ),
				                "heading" => esc_html__( "Add custom CSS classes", "kameleon" ),
				                "param_name" => "sbs_ri_classes"
				            ),	
						)
					)
				);	

				//Elements Container
				vc_map(
					array(
						"name" => __("Side Element Container","kameleon"),
						"base" => "kmsidebyside_element_container",
						"class" => "",
						
						"description" => __("Side By Side Elements Container.","kameleon"),
						'as_parent' => array('except' => 'kmsidebyside_element_container,kmsidebyside_left,kmsidebyside_right,kmsidebyside_container'),
						'as_child' => array('only' => 'kmsidebyside_left,kmsidebyside_right'),
						"content_element" => true,
						"show_settings_on_create" => false,						
						"js_view" => 'VcColumnView',
						"params" => array(
							array(
				                "type" => "textfield",
				                "heading" => esc_html__( "CSS Class", "kameleon" ),
				                "heading" => esc_html__( "Add custom CSS classes", "kameleon" ),
				                "param_name" => "sbs_elc_classes"
				            ),	
				            array(
								'type' => 'css_editor',
								'edit_field_class' => 'vc_col-xs-12 vc_column',
								'heading' => __( 'CSS box', 'kameleon' ),
								'param_name' => 'sbs_elc_css',
								'group' => __( 'Design Options', 'kameleon' )
							),
						)
					)
				);	
				
			}
		}

			//ShortCode Function
			function Kameleon_sidebyside_container_shortcode($atts,$content = null){
				extract(shortcode_atts(array(								
					"sbs_c_classes" 			=> '',		
					"sbs_c_css3"				=> 'false',
					"sbs_c_loop"				=> 'false',
					"sbs_c_navigation"			=> 'false',
					"sbs_c_speed"				=> '500',
					"sbs_c_easing"				=> 'easeInQuart',
					"sbs_c_color"				=> '#000',
					"sbs_c_position"			=> 'right',
			 	), $atts));
			 	$outPut = '';
			 	$data_attr = 'data-css3="'.$sbs_c_css3.'"  data-loop="'.$sbs_c_loop.'" data-navigation="'.$sbs_c_navigation.'" data-speed="'.$sbs_c_speed.'" data-easing="'.$sbs_c_easing.'" data-color="'.$sbs_c_color.'" data-position="'.$sbs_c_position.'"';
			 	$outPut .='<div class="km-sidebyside-container '.esc_attr($sbs_c_classes).'" '.$data_attr.'>';
			 	$outPut .= do_shortcode($content);
				$outPut .= '</div><style type="text/css">#km-theboss[data-situation="shown"]{margin-top:0px!important;}</style>';
			 	wp_enqueue_script('km-sidebyside-script');
			 	return $outPut;
			}

			function Kameleon_sidebyside_left_shortcode($atts,$content = null){
				extract(shortcode_atts(array(								
					"sbs_le_classes" => '',				
			 	), $atts));
			 	$outPut = '';
			 	$outPut .='<div class="km-sidebyside-left ms-left '.esc_attr($sbs_le_classes).'">';
			 	$outPut .= do_shortcode($content);
				$outPut .= '</div>';
			 	return $outPut;
			}

			function Kameleon_sidebyside_right_shortcode($atts,$content = null){
				extract(shortcode_atts(array(								
					"sbs_ri_classes" => '',				
				), $atts));
				$outPut = '';
				$outPut .='<div class="km-sidebyside-right ms-right '.esc_attr($sbs_ri_classes).'">';
				$outPut .= do_shortcode($content);
				$outPut .= '</div>';
				return $outPut;
			}

			function Kameleon_sidebyside_element_container_shortcode($atts,$content = null){
				extract(shortcode_atts(array(								
					"sbs_elc_classes" => '',				
					"sbs_elc_css" => '',									
				), $atts));
				$classes_c = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $sbs_elc_classes . vc_shortcode_custom_css_class( $sbs_elc_css, ' ' ), $atts );
				$outPut = '';
				$outPut .='<div class="km-sidebyside-element-container ms-section '.esc_attr($classes_c).'">';
				$outPut .= do_shortcode($content);
				$outPut .= '</div>';
				return $outPut;
			}

			
	}
}
if(class_exists('Kameleon_sidebyside_container')){
	$Kameleon_sidebyside_container = new Kameleon_sidebyside_container;
}
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_kmsidebyside_container extends WPBakeryShortCodesContainer {}
    class WPBakeryShortCode_kmsidebyside_left extends WPBakeryShortCodesContainer {}
    class WPBakeryShortCode_kmsidebyside_right extends WPBakeryShortCodesContainer {}
    class WPBakeryShortCode_kmsidebyside_element_container extends WPBakeryShortCodesContainer {}


}


?>