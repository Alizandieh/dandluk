<?php
 /* ================================================================== *\
   ==                        S E C T I O N                         ==
   ==============   T O P   S L I N D I N G   B A R    ============== 
\* ================================================================== */	
	$sections[] = array(
        'title' => 'Top Sliding Bar',
		'icon' => 'fa fa-bookmark-o',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Top Sliding Bar Settings! A top page widgetized fixed area', 'kameleon'),
        'fields' => array( 
        	array(
		        'id' => 'slidingbar_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Sliding Bar', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ),

		    array(
        		'id' => 'slidingbar_width',
		        'type' => 'button_set',
		        'title' => esc_html__('Sliding Content Width', 'kameleon'), 
		        'required' => array('slidingbar_active', '=' , '1'),		        
		        'options' => array(
			        'boxed' => 'Boxed', 
			        'full_width' => 'Full Width'
			     ), 
		        'default' => 'boxed',	
        	),

        	array(
        		'id' => 'slidingbar_button_position',
		        'type' => 'button_set',
		    	'required' => array('slidingbar_active', '=' , '1'),
		        'title' => esc_html__('Show Button Position', 'kameleon'), 
		        'options' => array(
			        'left' => 'Left', 
			        'center' => 'Center',
			        'right' => 'Right',
			     ), 
		        'default' => 'right',	
        	),

        	array(
        		'id' => 'slidingbar_button_icon',
		        'type' => 'select',
		    	'required' => array('slidingbar_active', '=' , '1'),
		        'title' => esc_html__('Button Icon Style', 'kameleon'), 
		        'options' => array(
			        'arrow' => 'Arrow', 
			        'minus' => 'Plus + Minus',
			        'chevron' => 'Chevron',
			     ), 
		        'default' => 'chevron',	
        	),

        	array(
        		'id' => 'slidingbar_columns',
		    	'required' => array('slidingbar_active', '=' , '1'),			    
		        'type' => 'image_select',
		        'title' => esc_html__('Sliding Bar Columns', 'kameleon'), 
		        'subtitle' => esc_html__('Choose the number of columns for the Sliding Bar!', 'kameleon'),
		        'options' => array(
			        1=> array(
			            'alt'   => '1 Column', 
			            'img'   => ReduxFramework::$_url.'assets/img/1col.png'
			        ),
			        2=> array(
			            'alt'   => '2 Column', 
			            'img'   => KM_PLUGIN_URL.'kameleon_core/assets/images/2col.png'
			        ),
			        3=> array(
			            'alt'   => '3 Column', 
			            'img'   => KM_PLUGIN_URL.'kameleon_core/assets/images/3col.png'
			        ),
			        4=> array(
			            'alt'   => '4 Column', 
			            'img'   => KM_PLUGIN_URL.'kameleon_core/assets/images/4col.png'
			        ),
			     ), 
		        'default' => '4',	
        	),

	       array(
	        	'id' => 'slidingbar_col_1_width',
		    	'required' => array('slidingbar_active', '=' , '1'),			    
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Column 1 Width (%)', 'kameleon'), 			    
			    'default'  => '25',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),

	       array(
	        	'id' => 'slidingbar_col_2_width',
		    	'required' => array('slidingbar_active', '=' , '1'),			    
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Column 2 Width (%)', 'kameleon'), 			    
			    'default'  => '25',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),

	       array(
	        	'id' => 'slidingbar_col_3_width',
		    	'required' => array('slidingbar_active', '=' , '1'),			    
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Column 3 Width (%)', 'kameleon'), 			    
			    'default'  => '25',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),

			array(
	        	'id' => 'slidingbar_col_4_width',
		    	'required' => array('slidingbar_active', '=' , '1'),			    
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Column 4 Width (%)', 'kameleon'), 			    
			    'default'  => '25',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ),	

			array(
		        'id' => 'slidingbar_background',
		    	'required' => array('slidingbar_active', '=' , '1'),			    
		        'type' => 'background',
		        'title' => esc_html__('Sliding Background', 'kameleon'), 
		        'subtitle' => esc_html__('', 'kameleon'),
		        'preview' =>false,		        
				'default'  => array(
			        'background-color' => '#181818',
			        'background-image' => '',
					'background-repeat' => '',
					'background-position' => '',
					'background-size' => '',
					'background-attachment' => '',
			    )						
		    ), 

        

			array(
			    'id'=> 'slidingbar_padding',
			    'type'=> 'spacing',
			    'mode'=> 'padding',
		    	'required' => array('slidingbar_active', '=' , '1'),			    			    			   
			    'left'=> false,
			    'right'=> false,
			    'units' => array('px'),			    
			    'title'=> esc_html__('Padding Option', 'kameleon'),
			    'default'=> array(
			        'padding-top'     => '30px', 			       
			        'padding-bottom'  => '30px', 			       
			        'units'          => 'px', 
			    )
			),

			array(
	        	'id' => 'slidingbar_fontsize',
			    'type' => 'slider',
		        'display_value' => 'text',
		    	'required' => array('slidingbar_active', '=' , '1'),			    			    
			    'title' => esc_html__('Text Font Size', 'kameleon'),			   
			    'default'  => '14',
				'min'      => '0',
				'step'     => '1',
				'max'      => '25',	
	        ),
	        array(
			    'id' => 'slidingbar_color',
			    'type' => 'color',
		    	'required' => array('slidingbar_active', '=' , '1'),			    			    			    
			    'title' => esc_html__('Sliding Bar Text Color', 'kameleon'),			    
				'default' => '#ddd',
				'validate' => 'color'
			),

			array(
	        	'id' => 'slidingbar_title_fontsize',
			    'type' => 'slider',
		        'display_value' => 'text',
		    	'required' => array('slidingbar_active', '=' , '1'),			    			    			    
			    'title' => esc_html__('Sliding Bar Widget Title Font Size', 'kameleon'),			   
			    'default'  => '15',
				'min'      => '0',
				'step'     => '1',
				'max'      => '25',	
	        ),
	        array(
			    'id' => 'slidingbar_title_color',
		    	'required' => array('slidingbar_active', '=' , '1'),			    			    				
			    'type' => 'color',
			    'title' => esc_html__('Sliding Bar Widget Title Color', 'kameleon'),			    
				'default' => '#aaa',
				'validate' => 'color'
			),	





		)
	);


?>