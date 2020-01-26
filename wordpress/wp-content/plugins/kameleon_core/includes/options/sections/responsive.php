<?php 
/* ================================================================== *\
   ==                        S E C T I O N                         ==
   ==============        RESPONSIVE 	LAYOUT         ============== 
\* ================================================================== */
	
	$sections[] = array(
        'title' => 'Responsive',
		'icon' => 'fa fa-mobile',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Responsive Layout Settings', 'kameleon'),
        'fields' => array( 
        	
        	array(
	        	'id' => 'sy_responsive_width',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Responsive Screen Width', 'kameleon'), 			    
			    'subtitle' => esc_html__('Choose the width when to have a responsive layout!', 'kameleon'),
			    'default'  => '800',
				'min'      => '150',
				'step'     => '1',
				'max'      => '1920',	
	        ),
        	array(
	        	'id' => 'mobile_header',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Mobile Header', 'kameleon'), 			    
			    'subtitle' => esc_html__('Choose the width where to apply the mobile header!', 'kameleon'),
			    'default'  => '900',
				'min'      => '300',
				'step'     => '1',
				'max'      => '1000',	
	        ),

        	array(
	        	'id' => 'mobile_header_version6',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Mobile Header for Side Header V6', 'kameleon'), 			    
			    'subtitle' => esc_html__('Choose width where to apply the mobile header for pages that have side fixed header v6 !', 'kameleon'),
			    'default'  => '1100',
				'min'      => '300',
				'step'     => '1',
				'max'      => '1500',	
	        ),

        	array(
	       		'id' => 'mobile_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Mobile Header Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Set up your Mobile Responsive Header', 'kameleon'),
	        ), 

        	array(
	        	'id' => 'mheader_height',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Mobile Header Height', 'kameleon'), 			    
			    'default'  => '60',
				'min'      => '40',
				'step'     => '1',
				'max'      => '200',	
	        ),

        	array(
			    'id' => 'mheader_background',
			    'type' => 'color',
			    'title' => esc_html__('Mobile Header Background', 'kameleon'),			    
				'default' => '#fff',
				'validate' => 'color'
			), 

			array(
			    'id' => 'mheader_color',
			    'type' => 'color',
			    'title' => esc_html__('Mobile Header Text Color', 'kameleon'),			    
				'default' => '#777',
				'validate' => 'color'
			),   

			array(
			    'id' => 'mheader_border_color',
			    'type' => 'color',
			    'title' => esc_html__('Mobile Header Border Color', 'kameleon'),			    
				'default' => '#eee',
				'validate' => 'color'
			), 

			array(
        		'id' => 'mheader_logo_position',
		        'type' => 'button_set',
		        'title' => esc_html__('Logo Position', 'kameleon'), 		        
		        'options' => array(
			        'left' => 'Left', 
			        'center' => 'Center',
			        'right' => 'Right',
			     ), 
		        'default' => 'left',	
        	),


			array(
        		'id' => 'mheader_logo_type',
		        'type' => 'button_set',
		        'title' => esc_html__('Logo Type', 'kameleon'), 		        
		        'options' => array(
			        'normal' => 'Normal', 
			        'transparent' => 'Transparent'
			     ), 
		        'default' => 'normal',	
        	),

        	array(
	        	'id' => 'mheader_logo_height',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Mobile Header Logo Height', 'kameleon'), 			    
			    'default'  => '40',
				'min'      => '20',
				'step'     => '1',
				'max'      => '200',	
	        ), 

        	array(
	        	'id' => 'mheader_logo_width',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Mobile Header Logo Width', 'kameleon'), 			    
			    'default'  => '130',
				'min'      => '20',
				'step'     => '1',
				'max'      => '300',	
	        ),

			array(
			    'id' => 'mheader_icon_color',
			    'type' => 'color',
			    'title' => esc_html__('Show Button Color', 'kameleon'),			    
				'default' => '#777',
				'validate' => 'color'
			),  

			
			 
	
			array(
        		'id' => 'mheader_icon_position',
		        'type' => 'button_set',
		        'title' => esc_html__('Show Button Position', 'kameleon'), 		        
		        'options' => array(
			        'left' => 'Left', 
			        'right' => 'Right',
			     ), 
		        'default' => 'right',	
        	),

			array(
        		'id' => 'mheader_icon_style',
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
		        'id' => 'mheader_top_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Top Header', 'kameleon'), 		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 	


		    array(
		        'id' => 'mheader_information',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Top Header Information', 'kameleon'), 
		        'required' => array('mheader_top_active', '=' , '1'),		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 	

		    array(
		        'id' => 'mheader_social',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Top Header Social Links', 'kameleon'),
		        'required' => array('mheader_top_active', '=' , '1'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 

		    array(
	       		'id' => 'mobile_menu_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Mobile Menu Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Set up your Mobile Responsive Menu', 'kameleon'),
	        ), 

	        array(
        		'id' => 'mheader_menu_style',
		        'type' => 'select',		    	
		        'title' => esc_html__('Mobile Menu Style', 'kameleon'), 
		        'options' => array(
			        'drop-down' => 'Drop Down', 
			        'left-side' => 'Left Side',
			        'right-side' => 'Right Sidet',
			     ), 
		        'default' => 'drop-down',	
        	),

		    array(
			    'id' => 'mheader_menu_background',
			    'type' => 'color',
			    'title' => esc_html__('Mobile Menu Background Color', 'kameleon'),			    
				'default' => '#121212',
				'validate' => 'color'
			),

			array(
			    'id' => 'mheader_menu_color',
			    'type' => 'color',
			    'title' => esc_html__('Mobile Menu Text Color', 'kameleon'),			    
				'default' => '#e1e1e1',
				'validate' => 'color'
			),

			array(
			    'id' => 'mheader_menu_border_color',
			    'type' => 'color',
			    'title' => esc_html__('Mobile Menu Border Color', 'kameleon'),			    
				'default' => '#1f1f1f',
				'validate' => 'color'
			),   

			


       	)
    );

?>