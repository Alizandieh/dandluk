<?php 
/* ================================================================== *\
   ==                  	 	   S E C T I O N                       ==
   ==============               L A Y O U T 	   	   ============== 
\* ================================================================== */
	
	//Layout
	$sections[] = array(
        'title' => 'Layout',
		'icon' => 'fa fa-desktop',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Website Layout ', 'kameleon'),
        'fields' =>array(
	       array(
        		'id' => 'layout',
		        'type' => 'button_set',
		        'title' => esc_html__('Website Layout', 'kameleon'), 
		        'subtitle' => esc_html__('Choose the global layout for your website!', 'kameleon'),
		        'options' => array(
			        'boxed' => 'Boxed', 
			        'full_width' => 'Full Width'
			     ), 
		        'default' => 'full_width',	
        	),
	        array(
			    'id' => 'content_background',
			    'type' => 'color',
			    'title' => esc_html__('Content Background', 'kameleon'), 			    		        
				'default' => '#fff',
				'validate' => 'color'
			), 

	        array(
	       		'id' => 'full_settings',
	       		'type' => 'raw',		
	       		'required' => array('layout', '=' , 'full_width'), 
	       		'title' =>esc_html__('Full Width Layout Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Change the settings for the full width layout. Only applied if you check the full width layout above', 'kameleon'),
	        ), 

	        array(
		        'id' => 'full_width',
		        'type' => 'switch',
		        'title' => esc_html__('Content 100% Width', 'kameleon'), 
		        'subtitle' => esc_html__('Enable 100% content width for layout', 'kameleon'),
	       		'required' => array('layout', '=' , 'full_width'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 

	        array(
	        	'id' => 'layout_width',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Full Width Content Width', 'kameleon'), 			    
			    'required' => array('full_width', '=' , '0'),
			    'subtitle' => esc_html__('Apply a width your content layout', 'kameleon'),
			    'default'  => '1200',
				'min'      => '700',
				'step'     => '1',
				'max'      => '1400',	
	        ),


	        array(
	       		'id' => 'boxed_settings',
	       		'type' => 'raw',		
	       		'title' =>'Boxed Layout Settings',
	       		'required' => array('layout', '=' , 'boxed'), 
	       		'full_width' => true,	   
			    'desc' => esc_html__('Change the settings for the boxed layout. Only applied if you check the boxed layout above', 'kameleon'),
	        ),
	       
	        array(
	        	'id' => 'boxed_width',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Boxed Layout Width', 'kameleon'), 			    
			    'subtitle' => esc_html__('Apply a width for the boxed layout', 'kameleon'),
	       		'required' => array('layout', '=' , 'boxed'), 			    
			    'default'  => '1200',
				'min'      => '700',
				'step'     => '1',
				'max'      => '1920',	
	        ),
		    array(
		        'id' => 'layout_background',
		        'type' => 'background',
		        'title' => esc_html__('Container Background', 'kameleon'), 
		        'subtitle' => esc_html__('Apply background for the boxed Layout', 'kameleon'),
	       		'required' => array('layout', '=' , 'boxed'), 		        
		        'preview' =>false,		        
				'default'  => array(
			        'background-color' => '#fff',
			        'background-image' => '',
					'background-repeat' => '',
					'background-position' => '',
					'background-size' => '',
					'background-attachment' => '',
			    )						
		    ),  

			array(
	        	'id' => 'boxed_margin',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Boxed Layout Margin', 'kameleon'), 			    
			    'subtitle' => esc_html__('Apply a Top & Bottom margins for the boxed layout', 'kameleon'),
	       		'required' => array('layout', '=' , 'boxed'), 			    
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '250',	
	        ),

	        array(
	        	'id' => 'boxed_border',
			    'type' => 'border',
			    'title' => esc_html__('Boxed Layout Border', 'kameleon'), 			    
			    'subtitle' => esc_html__('Apply border for the boxed layout', 'kameleon'),
	       		'required' => array('layout', '=' , 'boxed'), 
			    'default'  => array(
			        'border-color'  => '#ccc', 
			        'border-style'  => 'solid', 
			        'border-top'    => '0px', 
			        'border-right'  => '0px', 
			        'border-bottom' => '0px', 
			        'border-left'   => '0px'
			    )
	        ),

	        array(
	       		'id' => 'pageloader_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Page Loader Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Big area with page loading icon ', 'kameleon'),
	        ), 

	        array(
		        'id' => 'pageloader_enable',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Page Pre-Loader', 'kameleon'), 		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 	

	        array(
		        'id' => 'pageloader_background',
		        'type' => 'color',
		        'title' => esc_html__('Background Color', 'kameleon'),
		        'required' => array('pageloader_enable', '=' , '1'), 
		        'subtitle' => esc_html__('Apply a color for the Page Loader background', 'kameleon'),
		        'default' => '#1abc9c',
				'validate' => 'color'					
		    ),

	        array(
        		'id' => 'spinner_style',
		        'type' => 'select',
		        'display_value' => 'text',
		        'title' => esc_html__('Spinner Style', 'kameleon'), 
		        'subtitle' => esc_html__('Choose the Spinner Icon Style', 'kameleon'),
		        'required' => array('pageloader_enable', '=' , '1'), 
		        'options' => array(
			        'style1' => 'Style 1', 
			        'style2' => 'Style 2', 
			        'style3' => 'Style 3', 
			        'style4' => 'Style 4', 
			        'style5' => 'Style 5',			        
			        'style6' => 'Style 6',			        
			        'style7' => 'Style 7',			        
			        'style8' => 'Style 8',			        
			     ), 
		        'default' => 'style1',	
        	),
        	array(
		        'id' => 'pageloader_hide_style',
		        'type' => 'select',
		        'required' => array('pageloader_enable', '=' , '1'), 
		        'title' => esc_html__('Page Loader Hide Style', 'kameleon'), 		       
		        'options' => array(
		        	'fade' => 'Fade',		        	
		        	'left' => 'Left Slide',		        	
		        	'top' => 'Top Slide',		        	
		        	'right' => 'Right Slide',		        	
		        	'bottom' => 'Bottom Slide',		        	
		        	'scale' => 'Scale',		        	
		        ),
				
				'default' => 'fade'
		    ),


        	array(
		        'id' => 'spinner_color',
		        'type' => 'color',
		        'title' => esc_html__('Spinner Color', 'kameleon'),
		        'required' => array('pageloader_enable', '=' , '1'), 
		        'subtitle' => esc_html__('Apply a color for the spinner', 'kameleon'),
		        'default' => '#fff',
				'validate' => 'color'					
		    ),

        	array(
		        'id' => 'pageloader_finish_effect',
		        'type' => 'switch',
		        'title' => esc_html__('Done Smooth Effect', 'kameleon'), 		        
		        'subtitle' => esc_html__('Enable body smooth Effect when page loader is done', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 	

	       	array(
	       		'id' => 'gotop_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Go Top Button', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('A button that will take you to the top of the page!', 'kameleon'),
	        ), 

	       	array(
		        'id' => 'gotop_enable',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Go Top Page', 'kameleon'), 		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 	

	        array(
		        'id' => 'gotop_background',
		        'type' => 'color',
		        'title' => esc_html__('Button Background', 'kameleon'),
		        'required' => array('gotop_enable', '=' , '1'), 		        
		        'default' => '#121212',
				'validate' => 'color'					
		    ),

	        array(
		        'id' => 'gotop_hover_background',
		        'type' => 'color',
		        'title' => esc_html__('Button Hover Background', 'kameleon'),
		        'required' => array('gotop_enable', '=' , '1'), 		        
		        'default' => $sy_options['color_scheme'],
				'validate' => 'color'					
		    ),

		    array(
		        'id' => 'gotop_color',
		        'type' => 'color',
		        'title' => esc_html__('Button Icon Color', 'kameleon'),
		        'required' => array('gotop_enable', '=' , '1'), 		        
		        'default' => '#f8f8f8',
				'validate' => 'color'					
		    ),

		    array(
        		'id' => 'gotop_icon',
		        'type' => 'select',
		        'title' => esc_html__('Icon Style', 'kameleon'), 		        
		        'required' => array('gotop_enable', '=' , '1'), 		        
		        'options' => array(
			        'fa-arrow-up' => 'Arrow', 
			        'fa-long-arrow-up' => 'Long Arrow',
			        'fa-caret-up' => 'Caret', 
			        'fa-chevron-up' => 'Chevron',
			     	
			     ), 
		        'default' => 'fa-chevron-up',	
        	),		

        	array(
	        	'id' => 'gotop_radius',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array('gotop_enable', '=' , '1'), 		        
			    'title' => esc_html__('Button Radius (%)', 'kameleon'), 			    			    
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),

	        array(
	        	'id' => 'gotop_border',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array('gotop_enable', '=' , '1'), 		        
			    'title' => esc_html__('Button Border (px)', 'kameleon'), 			    			    
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '5',	
	        ),

	        array(
		        'id' => 'gotop_border_color',
		        'type' => 'color',
		        'required' => array('gotop_enable', '=' , '1'), 		        
		        'title' => esc_html__('Button Border Color', 'kameleon'),
		        'required' => array('gotop_enable', '=' , '1'), 		        
		        'default' => '#f8f8f8',
				'validate' => 'color'					
		    ),

	        array(
        		'id' => 'gotop_position',
		        'type' => 'button_set',
		        'required' => array('gotop_enable', '=' , '1'), 		        
		        'title' => esc_html__('Button Position', 'kameleon'), 		        
		        'options' => array(
			        'left' => 'Left', 
			        'center' => 'Center',
			        'right' => 'Right',
			     ), 
		        'default' => 'right',	
        	),

	        array(
	        	'id' => 'gotop_bottom',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array('gotop_enable', '=' , '1'), 		        
			    'title' => esc_html__('Margin Bottom (px)', 'kameleon'), 			    			    
			    'default'  => '40',
				'min'      => '0',
				'step'     => '1',
				'max'      => '200',	
	        ),

	        //Window Frame Settings	
	        array(
	       		'id' => 'frame_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Window Frame', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('The global Window Frame for the website', 'kameleon'),
	        ), 

	        array(
		        'id' => 'frame_enable',
		        'type' => 'switch',
		        'title' => esc_html__('Frame Enabled', 'kameleon'), 		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 

	        array(
	        	'id' => 'frame_responsive',
			    'type' => 'slider',
			    'required' => array('frame_enable', '=' , '1'), 
		        'display_value' => 'text',
			    'title' => esc_html__('Window Frame Responsive (px)', 'kameleon'), 			    			    
			    'subtitle' => esc_html__('When the frame will be hidden', 'kameleon'), 			    			    
			    'default'  => '1150',
				'min'      => '0',
				'step'     => '1',
				'max'      => '1200',	
	        ),

	        array(
	        	'id' => 'frame_size',
			    'type' => 'slider',
			    'required' => array('frame_enable', '=' , '1'), 
		        'display_value' => 'text',
			    'title' => esc_html__('Window Frame Size', 'kameleon'), 			    			    
			    'default'  => '20',
				'min'      => '3',
				'step'     => '1',
				'max'      => '100',	
	        ),

	        array(
		        'id' => 'frame_color',
		        'type' => 'color',
		        'title' => esc_html__('Window Frame Color ', 'kameleon'),
		        'required' => array('frame_enable', '=' , '1'), 		        
		        'default' => '#fff',
				'validate' => 'color'					
		    ),

	       		
	    )
	);        
 ?>