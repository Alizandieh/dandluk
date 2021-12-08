<?php 
/* ================================================================== *\
   ==                        S E C T I O N                         ==
   ==============        		 HEADERS          	   ============== 
\* ================================================================== */

	//Header Sections 
	$sections[] = array(	
		'id'=>'global_header',
        'title' => 'Header',
		'icon' => 'flaticon-header',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Styling the global header', 'kameleon'),
        'fields' => 
        array(  	
        	//Choosing The header Style
        	array(
		        'id' => 'header_active',
		        'type' => 'switch',
		        'title' => esc_html__('Show header', 'kameleon'), 
		        'subtitle' => esc_html__('Show the header for all pages', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 
			array(
			    'id'       => 'header_v',
			    'type'     => 'select',
			    'title'    => esc_html__('Default Header', 'kameleon'), 
			    'subtitle' => esc_html__('Choose your default header for all your website pages!', 'kameleon'),
			    'options'  => array(
			        'header_v1'  => esc_html__('1 - Simple Header','kameleon'),							
					'header_v2'  => esc_html__('2 - Header Logo Right','kameleon'),							
					'header_v3'  => esc_html__('3 - Center Header','kameleon'),							
					'header_v4'  => esc_html__('4 - Center Header','kameleon'),							
					'header_v5'  => esc_html__('5 - Side Header Show/Hide','kameleon'),							
					'header_v6'  => esc_html__('6 - Side Header Fixed','kameleon'),							
					'header_v7'  => esc_html__('7 - Centered Links','kameleon'),							
					'header_v8'  => esc_html__('8 - Header Side Slide Normal','kameleon'),							
					'header_v9'  => esc_html__('9 - Header Side Slide Center','kameleon'),							
					'header_v10' => esc_html__('10 - Header FullScreen Normal','kameleon'),							
			    ),
			    'default' => 'header_v1'
			),

	        array(
	       		'id' => 'top_h_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Top Header Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Change the settings for top header section', 'kameleon'),
	        ), 

			array(
		        'id' => 'h_top_style',
		        'type' => 'select',
		        'title' => esc_html__('Top Extra-Header Style', 'kameleon'), 
		        'subtitle' => esc_html__('Choose to be applied for the extra top header', 'kameleon'),
		        'options' =>kameleon_top_style(),
				'default' => 'style1'
			),
		    
		    array(
        		'id' => 'h_top_background',
		        'type' => 'color',
		        'title' => esc_html__('Extra header top background color', 'kameleon'), 
		        'subtitle' => esc_html__('Choose a color to be applied for the top extra header background', 'kameleon'),
		        'default' => 'transparent',
				'validate' => 'color'	
        	),
		    array(
			    'id'       => 'h_social_array',
			    'type'     => 'select',
			    'multi'    => true,
			    'title'    => __('Top Header  Social Icons', 'kameleon'), 
			    'subtitle' => __('Choose the social links you want to include on the Top Header.', 'kameleon'),			   
			    'options'  => kameleon_social_array_list(),
			    'default'  => array('facebook','twitter','youtube','google','linkedin','instagram')
			),

			array(
        		'id' => 'h_top_height',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Top Extra-Header Height', 'kameleon'), 		        
		        'default'  => '30',
			    'min'      => '20',
			    'step'     => '1',
			    'max'      => '150'
        	),
			array(
        		'id' => 'h-top_scheme',
		        'type' => 'button_set',
		        'title' => esc_html__('Top header Color Scheme ', 'kameleon'), 
		        'subtitle' => esc_html__('choose the top color scheme You wan to use', 'kameleon'),
		        'options' => array(
			        'light' => 'Light', 
			        'dark' => 'Dark'
			     ), 
		        'default' => 'light',	
        	),

        	//Top Header Icons Begin
        	//FOR LIGHT Background 
        	array(
	       		'id' => 'top_h_light',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Top Light Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Change the colors and styling for the top when light background', 'kameleon'),
	        ), 
        	array(
        		'id' => 'h_light-top_color',
		        'type' => 'color',
		        'title' => esc_html__('Extra header top color (light)', 'kameleon'), 
		        'subtitle' => esc_html__('Choose a color to be applied for the top extra header Color', 'kameleon'),
		        'default' => '#777',
				'validate' => 'color'	
        	),
			array(
			    'id'       => 'h-light-icon_style',
			    'type'     => 'select',
			    'title'    => __('Social Icons Style Effect (light)', 'kameleon'), 
			    'subtitle' => __('Choose the social links effect', 'kameleon'),			   
			    'options'  => kameleon_modern_icon_style(),
			    'default'  => 'normal_color',
			),

			array(
		        'id' => 'h-light-icon_scheme_enabled',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Icon Color Scheme (light)', 'kameleon'), 
		        'subtitle' => esc_html__('Enable the real social icon color scheme.', 'kameleon'),		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 
			array(
		        'id' => 'h-light-icon_normal_color',		        
		        'type' => 'color_rgba',
		        'required' => array(
		        	array('h-light-icon_scheme_enabled' , '=','0'),		        	
					array('h-light-icon_style' , '!=','real_color'),
					
		        ),
		        'title' => esc_html__('Icon Color (light)', 'kameleon'),			  
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
		        'id' => 'h-light-icon_normal_background',		        
		        'type' => 'color_rgba',		   
		        'required' => array(
		        	array('h-light-icon_style' , '!=','normal_color'),
					array('h-light-icon_style' , '!=','real_color'),
					array('h-light-icon_style' , '!=','real_background'),
					array('h-light-icon_style' , '!=','effect_2'),
					array('h-light-icon_style' , '!=','effect_3'),
					array('h-light-icon_style' , '!=','effect_4'),
					array('h-light-icon_style' , '!=','effect_5'),
		        	array('h-light-icon_style' , '!=','effect_6'),
		        	
		        ),
		        'title' => esc_html__('Icon Default Background Color (light)', 'kameleon'),	
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
		        'id' => 'h-light-icon_hover_color',		        
		        'type' => 'color_rgba',
		        'required' => array(
		        	array('h-light-icon_style' , '!=','normal_color'),		        	
		        	array('h-light-icon_style' , '!=','real_background'),		        	
		        	array('h-light-icon_style' , '!=','real_color'),
		        	array('h-light-icon_style' , '!=','effect_2'),
		        	array('h-light-icon_style' , '!=','effect_3'),
		        	array('h-light-icon_style' , '!=','effect_4'),
		        	array('h-light-icon_style' , '!=','effect_5'),
		        	array('h-light-icon_style' , '!=','effect_6'),
		        	array('h-light-icon_style' , '!=','effect_7'),		
		        	        	
		        ),
		        'title' => esc_html__('Icon Color On Hover (light)', 'kameleon'),	
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
	        	'id' => 'h-light-icon_size',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Size (px) (light)', 'kameleon'),			   
			    'default'  => '16',
				'min'      => '0',
				'step'     => '1',
				'max'      => '60',	
	        ),

	        array(
	        	'id' => 'h-light-icon_back_size',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Background Size(px) (light)', 'kameleon'),			   
			    'default'  => '28',
				'min'      => '0',
				'step'     => '1',
				'max'      => '90',	
	        ),

	        array(
	        	'id' => 'h-light-icon_radius',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Background Radius Size(px) (light)', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ),
	        array(
	        	'id' => 'h-light-icon_margins',
			    'type' => 'slider',
		        'display_value' => 'text',		       
			    'title' => esc_html__('Icon Margins(px) (light)', 'kameleon'),			   
			    'default'  => '7',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),

	        //DARK Background
	        array(
	       		'id' => 'top_h_dark',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Top Dark Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Change the colors and styling for the top when dark background', 'kameleon'),
	        ), 
        	array(
        		'id' => 'h_dark-top_color',
		        'type' => 'color',
		        'title' => esc_html__('Extra header top color (dark)', 'kameleon'), 
		        'subtitle' => esc_html__('Choose a color to be applied for the top extra header Color', 'kameleon'),
		        'default' => '#777',
				'validate' => 'color'	
        	),
			array(
			    'id'       => 'h-dark-icon_style',
			    'type'     => 'select',
			    'title'    => __('Social Icons Style Effect (dark)', 'kameleon'), 
			    'subtitle' => __('Choose the social links effect', 'kameleon'),			   
			    'options'  => kameleon_modern_icon_style(),
			    'default'  => 'normal_color',
			),

			array(
		        'id' => 'h-dark-icon_scheme_enabled',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Icon Color Scheme (dark)', 'kameleon'), 
		        'subtitle' => esc_html__('Enable the real social icon color scheme.', 'kameleon'),		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 
			array(
		        'id' => 'h-dark-icon_normal_color',		        
		        'type' => 'color_rgba',
		        'required' => array(
		        	array('h-dark-icon_scheme_enabled' , '=','0'),		        	
					array('h-dark-icon_style' , '!=','real_color'),
		        		        	
		        ),
		        'title' => esc_html__('Icon Color (dark)', 'kameleon'),			  
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
		        'id' => 'h-dark-icon_normal_background',		        
		        'type' => 'color_rgba',		   
		        'required' => array(
		        	array('h-dark-icon_style' , '!=','normal_color'),
					array('h-dark-icon_style' , '!=','real_color'),
					array('h-dark-icon_style' , '!=','real_background'),
					array('h-dark-icon_style' , '!=','effect_2'),
					array('h-dark-icon_style' , '!=','effect_3'),
					array('h-dark-icon_style' , '!=','effect_4'),
					array('h-dark-icon_style' , '!=','effect_5'),
		        	array('h-dark-icon_style' , '!=','effect_6'),
		        		        	
		        ),
		        'title' => esc_html__('Icon Default Background Color (dark)', 'kameleon'),	
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
		        'id' => 'h-dark-icon_hover_color',		        
		        'type' => 'color_rgba',
		        'required' => array(
		        	array('h-dark-icon_style' , '!=','normal_color'),		        	
		        	array('h-dark-icon_style' , '!=','real_background'),		        	
		        	array('h-dark-icon_style' , '!=','real_color'),
		        	array('h-dark-icon_style' , '!=','effect_2'),
		        	array('h-dark-icon_style' , '!=','effect_3'),
		        	array('h-dark-icon_style' , '!=','effect_4'),
		        	array('h-dark-icon_style' , '!=','effect_5'),
		        	array('h-dark-icon_style' , '!=','effect_6'),
		        	array('h-dark-icon_style' , '!=','effect_7'),	
		        		        	
		        ),
		        'title' => esc_html__('Icon Color On Hover (dark)', 'kameleon'),	
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
	        	'id' => 'h-dark-icon_size',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Size (px) (dark)', 'kameleon'),			   
			    'default'  => '16',
				'min'      => '0',
				'step'     => '1',
				'max'      => '60',	
	        ),

	        array(
	        	'id' => 'h-dark-icon_back_size',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Background Size(px) (dark)', 'kameleon'),			   
			    'default'  => '28',
				'min'      => '0',
				'step'     => '1',
				'max'      => '90',	
	        ),

	        array(
	        	'id' => 'h-dark-icon_radius',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Background Radius Size(px) (dark)', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ),
	        array(
	        	'id' => 'h-dark-icon_margins',
			    'type' => 'slider',
		        'display_value' => 'text',		       
			    'title' => esc_html__('Icon Margins(px) (dark)', 'kameleon'),			   
			    'default'  => '7',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),

	        //Top HEader Icons Ends

		    array(
        		'id' => 'h_top_menu_style',
		        'type' => 'select',
		        'title' => esc_html__('Extra top header Menu Style', 'kameleon'), 
		        'subtitle' => esc_html__('Choose a style for the top extra header  menu', 'kameleon'),
		        'options' => kameleon_top_menu_style(), 
		        'default' => 'none',	
        	),

		    array(
	       		'id' => 'search_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Header Search Setting', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('You can choose a diferrent search style for each header or each page', 'kameleon'),
	        ), 


		    //Search Settings	
		    array(
		        'id' => 'h_search_enabled',
		        'type' => 'switch',
		        'title' => esc_html__('Enable search on headers', 'kameleon'), 		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),

        	array(
        		'id' => 'h_search_style',
		        'type' => 'select',
		        'required' => array('h_search_enabled', '=' , '1'),
		        'title' => esc_html__('Search Style', 'kameleon'), 	
		        'subtitle' => esc_html__('Choose a style for the header search area', 'kameleon'),	        
		        'options' => array(
		        	'wide' => 'Wide Search', 
		        	'small' => 'Small Input', 
		        	'dropdown' => 'Drop Down', 
		        	'fullscreen' => 'Full Screen', 
		        	'topfixed' => 'Top Fixed', 
		        ), 
		        'default' => 'wide',	
        	),
        	

        	//Search FullScreen Styling
        	array(
		        'id' => 'h_searchfull_background',
		        'type' => 'color_rgba',				
				 'required' => array(
		        	array('h_search_style', '=' , 'fullscreen'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),
		        'title' => esc_html__('Search FullScreen Background Color', 'kameleon'), 		        
		        'default' => array(
		        	'color' => '#000000',
		        	'alpha' => 0.95,
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
        		'id' => 'h_searchfull_animation',
		        'type' => 'select',
		         'required' => array(
		        	array('h_search_style', '=' , 'fullscreen'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),
		        'title' => esc_html__('Search FullScreen Animation', 'kameleon'), 	
		        'subtitle' => esc_html__('Choose an animation style for showing action', 'kameleon'),	        
		        'options' => kameleon_fullscreen_section_animations(), 
		        'default' => 'scalecentersmall',	
        	),
        	array(
        		'id' => 'h_searchfull_bordercolor',
		        'type' => 'color',
		        'title' => esc_html__('Search FullScreen Input Border Color', 'kameleon'), 
		         'required' => array(
		        	array('h_search_style', '=' , 'fullscreen'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),	        
		        'default' => '#333',
				'validate' => 'color'	
        	),

        	array(
        		'id' => 'h_searchfull_textcolor',
		        'type' => 'color',
		        'title' => esc_html__('Search FullScreen Text Color', 'kameleon'), 
		         'required' => array(
		        	array('h_search_style', '=' , 'fullscreen'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),		        
		        'default' => '#bbb',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'h_searchfull_fontsize',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Search FullScreen Input Font Size (px)', 'kameleon'), 
		         'required' => array(
		        	array('h_search_style', '=' , 'fullscreen'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),				        
		        'default'  => '52',
			    'min'      => '20',
			    'step'     => '1',
			    'max'      => '80'
        	),

        	array(
        		'id' => 'h_searchfull_align',
		        'type' => 'button_set',
		        'title' => esc_html__('Search FullScreen Input Text Alignement', 'kameleon'), 
		        'required' => array(
		        	array('h_search_style', '=' , 'fullscreen'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),			   
		        'options' => array(
			        'left' => 'Left', 
			        'center' => 'Center', 
			        'right' => 'Right'
			     ), 
		        'default' => 'left',	
        	),
        	

        	//Search Wide Styling
        	array(
        		'id' => 'h_searchwide_background',
		        'type' => 'color',
		        'title' => esc_html__('Search Wide Background Color', 'kameleon'), 
		        'required' => array(
		        	array('h_search_style', '=' , 'wide'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#fff',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'h_searchwide_textcolor',
		        'type' => 'color',
		        'title' => esc_html__('Search Wide Text Color', 'kameleon'), 
		        'required' => array(
		        	array('h_search_style', '=' , 'wide'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#888',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'h_searchwide_fontsize',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Search Wide Input Font Size (px)', 'kameleon'), 
		         'required' => array(
		        	array('h_search_style', '=' , 'wide'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),				        
		        'default'  => '32',
			    'min'      => '16',
			    'step'     => '1',
			    'max'      => '46'
        	),
        	array(
        		'id' => 'h_searchwide_align',
		        'type' => 'button_set',
		        'title' => esc_html__('Search Wide Input Text Alignement', 'kameleon'), 
		         'required' => array(
		        	array('h_search_style', '=' , 'wide'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),			   
		        'options' => array(
			        'left' => 'Left', 
			        'center' => 'Center', 
			        'right' => 'Right'
			     ), 
		        'default' => 'left',	
        	),

        	//Search Drop Down Styling	
        	array(
        		'id' => 'h_searchdrop_background',
		        'type' => 'color',
		        'title' => esc_html__('Search Drop Down Area Background', 'kameleon'), 
		        'required' => array(
		        	array('h_search_style', '=' , 'dropdown'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#fafafa',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'h_searchdrop_border',
		        'type' => 'color',
		        'title' => esc_html__('Search Drop Down Border Color', 'kameleon'), 
		        'required' => array(
		        	array('h_search_style', '=' , 'dropdown'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#eee',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'h_searchdrop_inputback',
		        'type' => 'color',
		        'title' => esc_html__('Search Drop Down Input Background', 'kameleon'), 
		        'required' => array(
		        	array('h_search_style', '=' , 'dropdown'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#fff',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'h_searchdrop_inputborder',
		        'type' => 'color',
		        'title' => esc_html__('Search Drop Down Input Border', 'kameleon'), 
		        'required' => array(
		        	array('h_search_style', '=' , 'dropdown'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#eee',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'h_searchdrop_textcolor',
		        'type' => 'color',
		        'title' => esc_html__('Search Drop Down Text Color', 'kameleon'), 
		        'required' => array(
		        	array('h_search_style', '=' , 'dropdown'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#777',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'h_searchdrop_iconcolor',
		        'type' => 'color',
		        'title' => esc_html__('Search Drop Down Icon Color', 'kameleon'), 
		        'required' => array(
		        	array('h_search_style', '=' , 'dropdown'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#eee',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'h_searchdrop_iconbackground',
		        'type' => 'color',
		        'title' => esc_html__('Search Drop Down Icon Background', 'kameleon'), 
		        'required' => array(
		        	array('h_search_style', '=' , 'dropdown'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#111',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'h_searchdrop_fontsize',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Search Drop Down Input Font Size (px)', 'kameleon'), 
		         'required' => array(
		        	array('h_search_style', '=' , 'dropdown'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),				        
		        'default'  => '15',
			    'min'      => '11',
			    'step'     => '1',
			    'max'      => '22'
        	),

        	//Search Small Input
        	array(
        		'id' => 'h_searchsmall_background',
		        'type' => 'color',
		        'title' => esc_html__('Search Small Background', 'kameleon'), 
		        'required' => array(
		        	array('h_search_style', '=' , 'small'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#fff',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'h_searchsmall_textcolor',
		        'type' => 'color',
		        'title' => esc_html__('Search Small Text Color', 'kameleon'), 
		        'required' => array(
		        	array('h_search_style', '=' , 'small'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#eee',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'h_searchsmall_border',
		        'type' => 'color',
		        'title' => esc_html__('Search Small Border Color', 'kameleon'), 
		        'required' => array(
		        	array('h_search_style', '=' , 'small'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#eee',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'h_searchsmall_fontsize',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Search Small Input Font Size (px)', 'kameleon'), 
		         'required' => array(
		        	array('h_search_style', '=' , 'small'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),				        
		        'default'  => '13',
			    'min'      => '11',
			    'step'     => '1',
			    'max'      => '22'
        	),


        	//Search Top Fixed Styling
        	array(
        		'id' => 'h_searchtopfixed_background',
		        'type' => 'color',
		        'title' => esc_html__('Search Top Fixed Background Color', 'kameleon'), 
		        'required' => array(
		        	array('h_search_style', '=' , 'topfixed'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#fff',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'h_searchtopfixed_textcolor',
		        'type' => 'color',
		        'title' => esc_html__('Search Top Fixed Text Color', 'kameleon'), 
		        'required' => array(
		        	array('h_search_style', '=' , 'topfixed'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),
		        'default' => '#888',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'h_searchtopfixed_fontsize',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Search Top Fixed Input Font Size (px)', 'kameleon'), 
		         'required' => array(
		        	array('h_search_style', '=' , 'topfixed'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),				        
		        'default'  => '32',
			    'min'      => '16',
			    'step'     => '1',
			    'max'      => '46'
        	),
        	array(
        		'id' => 'h_searchtopfixed_align',
		        'type' => 'button_set',
		        'title' => esc_html__('Search Top Fixed Input Text Alignement', 'kameleon'),
		        'required' => array(
		        	array('h_search_style', '=' , 'topfixed'),		        	
				 	array('h_search_enabled', '=' , '1'), 
		        ),		 		   
		        'options' => array(
			        'left' => 'Left', 
			        'center' => 'Center', 
			        'right' => 'Right'
			     ), 
		        'default' => 'left',	
        	),
        )
    );
	
?>