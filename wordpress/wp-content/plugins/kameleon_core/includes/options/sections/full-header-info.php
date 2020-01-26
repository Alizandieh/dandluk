<?php 
//Fullscreen Header Information Area
	$sections[] = array(
        'title' => 'Fullscreen header Info',
		'icon' => 'flaticon-header',
        'id' => 'fullscreen_header_info_section',        						
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Information area for the minimalist fullscreen headers', 'kameleon'),
        'subsection' => true,
        'fields' => array(
        	array(
	       		'id' => 'fullscreen_h_global',
	       		'type' => 'raw',	
	       		'title' =>esc_html__('Fullscreen Header Info Area', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('This will be included on all fullscreen headers information bottom area', 'kameleon'),
	        ), 
        	 array(
			    'id'       => 'full_social_array',
			    'type'     => 'select',
			    'multi'    => true,		
			    'title'    => __('Fullscreen Header Social Link', 'kameleon'), 
			    'subtitle' => __('Choose the social links you want to include on the Fullscreen header information area.', 'kameleon'),			   
			    'options'  => kameleon_social_array_list(),
			    'default'  => array('facebook','twitter','google','linkedin','instagram')
			),
        	 array(
			    'id'=>'fullscreen_h_copyright',
			    'type' => 'textarea',
			    'title' => esc_html__('Copyright Text', 'kameleon'), 
			    'subtitle' => esc_html__('Copyright Text', 'kameleon'),
			    'validate' => 'html_custom',			    
			    'default' => '&copy; <a href="http://themeforest.net/user/sayenthemes" target="_blank">SayenThemes - Kameleon</a>',
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
        	//FOR LIGHT Background 
        	array(
	       		'id' => 'fullscreen_h_light',
	       		'type' => 'raw',	
	       		'title' =>esc_html__('Fullscreen Header Info For Light Background', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Change the colors and styling for the fullscreen header when light background', 'kameleon'),
	        ), 
	         array(
		        'id' => 'fullscreen-h-light_background',
		        'type' => 'color_rgba',
		        'title' => esc_html__('Background Color (light)', 'kameleon'), 
		        'subtitle' => esc_html__('Apply a color for the fullscreen header background', 'kameleon'),
		        'default' => array(
		        	'color' => '#fff',
		        	'alpha' => ".9",
			     ),
			     'options'   => array(
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
		        'id' => 'fullscreen-h-light-link_color',
		        'type' => 'color',
		        'title' => esc_html__('Links Color (light)', 'kameleon'), 		      
				'default' => '#444',
				'validate' => 'color'
		    ),
        	array(
        		'id' => 'fullscreen-h-light_text_color',
		        'type' => 'color',
		        'title' => esc_html__('Fullscreen header info text color (light)', 'kameleon'), 
		        'subtitle' => esc_html__('Choose a color to be applied for the text on fullscreen header', 'kameleon'),
		        'default' => '#777',
				'validate' => 'color'	
        	),
			array(
			    'id'       => 'fullscreen-h-light-icon_style',
			    'type'     => 'select',			    
			    'title'    => __('Social Icons Style Effect (light)', 'kameleon'), 
			    'subtitle' => __('Choose the social links effect', 'kameleon'),			   
			    'options'  => kameleon_modern_icon_style(),
			    'default'  => 'normal_color',
			),

			array(
		        'id' => 'fullscreen-h-light-icon_scheme_enabled',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Icon Color Scheme (light)', 'kameleon'), 
		        'subtitle' => esc_html__('Enable the real social icon color scheme.', 'kameleon'),		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 
			array(
		        'id' => 'fullscreen-h-light-icon_normal_color',		        
		        'type' => 'color_rgba',
		        'required' => array(
		        	array('fullscreen-h-light-icon_scheme_enabled' , '=','0'),		        	
					array('fullscreen-h-light-icon_style' , '!=','real_color'),
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
		        'id' => 'fullscreen-h-light-icon_normal_background',		        
		        'type' => 'color_rgba',		   
		        'required' => array(
		        	array('fullscreen-h-light-icon_style' , '!=','normal_color'),
					array('fullscreen-h-light-icon_style' , '!=','real_color'),
					array('fullscreen-h-light-icon_style' , '!=','real_background'),
					array('fullscreen-h-light-icon_style' , '!=','effect_2'),
					array('fullscreen-h-light-icon_style' , '!=','effect_3'),
					array('fullscreen-h-light-icon_style' , '!=','effect_4'),
					array('fullscreen-h-light-icon_style' , '!=','effect_5'),
		        	array('fullscreen-h-light-icon_style' , '!=','effect_6'),
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
		        'id' => 'fullscreen-h-light-icon_hover_color',		        
		        'type' => 'color_rgba',
		        'required' => array(
		        	array('fullscreen-h-light-icon_style' , '!=','normal_color'),		        	
		        	array('fullscreen-h-light-icon_style' , '!=','real_background'),		        	
		        	array('fullscreen-h-light-icon_style' , '!=','real_color'),
		        	array('fullscreen-h-light-icon_style' , '!=','effect_2'),
		        	array('fullscreen-h-light-icon_style' , '!=','effect_3'),
		        	array('fullscreen-h-light-icon_style' , '!=','effect_4'),
		        	array('fullscreen-h-light-icon_style' , '!=','effect_5'),
		        	array('fullscreen-h-light-icon_style' , '!=','effect_6'),
		        	array('fullscreen-h-light-icon_style' , '!=','effect_7'),		
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
	        	'id' => 'fullscreen-h-light-icon_size',
			    'type' => 'slider',
		        'display_value' => 'text',		        
			    'title' => esc_html__('Icon Size (px) (light)', 'kameleon'),			   
			    'default'  => '20',
				'min'      => '0',
				'step'     => '1',
				'max'      => '60',	
	        ),

	        array(
	        	'id' => 'fullscreen-h-light-icon_back_size',
			    'type' => 'slider',
		        'display_value' => 'text',		        
			    'title' => esc_html__('Icon Background Size(px) (light)', 'kameleon'),			   
			    'default'  => '32',
				'min'      => '0',
				'step'     => '1',
				'max'      => '90',	
	        ),

	        array(
	        	'id' => 'fullscreen-h-light-icon_radius',
			    'type' => 'slider',
		        'display_value' => 'text',		        
			    'title' => esc_html__('Icon Background Radius Size(px) (light)', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ),
	        array(
	        	'id' => 'fullscreen-h-light-icon_margins',
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
	       		'id' => 'fullscreen_h_dark',
	       		'type' => 'raw',	
	       		'title' =>esc_html__('Fullscreen Header Info For Dark Background', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Change the colors and styling for the fullscreen header when dark background', 'kameleon'),
	        ), 
	        array(
		        'id' => 'fullscreen-h-dark_background',
		        'type' => 'color_rgba',
		        'title' => esc_html__('Background Color (dark)', 'kameleon'), 
		        'subtitle' => esc_html__('Apply a color for the fullscreen header background', 'kameleon'),
		        'default' => array(
		        	'color' => '#000',
		        	'alpha' => ".9",
			     ),
			     'options'   => array(
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
		        'id' => 'fullscreen-h-dark_link_color',
		        'type' => 'color',
		        'title' => esc_html__('Links Color (dark)', 'kameleon'), 		      
				'default' => '#fff',
				'validate' => 'color'
		    ),
        	array(
        		'id' => 'fullscreen-h-dark_text_color',
		        'type' => 'color',
		        'title' => esc_html__('Fullscreen header info text color (dark)', 'kameleon'), 
		        'subtitle' => esc_html__('Choose a color to be applied for the text on fullscreen header', 'kameleon'),
		        'default' => '#777',
				'validate' => 'color'	
        	),
			array(
			    'id'       => 'fullscreen-h-dark-icon_style',
			    'type'     => 'select',			    
			    'title'    => __('Social Icons Style Effect (dark)', 'kameleon'), 
			    'subtitle' => __('Choose the social links effect', 'kameleon'),			   
			    'options'  => kameleon_modern_icon_style(),
			    'default'  => 'normal_color',
			),

			array(
		        'id' => 'fullscreen-h-dark-icon_scheme_enabled',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Icon Color Scheme (dark)', 'kameleon'), 
		        'subtitle' => esc_html__('Enable the real social icon color scheme.', 'kameleon'),		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 
			array(
		        'id' => 'fullscreen-h-dark-icon_normal_color',		        
		        'type' => 'color_rgba',
		        'required' => array(
		        	array('fullscreen-h-dark-icon_scheme_enabled' , '=','0'),		        	
					array('fullscreen-h-dark-icon_style' , '!=','real_color'),	        	
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
		        'id' => 'fullscreen-h-dark-icon_normal_background',		        
		        'type' => 'color_rgba',		   
		        'required' => array(
		        	array('fullscreen-h-dark-icon_style' , '!=','normal_color'),
					array('fullscreen-h-dark-icon_style' , '!=','real_color'),
					array('fullscreen-h-dark-icon_style' , '!=','real_background'),
					array('fullscreen-h-dark-icon_style' , '!=','effect_2'),
					array('fullscreen-h-dark-icon_style' , '!=','effect_3'),
					array('fullscreen-h-dark-icon_style' , '!=','effect_4'),
					array('fullscreen-h-dark-icon_style' , '!=','effect_5'),
		        	array('fullscreen-h-dark-icon_style' , '!=','effect_6'),		        
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
		        'id' => 'fullscreen-h-dark-icon_hover_color',		        
		        'type' => 'color_rgba',
		        'required' => array(
		        	array('fullscreen-h-dark-icon_style' , '!=','normal_color'),		        	
		        	array('fullscreen-h-dark-icon_style' , '!=','real_background'),		        	
		        	array('fullscreen-h-dark-icon_style' , '!=','real_color'),
		        	array('fullscreen-h-dark-icon_style' , '!=','effect_2'),
		        	array('fullscreen-h-dark-icon_style' , '!=','effect_3'),
		        	array('fullscreen-h-dark-icon_style' , '!=','effect_4'),
		        	array('fullscreen-h-dark-icon_style' , '!=','effect_5'),
		        	array('fullscreen-h-dark-icon_style' , '!=','effect_6'),
		        	array('fullscreen-h-dark-icon_style' , '!=','effect_7'),	
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
	        	'id' => 'fullscreen-h-dark-icon_size',
			    'type' => 'slider',
		        'display_value' => 'text',		        
			    'title' => esc_html__('Icon Size (px) (dark)', 'kameleon'),			   
			    'default'  => '20',
				'min'      => '0',
				'step'     => '1',
				'max'      => '60',	
	        ),

	        array(
	        	'id' => 'fullscreen-h-dark-icon_back_size',
			    'type' => 'slider',
		        'display_value' => 'text',		        
			    'title' => esc_html__('Icon Background Size(px) (dark)', 'kameleon'),			   
			    'default'  => '32',
				'min'      => '0',
				'step'     => '1',
				'max'      => '90',	
	        ),

	        array(
	        	'id' => 'fullscreen-h-dark-icon_radius',
			    'type' => 'slider',
		        'display_value' => 'text',		        
			    'title' => esc_html__('Icon Background Radius Size(px) (dark)', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ),
	        array(
	        	'id' => 'fullscreen-h-dark-icon_margins',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Margins(px) (dark)', 'kameleon'),			   
			    'default'  => '7',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),

        )
    );
?>