<?php 

/* ================================================================== *\
   ==                  	 S U B S E C T I O N                       ==
   ==============           HEADER VERSION 6    	   ============== 
\* ================================================================== */
	

	//Header Side  Always Shown
	$sections[] = array(
        'title' => '6- Side Header Fixed',
        'id' => 'header_6_section',        						
		'icon' => 'fa fa-outdent',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Side header Always Shown! If you choose this header you may have a full width layout (with 100% content) for better design', 'kameleon'),
        'subsection' => true,
        'fields' =>array(
        	array(
        		'id' => 'header_v6_onepage',
		        'type' => 'switch',
		        'title' => esc_html__('Assign The One Page Menu', 'kameleon'), 
		        'subtitle' => esc_html__('Check on if You want to have a one page menu for this header!', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
        	),
	       	array(
        		'id' => 'hv6_position',
		        'type' => 'button_set',
		        'title' => esc_html__('Side Header Position', 'kameleon'), 		        
		        'options' => array(
			        'left' => 'Left', 
			        'right' => 'Right',
			     ), 
		        'default' => 'left',	
        	),
        	array(
		        'id' => 'hv6_background',
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
			    'id' => 'hv6_background_drop',
			    'type' => 'color',
			    'title' => esc_html__('Drop Menu Background Color', 'kameleon'), 			    		        
				'default' => '#121212',
				'validate' => 'color'
			), 

	       	array(
			    'id' => 'hv6_color',
			    'type' => 'color',
			    'title' => esc_html__('Text Color', 'kameleon'), 			    		        
				'default' => '#888',
				'validate' => 'color'
			), 

			array(
	        	'id' => 'hv6_fontsize',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Links Font Size', 'kameleon'), 			    
			    'default'  => '14',
				'min'      => '0',
				'step'     => '1',
				'max'      => '25',	
	        ),

	        array(
	        	'id' => 'hv6_link_height',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Link Height', 'kameleon'), 			    
			    'default'  => '50',
				'min'      => '20',
				'step'     => '1',
				'max'      => '75',	
	        ),


			array(
			    'id' => 'hv6_hover_background',
			    'type' => 'color',
			    'title' => esc_html__('Hover Background Color', 'kameleon'), 			    		        
				'default' => '#0f0f0f',
				'validate' => 'color'
			), 

			array(
			    'id' => 'hv6_border_color',
			    'type' => 'color',
			    'title' => esc_html__('Links Border Color', 'kameleon'), 			    		        
				'default' => '#222',
				'validate' => 'color'
			), 

			array(
	        	'id' => 'hv6_width',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Header Width ', 'kameleon'), 			    
			    'default'  => '350',
				'min'      => '40',
				'step'     => '1',
				'max'      => '500',	
	        ),

	        array(
			    'id'=> 'hv6_padding',
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
        		'id' => 'hv6_content_position',
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
        		'id' => 'hv6_logo_type',
		        'type' => 'button_set',
		        'title' => esc_html__('Logo Type', 'kameleon'), 		        
		        'options' => array(
			        'normal' => 'Normal', 
			        'transparent' => 'Transparent'
			     ), 
		        'default' => 'transparent',	
        	),

        	array(
	        	'id' => 'hv6_logo_marginTop',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Logo Margin Top', 'kameleon'), 			    
			    'default'  => '50',
				'min'      => '0',
				'step'     => '1',
				'max'      => '200',	
	        ),

        	array(
	        	'id' => 'hv6_logo_width',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Logo Width ', 'kameleon'), 			    
			    'default'  => '170',
				'min'      => '40',
				'step'     => '1',
				'max'      => '500',	
	        ), 

	        array(
	        	'id' => 'hv6_logo_height',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Logo Height ', 'kameleon'), 			    
			    'default'  => '50',
				'min'      => '20',
				'step'     => '1',
				'max'      => '250',	
	        ),

 			array(
		        'id' => 'hv6_social_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Social Links', 'kameleon'), 		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 

	    )
	);

?>