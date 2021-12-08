<?php
 /* ================================================================== *\
   ==                        S E C T I O N                         ==
   ==============              TITLE BAR 		   	   ============== 
\* ================================================================== */
	
	$sections[] = array(
        'title' => 'Title Bar',
		'icon' => 'dashicons-before dashicons-slides',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Page Title Bar Style', 'kameleon'),
        'fields' => array( 
        	//Different Pages Title Bar Settings	
        	array(
	       		'id' => 'global-titlebar_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Pages Ttitle Bar Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Title Bar Setting for all pages', 'kameleon'),
	        ), 
        	array(
		        'id' => 'global-titlebar_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Title Bar', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 
        	array(
	        	'id' => 'global-titlebar_height',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Title Bar Height(px)', 'kameleon'),			   
			    'default'  => '70',
				'min'      => '70',
				'step'     => '1',
				'max'      => '1000',	
	        ),
        	array(
		        'id' => 'global-titlebar_background',
		        'type' => 'background',
		        'title' => esc_html__('Background', 'kameleon'), 		       
		        'preview' =>false,		        
				'default'  => array(
			        'background-color' => '#f7f7f7',
			        'background-image' => '',
					'background-repeat' => '',
					'background-position' => '',
					'background-size' => '',
					'background-attachment' => '',
			    )						
		    ),		    	
		    array(
	        	'id' => 'global-titlebar_border_thickness',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Border (px)', 'kameleon'), 			    			   
			    'default'  => '1',
				'min'      => '0',
				'step'     => '1',
				'max'      => '10',	
	        ),
		    array(
			    'id' => 'global-titlebar_border_color',
			    'type' => 'color',
			    'title' => esc_html__('Border Color', 'kameleon'),			    
				'default' => '#eee',
				'validate' => 'color'
			),  
        	array(
		        'id' => 'global-path_active',
		        'type' => 'switch',
		        'title' => esc_html__('Show Page Path', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 
        	array(
		        'id' => 'global-titlebar_style',
		        'type' => 'select',
		        'title' => esc_html__('Title Bar Style', 'kameleon'), 		       
		        'options' => $titlebar_style,
				'default' => 'style1'
		    ),         	        
	        array(
			    'id'          => 'global-titlebar_title_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Title Font Settings', 'kameleon'),
			    'google'      => false, 'font-backup' => false,'subsets'=> false,'font-family' => false,'letter-spacing' => true,'font-weight' => true,'font-style' => true,
			    'text-align' => false,'line-height' => false,'text-decoration' => false,'color' => true,'text-transform' => true,'units'=> array('px'),			   
			    'default'     => array(
			        'color' => '#777',
				    'text-transform' => 'none',
				    'letter-spacing' => '0px',
				    'font-size'   => '18px', 
			    ),
			),
			array(
			    'id'          => 'global-titlebar_path_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Path Font Settings', 'kameleon'),
			    'google'      => false, 'font-backup' => false,'subsets'=> false,'font-family' => false,'letter-spacing' => true,'font-weight' => true,'font-style' => true,
			    'text-align' => false,'line-height' => false,'text-decoration' => false,'color' => true,'text-transform' => true,'units'=> array('px'),			   
			    'default'     => array(
			        'color' => '#aaa',
				    'text-transform' => 'none',
				    'letter-spacing' => '0px',
				    'font-size'   => '12px', 
			    ),
			),

			//Home Title Bar
			array(
	       		'id' => 'home-titlebar_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Home Page Title Bar Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Styling for the post home page title bar ', 'kameleon'),
	        ), 	        
        	array(
		        'id' => 'home-titlebar_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Title Bar', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 	
		    array(		        
        		'id' =>'titlebar_home_title' ,
		        'type' => 'text',
			    'required' => array('home-titlebar_active','=','1'),		        
		        'title' => esc_html__('Home Page Title', 'kameleon'), 		        
		        'default' => 'Home'
		    ), 
	         array(		        
        		'id' =>'titlebar_home_breadcrumbs' ,
		        'type' => 'text',
			    'required' => array('home-titlebar_active','=','1'),		        
		        'title' => esc_html__('Home Page Breadcrumbs', 'kameleon'), 		        
		        'default' => 'Kameleon / Post List'
		    ),  	    
		    array(
		        'id' => 'home-titlebar_unique',
		        'type' => 'switch',
			    'required' => array('home-titlebar_active','=','1'),		        
		        'title' => esc_html__('Unique Title Bar Design', 'kameleon'), 		       
		        'subtitle' => esc_html__('Apply Unique styling for the title bar on home page', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 
        	array(
	        	'id' => 'home-titlebar_height',
			    'type' => 'slider',
			    'required' => array(
			    	array('home-titlebar_active','=','1'),		        
			    	array('home-titlebar_unique','=','1')		        
			    ),
		        'display_value' => 'text',
			    'title' => esc_html__('Title Bar Height(px)', 'kameleon'),			   
			    'default'  => '70',
				'min'      => '70',
				'step'     => '1',
				'max'      => '1000',	
	        ),
        	array(
		        'id' => 'home-titlebar_background',
		        'type' => 'background',
		        'required' => array(
			    	array('home-titlebar_active','=','1'),		        
			    	array('home-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Background', 'kameleon'), 		       
		        'preview' =>false,		        
				'default'  => array(
			        'background-color' => '#f7f7f7',
			        'background-image' => '',
					'background-repeat' => '',
					'background-position' => '',
					'background-size' => '',
					'background-attachment' => '',
			    )						
		    ),		    	
		    array(
	        	'id' => 'home-titlebar_border_thickness',
			    'type' => 'slider',
			    'required' => array(
			    	array('home-titlebar_active','=','1'),		        
			    	array('home-titlebar_unique','=','1')		        
			    ),
		        'display_value' => 'text',
			    'title' => esc_html__('Border (px)', 'kameleon'), 			    			   
			    'default'  => '1',
				'min'      => '0',
				'step'     => '1',
				'max'      => '10',	
	        ),
		    array(
			    'id' => 'home-titlebar_border_color',
			    'type' => 'color',
			    'required' => array(
			    	array('home-titlebar_active','=','1'),		        
			    	array('home-titlebar_unique','=','1')		        
			    ),
			    'title' => esc_html__('Border Color', 'kameleon'),			    
				'default' => '#eee',
				'validate' => 'color'
			),  
        	array(
		        'id' => 'home-path_active',
		        'type' => 'switch',
		        'required' => array(
			    	array('home-titlebar_active','=','1'),		        
			    	array('home-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Show Page Path', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 
        	array(
		        'id' => 'home-titlebar_style',
		        'type' => 'select',
		        'required' => array(
			    	array('home-titlebar_active','=','1'),		        
			    	array('home-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Title Bar Style', 'kameleon'), 		       
		        'options' => $titlebar_style,
				'default' => 'style1'
		    ),   
		    array(
			    'id'          => 'home-titlebar_title_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Title Font Settings', 'kameleon'),
			    'required' => array(array('home-titlebar_active','=','1'),array('home-titlebar_unique','=','1')),			    
			    'google'      => false, 'font-backup' => false,'subsets'=> false,'font-family' => false,'letter-spacing' => true,'font-weight' => true,'font-style' => true,
			    'text-align' => false,'line-height' => false,'text-decoration' => false,'color' => true,'text-transform' => true,'units'=> array('px'),			   
			    'default'     => array(
			        'color' => '#777',
				    'text-transform' => 'none',
				    'letter-spacing' => '0px',
				    'font-size'   => '18px', 
			    ),
			),
			array(
			    'id'          => 'home-titlebar_path_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Path Font Settings', 'kameleon'),
			    'required' => array(array('home-titlebar_active','=','1'),array('home-titlebar_unique','=','1')),
			    'google'      => false, 'font-backup' => false,'subsets'=> false,'font-family' => false,'letter-spacing' => true,'font-weight' => true,'font-style' => true,
			    'text-align' => false,'line-height' => false,'text-decoration' => false,'color' => true,'text-transform' => true,'units'=> array('px'),			   
			    'default'     => array(
			        'color' => '#aaa',
				    'text-transform' => 'none',
				    'letter-spacing' => '0px',
				    'font-size'   => '12px', 
			    ),
			),


			//Archives Title Bar
			array(
	       		'id' => 'archive-titlebar_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Archive Pages Bar Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Styling for the archive page title bar ', 'kameleon'),
	        ), 	        
        	array(
		        'id' => 'archive-titlebar_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Title Bar', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 			    	    
		    array(
		        'id' => 'archive-titlebar_unique',
		        'type' => 'switch',
			    'required' => array('archive-titlebar_active','=','1'),		        
		        'title' => esc_html__('Unique Title Bar Design', 'kameleon'), 		       
		        'subtitle' => esc_html__('Apply Unique styling for the title bar on archive page', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 
        	array(
	        	'id' => 'archive-titlebar_height',
			    'type' => 'slider',
			    'required' => array(
			    	array('archive-titlebar_active','=','1'),		        
			    	array('archive-titlebar_unique','=','1')		        
			    ),
		        'display_value' => 'text',
			    'title' => esc_html__('Title Bar Height(px)', 'kameleon'),			   
			    'default'  => '70',
				'min'      => '70',
				'step'     => '1',
				'max'      => '1000',	
	        ),
        	array(
		        'id' => 'archive-titlebar_background',
		        'type' => 'background',
		        'required' => array(
			    	array('archive-titlebar_active','=','1'),		        
			    	array('archive-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Background', 'kameleon'), 		       
		        'preview' =>false,		        
				'default'  => array(
			        'background-color' => '#f7f7f7',
			        'background-image' => '',
					'background-repeat' => '',
					'background-position' => '',
					'background-size' => '',
					'background-attachment' => '',
			    )						
		    ),		    	
		    array(
	        	'id' => 'archive-titlebar_border_thickness',
			    'type' => 'slider',
			    'required' => array(
			    	array('archive-titlebar_active','=','1'),		        
			    	array('archive-titlebar_unique','=','1')		        
			    ),
		        'display_value' => 'text',
			    'title' => esc_html__('Border (px)', 'kameleon'), 			    			   
			    'default'  => '1',
				'min'      => '0',
				'step'     => '1',
				'max'      => '10',	
	        ),
		    array(
			    'id' => 'archive-titlebar_border_color',
			    'type' => 'color',
			    'required' => array(
			    	array('archive-titlebar_active','=','1'),		        
			    	array('archive-titlebar_unique','=','1')		        
			    ),
			    'title' => esc_html__('Border Color', 'kameleon'),			    
				'default' => '#eee',
				'validate' => 'color'
			),  
        	array(
		        'id' => 'archive-path_active',
		        'type' => 'switch',
		        'required' => array(
			    	array('archive-titlebar_active','=','1'),		        
			    	array('archive-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Show Page Path', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 
        	array(
		        'id' => 'archive-titlebar_style',
		        'type' => 'select',
		        'required' => array(
			    	array('archive-titlebar_active','=','1'),		        
			    	array('archive-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Title Bar Style', 'kameleon'), 		       
		        'options' => $titlebar_style,
				'default' => 'style1'
		    ),         	
        	array(
			    'id'          => 'archive-titlebar_title_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Title Font Settings', 'kameleon'),
			    'required' => array(array('archive-titlebar_active','=','1'),array('archive-titlebar_unique','=','1')),			    
			    'google'      => false, 'font-backup' => false,'subsets'=> false,'font-family' => false,'letter-spacing' => true,'font-weight' => true,'font-style' => true,
			    'text-align' => false,'line-height' => false,'text-decoration' => false,'color' => true,'text-transform' => true,'units'=> array('px'),			   
			    'default'     => array(
			        'color' => '#777',
				    'text-transform' => 'none',
				    'letter-spacing' => '0px',
				    'font-size'   => '18px', 
			    ),
			),
			array(
			    'id'          => 'archive-titlebar_path_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Path Font Settings', 'kameleon'),
			    'required' => array(array('archive-titlebar_active','=','1'),array('archive-titlebar_unique','=','1')),
			    'google'      => false, 'font-backup' => false,'subsets'=> false,'font-family' => false,'letter-spacing' => true,'font-weight' => true,'font-style' => true,
			    'text-align' => false,'line-height' => false,'text-decoration' => false,'color' => true,'text-transform' => true,'units'=> array('px'),			   
			    'default'     => array(
			        'color' => '#aaa',
				    'text-transform' => 'none',
				    'letter-spacing' => '0px',
				    'font-size'   => '12px', 
			    ),
			),

			

 
       	)
    );
?>