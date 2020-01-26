<?php 
/* ================================================================== *\
   ==                        S E C T I O N                         ==
   ==============          P O R T F O L I O            ============== 
\* ================================================================== */
	
	$sections[] = array( 
		'id' => 'portfolio_section',
        'title' => 'Portfolio',
		'icon' => 'dashicons-before dashicons-art',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Portfolio Page & Elements Settings', 'kameleon'),
        'fields' => array(   
        	array(		        
        		'id' =>'portfolio_home_page' ,
		        'type' => 'text',
		        'title' => esc_html__('Portfolio Home Page', 'kameleon'), 		        
		        'subtitle' => esc_html__('Enter the home page for the portfolios list', 'kameleon'), 		        
		        'default' => ''
		    ),       	
		    array(
	        	'id' => 'folio_per_page',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Portfolio items per Page', 'kameleon'),			   
		        'subtitle' => esc_html__('Choose the number of portfolios to be displayed on portfolios templates.', 'kameleon'), 		        
			    'default'  => '12',
				'min'      => '3',
				'step'     => '1',
				'max'      => '50',	
	        ), 
		    
        	array(
	       		'id' => 'portfolio_next_previous_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Next / Previous Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Portfolio Next / Previous Styling ', 'kameleon'),
	        ), 			
			array(
		        'id' => 'portfolio-pn_enabled',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Next & Previous Portfolio', 'kameleon'), 
		        'subtitle' => esc_html__('Enable Next / Previous', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),
			array(
		        'id' => 'portfolio-pn_stype',
		        'type' => 'select',
		        'title' => esc_html__('Next / Previous Styling', 'kameleon'), 		       
		        'options' => array(
		        	'type_1'	=> 'Edge Buttons',
		        	'type_2' 	=> 'Basic'
		        ),				
				'default' => 'type_1'
		    ),
		    //---------------- Type 1
		    //Syling for the Edge Buttons
		    //----------------
			array(
			    'id' => 'portfolio-pn_type1_background',
			    'type' => 'color',
			    'required' => array('portfolio-pn_stype','=','type_1'),
			    'title' => esc_html__('Button Background Color (edge)', 'kameleon'),			    
				'default' => '#222',
				'validate' => 'color'
			),
			array(
	        	'id' => 'portfolio-pn_type1_height',
			    'required' => array('portfolio-pn_stype','=','type_1'),
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Button Height', 'kameleon'),			   
			    'default'  => '40',
				'min'      => '0',
				'step'     => '1',
				'max'      => '150',	
	        ), 		 
	        array(
	        	'id' => 'portfolio-pn_type1_width',
			    'required' => array('portfolio-pn_stype','=','type_1'),
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Button Width', 'kameleon'),			   
			    'default'  => '40',
				'min'      => '0',
				'step'     => '1',
				'max'      => '150',	
	        ), 		    	
			array(
			    'id' => 'portfolio-pn_type1_color',
			    'type' => 'color',
			    'required' => array('portfolio-pn_stype','=','type_1'),
			    'title' => esc_html__('Arrow & Text Color (edge)', 'kameleon'),			    
				'default' => '#fff',
				'validate' => 'color'
			), 		    	
			array(
	        	'id' => 'portfolio-pn_type1_fontsize',
			    'required' => array('portfolio-pn_stype','=','type_1'),
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Font Size (edge)', 'kameleon'),			   
			    'default'  => '14',
				'min'      => '0',
				'step'     => '1',
				'max'      => '22',	
	        ), 		
			array(
	        	'id' => 'portfolio-pn_type1_arrowsize',
			    'required' => array('portfolio-pn_stype','=','type_1'),
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Arrow Size (edge)', 'kameleon'),			   
			    'default'  => '20',
				'min'      => '0',
				'step'     => '1',
				'max'      => '44',	
	        ), 
			array(
		        'id' => 'portfolio-pn_type1_thumbnail_enabled',
			    'required' => array('portfolio-pn_stype','=','type_1'),
		        'type' => 'switch',
		        'title' => esc_html__('Enable Portfolio Thumbnail (edge)', 'kameleon'), 
		        'subtitle' => esc_html__('Include Portfolio Thumbnail', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),
			array(
	        	'id' => 'portfolio-pn_type1_thumbnail_size',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'required' => array('portfolio-pn_stype','=','type_1'),
			    'title' => esc_html__('Thumbnail Size (edge)', 'kameleon'),			   
			    'default'  => '40',
				'min'      => '0',
				'step'     => '1',
				'max'      => '150',	
	        ), 	
		    array(
	        	'id' => 'portfolio-pn_type1_thumbnail_radius',
			    'type' => 'slider',
			    'required' => array('portfolio-pn_stype','=','type_1'),
		        'display_value' => 'text',
			    'title' => esc_html__('Thumbnail Radius Size (edge)', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ), 		
	       
	        //---------------- Type 2
		    //Syling for Basic Style
		    //----------------		    
			array(
			    'id' => 'portfolio-pn_type2_arrowcolor',
			    'type' => 'color',
			    'required' => array('portfolio-pn_stype','=','type_2'),
			    'title' => esc_html__('Arrow Color (basic)', 'kameleon'),			    
				'default' => '#888',
				'validate' => 'color'
			),
	        array(
		        'id' => 'portfolio-pn_type2_title_enabled',
			    'required' => array('portfolio-pn_stype','=','type_2'),
		        'type' => 'switch',
		        'title' => esc_html__('Show Portfolio Title (basic)', 'kameleon'), 
		        'subtitle' => esc_html__('Include Portfolio Title', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ),
		     array(
		        'id' => 'portfolio-pn_type2_np_name_enabled',
			    'required' => array(
			    	array('portfolio-pn_stype','=','type_2'),
			    	array('portfolio-pn_type2_title_enabled','=','1'),
			    ),
		        'type' => 'switch',
		        'title' => esc_html__('Replace Title With Next / Previous Text', 'kameleon'), 
		        'subtitle' => esc_html__('Choose if you want instead of portfolio title you will have Next Post', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),
			array(
			    'id' => 'portfolio-pn_type2_fontcolor',
			    'type' => 'color',
			    'required' => array(
			    	array('portfolio-pn_stype','=','type_2'),
			    	array('portfolio-pn_type2_title_enabled','=','1'),
			    ),
			    'title' => esc_html__('Text Color (basic)', 'kameleon'),			    
				'default' => '#777',
				'validate' => 'color'
			),
			array(
	        	'id' => 'portfolio-pn_type2_fontsize',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'required' => array(
			    	array('portfolio-pn_stype','=','type_2'),
			    	array('portfolio-pn_type2_title_enabled','=','1'),
			    ),
			    'title' => esc_html__('Text Size (basic)', 'kameleon'),			   
			    'default'  => '15',
				'min'      => '0',
				'step'     => '1',
				'max'      => '35',	
	        ), 	
			array(
		        'id' => 'portfolio-pn_type2_thumbnail_enabled',
			    'required' => array('portfolio-pn_stype','=','type_2'),
		        'type' => 'switch',
		        'title' => esc_html__('Enable Portfolio Thumbnail (basic)', 'kameleon'), 
		        'subtitle' => esc_html__('Include Portfolio Thumbnail', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),
			array(
	        	'id' => 'portfolio-pn_type2_thumbnail_size',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'required' => array(
			    	array('portfolio-pn_stype','=','type_2'),
			    	array('portfolio-pn_type2_thumbnail_enabled','=','1'),
			    ),
			    'title' => esc_html__('Thumbnail Size (basic)', 'kameleon'),			   
			    'default'  => '30',
				'min'      => '0',
				'step'     => '1',
				'max'      => '150',	
	        ), 	
		    array(
	        	'id' => 'portfolio-pn_type2_thumbnail_radius',
			    'type' => 'slider',
			    'required' => array(
			    	array('portfolio-pn_stype','=','type_2'),
			    	array('portfolio-pn_type2_thumbnail_enabled','=','1'),
			    ),
		        'display_value' => 'text',
			    'title' => esc_html__('Thumbnail Radius Size (basic)', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ), 	
		    array(
		        'id' => 'portfolio-pn_type2_background',
		        'type' => 'background',
			    'required' => array('portfolio-pn_stype','=','type_2'),
		        'title' => esc_html__('Wrapper Background (basic)', 'kameleon'), 		        
		        'preview' =>false,		        
				'default'  => array(
			        'background-color' => 'transparent',
			        'background-image' => '',
					'background-repeat' => '',
					'background-position' => '',
					'background-size' => '',
					'background-attachment' => '',
			    )						
		    ),  
		    array(
	        	'id' => 'portfolio-pn_type2_height',
			    'type' => 'slider',
			    'required' => array('portfolio-pn_stype','=','type_2'),
		        'display_value' => 'text',
			    'title' => esc_html__('Area Height (basic)', 'kameleon'),			   
			    'default'  => '30',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ), 
		    array(
			    'id'=> 'portfolio-pn_type2_margins',
			    'type'=> 'spacing',
			    'required' => array('portfolio-pn_stype','=','type_2'),
			    'mode'=> 'margin',
			    'units' => array('px'),			    
			    'left'=> false,
			    'right'=> false,			  
			    'title'=> esc_html__('Wrapper Margin Options (basic)', 'kameleon'),
			    'default'=> array(
			        'margin-top'     => '0px', 
			        'margin-bottom'  => '40px', 
			        'units'          => 'px', 
			    )
			),
			array(
			    'id'=> 'portfolio-pn_type2_paddings',
			    'type'=> 'spacing',
			    'required' => array('portfolio-pn_stype','=','type_2'),
			    'mode'=> 'padding',
			    'units' => array('px'),			    
			    'title'=> esc_html__('Wrapper Padding Options (basic)', 'kameleon'),
			    'default'=> array(
			        'padding-top'     => '0px', 
			        'padding-bottom'  => '0px', 
			        'padding-left'    => '0px', 
			        'padding-right'  => '0px', 
			        'units'          => 'px', 
			    )
			),	         		
			array( 
			    'id'       => 'portfolio-pn_type2_borders',
			    'type'     => 'border',
			    'all' => false,
			    'required' => array('portfolio-pn_stype','=','type_2'),
			    'title'    => esc_html__('Wrapper Border Options (basic)', 'kameleon'),
			    'default'  => array(
			        'border-color'  => 'transparent', 
			        'border-style'  => 'solid', 
			        'border-top'    => '0px', 
			        'border-right'  => '0px', 
			        'border-bottom' => '0px', 
			        'border-left'   => '0px'
			    )
			),
			array(
		        'id' => 'portfolio-pn_type2_gohome',
			    'required' => array('portfolio-pn_stype','=','type_2'),
		        'type' => 'switch',
		        'title' => esc_html__('Enable Go Home Icon', 'kameleon'), 
		        'subtitle' => esc_html__('Enable Go To Portfolio Home ', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),	
			array(
		        'id' => 'portfolio-pn_type2_full',
			    'required' => array('portfolio-pn_stype','=','type_2'),
		        'type' => 'switch',
		        'title' => esc_html__('Enable Full Width (basic)', 'kameleon'), 
		        'subtitle' => esc_html__('Enable full width section width for the basic style ', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ),	
			array(
        		'id' => 'portfolio-pn_type2_position',
		        'type' => 'button_set',
		        'title' => esc_html__('Position', 'kameleon'), 
		        'subtitle' => esc_html__('Choose ths position for the Previous/Next Section', 'kameleon'),
		        'options' => array(
			        'top' => 'Top', 
			        'bottom' => 'Bottom'
			     ), 
		        'default' => 'bottom',	
        	)	 	
        )
    );


 //Title Bar Section
	$sections[] = array(
        'title' => 'Title Bar',
		'icon' => 'dashicons-before dashicons-slides',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Portfolio Title Bar Settings', 'kameleon'),
        'id' => 'portfolio-titlebar',
        'subsection' => true,
        'fields' => array(
        	array(
	       		'id' => 'portfolio-titlebar_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Single Portfolio Title Bar Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Title Bar Setting for single portfolio pages. You can have a unique one for evey single portfolio', 'kameleon'),
	        ), 
        	array(
		        'id' => 'portfolio-titlebar_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Title Bar', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 
		    array(
		        'id' => 'portfolio-titlebar_unique',
		        'type' => 'switch',
			    'required' => array('portfolio-titlebar_active','=','1'),		        
		        'title' => esc_html__('Unique Title Bar Design', 'kameleon'), 		       
		        'subtitle' => esc_html__('Apply Unique styling for the title bar on portfolios', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 
        	array(
	        	'id' => 'portfolio-titlebar_height',
			    'type' => 'slider',
			    'required' => array(
			    	array('portfolio-titlebar_active','=','1'),		        
			    	array('portfolio-titlebar_unique','=','1')		        
			    ),
		        'display_value' => 'text',
			    'title' => esc_html__('Title Bar Height(px)', 'kameleon'),   
			    'default'  => '70',
				'min'      => '70',
				'step'     => '1',
				'max'      => '1000',	
	        ),
	        //Choose the Post Featured Image as a Background
	        array(
		        'id' => 'portfolio-featured_enabled',
		        'type' => 'switch',
		        'required' => array(
			    	array('portfolio-titlebar_active','=','1'),		        
			    	array('portfolio-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Use Featured Image', 'kameleon'), 		       
		        'dubtitle' => esc_html__('Choose the portfolio featured image as Title bar background image.', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ),

		    array(
		        'id' => 'portfolio-modern_look',
		        'type' => 'switch',
		        'required' => array(
			    	array('portfolio-titlebar_active','=','1'),		        
			    	array('portfolio-titlebar_unique','=','1'),		        
			    	array('portfolio-featured_enabled','=','1')		        
			    ),
		        'title' => esc_html__('Enable Full Modern', 'kameleon'), 		       
		        'dubtitle' => esc_html__('Enable fullwidth modern look for this portfolio.', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ),
        	array(
		        'id' => 'portfolio-titlebar_background',
		        'type' => 'background',
		        'required' => array(
			    	array('portfolio-titlebar_active','=','1'),		        
			    	array('portfolio-titlebar_unique','=','1')		        
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
	        	'id' => 'portfolio-titlebar_border_thickness',
			    'type' => 'slider',
			    'required' => array(
			    	array('portfolio-titlebar_active','=','1'),		        
			    	array('portfolio-titlebar_unique','=','1')		        
			    ),
		        'display_value' => 'text',
			    'title' => esc_html__('Border (px)', 'kameleon'), 			    			   
			    'default'  => '1',
				'min'      => '0',
				'step'     => '1',
				'max'      => '10',	
	        ),
		    array(
			    'id' => 'portfolio-titlebar_border_color',
			    'type' => 'color',
			    'required' => array(
			    	array('portfolio-titlebar_active','=','1'),		        
			    	array('portfolio-titlebar_unique','=','1')		        
			    ),
			    'title' => esc_html__('Border Color', 'kameleon'),			    
				'default' => '#eee',
				'validate' => 'color'
			),          	
        	array(
		        'id' => 'portfolio-titlebar_style',
		        'type' => 'select',
		        'required' => array(
			    	array('portfolio-titlebar_active','=','1'),		        
			    	array('portfolio-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Title Bar Style', 'kameleon'), 		       
		        'options' => $singlepp_titlebar_style,
				'default' => 'style1'
		    ),         	
        	array(
			    'id'          => 'portfolio-titlebar_title_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Title Font Settings', 'kameleon'),
			    'required' => array(array('portfolio-titlebar_active','=','1'),array('portfolio-titlebar_unique','=','1')),			    
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
		        'id' => 'portfolio-path_active',
		        'type' => 'switch',
		        'required' => array(
			    	array('portfolio-titlebar_active','=','1'),	
			    	array('portfolio-titlebar_style','!=','style4'),		        
			    	array('portfolio-titlebar_style','!=','style5'),		        
			    	array('portfolio-titlebar_style','!=','style6'),		        
			    	array('portfolio-titlebar_style','!=','style7'),		        
			    	array('portfolio-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Show Page Path', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 
		    array(
			    'id'          => 'portfolio-titlebar_path_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Path Font Settings', 'kameleon'),
			    'required' => array(
			    	array('portfolio-titlebar_active','=','1'),	
			    	array('portfolio-path_active','=','1'),	
			    	array('portfolio-titlebar_style','!=','style4'),		        
			    	array('portfolio-titlebar_style','!=','style5'),		        
			    	array('portfolio-titlebar_style','!=','style6'),		        
			    	array('portfolio-titlebar_style','!=','style7'),		        
			    	array('portfolio-titlebar_unique','=','1')),
			    'google'      => false, 'font-backup' => false,'subsets'=> false,'font-family' => false,'letter-spacing' => true,'font-weight' => true,'font-style' => true,
			    'text-align' => false,'line-height' => false,'text-decoration' => false,'color' => true,'text-transform' => true,'units'=> array('px'),			   
			    'default'     => array(
			        'color' => '#aaa',
				    'text-transform' => 'none',
				    'letter-spacing' => '0px',
				    'font-size'   => '12px', 
			    ),
			),        

		    array(
			    'id'          => 'portfolio-titlebar_info_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Info Font Settings', 'kameleon'),
			    'required' => array(
			    	array('portfolio-titlebar_active','=','1'),	
			    	array('portfolio-titlebar_style','!=','style1'),		        
			    	array('portfolio-titlebar_style','!=','style2'),		        
			    	array('portfolio-titlebar_style','!=','style3'),		        
			    	array('portfolio-titlebar_style','!=','style4'),		        
			    	array('portfolio-titlebar_style','!=','style5'),		        
			    	array('portfolio-titlebar_style','!=','style6'),		        
			    	array('portfolio-titlebar_unique','=','1'),		        
			    ),
			    'google'      => false, 'font-backup' => false,'subsets'=> false,'font-family' => false,'letter-spacing' => true,'font-weight' => true,'font-style' => true,
			    'text-align' => false,'line-height' => false,'text-decoration' => false,'color' => true,'text-transform' => true,'units'=> array('px'),			   
			    'default'     => array(
			        'color' => '#aaa',
				    'text-transform' => 'none',
				    'letter-spacing' => '0px',
				    'font-size'   => '12px', 
			    ),
			),   
	        //Post Next / Previous 
		    array(
			    'id' => 'portfolio-titlebar_arrowcolor',
			    'type' => 'color',
			    'required' => array(
			    	array('portfolio-titlebar_style','!=','style1'),		        
			    	array('portfolio-titlebar_style','!=','style2'),		        
			    	array('portfolio-titlebar_style','!=','style3'),		        
			    	array('portfolio-titlebar_style','!=','style7'),		        
			    ),
			    'title' => esc_html__('Arrow Color', 'kameleon'),			    
				'default' => '#bbb',
				'validate' => 'color'
			),

			

			array(
		        'id' => 'portfolio-titlebar_thumbnail_enabled',			   
		        'type' => 'switch',
		        'required' => array(
			    	array('portfolio-titlebar_style','!=','style1'),		        
			    	array('portfolio-titlebar_style','!=','style2'),		        
			    	array('portfolio-titlebar_style','!=','style3')	,		        
			    	array('portfolio-titlebar_style','!=','style7'),	        
			    ),
		        'title' => esc_html__('Enable Post Thumbnail', 'kameleon'), 
		        'subtitle' => esc_html__('Include Post Thumbnail', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),

			array(
	        	'id' => 'portfolio-titlebar_thumbnail_size',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array(
			    	array('portfolio-titlebar_style','!=','style1'),		        
			    	array('portfolio-titlebar_style','!=','style2'),		        
			    	array('portfolio-titlebar_style','!=','style3'),		        
			    	array('portfolio-titlebar_style','!=','style7'),		        
			    ),
			    'title' => esc_html__('Thumbnail Size (edge)', 'kameleon'),			   
			    'default'  => '30',
				'min'      => '0',
				'step'     => '1',
				'max'      => '150',	
	        ), 	
		    array(
	        	'id' => 'portfolio-titlebar_thumbnail_radius',
			    'type' => 'slider',			 
			    'required' => array(
			    	array('portfolio-titlebar_style','!=','style1'),		        
			    	array('portfolio-titlebar_style','!=','style2'),		        
			    	array('portfolio-titlebar_style','!=','style3')	,		        
			    	array('portfolio-titlebar_style','!=','style7'),	        
			    ),  
		        'display_value' => 'text',
			    'title' => esc_html__('Thumbnail Radius Size', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ), 	

        )
    );

	











	//header v1 subsection
	$sections[] = array(
        'title' => 'Portfolio Modal Window Shortcode',
		'icon' => 'dashicons-before dashicons-art',
        'id' => 'paj_section',        						
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Portfolio Ajax modal window shortcode styling', 'kameleon'),
        'subsection' => true,
        'fields' => array(
        	array(
			    'id' => 'paj_background',
			    'type' => 'color',			   
			    'title' => esc_html__('Background Color', 'kameleon'),			    
				'default' => '#fff',
				'validate' => 'color'
			),
			array(
			    'id' => 'paj_borders_color',
			    'type' => 'color',			   
			    'title' => esc_html__('Borders Color', 'kameleon'),			    
				'default' => '#eee',
				'validate' => 'color'
			),
			array(
			    'id' => 'paj_icons_color',
			    'type' => 'color',			   
			    'title' => esc_html__('Icons Color', 'kameleon'),			    
				'default' => '#666',
				'validate' => 'color'
			),
        	array(
	        	'id' => 'paj_title_size',
			    'type' => 'slider',			 			 
		        'display_value' => 'text',
			    'title' => esc_html__('Title Size', 'kameleon'),			   
			    'default'  => '24',
				'min'      => '0',
				'step'     => '1',
				'max'      => '80',	
	        ), 	
	        array(
			    'id' => 'paj_title_color',
			    'type' => 'color',			   
			    'title' => esc_html__('Title Color', 'kameleon'),			    
				'default' => '#444',
				'validate' => 'color'
			),
			array(
	        	'id' => 'paj_contenttitle_size',
			    'type' => 'slider',			 			 
		        'display_value' => 'text',
			    'title' => esc_html__('Content Title Size', 'kameleon'),			   
			    'default'  => '24',
				'min'      => '0',
				'step'     => '1',
				'max'      => '80',	
	        ), 	
	        array(
			    'id' => 'paj_contenttitle_color',
			    'type' => 'color',			   
			    'title' => esc_html__('Content Title Color', 'kameleon'),			    
				'default' => '#444',
				'validate' => 'color'
			),
			array(
	        	'id' => 'paj_content_size',
			    'type' => 'slider',			 			 
		        'display_value' => 'text',
			    'title' => esc_html__('Content Size', 'kameleon'),			   
			    'default'  => '15',
				'min'      => '0',
				'step'     => '1',
				'max'      => '80',	
	        ), 	
	        array(
			    'id' => 'paj_content_color',
			    'type' => 'color',			   
			    'title' => esc_html__('Content Color', 'kameleon'),			    
				'default' => '#444',
				'validate' => 'color'
			),
			array(
			    'id' => 'paj_details_background',
			    'type' => 'color',			   
			    'title' => esc_html__('Details Background Color', 'kameleon'),			    
				'default' => '#f9f9f9',
				'validate' => 'color'
			),
			array(
			    'id' => 'paj_details_color',
			    'type' => 'color',			   
			    'title' => esc_html__('Details Text Color', 'kameleon'),			    
				'default' => '#444',
				'validate' => 'color'
			),
			array(
		        'id' => 'paj_pn_enabled',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Next & Previous', 'kameleon'), 		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),
			array(
		        'id' => 'paj_social_enabled',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Social Share', 'kameleon'), 		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),

        )     
    );

	//Social Share Box
	$sections[] = array(
        'title' => 'Social Share Box',
        'id' => 'portfolio_socialbox_section', 
		'icon' => 'fa fa-share-alt',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Post Social Share Box', 'kameleon'),
        'subsection' => true,
        'fields' => array(
	      	array(
        		'id' => 'portfolio-ss_type',
		        'type' => 'button_set',
		        'title' => esc_html__('Box Style', 'kameleon'), 
		        'subtitle' => esc_html__('Choose the social share box type', 'kameleon'),
		        'options' => array(
			        'wide' => 'Wide', 
			        'modern' => 'Modern'
			     ), 
		        'default' => 'wide',	
        	),	
        	array(
	        	'id' => 'portfolio-ss_size',
			    'type' => 'slider',			 
			    'required' => array(
			    	array('portfolio-ss_type','=','modern')			    	
			    ),  
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Size', 'kameleon'),			   
			    'default'  => '18',
				'min'      => '15',
				'step'     => '1',
				'max'      => '100',	
	        ), 
	        array(
	        	'id' => 'portfolio-ss_backsize',
			    'type' => 'slider',			 
			    'required' => array(
			    	array('portfolio-ss_type','=','modern')			    	
			    ),  
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Size', 'kameleon'),			   
			    'default'  => '35',
				'min'      => '20',
				'step'     => '1',
				'max'      => '100',	
	        ), 
	        array(
	        	'id' => 'portfolio-ss_margins',
			    'type' => 'slider',			 
			    'required' => array(
			    	array('portfolio-ss_type','=','modern')			    	
			    ),  
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Margins', 'kameleon'),			   
			    'default'  => '5',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ), 
	        array(
	        	'id' => 'portfolio-ss_borderradius',
			    'type' => 'slider',			 
			    'required' => array(
			    	array('portfolio-ss_type','=','modern')			    	
			    ),  
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Radius', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ), 
	        array(
		        'id' => 'portfolio-ss_style',
		        'type' => 'select',
		        'title' => esc_html__('Icon Style', 'kameleon'), 
		        'required' => array(
			    	array('portfolio-ss_type','=','modern')			    	
			    ), 		       
		        'options' => array(
		        	'hoverColorScheme'=> esc_html__("Hover Color Scheme",'kameleon'),
                	'hoverBackScheme'=> esc_html__("Hover Background Scheme",'kameleon'),
                	'hoverShowBottom'=> esc_html__("Show From Background Bottom",'kameleon'),
                	'hoverShowLeft'=> esc_html__("Show From Background Left",'kameleon'),
                	'hoverShowTop'=> esc_html__("Show From Background Top",'kameleon'),
                	'hoverShowRight'=> esc_html__("Show From Background Right",'kameleon'),
                	'hoverShowScale'=> esc_html__("Show From Background Scaled",'kameleon'),
                	'hoverShowTada'=> esc_html__("Show From Background Tada",'kameleon'),
		        ),				
				'default' => 'hoverShowTada'
		    ),
		    array(
			    'id' => 'portfolio-ss_backcolor',
			    'type' => 'color',
			    'required' => array(
			    	array('portfolio-ss_type','=','modern')			    	
			    ), 
			    'title' => esc_html__('Icon Background Color', 'kameleon'),	
			    "subtitle" => esc_html__( "Only for some effects", "kameleon" ),  		    
				'default' => 'transparent',
				'validate' => 'color'
			), 
			array(
			    'id' => 'portfolio-ss_iconcolor',
			    'type' => 'color',
			    'required' => array(
			    	array('portfolio-ss_type','=','modern')			    	
			    ), 
			    'title' => esc_html__('Icon Color', 'kameleon'),	
			    "subtitle" => esc_html__( "Only for some effects", "kameleon" ),  		    
				'default' => '#888',
				'validate' => 'color'
			), 
			array(
			    'id' => 'portfolio-ss_iconhovercolor',
			    'type' => 'color',
			    'required' => array(
			    	array('portfolio-ss_type','=','modern')			    	
			    ), 
			    'title' => esc_html__('Icon Hover Color', 'kameleon'),	
			    "subtitle" => esc_html__( "Only for some effects", "kameleon" ),  		    
				'default' => '#fff',
				'validate' => 'color'
			), 
			array(
			    'id'       => 'portfolio-ss_socialarray',
			    'type'     => 'select',
			    'multi'    => true,
			    'required' => array(
			    	array('portfolio-ss_type','=','modern')			    	
			    ), 
			    'title'    => __('Social Site', 'kameleon'), 			   
			    'options'  => kameleon_socialshare_array_list(),
			    'default'  => array('facebook','twitter','google','linkedin','pinterest','reddit')
			),
	        

			array(
        		'id' => 'portfolio-ss_align',
		        'type' => 'button_set',
		        'required' => array(
			    	array('portfolio-ss_type','=','modern')			    	
			    ), 
		        'title' => esc_html__('Icon Alignment', 'kameleon'), 		   
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