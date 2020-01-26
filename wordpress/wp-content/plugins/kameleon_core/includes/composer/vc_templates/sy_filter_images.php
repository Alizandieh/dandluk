<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ============== F I L T E R   H O V E R    I M A G E ============== 
   ==                                                              ==
   ==  															   ==
\* ================================================================== */


if(!class_exists('Kameleon_filter_images'))
{
	class Kameleon_filter_images
	{
		function __construct()
		{
			add_action('init',array($this,'kameleon_filter_images_init'));
			add_shortcode('kmfilter_images',array($this,'kameleon_filter_images_shortcode'));
			add_shortcode('kmhover_image',array($this,'kameleon_hover_image_shortcode'));
		}
		function kameleon_filter_images_init(){
			if(function_exists('vc_map')){
				vc_map(
					array(
						"name" => esc_html__("Filter Images","kameleon"),
						"base" => "kmfilter_images",
						"class" => "",
						"description" => esc_html__("Multiple images with filter menu.","kameleon"),
						"as_parent" => array('only' => 'kmhover_image'), 
						"content_element" => true,
						"show_settings_on_create" => true,						
						"js_view" => 'VcColumnView',
						"params" => array(
							array(
				                "type" => "textfield",
				                "group" => "General", 
				                "heading" => esc_html__( "Categories", "kameleon" ),
				                "heading" => esc_html__( "Filter Categories separated with comma(,)", "kameleon" ),
				                "param_name" => "fili_categories"
				            ),				            				           
				            array(
				                'type' => 'dropdown',
				                'heading' => esc_html__( 'Filter Link Align', 'kameleon' ),
				                'group' => 'General',
				                'param_name' => 'fili_align',
				                'value' => array(
				                    esc_html__( 'Center','kameleon') => 'center',
				                    esc_html__( 'Left','kameleon') => 'left',
				                    esc_html__( 'Right','kameleon') => 'right',
				                )               
				            ),
				            array(
				                'type' => 'dropdown',
				                'heading' => esc_html__("Columns Number",'kameleon'),
				                'group' => 'General',
				                'param_name' => 'fili_columns_number',
				                'value' => array(                    
				                    esc_html__("4 Columns",'kameleon') => '4',
				                    esc_html__("1 Column",'kameleon')  => '1',
				                    esc_html__("2 Columns",'kameleon') => '2',
				                    esc_html__("3 Columns",'kameleon') => '3',
				                    esc_html__("5 Columns",'kameleon') => '5'
				                )            
				            ),
						      
						    array(
				                'type' => 'dropdown',
				                'heading' => esc_html__( 'Filter Style', 'kameleon' ),
				                'group' => 'Filter Section',
				                'param_name' => 'fili_style',
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
						        "value" => 13,
						        "heading" => esc_html__( "Link Font Size", "kameleon" ),						     
						        "param_name" => "fili_size"
						    ), 
						    array(
						        "type" => "number",
				                'group' => 'Filter Section',
						        "value" => 34,
						        "heading" => esc_html__( "Link Height", "kameleon" ),						     
						        "param_name" => "fili_height"
						    ), 
						    array(
						        "type" => "number",
				                'group' => 'Filter Section',
						        "value" => 0,
						        "min" => 0,
						        "max" => 3,
						        "heading" => esc_html__( "Font Spacing", "kameleon" ),						     
						        "param_name" => "fili_spacing"
						    ), 
						    array(
					            "type" => "colorpicker",
				                'group' => 'Filter Section',
					            "heading" => esc_html__( "Color", "kameleon" ),
					            "param_name" => "fili_color",
					            "value" => '#888', 
					        ),
					        array(
					            "type" => "colorpicker",
				                'group' => 'Filter Section',					            
					            "heading" => esc_html__( "Color onHover", "kameleon" ),
					            "param_name" => "fili_color_hover",
					            "value" => '#289fca', 
					        ),
					        array(
					            "type" => "colorpicker",
				                'group' => 'Filter Section',
					            "heading" => esc_html__( "Color Scheme", "kameleon" ),
					            "param_name" => "fili_scheme",
					            "value" => '#888', 
					        ),
					        array(
					            "type" => "colorpicker",
				                'group' => 'Filter Section',
					            "heading" => esc_html__( "Color Scheme onHover", "kameleon" ),
					            "param_name" => "fili_scheme_hover",
					            "value" => '#289fca', 
					        ),
							
						    array(
				                'type' => 'dropdown',
				                'group' => 'Filter Section',				                
				                'heading' => esc_html__( 'Font Weight', 'kameleon' ),
				                'group' => 'Filter Section',
				                'param_name' => 'fili_weight',
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
				                'heading' => esc_html__( 'Font Style', 'kameleon' ),
				                'group' => 'Filter Section',
				                'param_name' => 'fili_transform',
				                'value' => array(
				                    esc_html__( 'Uppercase','kameleon') => 'uppercase',
				                    esc_html__( 'Capitalize','kameleon') => 'capitalize',
				                    esc_html__( 'Lowercase','kameleon') => 'lowercase',
				                )               
				            ), 
				            array(
					            "type" => "sy_distance",
					            "distance" => "margin",
					            "heading" => "Filter Margins",
					            "param_name" => "fili_margins",
					            "positions" => array(
					                esc_html__("Top","kameleon") => "top",
					                esc_html__("Bottom","kameleon") => "bottom"
					            ),
					            "group" => "Filter Section"
					        ),
						)
					)
				);
				vc_map(
					array(
					   "name" => __("Hover Single Image","kameleon"),
					   "base" => "kmhover_image",
					   "class" => "",					   
					   "description" => __("Multiple images with filter menu.","kameleon"),
					   "as_child" => array('only' => 'kmfilter_images'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
					   "show_settings_on_create" => true,
					   "is_container"    => false,
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
					                "admin_label" => true , 
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

        				)
					)
				);
			}
		}
		
		function kameleon_filter_images_shortcode($atts,$content = null){				
			extract(shortcode_atts(array(								
				"fili_categories"			=> '',
				"fili_style"				=> 'style3',
				"fili_size"					=> '13',				
				"fili_height"				=> '34',				
				"fili_color"				=> '#888',				
				"fili_color_hover"			=> '#289fca',				
				"fili_scheme"				=> '#888',				
				"fili_scheme_hover"			=> '#289fca',				
				"fili_transform"			=> 'uppercase',				
				"fili_weight"				=> '500',				
				"fili_spacing"				=> '1',				
				"fili_align"				=> 'center',
				"fili_columns_number"		=> '4',	
				"fili_margins"				=> '',		
		 	), $atts));
			$outPut = $catsoutPut = '';
			$link_style = 'font-size:'.$fili_size.'px; color:'.$fili_color.'; text-transform:'.$fili_transform.'; font-weight:'.$fili_weight.'; letter-spacing:'.$fili_spacing.'px; --color-hover:'.$fili_color_hover.'; --scheme-color:'.$fili_scheme.'; --scheme-color-hover:'.$fili_scheme_hover.'; '.$fili_margins;			
			
			$edge_border = '';
			if($fili_style == "style3"){
				$edge_border = '<div class="km-filter-it-link-edge filteri-edgeright"></div><div class="km-filter-it-link-edge filteri-edgeleft"></div>';
			}

			$categories = explode(',',$fili_categories); 
			if(is_array($categories)){
				foreach ($categories as $cat) {
					if(trim($cat) != "")
						$catsoutPut .=  '<div class="km-filteri-link km-filter-it-link" data-active="false" data-filter=".'.$cat.'" style="height:'.$fili_height.'px; line-height:'.$fili_height.'px;">'.ucfirst($cat).''.$edge_border.'</div>';
				}
			}
			
			$outPut .= '<div class="km-filteri-image-c km-filter-it-container-c"  data-align="'.$fili_align.'"  data-gutter="on" data-columns="'.$fili_columns_number.'">
							<div class="km-filteri-cats" data-style="'.$fili_style.'" style="text-align:'.$fili_align.'; '.$link_style.' ">
								<div class="km-filteri-link km-filter-it-link" data-filter=".km-filteri-item" data-active="true" style="height:'.$fili_height.'px; line-height:'.$fili_height.'px;">All'.$edge_border.'</div>
								'.$catsoutPut.'
							</div>
							<div class="km-filteri-items-list" data-columns="'.$fili_columns_number.'">
							'.do_shortcode($content).'
							</div>
						</div>';
			return $outPut;				
		}

		function kameleon_hover_image_shortcode($atts){
			extract(shortcode_atts(array(								
				"hover_image_style"							=>	'style1',
				"hover_image_bxshadow_enabled"				=>	'off',
				"hover_image_bxshadow_hover_enabled"		=>	'on',
				"hover_image_bxshadow_style"				=>	'style2',
				"hover_image_bxshadow_color"				=>	'rgba(0,0,0,0.5)',	
				"hover_image_button_enabled"				=>	'on',
				"hover_image_button_color"					=>	'#fff',
				"himg_button_font"							=>	'',
				"himg_button_style"							=>	'',
				"himg_button_size"							=>	'',		
				"hover_image_button_bg"						=>	'#111',
				"hover_image_button_height"					=>	'32',
				"hover_image_info_enabled"					=>	'on',
				"hover_image_info_subtitle_enabled"			=>	'on',
				"hover_image_image"							=>	'',
				"hover_image_overlay_bg"					=>	'rgba(0,0,0,0.5)',
				"hover_image_overlay_enabled"				=>	'on',
				"hover_image_button_text"					=>	'Go Button',
				"hover_image_info_align"					=>	'center',
				"hover_image_title"							=>	'My title',
				"hover_image_title_color"					=>	'#333',
				"himg_title_font"							=>	'',
				"himg_title_style"							=>	'',
				"himg_title_size"							=>	'',		
				"hover_image_subtitle"						=>	'My Subtitle',
				"hover_image_subtitle_color"				=>	'#777',		
				"himg_subtitle_font"						=>	'',
				"himg_subtitle_style"						=>	'',
				"himg_subtitle_size"						=>	'',	
				"hover_image_border_width"					=> 	'0',
				"hover_image_border_color"					=> 	'transparent',
				"hover_image_background"					=> 	'#fff',
				"hover_image_link"							=> 	'',
				"hover_image_link_target"					=> 	'_blank',
				"hover_image_classes"						=> 	'',
		 	), $atts));
		 	$img_src = wp_get_attachment_image_src($hover_image_image,'full');

		 	//Creating The ELements Style
		 	$container_style = 'border:'.$hover_image_border_width.'px solid '.$hover_image_border_color.';';
		 	$button_font = sy_composer_font_styles($himg_button_font, $himg_button_size, $himg_button_style);
		 	$button_style = 'height:'.$hover_image_button_height.'px; line-height:'.$hover_image_button_height.'px; color:'.$hover_image_button_color.'; background:'.$hover_image_button_bg.';'.$button_font;
		 	
		 	$title_font = sy_composer_font_styles($himg_title_font, $himg_title_size, $himg_title_style);
		 	$info_style = 'color:'.$hover_image_title_color.'; background:'.$hover_image_background.'; ';
		 	$subtitle_font = sy_composer_font_styles($himg_subtitle_font, $himg_subtitle_size, $himg_subtitle_style);
		 	$subtitle_style = 'color:'.$hover_image_subtitle_color.';'.$subtitle_font;
		 	$link = '';
		 	if(trim($hover_image_link) != "")
		 		$link =  '<a href="'.esc_url($hover_image_link).'" target="'.esc_attr($hover_image_link_target).'"></a>';
		 	
		 	$outPut = '<div class="km-hover-image-container km-masonry-item km-masonry-item-hidden km-filteri-item km-element-box-shadow '.$hover_image_classes.'" data-style="'.$hover_image_style.'" data-boxshadow="'.$hover_image_bxshadow_enabled.'" data-boxshadow-hover="'.$hover_image_bxshadow_hover_enabled.'" data-boxshadow-style="'.$hover_image_bxshadow_style.'" style="--box-shadow-color:'.$hover_image_bxshadow_color.'; '.$container_style.'" data-overlay="'.$hover_image_overlay_enabled.'" data-button="'.$hover_image_button_enabled.'" data-info="'.$hover_image_info_enabled.'" data-info-subtitle="'.$hover_image_info_subtitle_enabled.'" >
					<div class="km-hover-image">
						<img src="'.$img_src[0].'">
						<div class="km-hover-image-overlay" style="background:'.$hover_image_overlay_bg.';"></div>
						<div class="km-hover-image-button" style="'.$button_style.'">'.$hover_image_button_text.'</div>
					</div>
					<div class="km-hover-image-info" data-align="'.$hover_image_info_align.'" style="'.$info_style.'">
						<div class="km-hover-image-title" style="'.$title_font.'">'.$hover_image_title.'</div>
						<div class="km-hover-image-subtitle" style="'.$subtitle_style.'">'.$hover_image_subtitle.'</div>
					</div>
						'.$link.'
				</div>';

		 	return $outPut;
		}
	}
}
if(class_exists('Kameleon_filter_images')){
	$Kameleon_filter_images = new Kameleon_filter_images;
}

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_kmfilter_images extends WPBakeryShortCodesContainer {
    }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_kmhover_image extends WPBakeryShortCode {
    }
}


?>