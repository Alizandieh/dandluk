<?php 
/* ================================================================== *\
   ==                        S E C T I O N                         ==
   ==============          Slide Widget Area       	   ============== 
\* ================================================================== */

	//Header Sections 
	$sections[] = array(	
		'id'=>'slidewidgetaraea_header',
        'title' => 'Slide Widget Area',
		'icon' => 'flaticon-header',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Styling the Slide Widget Area(SWA)', 'kameleon'),
        'fields' => 
        array( 
        	//Slide Widget Area Settings
        	array(
	        	'id' => 'swa_width',
			    'type' => 'slider',
		        'display_value' => 'text',		    
			    'title' => esc_html__('Slide Widget Area Width (px)', 'kameleon'),			   
			    'default'  => '400',
				'min'      => '250',
				'step'     => '1',
				'max'      => '1000',	
	        ),
	        array(
			    'id'=> 'swa_padding',
			    'type'=> 'spacing',
			    'mode'=> 'padding',	
			    'units' => array('px'),			    			    		    
			    'title'=> esc_html__('Slide Widget Area Padding Option', 'kameleon'),
			    'default'=> array(
			        'padding-top'     => '30px', 
			        'padding-right'   => '20px', 
			        'padding-bottom'  => '30px', 
			        'padding-left'    => '20px',
			        'units'          => 'px', 
			    )
			),
        	//Slide Widget Area Light
        	array(
	       		'id' => 'slide_widgetarea_light_section',
	       		'type' => 'raw',		       	
	       		'title' =>esc_html__('Slide Widget Area Light', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Change the colors and styling for the slide widget area when light background', 'kameleon'),
	        ), 
        	array(
        		'id' => 'swa_title_color-light',
		        'type' => 'color',
		        'title' => esc_html__('Slide WA Title Color (light)', 'kameleon'), 		       
		        'subtitle' => esc_html__('Choose a color for Widget Title', 'kameleon'),
		        'default' => '#444',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'swa_text_color-light',
		        'type' => 'color',
		        'title' => esc_html__('Slide WA Text Color (light)', 'kameleon'), 		       
		        'subtitle' => esc_html__('Choose a color for Widget Text', 'kameleon'),
		        'default' => '#444',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'swa_border_color-light',
		        'type' => 'color',
		        'title' => esc_html__('Slide WA Border Color (light)', 'kameleon'), 		       
		        'subtitle' => esc_html__('Choose a color for inner borders', 'kameleon'),
		        'default' => '#eee',
				'validate' => 'color'	
        	),

        	//Slide Widget Area Dark
        	array(
	       		'id' => 'slide_widgetarea_dark_section',
	       		'type' => 'raw',		       	
	       		'title' =>esc_html__('Slide Widget Area Dark', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Change the colors and styling for the slide widget area when dark background', 'kameleon'),
	        ), 
        	array(
        		'id' => 'swa_title_color-dark',
		        'type' => 'color',
		        'title' => esc_html__('Slide WA Title Color (dark)', 'kameleon'), 		       
		        'subtitle' => esc_html__('Choose a color for Widget Title', 'kameleon'),
		        'default' => '#fff',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'swa_text_color-dark',
		        'type' => 'color',
		        'title' => esc_html__('Slide WA Text Color (dark)', 'kameleon'), 		       
		        'subtitle' => esc_html__('Choose a color for Widget Text', 'kameleon'),
		        'default' => '#eee',
				'validate' => 'color'	
        	),
        	array(
        		'id' => 'swa_border_color-dark',
		        'type' => 'color',
		        'title' => esc_html__('Slide WA Border Color (dark)', 'kameleon'), 		       
		        'subtitle' => esc_html__('Choose a color for inner borders', 'kameleon'),
		        'default' => '#333',
				'validate' => 'color'	
        	),

        	//Enable Disable The Social Links 
        	array(
	       		'id' => 'slide_widgetarea_social',
	       		'type' => 'raw',		       	
	       		'title' =>esc_html__('Slide Widget Area Social Icons', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('The bottom social link icons for the Slide Widget Area', 'kameleon'),
	        ), 
        	array(
		        'id' => 'swa_social_enable',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Social Icons', 'kameleon'), 
		        'subtitle' => esc_html__('Choose if to include the social link icons on the bottom', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),

		     array(
			    'id'       => 'swa_social_array',
			    'type'     => 'select',
			    'multi'    => true,
			    'required' => array(
		        	array('swa_social_enable', '=' , '1'),		        
		        ),
			    'title'    => __('Slide Widget Area Social Icons', 'kameleon'), 
			    'subtitle' => __('Choose the social links you want to include on the Slide Widget Area.', 'kameleon'),			   
			    'options'  => kameleon_social_array_list(),
			    'default'  => array('facebook','twitter','youtube','google','linkedin','instagram')
			),
		     array(
        		'id' => 'swa_social_align',
		        'type' => 'button_set',
		        'title' => esc_html__('Social Icons Align', 'kameleon'), 
		        'required' => array('swa_social_enable', '=' , '1'),  
		        'options' => array(
			        'left' => 'Left', 
			        'center' => 'Center', 
			        'right' => 'Right'
			     ), 
		        'default' => 'left',	
        	),
        	array(
	       		'id' => 'swa_social_light',
		        'required' => array('swa_social_enable', '=' , '1'),
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Social Links Settings For Light Background', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Change the colors and styling for the top when ligh background', 'kameleon'),
	        ), 
		    array(
			    'id'       => 'swa-light-icon_style',
			    'type'     => 'select',
			    'required' => array('swa_social_enable','=','1'),
			    'title'    => __('Social Icons Style Effect (light)', 'kameleon'), 
			    'subtitle' => __('Choose the social links effect', 'kameleon'),			   
			    'options'  => kameleon_modern_icon_style(),
			    'default'  => 'normal_color',
			),

			array(
		        'id' => 'swa-light-icon_scheme_enabled',
		        'type' => 'switch',
		         'required' => array('swa_social_enable', '=' , '1'),
		        'title' => esc_html__('Enable Icon Color Scheme (light)', 'kameleon'), 
		        'subtitle' => esc_html__('Enable the real social icon color scheme.', 'kameleon'),		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 
			array(
		        'id' => 'swa-light-icon_normal_color',		        
		        'type' => 'color_rgba',
		        'required' => array(
		        	array('swa-light-icon_scheme_enabled' , '=','0'),		        	
					array('swa-light-icon_style' , '!=','real_color'),
					array('swa_social_enable', '=' , '1'),
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
		        'id' => 'swa-light-icon_normal_background',		        
		        'type' => 'color_rgba',		   
		        'required' => array(
		        	array('swa-light-icon_style' , '!=','normal_color'),
					array('swa-light-icon_style' , '!=','real_color'),
					array('swa-light-icon_style' , '!=','real_background'),
					array('swa-light-icon_style' , '!=','effect_2'),
					array('swa-light-icon_style' , '!=','effect_3'),
					array('swa-light-icon_style' , '!=','effect_4'),
					array('swa-light-icon_style' , '!=','effect_5'),
		        	array('swa-light-icon_style' , '!=','effect_6'),
		        	array('swa_social_enable', '=' , '1'),
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
		        'id' => 'swa-light-icon_hover_color',		        
		        'type' => 'color_rgba',
		        'required' => array(
		        	array('swa-light-icon_style' , '!=','normal_color'),		        	
		        	array('swa-light-icon_style' , '!=','real_background'),		        	
		        	array('swa-light-icon_style' , '!=','real_color'),
		        	array('swa-light-icon_style' , '!=','effect_2'),
		        	array('swa-light-icon_style' , '!=','effect_3'),
		        	array('swa-light-icon_style' , '!=','effect_4'),
		        	array('swa-light-icon_style' , '!=','effect_5'),
		        	array('swa-light-icon_style' , '!=','effect_6'),
		        	array('swa-light-icon_style' , '!=','effect_7'),		
		        	array('swa_social_enable', '=' , '1'),        	
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
	        	'id' => 'swa-light-icon_size',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array('swa_social_enable','=','1'),
			    'title' => esc_html__('Icon Size (px) (light)', 'kameleon'),			   
			    'default'  => '16',
				'min'      => '0',
				'step'     => '1',
				'max'      => '60',	
	        ),

	        array(
	        	'id' => 'swa-light-icon_back_size',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array('swa_social_enable','=','1'),
			    'title' => esc_html__('Icon Background Size(px) (light)', 'kameleon'),			   
			    'default'  => '28',
				'min'      => '0',
				'step'     => '1',
				'max'      => '90',	
	        ),

	        array(
	        	'id' => 'swa-light-icon_radius',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array('swa_social_enable','=','1'),
			    'title' => esc_html__('Icon Background Radius Size(px) (light)', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ),
	        array(
	        	'id' => 'swa-light-icon_margins',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array('swa_social_enable', '=' , '1'),		       
			    'title' => esc_html__('Icon Margins(px) (light)', 'kameleon'),			   
			    'default'  => '7',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),

	        //DARK Background
	        array(
	       		'id' => 'swa_social_dark',
		        'required' => array('swa_social_enable', '=' , '1'),
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Social Links Settings For dark Background', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Change the colors and styling for the top when dark background', 'kameleon'),
	        ), 
			array(
			    'id'       => 'swa-dark-icon_style',
			    'type'     => 'select',
			    'required' => array('swa_social_enable','=','1'),
			    'title'    => __('Social Icons Style Effect (dark)', 'kameleon'), 
			    'subtitle' => __('Choose the social links effect', 'kameleon'),			   
			    'options'  => kameleon_modern_icon_style(),
			    'default'  => 'normal_color',
			),

			array(
		        'id' => 'swa-dark-icon_scheme_enabled',
		        'type' => 'switch',
		        'required' => array('swa_social_enable', '=' , '1'),
		        'title' => esc_html__('Enable Icon Color Scheme (dark)', 'kameleon'), 
		        'subtitle' => esc_html__('Enable the real social icon color scheme.', 'kameleon'),		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 
			array(
		        'id' => 'swa-dark-icon_normal_color',		        
		        'type' => 'color_rgba',
		        'required' => array(
		        	array('swa-dark-icon_scheme_enabled' , '=','0'),		        	
					array('swa-dark-icon_style' , '!=','real_color'),
		        	array('swa_social_enable', '=' , '1'),	        	
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
		        'id' => 'swa-dark-icon_normal_background',		        
		        'type' => 'color_rgba',		   
		        'required' => array(
		        	array('swa-dark-icon_style' , '!=','normal_color'),
					array('swa-dark-icon_style' , '!=','real_color'),
					array('swa-dark-icon_style' , '!=','real_background'),
					array('swa-dark-icon_style' , '!=','effect_2'),
					array('swa-dark-icon_style' , '!=','effect_3'),
					array('swa-dark-icon_style' , '!=','effect_4'),
					array('swa-dark-icon_style' , '!=','effect_5'),
		        	array('swa-dark-icon_style' , '!=','effect_6'),
		        	array('swa_social_enable', '=' , '1'),	        	
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
		        'id' => 'swa-dark-icon_hover_color',		        
		        'type' => 'color_rgba',
		        'required' => array(
		        	array('swa-dark-icon_style' , '!=','normal_color'),		        	
		        	array('swa-dark-icon_style' , '!=','real_background'),		        	
		        	array('swa-dark-icon_style' , '!=','real_color'),
		        	array('swa-dark-icon_style' , '!=','effect_2'),
		        	array('swa-dark-icon_style' , '!=','effect_3'),
		        	array('swa-dark-icon_style' , '!=','effect_4'),
		        	array('swa-dark-icon_style' , '!=','effect_5'),
		        	array('swa-dark-icon_style' , '!=','effect_6'),
		        	array('swa-dark-icon_style' , '!=','effect_7'),	
		        	array('swa_social_enable', '=' , '1'),	        	
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
	        	'id' => 'swa-dark-icon_size',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array('swa_social_enable','=','1'),
			    'title' => esc_html__('Icon Size (px) (dark)', 'kameleon'),			   
			    'default'  => '16',
				'min'      => '0',
				'step'     => '1',
				'max'      => '60',	
	        ),

	        array(
	        	'id' => 'swa-dark-icon_back_size',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array('swa_social_enable','=','1'),
			    'title' => esc_html__('Icon Background Size(px) (dark)', 'kameleon'),			   
			    'default'  => '28',
				'min'      => '0',
				'step'     => '1',
				'max'      => '90',	
	        ),

	        array(
	        	'id' => 'swa-dark-icon_radius',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array('swa_social_enable','=','1'),
			    'title' => esc_html__('Icon Background Radius Size(px) (dark)', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ),
	        array(
	        	'id' => 'swa-dark-icon_margins',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array('swa_social_enable', '=' , '1'),		       
			    'title' => esc_html__('Icon Margins(px) (dark)', 'kameleon'),			   
			    'default'  => '7',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),
        	





		),    
	);	
?>