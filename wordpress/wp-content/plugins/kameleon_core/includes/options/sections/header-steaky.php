<?php 
/* ================================================================== *\
   ==                  	 S U B S E C T I O N                       ==
   ==============           SRICKY HEADER    		   ============== 
\* ================================================================== */

	//Sticky Header
	$sections[] = array(
        'title' => 'Sticky Header',
		'icon' => 'flaticon-header',
        'id' => 'header_steaky_section',        				
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Sticky fixed header ', 'kameleon'),
        'subsection' => true,
        'fields' =>array(
        	array(
		        'id' => 'sticky_background',
		        'type' => 'color_rgba',
		        'title' => esc_html__('Background Color', 'kameleon'), 
		        'subtitle' => esc_html__('Apply a color for the header background', 'kameleon'),
		        'default' => array(
		        	'color' => '#000',
		        	'alpha' => '.9',
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
			    'id' => 'sticky_border_color',
			    'type' => 'color',
			    'title' => esc_html__('Border Color', 'kameleon'), 			    		        
				'default' => 'transparent',
				'validate' => 'color'
			),

	        array(
	        	'id' => 'sticky_logo_height',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Logo Height ', 'kameleon'), 			    
			    'default'  => '40',
				'min'      => '10',
				'step'     => '1',
				'max'      => '250',	
	        ),

	        array(
	        	'id' => 'sticky_logo_width',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Logo Width ', 'kameleon'), 			    
			    'default'  => '130',
				'min'      => '40',
				'step'     => '1',
				'max'      => '450',	
	        ),

	        array(
	        	'id' => 'sticky_logo_marginTop',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Logo Margin Top ', 'kameleon'), 			    
			    'default'  => '9',
				'min'      => '1',
				'step'     => '1',
				'max'      => '50',	
	        ),
			
			
		
			array(
			    'id' => 'sticky_color',
			    'type' => 'color',
			    'title' => esc_html__('Menu Text Color', 'kameleon'), 			    		        
				'default' => '#fff',
				'validate' => 'color'
			),
			
			array(
	        	'id' => 'sticky_height',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Header Height ', 'kameleon'), 			    
			    'default'  => '60',
				'min'      => '40',
				'step'     => '1',
				'max'      => '150',	
	        ),
	        array(
	        	'id' => 'sticky_logo',
				'type' => 'button_set',
				'title' => esc_html__('Logo for the sticky  header', 'kameleon'), 			    
			    'options' => array(
			    	'normal' => 'Normal', 
			    	'transparent' => 'Transparent'
			     ), 
			    'default' => 'transparent',	
	        ),
        ),

    );
	

?>