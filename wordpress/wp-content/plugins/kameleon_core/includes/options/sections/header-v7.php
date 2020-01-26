<?php 
/* ================================================================== *\
   ==                     S U B S E C T I O N                      ==
   ==============           HEADER VERSION 7   		   ============== 
\* ================================================================== */
	$elementsHeaderV7 = array(	
        	array(
        		'id' => 'header_v7_onepage',
		        'type' => 'switch',
		        'title' => esc_html__('Assign The One Page Menu', 'kameleon'), 
		        'subtitle' => esc_html__('Check on if You want to have a one page menu for this header!', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
        	),

        	array(
        		'id' => 'hv7_logo_type',
		        'type' => 'button_set',
		        'title' => esc_html__('Logo for the header', 'kameleon'), 
		        'subtitle' => esc_html__('Choose what logo to apply for this header!', 'kameleon'),
		        'options' => array(
			        'normal' => 'Normal', 
			        'transparent' => 'Transparent'
			     ), 
		        'default' => 'normal',	
        	),

        	array(
		        'id' => 'hv7_transparent',
		        'type' => 'switch',
		        'title' => esc_html__('Header Fixed', 'kameleon'), 
		        'subtitle' => esc_html__('Choose if the header is fixed from the begining', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ),
        	

        	array(
        		'id' => 'hv7_logo_width',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Logo Width', 'kameleon'), 
		        'subtitle' => esc_html__('Apply a width for your logo', 'kameleon'),
		        'default'  => '170',
			    'min'      => '50',
			    'step'     => '1',
			    'max'      => '300',	
        	),

        	array(
        		'id' => 'hv7_logo_height',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Logo Height', 'kameleon'), 
		        'subtitle' => esc_html__('Apply a height for your logo', 'kameleon'),
		        'default'  => '50',
			    'min'      => '20',
			    'step'     => '1',
			    'max'      => '150',	
        	),

        	array(
        		'id' => 'hv7_logo_matgintop',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Logo Margin Top', 'kameleon'), 
		        'subtitle' => esc_html__('', 'kameleon'),
		        'default'  => '8',
			    'min'      => '0',
			    'step'     => '1',
			    'max'      => '50',	
        	),

        	array(
        		'id' => 'hv7_width',
		        'type' => 'button_set',
		        'title' => esc_html__('Header Width', 'kameleon'), 
		        'subtitle' => esc_html__('', 'kameleon'),
		        'options' => array(
			        'boxed-header' => 'Boxed', 
			        'full-header' => 'Full Width'
			     ), 
		        'default' => 'boxed-header',	
        	),

        	array(
        		'id' => 'hv7_height',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Header Height', 'kameleon'), 
		        'subtitle' => esc_html__('Apply a height for the header', 'kameleon'),
		        'default'  => '70',
			    'min'      => '20',
			    'step'     => '1',
			    'max'      => '150',	
        	),


        	array(
		        'id' => 'hv7_sticky',
		        'type' => 'switch',
		        'title' => esc_html__('Sticky Header', 'kameleon'), 
		        'subtitle' => esc_html__('Apply a steaky header', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),        
		    array(
		        'id' => 'hv7_sticky_width',
		        'type' => 'switch',
		        'title' => esc_html__('Full Width When Sticky Header', 'kameleon'), 
		        'subtitle' => esc_html__('Apply a full width for steaky header', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),  	        
		    array(
		        'id' => 'hv7_text_color',
		        'type' => 'color',
		        'title' => esc_html__('Text Color', 'kameleon'), 
		        'subtitle' => esc_html__('Apply a color for the header menu text ', 'kameleon'),		        
				'default' => '#777',
				'validate' => 'color'
		    ), 


		    array(
		        'id' => 'hv7_text_color',
		        'type' => 'color',
		        'title' => esc_html__('Text Color', 'kameleon'), 
		        'subtitle' => esc_html__('Apply a color for the header menu text ', 'kameleon'),		        
				'default' => '#777',
				'validate' => 'color'
		    ),  

		     array(
		        'id' => 'hv7_background',
		        'type' => 'color_rgba',
		        'title' => esc_html__('Background Color', 'kameleon'), 
		        'subtitle' => esc_html__('Apply a color for the header background', 'kameleon'),
		        'default' => array(
		        	'color' => '#ffffff',
		        	'alpha' => 1,
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
        		'id' => 'hv7_border_thickness',
		        'type' => 'slider',
		        'display_value' => 'text',
		        'title' => esc_html__('Header Border Thickness', 'kameleon'), 
		        'subtitle' => esc_html__('Apply a thikness for the Top and Bottom header borders ', 'kameleon'),
		        'default'  => '1',
			    'min'      => '0',
			    'step'     => '1',
			    'max'      => '5',	
        	),
		     array(
		        'id' => 'hv7_border_color',
		        'type' => 'color',
		        'title' => esc_html__('Header Border Color', 'kameleon'), 
		        'subtitle' => esc_html__('Apply a color for the Top and Bottom header borders ', 'kameleon'),		        
				'default' => '#eee',
				'validate' => 'color'
		    ),  
		   		    		   
    );
	


	//header v7 subsection
	$sections[] = array(
        'title' => '7- Centred Links',
		'icon' => 'flaticon-header',
        'id' => 'header_7_section',        						
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Styling the global header version 7 (Logo Left + Menu Center + Buttons Right)', 'kameleon'),
        'subsection' => true,
        'fields' => kameleon_header_shared_elements('header_v7',$elementsHeaderV7)       
    );

?>