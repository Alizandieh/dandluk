<?php 
/* ================================================================== *\
   ==                  	 S U B S E C T I O N                       ==
   ==============           HEADER VERSION 5    	   ============== 
\* ================================================================== */
	
	//Header Side  Show/Hide
	$sections[] = array(
        'title' => '5- Side Header Show/Hide',
        'id' => 'header_5_section',        						
		'icon' => 'fa fa-outdent',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Side header width show and hide Button', 'kameleon'),
        'subsection' => true,
        'fields' =>array(
        	array(
        		'id' => 'header_v5_onepage',
		        'type' => 'switch',
		        'title' => esc_html__('Assign The One Page Menu', 'kameleon'), 
		        'subtitle' => esc_html__('Check on if You want to have a one page menu for this header!', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
        	),
	       	array(
        		'id' => 'hv5_position',
		        'type' => 'button_set',
		        'title' => esc_html__('Side Header Position', 'kameleon'), 		        
		        'options' => array(
			        'left' => 'Left', 
			        'right' => 'Right',
			     ), 
		        'default' => 'left',	
        	),
        	array(
		        'id' => 'hv5_background',
		        'type' => 'background',
		        'title' => esc_html__('Background Settings', 'kameleon'), 		      
		        'preview' =>false,		        
				'default'  => array(
			        'background-color' => '#121212',
			        'background-image' => '',
					'background-repeat' => '',
					'background-position' => '',
					'background-size' => '',
					'background-attachment' => '',
			    )						
		    ),      
        	
        	array(
			    'id' => 'hv5_background_drop',
			    'type' => 'color',
			    'title' => esc_html__('Drop Menu Background Color', 'kameleon'), 			    		        
				'default' => '#121212',
				'validate' => 'color'
			), 
	       	array(
			    'id' => 'hv5_color',
			    'type' => 'color',
			    'title' => esc_html__('Text Color', 'kameleon'), 			    		        
				'default' => '#888',
				'validate' => 'color'
			), 

			array(
	        	'id' => 'hv5_fontsize',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Links Font Size', 'kameleon'), 			    
			    'default'  => '14',
				'min'      => '0',
				'step'     => '1',
				'max'      => '25',	
	        ),

	        array(
	        	'id' => 'hv5_link_height',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Link Height', 'kameleon'), 			    
			    'default'  => '50',
				'min'      => '20',
				'step'     => '1',
				'max'      => '75',	
	        ),


			array(
			    'id' => 'hv5_hover_background',
			    'type' => 'color',
			    'title' => esc_html__('Hover Background Color', 'kameleon'), 			    		        
				'default' => '#0f0f0f',
				'validate' => 'color'
			), 

			array(
			    'id' => 'hv5_border_color',
			    'type' => 'color',
			    'title' => esc_html__('Links Border Color', 'kameleon'), 			    		        
				'default' => '#222',
				'validate' => 'color'
			), 

			array(
	        	'id' => 'hv5_width',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Header Width ', 'kameleon'), 			    
			    'default'  => '350',
				'min'      => '40',
				'step'     => '1',
				'max'      => '500',	
	        ),

	        array(
			    'id'=> 'hv5_padding',
			    'type'=> 'spacing',
			    'units' => array( 'px'),
			    'mode'=> 'padding',
			    'title'=> esc_html__('Padding Options', 'kameleon'),
			    'default'=> array(
			        'padding-top'     => '10px', 			       
			        'padding-bottom'  => '30px',
			        'padding-left'     => '0px', 			       
			        'padding-right'  => '0px', 			       			        
			   		'units' =>  'px',
			    	
			    )
			),

	        array(
        		'id' => 'hv5_content_position',
		        'type' => 'button_set',
		        'title' => esc_html__('Content Position', 'kameleon'), 		        
		       	'desc' =>esc_html__('Logo & Links Position', 'kameleon'),		        
		        'options' => array(
			        'left' => 'Left', 
			        'center' => 'Center',
			        'right' => 'Right',
			     ), 
		        'default' => 'center',	
        	),

			array(
        		'id' => 'hv5_logo_type',
		        'type' => 'button_set',
		        'title' => esc_html__('Logo Type', 'kameleon'), 		        
		        'options' => array(
			        'normal' => 'Normal', 
			        'transparent' => 'Transparent'
			     ), 
		        'default' => 'transparent',	
        	),

        	array(
	        	'id' => 'hv5_logo_marginTop',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Logo Margin Top', 'kameleon'), 			    
			    'default'  => '50',
				'min'      => '0',
				'step'     => '1',
				'max'      => '200',	
	        ),

        	array(
	        	'id' => 'hv5_logo_width',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Logo Width ', 'kameleon'), 			    
			    'default'  => '170',
				'min'      => '40',
				'step'     => '1',
				'max'      => '500',	
	        ), 

	        array(
	        	'id' => 'hv5_logo_height',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Logo Height ', 'kameleon'), 			    
			    'default'  => '50',
				'min'      => '20',
				'step'     => '1',
				'max'      => '250',	
	        ),

			
	        array(
        		'id' => 'hv5_button_position',
		        'type' => 'select',
		        'title' => esc_html__('Show Button Position', 'kameleon'), 		        
		        'options' => array(
			        'right-top' => 'Right Top',
			        'left-top' => 'Left Top', 
			        'left-bottom' => 'Left Bottom',
			        'right-bottom' => 'Right Bottom',
			     ), 
		        'default' => 'right-top',	
        	),

	        array(
			    'id' => 'hv5_button_color',
			    'type' => 'color',
			    'title' => esc_html__('Button Color', 'kameleon'), 			    		        
				'default' => '#fff',
				'validate' => 'color'
			), 
			array(
		        'id' => 'hv5_button_background',
		        'type' => 'color_rgba',
		        'title' => esc_html__('Button Background Color', 'kameleon'), 		        
		        'default' => array(
		        	'color' => '#000000',
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
			    'id' => 'hv5_button_border_color',
			    'type' => 'color',
			    'title' => esc_html__('Button Border Color', 'kameleon'), 			    		        
				'default' => '#eee',
				'validate' => 'color'
			), 

			array(
	        	'id' => 'hv5_button_border_thickness',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Button Border Thickness ', 'kameleon'), 			    
			    'default'  => '1',
				'min'      => '0',
				'step'     => '1',
				'max'      => '10',	
	        ), 

			array(
	        	'id' => 'hv5_button_radius',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Button Radius (%)', 'kameleon'), 			    
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),

	        array(
        		'id' => 'hv5_icon_style',
		        'type' => 'select',
		        'title' => esc_html__('Hamburger Button click style', 'kameleon'), 		        
		        'options' => array(
			        '1' => 'Style 1', 
			        '2' => 'Style 2',
			        '3' => 'Style 3', 
			        '4' => 'Style 4',
			     	
			     ), 
		        'default' => '1',	
        	),

 			array(
		        'id' => 'hv5_social_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Social Links', 'kameleon'), 		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 

	    )
	);    
?>