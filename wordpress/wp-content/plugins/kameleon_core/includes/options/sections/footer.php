<?php 
/* ================================================================== *\
   ==                  	 	   S E C T I O N                       ==
   ==============               F O O T E R 	   	   ============== 
\* ================================================================== */
	
	//Footer
	$sections[] = array(
        'title' => 'Footer',
		'icon' => 'fa fa-rocket',
        'id' => 'footer_section',        		
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Footer Section', 'kameleon'),
        'fields' =>array(
        	array(
		        'id' => 'footer_enable',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Footer', 'kameleon'), 
		        'subtitle' => esc_html__('You can disable footer globally and yet Enable it on some pages!', 'kameleon'),		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 


        	array(
			    'id'       => 'footer_type',
			    'type'     => 'select',
			    'title'    => esc_html__('Footer Design Type', 'kameleon'), 
			    'subtitle' => esc_html__('Choose the footer design type!', 'kameleon'),
			    'options'  => array(
			        'footer_normal' => esc_html__('Footer With Columns','kameleon'),
			        'footer_compact' => esc_html__('Compact Footer','kameleon')
			    ),
			    'default' => 'footer_normal'
			),

	        array(
        		'id' => 'footer_width',
		        'type' => 'button_set',
		        'title' => esc_html__('Footer Content Width', 'kameleon'), 
		        'subtitle' => esc_html__('Choose the footer content width', 'kameleon'),
		        'options' => array(
			        'boxed' => 'Boxed', 
			        'full_width' => 'Full Width'
			     ), 
		        'default' => 'boxed',	
        	),

	        array(
		        'id' => 'footer_effect',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Footer Fixed Effect', 'kameleon'), 
		        'subtitle' => esc_html__('Creates a like parallax for the footer area.', 'kameleon'),		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 


	        array(
	        	'id' => 'footer_paddingTop',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Padding Top (px)', 'kameleon'),			   
			    'default'  => '40',
				'min'      => '0',
				'step'     => '1',
				'max'      => '300',	
	        ),
	       array(
	        	'id' => 'footer_paddingBottom',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Padding Bottom (px)', 'kameleon'),			   
			    'default'  => '40',
				'min'      => '0',
				'step'     => '1',
				'max'      => '300',	
	        ), 

		    array(
		        'id' => 'footer_borders',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Footer Border', 'kameleon'), 
		        'subtitle' => esc_html__('Enable Bottom and Top Borders for the footer area for more cool design', 'kameleon'),		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 
		    array(
	        	'id' => 'footer_border_thickness_top',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array('footer_borders', '=' , '1'),
			    'title' => esc_html__('Border Top Thickenss (px)', 'kameleon'), 			    
			    'default'  => '2',
				'min'      => '0',
				'step'     => '1',
				'max'      => '20',	
	        ),	

		    array(
			    'id' => 'footer_border_color_top',
			    'type' => 'color',
			    'required' => array('footer_borders', '=' , '1'),
			    'title' => esc_html__('Border Top Color', 'kameleon'),			    
				'default' => '#ffff',
				'validate' => 'color'
			),

		    array(
	        	'id' => 'footer_border_thickness_bottom',
			    'type' => 'slider',
			    'required' => array('footer_borders', '=' , '1'),
		        'display_value' => 'text',
			    'title' => esc_html__('Border Bottom Thickenss (px)', 'kameleon'), 			    
			    'default'  => '2',
				'min'      => '0',
				'step'     => '1',
				'max'      => '20',	
	        ),	

		    array(
			    'id' => 'footer_border_color_bottom',
			    'type' => 'color',
			    'required' => array('footer_borders', '=' , '1'),
			    'title' => esc_html__('Border Bottom Color', 'kameleon'),			    
				'default' => '#ffff',
				'validate' => 'color'
			),

	        	

	        array(
		        'id' => 'footer_copyright',
		        'type' => 'switch',
		        'title' => esc_html__('Footer Copy Right Area', 'kameleon'), 		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 

		    array(
			    'id'=>'footer_copyright_content',
			    'type' => 'textarea',
			    'title' => esc_html__('Copyright Text', 'kameleon'), 
			    'subtitle' => esc_html__('Copyright Text', 'kameleon'),
			    'validate' => 'html_custom',
			    'required' => array('footer_copyright', '=' , '1'),
			    'default' => '&copy; All rights reserved to <a href="http://themeforest.net/user/sayenthemes" target="_blank">SayenThemes</a>',
			    'allowed_html' => array(
			        'a' => array(
			            'href' => array(),
			            'title' => array(),
			            'target' => array()
			        ),
			        'br' => array(),
			        'em' => array(),
			        'strong' => array()
			    )
			),
		    array(
	        	'id' => 'footer_copyright_height',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Copyright area height', 'kameleon'),
			    'required' => array('footer_copyright', '=' , '1'), 			    
			    'default'  => '50',
				'min'      => '0',
				'step'     => '1',
				'max'      => '150',	
	        ),

	        array(
	        	'id' => 'footer_copyright_font',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Copyright area font size', 'kameleon'),
			    'required' => array('footer_copyright', '=' , '1'), 			    
			    'default'  => '13',
				'min'      => '0',
				'step'     => '1',
				'max'      => '22',	
	        ),

	        array(
		        'id' => 'footer_copyright_background',
		        'type' => 'color_rgba',
				'required' => array('footer_copyright', '=' , '1'), 
		        'title' => esc_html__('Copyright area background color', 'kameleon'),			       
		        'default' => array(
		        	'color' => '#111',
		        	'alpha' => 1,
		        ),
		        'options'       => array(
			        'show_input'                => true,
			        'show_initial'              => true,
			        'show_alpha'                => true,
			        'show_palette'              => true,
			        'show_palette_only'         => false,
			        'show_selection_palette'    => true,
			        'max_palette_size'          => 10,
			        'allow_empty'               => true,
			        'clickout_fires_change'     => false,
			        'choose_text'               => 'Choose',
			        'cancel_text'               => 'Cancel',
			        'show_buttons'              => true,
			        'use_extended_classes'      => true,
			        'palette'                   => null,  // show default
			        'input_text'                => 'Select Color'
			    ),
		    ), 


			array(
			    'id' => 'footer_copyright_color',
			    'type' => 'color',
			    'title' => esc_html__('Copyright area text color', 'kameleon'),
			    'required' => array('footer_copyright', '=' , '1'), 			    		        
				'default' => '#999',
				'validate' => 'color'
			), 

			array(
        		'id' => 'footer_copyright_alignment',
		        'type' => 'button_set',
		        'title' => esc_html__('Footer Copyright Text Aligment', 'kameleon'),
		        'required' => array('footer_copyright', '=' , '1'), 		        
		        'options' => $positions, 
		        'default' => 'center',	
        	),



		)
	);

	/*	--------------------------------
		----  NORMAL FOOTER   ----
	 	--------------------------------*/
	$sections[] = array(
        'title' => 'Normal Footer',
        'id' => 'footer_normal_section',        		        
		'icon' => 'fa fa-rocket',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Normal Footer Styling', 'kameleon'),
        'subsection' => true,
        'fields' => array(
        	array(
        		'id' => 'footer_columns',
		        'type' => 'image_select',		        
		        'title' => esc_html__('Footer Columns', 'kameleon'), 
		        'subtitle' => esc_html__('Choose the number of columns for the footer!', 'kameleon'),
		        'options' => array(
			        1=> array(
			            'alt'   => '1 Column', 
			            'img'   => ReduxFramework::$_url.'assets/img/1col.png'
			        ),
			        2=> array(
			            'alt'   => '2 Column', 
			            'img'   => KM_PLUGIN_URL.'kameleon_core/assets/images/2col.png'
			        ),
			        3=> array(
			            'alt'   => '3 Column', 
			            'img'   => KM_PLUGIN_URL.'kameleon_core/assets/images/3col.png'
			        ),
			        4=> array(
			            'alt'   => '4 Column', 
			            'img'   => KM_PLUGIN_URL.'kameleon_core/assets/images/4col.png'
			        ),
			     ), 
		        'default' => '4',	
        	),

	       array(
	        	'id' => 'footer_col_1_width',
			    'type' => 'slider',		        
		        'display_value' => 'text',
			    'title' => esc_html__('Column 1 Width (%)', 'kameleon'), 			    
			    'default'  => '25',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),

	       array(
	        	'id' => 'footer_col_2_width',
			    'type' => 'slider',		        
		        'display_value' => 'text',
			    'title' => esc_html__('Column 2 Width (%)', 'kameleon'), 			    
			    'default'  => '25',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),

	       array(
	        	'id' => 'footer_col_3_width',
			    'type' => 'slider',		        
		        'display_value' => 'text',
			    'title' => esc_html__('Column 3 Width (%)', 'kameleon'), 			    
			    'default'  => '25',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),

			array(
	        	'id' => 'footer_col_4_width',		        
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Column 4 Width (%)', 'kameleon'), 			    
			    'default'  => '25',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),	   

			array(
		        'id' => 'footer_background',
		        'type' => 'background',
		        'title' => esc_html__('Footer Background', 'kameleon'), 		      
		        'preview' =>false,		        
				'default'  => array(
			        'background-color' => '#181818',
			        'background-image' => '',
					'background-repeat' => '',
					'background-position' => '',
					'background-size' => '',
					'background-attachment' => '',
			    )						
		    ),
        	array(
	        	'id' => 'footer_fontsize',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Text Font Size', 'kameleon'),			   
			    'default'  => '14',
				'min'      => '0',
				'step'     => '1',
				'max'      => '25',	
	        ),
	        array(
			    'id' => 'footer_color',
			    'type' => 'color',
			    'title' => esc_html__('Footer Text Color', 'kameleon'),			    
				'default' => '#ddd',
				'validate' => 'color'
			),

			array(
	        	'id' => 'footer_title_fontsize',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Footer Widget Title Font Size', 'kameleon'),			   
			    'default'  => '15',
				'min'      => '0',
				'step'     => '1',
				'max'      => '25',	
	        ),
	        array(
			    'id' => 'footer_title_color',
			    'type' => 'color',
			    'title' => esc_html__('Footer Widget Title Color', 'kameleon'),			    
				'default' => '#aaa',
				'validate' => 'color'
			),


			 array(
		        'id' => 'footer_bottom',		        
		        'type' => 'switch',
		        'title' => esc_html__('Footer Bottom', 'kameleon'), 
		        'subtitle' => esc_html__('This area will display Social Links and The footer Menu', 'kameleon'),		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 

		    array(
		        'id' => 'footer_bottom_style',		        
		        'type' => 'select',
		        'title' => esc_html__('Footer Bottom Style', 'kameleon'), 		     
		        'required' => array('footer_bottom', '=' , '1'),
		        'options' =>$footer_bottom_style,
				'default' => 'style1'
			),

		    array(
		        'id' => 'footer_bottom_background',		        
		        'type' => 'color_rgba',
				'required' => array('footer_bottom', '=' , '1'), 
		        'title' => esc_html__('Footer Bottom Background Color', 'kameleon'),	
		        'default' => array(
		        	'color' => '#161616',
		        	'alpha' => 1,
		        ),
		        'options'       => array(
			        'show_input'                => true,
			        'show_initial'              => true,
			        'show_alpha'                => true,
			        'show_palette'              => true,
			        'show_palette_only'         => false,
			        'show_selection_palette'    => true,
			        'max_palette_size'          => 10,
			        'allow_empty'               => true,
			        'clickout_fires_change'     => false,
			        'choose_text'               => 'Choose',
			        'cancel_text'               => 'Cancel',
			        'show_buttons'              => true,
			        'use_extended_classes'      => true,
			        'palette'                   => null,  // show default
			        'input_text'                => 'Select Color'
			    ),
		    ), 
			
			array(
			    'id' => 'footer_bottom_color',		        
			    'type' => 'color',
			    'title' => esc_html__('Footer Bottom color', 'kameleon'),
			    'required' => array('footer_bottom', '=' , '1'), 			    		        
				'default' => '#ddd',
				'validate' => 'color'
			), 

			array(
	        	'id' => 'footer_bottom_height',
			    'type' => 'slider',		        
		        'display_value' => 'text',
			    'title' => esc_html__('Footer Bottom area height', 'kameleon'),
			    'required' => array('footer_bottom', '=' , '1'), 			    
			    'default'  => '50',
				'min'      => '0',
				'step'     => '1',
				'max'      => '150',	
	        ),
			
			array(
	        	'id' => 'footer_bottom_font',
			    'type' => 'slider',		        
		        'display_value' => 'text',
			    'title' => esc_html__('Footer Bottom font size', 'kameleon'),
			    'required' => array('footer_bottom', '=' , '1'), 			    
			    'default'  => '15',
				'min'      => '0',
				'step'     => '1',
				'max'      => '22',	
	        ),
        	 
	    )
	);

	/*	--------------------------------
		----  Compact Footer   ----
	 	--------------------------------*/
	$sections[] = array(
        'title' => 'Compact Footer',
		'icon' => 'fa fa-rocket',
        'id' => 'footer_compact_section',        				
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Compact Footer Styling', 'kameleon'),
        'subsection' => true,
        'fields' => array(
        	array(
		        'id' => 'footer_compact_logo_enable',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Compact Footer Logo', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 
        	array(
		        'id' => 'footer_compact_logo',
		        'type' => 'media',
		        'title' => esc_html__('Compact Footer logo ', 'kameleon'), 
			    'required' => array('footer_compact_logo_enable','=','1'),		        
		        'preview' => true,
		        'default'  => array(
        			'url'=> $sy_options['trslogo']['url']
    			), 
		    ),

        	//Footer Social Links
			array(
		        'id' => 'footer_compact_social',
		        'type' => 'switch',
		        'title' => esc_html__('Compact Footer Social Links', 'kameleon'), 
		        'subtitle' => esc_html__('Enable Social Links Footer.', 'kameleon'),		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 

			array(
			    'id'       => 'footer_compact_social_array',
			    'type'     => 'select',
			    'multi'    => true,
			    'required' => array('footer_compact_social','=','1'),
			    'title'    => __('Compact Footer Social Icons', 'kameleon'), 
			    'subtitle' => __('Choose the social links you want to include on the compact menu.', 'kameleon'),			   
			    'options'  => kameleon_social_array_list(),
			    'default'  => array('facebook','twitter','youtube','google','linkedin','instagram')
			),

			array(
			    'id'       => 'footer_compact-icon_style',
			    'type'     => 'select',
			    'required' => array('footer_compact_social','=','1'),
			    'title'    => __('Social Icons Style Effect', 'kameleon'), 
			    'subtitle' => __('Choose the social links effect', 'kameleon'),			   
			    'options'  => kameleon_modern_icon_style(),
			    'default'  => 'normal_color',
			),

			array(
		        'id' => 'footer_compact-icon_scheme_enabled',
		        'type' => 'switch',
			    'required' => array('footer_compact_social','=','1'),
		        'title' => esc_html__('Enable Icon Color Scheme', 'kameleon'), 
		        'subtitle' => esc_html__('Enable the real social icon color scheme.', 'kameleon'),		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 
			array(
		        'id' => 'footer_compact-icon_normal_color',		        
		        'type' => 'color_rgba',
			    'required' => array('footer_compact_social','=','1'),		        
		        'required' => array(
		        	array('footer_compact-icon_scheme_enabled' , '=','0'),		        	
					array('footer_compact-icon_style' , '!=','real_color'),
		        ),
		        'title' => esc_html__('Icon Color', 'kameleon'),			  
		        'default' => array(
		        	'color' => '#777',
		        	'alpha' => 1,
		        ),
		        'options'       => array(
			        'show_input'                => true,
			        'show_initial'              => true,
			        'show_alpha'                => true,
			        'show_palette'              => true,
			        'show_palette_only'         => false,
			        'show_selection_palette'    => true,
			        'max_palette_size'          => 10,
			        'allow_empty'               => true,
			        'clickout_fires_change'     => false,
			        'choose_text'               => 'Choose',
			        'cancel_text'               => 'Cancel',
			        'show_buttons'              => true,
			        'use_extended_classes'      => true,
			        'palette'                   => null,  // show default
			        'input_text'                => 'Select Color'
			    ),
		    ), 
		    array(
		        'id' => 'footer_compact-icon_normal_background',		        
		        'type' => 'color_rgba',	
			    'required' => array('footer_compact_social','=','1'),		        	   
		        'required' => array(
		        	array('footer_compact-icon_style' , '!=','normal_color'),
					array('footer_compact-icon_style' , '!=','real_color'),
					array('footer_compact-icon_style' , '!=','real_background'),
					array('footer_compact-icon_style' , '!=','effect_2'),
					array('footer_compact-icon_style' , '!=','effect_3'),
					array('footer_compact-icon_style' , '!=','effect_4'),
					array('footer_compact-icon_style' , '!=','effect_5'),
		        	array('footer_compact-icon_style' , '!=','effect_6'),
		        ),
		        'title' => esc_html__('Icon Default Background Color', 'kameleon'),	
		        'default' => array(
		        	'color' => '#000',
		        	'alpha' => 0,
		        ),
		        'options'       => array(
			        'show_input'                => true,
			        'show_initial'              => true,
			        'show_alpha'                => true,
			        'show_palette'              => true,
			        'show_palette_only'         => false,
			        'show_selection_palette'    => true,
			        'max_palette_size'          => 10,
			        'allow_empty'               => true,
			        'clickout_fires_change'     => false,
			        'choose_text'               => 'Choose',
			        'cancel_text'               => 'Cancel',
			        'show_buttons'              => true,
			        'use_extended_classes'      => true,
			        'palette'                   => null,  // show default
			        'input_text'                => 'Select Color'
			    ),
		    ), 

			array(
		        'id' => 'footer_compact-icon_hover_color',		        
		        'type' => 'color_rgba',
			    'required' => array('footer_compact_social','=','1'),		        
		        'required' => array(
		        	array('footer_compact-icon_style' , '!=','normal_color'),		        	
		        	array('footer_compact-icon_style' , '!=','real_background'),		        	
		        	array('footer_compact-icon_style' , '!=','real_color'),
		        	array('footer_compact-icon_style' , '!=','effect_2'),
		        	array('footer_compact-icon_style' , '!=','effect_3'),
		        	array('footer_compact-icon_style' , '!=','effect_4'),
		        	array('footer_compact-icon_style' , '!=','effect_5'),
		        	array('footer_compact-icon_style' , '!=','effect_6'),
		        	array('footer_compact-icon_style' , '!=','effect_7'),		        	
		        ),
		        'title' => esc_html__('Icon Color On Hover', 'kameleon'),	
		        'default' => array(
		        	'color' => '#fff',
		        	'alpha' => 1,
		        ),
		        'options'       => array(
			        'show_input'                => true,
			        'show_initial'              => true,
			        'show_alpha'                => true,
			        'show_palette'              => true,
			        'show_palette_only'         => false,
			        'show_selection_palette'    => true,
			        'max_palette_size'          => 10,
			        'allow_empty'               => true,
			        'clickout_fires_change'     => false,
			        'choose_text'               => 'Choose',
			        'cancel_text'               => 'Cancel',
			        'show_buttons'              => true,
			        'use_extended_classes'      => true,
			        'palette'                   => null,  // show default
			        'input_text'                => 'Select Color'
			    ),
		    ), 

			array(
	        	'id' => 'footer_compact-icon_size',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array('footer_compact_social','=','1'),
			    'title' => esc_html__('Icon Size (px)', 'kameleon'),			   
			    'default'  => '16',
				'min'      => '0',
				'step'     => '1',
				'max'      => '60',	
	        ),

	        array(
	        	'id' => 'footer_compact-icon_back_size',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array('footer_compact_social','=','1'),
			    'title' => esc_html__('Icon Background Size(px)', 'kameleon'),			   
			    'default'  => '28',
				'min'      => '0',
				'step'     => '1',
				'max'      => '90',	
	        ),

	        array(
	        	'id' => 'footer_compact-icon_radius',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array('footer_compact_social','=','1'),
			    'title' => esc_html__('Icon Background Radius Size(px)', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ),
	        array(
	        	'id' => 'footer_compact-icon_margins',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array('footer_compact_social','=','1'),
			    'title' => esc_html__('Icon Margins(px)', 'kameleon'),			   
			    'default'  => '7',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),
		    //En Icon Settings


		    array(
		        'id' => 'footer_compact_menu',
		        'type' => 'switch',
		        'title' => esc_html__('Compact Footer Menu', 'kameleon'), 
		        'subtitle' => esc_html__('Enable Footer Menu.', 'kameleon'),		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 

		    array(
	       		'id' => 'compact_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Footer Compact Sections Margins', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('choose the top & bottom margins for the footer compact elements', 'kameleon'),
	        ), 
		    
			array(
	        	'id' => 'footer_compact-logo_section_margin_top',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Logo Area Margin Top', 'kameleon'),			   
			    'default'  => '30',
				'min'      => '0',
				'step'     => '1',
				'max'      => '200',	
	        ),

	        array(
	        	'id' => 'footer_compact-logo_section_margin_bottom',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Logo Area Margin Bottom', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '200',	
	        ),

	        array(
	        	'id' => 'footer_compact-social_section_margin_top',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Social Icon Area Margin Top', 'kameleon'),			   
			    'default'  => '25',
				'min'      => '0',
				'step'     => '1',
				'max'      => '200',	
	        ),

	        array(
	        	'id' => 'footer_compact-social_section_margin_bottom',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Social Icon Area Margin Bottom', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '200',	
	        ),		    	

		    array(
	        	'id' => 'footer_compact-menu_section_margin_top',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Menu Area Margin Top', 'kameleon'),			   
			    'default'  => '25',
				'min'      => '0',
				'step'     => '1',
				'max'      => '200',	
	        ),

	        array(
	        	'id' => 'footer_compact-menu_section_margin_bottom',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Menu Area Margin Bottom', 'kameleon'),			   
			    'default'  => '60',
				'min'      => '0',
				'step'     => '1',
				'max'      => '200',	
	        ),


        )
    );
?>