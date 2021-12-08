<?php 
/* ================================================================== *\
   ==                        S E C T I O N                         ==
   ==============            S I D E B A R  		   ============== 
\* ================================================================== */	
	$sections[] = array(
        'title' => 'Sidebar',
		'icon' => 'fa fa-server',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Global Sidebar Settings', 'kameleon'),
        'fields' => array( 
        	array(
		        'id' => 'sidebar_home_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Sidebar On Home Page', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),
		    	
        	array(
        		'id' => 'sidebar_home_position',
		        'type' => 'button_set',
		    	'required' => array('sidebar_home_active', '=' , '1'),
		        'title' => esc_html__('Home Sidebar Position', 'kameleon'), 
		        'subtitle' => esc_html__('Choose the position for the Home Sidebar', 'kameleon'),
		        'options' => array(
			        'left' => 'Left', 
			        'right' => 'Right'
			     ), 
		        'default' => 'right',	
        	),

        	array(
		        'id' => 'sidebar_post_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Sidebar On Single Post', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),
		    	
        	array(
        		'id' => 'sidebar_post_positon',
		        'type' => 'button_set',
		    	'required' => array('sidebar_post_active', '=' , '1'),
		        'title' => esc_html__('Single Post Sidebar Position', 'kameleon'), 		       
		        'options' => array(
			        'left' => 'Left', 
			        'right' => 'Right'
			     ), 
		        'default' => 'right',	
        	),

        	array(
		        'id' => 'sidebar_archives_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Sidebar On Archives Pages', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),
		    	
        	array(
        		'id' => 'sidebar_archives_position',
		        'type' => 'button_set',
		    	'required' => array('sidebar_archives_active', '=' , '1'),
		        'title' => esc_html__('Archives Pages Sidebar Position', 'kameleon'), 
		        'options' => array(
			        'left' => 'Left', 
			        'right' => 'Right'
			     ), 
		        'default' => 'right',	
        	),

        	array(
		        'id' => 'sidebar_search_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Sidebar On Search Page', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),
		    	
        	array(
        		'id' => 'sidebar_search_position',
		        'type' => 'button_set',
		    	'required' => array('sidebar_search_active', '=' , '1'),
		        'title' => esc_html__('Search Page Sidebar Position', 'kameleon'), 
		        'options' => array(
			        'left' => 'Left', 
			        'right' => 'Right'
			     ), 
		        'default' => 'right',	
        	),


        	array(
		        'id' => 'sidebar_bbpress_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Sidebar BBpress Forum Home Page', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),
		    	
        	array(
        		'id' => 'sidebar_bbpress_position',
		        'type' => 'button_set',
		    	'required' => array('sidebar_bbpress_active', '=' , '1'),
		        'title' => esc_html__('BBpress Home Page Sidebar Position', 'kameleon'), 
		        'options' => array(
			        'left' => 'Left', 
			        'right' => 'Right'
			     ), 
		        'default' => 'right',	
        	),

        	

        	array(
			    'id' => 'sidebar_background',
			    'type' => 'color',
			    'title' => esc_html__('Sidebar Background Color', 'kameleon'),			    
				'default' => '#fff',
				'validate' => 'color'
			),

        	array( 
			    'id'       => 'sidebar_border',
			    'type'     => 'border',
			    'all' => false,
			    'title'    => esc_html__('Sidebar Border Option', 'kameleon'),
			    'default'  => array(
			        'border-color'  => '#fff', 
			        'border-style'  => 'solid', 
			        'border-top'    => '0px', 
			        'border-right'  => '0px', 
			        'border-bottom' => '0px', 
			        'border-left'   => '0px'
			    )
			),

		    array(
			    'id'=> 'sidebar_margin',
			    'type'=> 'spacing',
			    'mode'=> 'margin',
			    'units' => array('px'),			    
			    'left'=> false,
			    'right'=> false,			  
			    'title'=> esc_html__('Margin Option', 'kameleon'),
			    'default'=> array(
			        'margin-top'     => '0px', 
			        'margin-bottom'  => '0px', 
			        'units'          => 'px', 
			    )
			),

		    array(
			    'id'=> 'sidebar_padding',
			    'type'=> 'spacing',
			    'mode'=> 'padding',	
			    'units' => array('px'),			    			    		    
			    'title'=> esc_html__('Padding Option', 'kameleon'),
			    'default'=> array(
			        'padding-top'     => '30px', 
			        'padding-right'   => '0px', 
			        'padding-bottom'  => '30px', 
			        'padding-left'    => '0px',
			        'units'          => 'px', 
			    )
			),

			array(
	        	'id' => 'sidebar_fontsize',
			    'type' => 'slider',
			    'display_value' => 'text',
			    'title' => esc_html__('Text Font Size', 'kameleon'),			   
			    'default'  => '14',
				'min'      => '0',
				'step'     => '1',
				'max'      => '25',	
	        ),
	        array(
			    'id' => 'sidebar_color',
			    'type' => 'color',
			    'title' => esc_html__('Sidebar Text Color', 'kameleon'),			    
				'default' => '#777',
				'validate' => 'color'
			),

			array(
	        	'id' => 'sidebar_title_fontsize',
	        	'type' => 'slider',
				'display_value' => 'text',
			    'title' => esc_html__('Sidebar Widget Title Font Size', 'kameleon'),			   
			    'default'  => '15',
				'min'      => '0',
				'step'     => '1',
				'max'      => '25',	
	        ),
	        array(
			    'id' => 'sidebar_title_color',
			    'type' => 'color',
			    'title' => esc_html__('Sidebar Widget Title Color', 'kameleon'),			    
				'default' => '#444',
				'validate' => 'color'
			),	


		
		)
	);
?>