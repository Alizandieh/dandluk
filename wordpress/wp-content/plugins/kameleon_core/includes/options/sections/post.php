<?php 

/* ================================================================== *\
   ==                        S E C T I O N                         ==
   ==============        		 P O S T               ============== 
\* ================================================================== */
	
	$sections[] = array(
        'title' => 'Post',
		'icon' => 'fa fa-newspaper-o',
        'id' => 'post_section', 		
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Single Post Page Configuration', 'kameleon'),
        'fields' => array(  
        	array(		        
        		'id' =>'post_home_page' ,
		        'type' => 'text',
		        'title' => esc_html__('Post List Home Page', 'kameleon'), 		        
		        'subtitle' => esc_html__('Enter the home page for the post list', 'kameleon'), 		        
		        'default' => ''
		    ), 
        	array(
	        	'id' => 'thumbnails_number',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Gallery Image Number', 'kameleon'),			   
			    'subtitle' => esc_html__('Number of featured images per post', 'kameleon'),			   
			    'default'  => '3',
				'min'      => '0',
				'step'     => '1',
				'max'      => '10',	
	        ),


        	array(
		        'id' => 'post_layout',
		        'type' => 'select',
		        'title' => esc_html__('Post Layout', 'kameleon'), 		       
			    'subtitle' => esc_html__('Post Layout on home post list page', 'kameleon'),			   
		        'options' => array(
		        	'full_image' => 'Full Image',
		        	'full_image_2' => 'Full Image 2',
		        	'side_image_left' => 'Side Image Left',
		        	'side_image_right' => 'Side Image Right'
		        ),
				
				'default' => 'full_image'
		    ),

        	array(
		        'id' => 'about_author',
		        'type' => 'switch',
		        'title' => esc_html__('Enable About Author', 'kameleon'), 
		        'subtitle' => esc_html__('Show post author information', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 

		    array(
		        'id' => 'social_share',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Social Share', 'kameleon'), 		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),
		    array(
		        'id' => 'related_posts',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Related Posts', 'kameleon'), 		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),
		    array(
			    'id' => 'blockquote_background',
			    'type' => 'color',
			    'title' => esc_html__('Blockquote Background', 'kameleon'),			    
				'default' => '#f8f8f8',
				'validate' => 'color'
			), 

			array(
			    'id' => 'blockquote_color',
			    'type' => 'color',
			    'title' => esc_html__('Blockquote Text Color', 'kameleon'),			    
				'default' => '#444',
				'validate' => 'color'
			), 			
			array(
		        'id' => 'comment_layout',
		        'type' => 'select',
		        'title' => esc_html__('Comment Layout', 'kameleon'), 		       
		        'options' => array(
		        	1 => 'Simple',
		        	2 => 'Bubble',
		        	3 => 'Modern',
		        	4 => 'Whatever',
		        	5 => 'Wide',
		        ),				
				'default' => 1
		    ),


			array(
		        'id' => 'post_modern_enabled',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Modern Post Layout', 'kameleon'), 		        
		        'subtitle' => esc_html__('When enabling the modern look you must make changes on the page title bar', 'kameleon'), 		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),

			       
		)
	);
	
	//Pagination Styling
	$sections[] = array(
        'title' => 'Pagination Styling',
        'id' => 'post_titlebar_section', 
		'icon' => 'fa fa-ellipsis-h',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Pagination area styling', 'kameleon'),
        'subsection' => true,
        'fields' => array(
        	//Pagination Settings
        	array(
	       		'id' => 's_pagination_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Pagination Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Post Pagination Styling ', 'kameleon'),
	        ), 


        	array(
			    'id'       => 's_pagination_style',
			    'type'     => 'image_select',
			    'title'    => esc_html__('Site Pagination Style', 'kameleon'), 
			    'subtitle' => esc_html__('Choose the pagination style for the global website', 'kameleon'),
			    'options'  => array(
			        'pagination_circle' => array(
							'alt' => 'Pagination Circle Style',
							'img' => KM_PLUGIN_URL .'kameleon_core/assets/images/circle.jpg',
					),
					'pagination_square' => array(
							'alt' => 'Pagination Square Style',
							'img' => KM_PLUGIN_URL .'kameleon_core/assets/images/square.jpg',
					),
					'pagination_rhombus' => array(
							'alt' => 'Pagination Rhombus Style',
							'img' => KM_PLUGIN_URL .'kameleon_core/assets/images/rhombus.jpg',
					),
					'pagination_line_top' => array(
							'alt' => 'Page Line Top Style',
							'img' => KM_PLUGIN_URL .'kameleon_core/assets/images/top.jpg',
					),
					'pagination_line_bottom' => array(
							'alt' => 'Page Line Bottom Style',
							'img' => KM_PLUGIN_URL .'kameleon_core/assets/images/bottom.jpg',
					),
					'pagination_line_center' => array(
							'alt' => 'Page Line Center Style',
							'img' => KM_PLUGIN_URL .'kameleon_core/assets/images/center.jpg',
					),

			    ),
			    'default' => 'pagination_circle'
			),

        	array(
		        'id' => 's_pagination_align',
		        'type' => 'select',
		        'title' => esc_html__('Pagination Links Align', 'kameleon'), 		       
		        'options' => array(
		        	'left' => 'Left',
		        	'center' => 'Center',
		        	'right' => 'Right'
		        ),
				
				'default' => 'center'
		    ),

        	array(
	        	'id' => 's_pagination_font_size',
			    'type' => 'slider',			    
		        'display_value' => 'text',
			    'title' => esc_html__('Font Size', 'kameleon'),			   
			    'default'  => '14',
				'min'      => '0',
				'step'     => '1',
				'max'      => '22',	
	        ),

        	array(
	        	'id' => 's_pagination_link_size',
			    'type' => 'slider',			    
		        'display_value' => 'text',
			    'title' => esc_html__('Button Link Size', 'kameleon'),			   
			    'default'  => '35',
				'min'      => '0',
				'step'     => '1',
				'max'      => '50',	
	        ),

	        array(
	        	'id' => 's_pagination_link_margin',
			    'type' => 'slider',			    
		        'display_value' => 'text',
			    'title' => esc_html__('Button Link Margins', 'kameleon'),			   
			    'default'  => '5',
				'min'      => '0',
				'step'     => '1',
				'max'      => '30',	
	        ),


        	array(
	        	'id' => 's_pagination_border_width',
			    'type' => 'slider',
			    'required' => array('s_pagination_style','!=','pagination_rhombus'),
		        'display_value' => 'text',
			    'title' => esc_html__('Border Width', 'kameleon'),			   
			    'default'  => '1',
				'min'      => '0',
				'step'     => '1',
				'max'      => '10',	
	        ),

	        array(
			    'id' => 's_pagination_border_color',
			    'type' => 'color',
			    'required' => array('s_pagination_style','!=','pagination_rhombus'),
			    'title' => esc_html__('Border Color', 'kameleon'),			    
				'default' => '#f5f5f5',
				'validate' => 'color'
			), 

	        array(
			    'id' => 's_pagination_activated_color',
			    'type' => 'color',
			    'required' => array( 
			    		array('s_pagination_style','!=','pagination_line_top'), 
			    		array('s_pagination_style','!=','pagination_line_bottom'),
			    		array('s_pagination_style','!=','pagination_line_center')
			    ),
			    'title' => esc_html__('Activated Link Text Color(current page)', 'kameleon'),			    
				'default' => '#fff',
				'validate' => 'color'
			),

			array(
			    'id' => 's_pagination_deactivated_bg_color',
			    'type' => 'color',
			    'required' => array( 
			    		array('s_pagination_style','!=','pagination_line_top'), 
			    		array('s_pagination_style','!=','pagination_line_bottom'),
			    		array('s_pagination_style','!=','pagination_line_center')			    		
			    ),
			    'title' => esc_html__('Deactivated Link Background Color', 'kameleon'),			    
				'default' => '#fff',
				'validate' => 'color'
			), 
			array(
			    'id' => 's_pagination_deactivated_color',
			    'type' => 'color',
			    'required' => array( 
			    		array('s_pagination_style','!=','pagination_line_top'), 
			    		array('s_pagination_style','!=','pagination_line_bottom'),
			    		array('s_pagination_style','!=','pagination_line_center')			    		
			    ),
			    'title' => esc_html__('Deactivated Link Text Color', 'kameleon'),			    
				'default' => '#333',
				'validate' => 'color'
			), 
        )
     );   	

	//--------------------------------------
	//Previous Next Settings
	//--------------------------------------
	$sections[] = array(
        'title' => 'Next / Previous Styling',
		'icon' => 'fa fa-arrows-h',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Next / Previous area styling', 'kameleon'),
        'subsection' => true,
        'fields' => array(        	
        	array(
	       		'id' => 'post_next_previous_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Next / Previous Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Post Next / Previous Styling ', 'kameleon'),
	        ), 			
			array(
		        'id' => 'post-pn_enabled',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Next & Previous Post', 'kameleon'), 
		        'subtitle' => esc_html__('Enable Next / Previous', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),

			array(
		        'id' => 'post-pn_stype',
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
			    'id' => 'post-pn_type1_background',
			    'type' => 'color',
			    'required' => array('post-pn_stype','=','type_1'),
			    'title' => esc_html__('Button Background Color (edge)', 'kameleon'),			    
				'default' => '#222',
				'validate' => 'color'
			),
			array(
	        	'id' => 'post-pn_type1_height',
			    'required' => array('post-pn_stype','=','type_1'),
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Button Height', 'kameleon'),			   
			    'default'  => '40',
				'min'      => '0',
				'step'     => '1',
				'max'      => '150',	
	        ), 		 
	        array(
	        	'id' => 'post-pn_type1_width',
			    'required' => array('post-pn_stype','=','type_1'),
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Button Width', 'kameleon'),			   
			    'default'  => '40',
				'min'      => '0',
				'step'     => '1',
				'max'      => '150',	
	        ), 		    	
			array(
			    'id' => 'post-pn_type1_color',
			    'type' => 'color',
			    'required' => array('post-pn_stype','=','type_1'),
			    'title' => esc_html__('Arrow & Text Color (edge)', 'kameleon'),			    
				'default' => '#fff',
				'validate' => 'color'
			), 		    	
			array(
	        	'id' => 'post-pn_type1_fontsize',
			    'required' => array('post-pn_stype','=','type_1'),
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Font Size (edge)', 'kameleon'),			   
			    'default'  => '14',
				'min'      => '0',
				'step'     => '1',
				'max'      => '22',	
	        ), 		
			array(
	        	'id' => 'post-pn_type1_arrowsize',
			    'required' => array('post-pn_stype','=','type_1'),
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Arrow Size (edge)', 'kameleon'),			   
			    'default'  => '20',
				'min'      => '0',
				'step'     => '1',
				'max'      => '44',	
	        ), 
			array(
		        'id' => 'post-pn_type1_thumbnail_enabled',
			    'required' => array('post-pn_stype','=','type_1'),
		        'type' => 'switch',
		        'title' => esc_html__('Enable Post Thumbnail (edge)', 'kameleon'), 
		        'subtitle' => esc_html__('Include Post Thumbnail', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),

			array(
	        	'id' => 'post-pn_type1_thumbnail_size',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'required' => array('post-pn_stype','=','type_1'),
			    'title' => esc_html__('Thumbnail Size (edge)', 'kameleon'),			   
			    'default'  => '40',
				'min'      => '0',
				'step'     => '1',
				'max'      => '150',	
	        ), 	
		    array(
	        	'id' => 'post-pn_type1_thumbnail_radius',
			    'type' => 'slider',
			    'required' => array('post-pn_stype','=','type_1'),
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
			    'id' => 'post-pn_type2_arrowcolor',
			    'type' => 'color',
			    'required' => array('post-pn_stype','=','type_2'),
			    'title' => esc_html__('Arrow Color (basic)', 'kameleon'),			    
				'default' => '#888',
				'validate' => 'color'
			),

	        array(
		        'id' => 'post-pn_type2_title_enabled',
			    'required' => array('post-pn_stype','=','type_2'),
		        'type' => 'switch',
		        'title' => esc_html__('Show Post Title (basic)', 'kameleon'), 
		        'subtitle' => esc_html__('Include Post Title', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ),
	        array(
		        'id' => 'post-pn_type2_np_name_enabled',
			    'required' => array(
			    	array('post-pn_stype','=','type_2'),
			    	array('post-pn_type2_title_enabled','=','1'),
			    ),
		        'type' => 'switch',
		        'title' => esc_html__('Replace Title With Next / Previous Text', 'kameleon'), 
		        'subtitle' => esc_html__('Choose if you want instead of post title you will have Next Post', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),
			array(
			    'id' => 'post-pn_type2_fontcolor',
			    'type' => 'color',
			    'required' => array(
			    	array('post-pn_stype','=','type_2'),
			    	array('post-pn_type2_title_enabled','=','1'),
			    ),
			    'title' => esc_html__('Text Color (basic)', 'kameleon'),			    
				'default' => '#777',
				'validate' => 'color'
			),
			array(
	        	'id' => 'post-pn_type2_fontsize',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'required' => array(
			    	array('post-pn_stype','=','type_2'),
			    	array('post-pn_type2_title_enabled','=','1'),
			    ),
			    'title' => esc_html__('Text Size (basic)', 'kameleon'),			   
			    'default'  => '15',
				'min'      => '0',
				'step'     => '1',
				'max'      => '35',	
	        ), 	
			array(
		        'id' => 'post-pn_type2_thumbnail_enabled',
			    'required' => array('post-pn_stype','=','type_2'),
		        'type' => 'switch',
		        'title' => esc_html__('Enable Post Thumbnail (basic)', 'kameleon'), 
		        'subtitle' => esc_html__('Include Post Thumbnail', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),
			array(
	        	'id' => 'post-pn_type2_thumbnail_size',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'required' => array(
			    	array('post-pn_stype','=','type_2'),
			    	array('post-pn_type2_thumbnail_enabled','=','1'),
			    ),
			    'title' => esc_html__('Thumbnail Size (basic)', 'kameleon'),			   
			    'default'  => '50',
				'min'      => '0',
				'step'     => '1',
				'max'      => '150',	
	        ), 	
		    array(
	        	'id' => 'post-pn_type2_thumbnail_radius',
			    'type' => 'slider',
			    'required' => array(
			    	array('post-pn_stype','=','type_2'),
			    	array('post-pn_type2_thumbnail_enabled','=','1'),
			    ),
		        'display_value' => 'text',
			    'title' => esc_html__('Thumbnail Radius Size (basic)', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ), 	

		    array(
		        'id' => 'post-pn_type2_background',
		        'type' => 'background',
			    'required' => array('post-pn_stype','=','type_2'),
		        'title' => esc_html__('Wrapper Background (basic)', 'kameleon'), 		        
		        'preview' =>false,		        
				'default'  => array(
			        'background-color' => '#fafafa',
			        'background-image' => '',
					'background-repeat' => '',
					'background-position' => '',
					'background-size' => '',
					'background-attachment' => '',
			    )						
		    ),  

		    array(
	        	'id' => 'post-pn_type2_height',
			    'type' => 'slider',
			    'required' => array('post-pn_stype','=','type_2'),
		        'display_value' => 'text',
			    'title' => esc_html__('Area Height (basic)', 'kameleon'),			   
			    'default'  => '50',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ), 


		    array(
			    'id'=> 'post-pn_type2_margins',
			    'type'=> 'spacing',
			    'required' => array('post-pn_stype','=','type_2'),
			    'mode'=> 'margin',
			    'units' => array('px'),			    
			    'left'=> false,
			    'right'=> false,			  
			    'title'=> esc_html__('Wrapper Margin Options (basic)', 'kameleon'),
			    'default'=> array(
			        'margin-top'     => '30px', 
			        'margin-bottom'  => '0px', 
			        'units'          => 'px', 
			    )
			),

			array(
			    'id'=> 'post-pn_type2_paddings',
			    'type'=> 'spacing',
			    'required' => array('post-pn_stype','=','type_2'),
			    'mode'=> 'padding',
			    'units' => array('px'),			    
			    'title'=> esc_html__('Wrapper Padding Options (basic)', 'kameleon'),
			    'default'=> array(
			        'padding-top'     => '50px', 
			        'padding-bottom'  => '50px', 
			        'padding-left'  => '0px', 
			        'padding-right'  => '0px', 
			        'units'          => 'px', 
			    )
			),
	         		
			array( 
			    'id'       => 'post-pn_type2_borders',
			    'type'     => 'border',
			    'all' => false,
			    'required' => array('post-pn_stype','=','type_2'),
			    'title'    => esc_html__('Wrapper Border Options (basic)', 'kameleon'),
			    'default'  => array(
			        'border-color'  => '#eee', 
			        'border-style'  => 'solid', 
			        'border-top'    => '1px', 
			        'border-right'  => '0px', 
			        'border-bottom' => '1px', 
			        'border-left'   => '0px'
			    )
			),
			
			array(
		        'id' => 'post-pn_type2_gohome',
			    'required' => array('post-pn_stype','=','type_2'),
		        'type' => 'switch',
		        'title' => esc_html__('Enable Go Home Icon', 'kameleon'), 
		        'subtitle' => esc_html__('Enable Go To Post Home ', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),	
			array(
		        'id' => 'post-pn_type2_full',
			    'required' => array('post-pn_stype','=','type_2'),
		        'type' => 'switch',
		        'title' => esc_html__('Enable Full Width (basic)', 'kameleon'), 
		        'subtitle' => esc_html__('Enable full width section width for the basic style ', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),	
			 array(
        		'id' => 'post-pn_type2_position',
		        'type' => 'button_set',
		        'title' => esc_html__('Position', 'kameleon'), 
		        'subtitle' => esc_html__('Choose ths position for the Previous/Next Section', 'kameleon'),
		        'options' => array(
			        'top' => 'Top', 
			        'bottom' => 'Bottom'
			     ), 
		        'default' => 'bottom',	
        	),	 	
        )
    );


	//Title Bar Section
	$sections[] = array(
        'title' => 'Title Bar',
		'icon' => 'dashicons-before dashicons-slides',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Post Title Bar Settings', 'kameleon'),
        'id' => 'post-titlebar',
        'subsection' => true,
        'fields' => array(
        	array(
	       		'id' => 'post-titlebar_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Single Post Title Bar Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Title Bar Setting for single post pages. You can have a unique one for evey single post', 'kameleon'),
	        ), 
        	array(
		        'id' => 'post-titlebar_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Title Bar', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 
		    array(
		        'id' => 'post-titlebar_unique',
		        'type' => 'switch',
			    'required' => array('post-titlebar_active','=','1'),		        
		        'title' => esc_html__('Unique Title Bar Design', 'kameleon'), 		       
		        'subtitle' => esc_html__('Apply Unique styling for the title bar on posts', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 
        	array(
	        	'id' => 'post-titlebar_height',
			    'type' => 'slider',
			    'required' => array(
			    	array('post-titlebar_active','=','1'),		        
			    	array('post-titlebar_unique','=','1')		        
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
		        'id' => 'post-featured_enabled',
		        'type' => 'switch',
		        'required' => array(
			    	array('post-titlebar_active','=','1'),		        
			    	array('post-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Use Featured Image', 'kameleon'), 		       
		        'dubtitle' => esc_html__('Choose the post featured image as Title bar background image.', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ),

		    array(
		        'id' => 'post-modern_look',
		        'type' => 'switch',
		        'required' => array(
			    	array('post-titlebar_active','=','1'),		        
			    	array('post-titlebar_unique','=','1'),		        
			    	array('post-featured_enabled','=','1')		        
			    ),
		        'title' => esc_html__('Enable Full Modern', 'kameleon'), 		       
		        'dubtitle' => esc_html__('Enable fullwidth modern look for this post.', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ),
		    
        	array(
		        'id' => 'post-titlebar_background',
		        'type' => 'background',
		        'required' => array(
			    	array('post-titlebar_active','=','1'),		        
			    	array('post-titlebar_unique','=','1')			    
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
	        	'id' => 'post-titlebar_border_thickness',
			    'type' => 'slider',
			    'required' => array(
			    	array('post-titlebar_active','=','1'),		        
			    	array('post-titlebar_unique','=','1')		        
			    ),
		        'display_value' => 'text',
			    'title' => esc_html__('Border (px)', 'kameleon'), 			    			   
			    'default'  => '1',
				'min'      => '0',
				'step'     => '1',
				'max'      => '10',	
	        ),
		    array(
			    'id' => 'post-titlebar_border_color',
			    'type' => 'color',
			    'required' => array(
			    	array('post-titlebar_active','=','1'),		        
			    	array('post-titlebar_unique','=','1')		        
			    ),
			    'title' => esc_html__('Border Color', 'kameleon'),			    
				'default' => '#eee',
				'validate' => 'color'
			),          	
        	array(
		        'id' => 'post-titlebar_style',
		        'type' => 'select',
		        'required' => array(
			    	array('post-titlebar_active','=','1'),		        
			    	array('post-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Title Bar Style', 'kameleon'), 		       
		        'options' => $singlepp_titlebar_style,
				'default' => 'style1'
		    ),         	
        	array(
			    'id'          => 'post-titlebar_title_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Title Font Settings', 'kameleon'),
			    'required' => array(array('post-titlebar_active','=','1'),array('post-titlebar_unique','=','1')),			    
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
		        'id' => 'post-path_active',
		        'type' => 'switch',
		        'required' => array(
			    	array('post-titlebar_active','=','1'),	
			    	array('post-titlebar_style','!=','style4'),		        
			    	array('post-titlebar_style','!=','style5'),		        
			    	array('post-titlebar_style','!=','style6'),		        
			    	array('post-titlebar_style','!=','style7'),		        
			    	array('post-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Show Page Path', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 
		    array(
			    'id'          => 'post-titlebar_path_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Path Font Settings', 'kameleon'),
			    'required' => array(
			    	array('post-titlebar_active','=','1'),	
			    	array('post-path_active','=','1'),	
			    	array('post-titlebar_style','!=','style4'),		        
			    	array('post-titlebar_style','!=','style5'),		        
			    	array('post-titlebar_style','!=','style6'),		        
			    	array('post-titlebar_style','!=','style7'),		        
			    	array('post-titlebar_unique','=','1')),
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
			    'id'          => 'post-titlebar_info_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Info Font Settings', 'kameleon'),
			    'required' => array(
			    	array('post-titlebar_active','=','1'),	
			    	array('post-titlebar_style','!=','style1'),		        
			    	array('post-titlebar_style','!=','style2'),		        
			    	array('post-titlebar_style','!=','style3'),		        
			    	array('post-titlebar_style','!=','style4'),		        
			    	array('post-titlebar_style','!=','style5'),		        
			    	array('post-titlebar_style','!=','style6'),		        
			    	array('post-titlebar_unique','=','1'),		        
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
			    'id' => 'post-titlebar_arrowcolor',
			    'type' => 'color',
			    'required' => array(
			    	array('post-titlebar_style','!=','style1'),		        
			    	array('post-titlebar_style','!=','style2'),		        
			    	array('post-titlebar_style','!=','style3'),		        
			    	array('post-titlebar_style','!=','style7'),		        
			    ),
			    'title' => esc_html__('Arrow Color', 'kameleon'),			    
				'default' => '#bbb',
				'validate' => 'color'
			),		

			array(
		        'id' => 'post-titlebar_thumbnail_enabled',			   
		        'type' => 'switch',
		        'required' => array(
			    	array('post-titlebar_style','!=','style1'),		        
			    	array('post-titlebar_style','!=','style2'),		        
			    	array('post-titlebar_style','!=','style3'),		        
			    	array('post-titlebar_style','!=','style7'),			        
			    ),
		        'title' => esc_html__('Enable Post Thumbnail', 'kameleon'), 
		        'subtitle' => esc_html__('Include Post Thumbnail', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),

			array(
	        	'id' => 'post-titlebar_thumbnail_size',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array(
			    	array('post-titlebar_style','!=','style1'),		        
			    	array('post-titlebar_style','!=','style2'),		        
			    	array('post-titlebar_style','!=','style3'),		        
			    	array('post-titlebar_style','!=','style7'),			        
			    ),
			    'title' => esc_html__('Thumbnail Size (edge)', 'kameleon'),			   
			    'default'  => '30',
				'min'      => '0',
				'step'     => '1',
				'max'      => '150',	
	        ), 	
		    array(
	        	'id' => 'post-titlebar_thumbnail_radius',
			    'type' => 'slider',			 
			    'required' => array(
			    	array('post-titlebar_style','!=','style1'),		        
			    	array('post-titlebar_style','!=','style2'),		        
			    	array('post-titlebar_style','!=','style3'),		        
			    	array('post-titlebar_style','!=','style7'),			        
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
	
	//Social Share Box
	$sections[] = array(
        'title' => 'Social Share Box',
        'id' => 'post_socialbox_section', 
		'icon' => 'fa fa-share-alt',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Post Social Share Box', 'kameleon'),
        'subsection' => true,
        'fields' => array(
	      	array(
        		'id' => 'post-ss_type',
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
	        	'id' => 'post-ss_size',
			    'type' => 'slider',			 
			    'required' => array(
			    	array('post-ss_type','=','modern')			    	
			    ),  
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Size', 'kameleon'),			   
			    'default'  => '18',
				'min'      => '15',
				'step'     => '1',
				'max'      => '100',	
	        ), 
	        array(
	        	'id' => 'post-ss_backsize',
			    'type' => 'slider',			 
			    'required' => array(
			    	array('post-ss_type','=','modern')			    	
			    ),  
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Size', 'kameleon'),			   
			    'default'  => '35',
				'min'      => '20',
				'step'     => '1',
				'max'      => '100',	
	        ), 
	        array(
	        	'id' => 'post-ss_margins',
			    'type' => 'slider',			 
			    'required' => array(
			    	array('post-ss_type','=','modern')			    	
			    ),  
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Margins', 'kameleon'),			   
			    'default'  => '9',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ), 
	        array(
	        	'id' => 'post-ss_borderradius',
			    'type' => 'slider',			 
			    'required' => array(
			    	array('post-ss_type','=','modern')			    	
			    ),  
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Radius', 'kameleon'),			   
			    'default'  => '500',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ), 
	        array(
		        'id' => 'post-ss_style',
		        'type' => 'select',
		        'title' => esc_html__('Icon Style', 'kameleon'), 
		        'required' => array(
			    	array('post-ss_type','=','modern')			    	
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
			    'id' => 'post-ss_backcolor',
			    'type' => 'color',
			    'required' => array(
			    	array('post-ss_type','=','modern')			    	
			    ), 
			    'title' => esc_html__('Icon Background Color', 'kameleon'),	
			    "subtitle" => esc_html__( "Only for some effects", "kameleon" ),  		    
				'default' => '#f1f1f1',
				'validate' => 'color'
			), 
			array(
			    'id' => 'post-ss_iconcolor',
			    'type' => 'color',
			    'required' => array(
			    	array('post-ss_type','=','modern')			    	
			    ), 
			    'title' => esc_html__('Icon Color', 'kameleon'),	
			    "subtitle" => esc_html__( "Only for some effects", "kameleon" ),  		    
				'default' => '#888',
				'validate' => 'color'
			), 
			array(
			    'id' => 'post-ss_iconhovercolor',
			    'type' => 'color',
			    'required' => array(
			    	array('post-ss_type','=','modern')			    	
			    ), 
			    'title' => esc_html__('Icon Hover Color', 'kameleon'),	
			    "subtitle" => esc_html__( "Only for some effects", "kameleon" ),  		    
				'default' => '#fff',
				'validate' => 'color'
			), 
			array(
			    'id'       => 'post-ss_socialarray',
			    'type'     => 'select',
			    'multi'    => true,
			    'required' => array(
			    	array('post-ss_type','=','modern')			    	
			    ), 
			    'title'    => __('Social Site', 'kameleon'), 			   
			    'options'  => kameleon_socialshare_array_list(),
			    'default'  => array('facebook','twitter','google','linkedin','pinterest','reddit')
			),
	        

			array(
        		'id' => 'post-ss_align',
		        'type' => 'button_set',
		        'required' => array(
			    	array('post-ss_type','=','modern')			    	
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