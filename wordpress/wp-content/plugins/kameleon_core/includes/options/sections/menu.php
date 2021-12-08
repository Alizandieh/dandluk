<?php 
/* ================================================================== *\
   ==                  	    S E C T I O N                          ==
   ==============          MENU MEGA MENUS     		   ============== 
\* ================================================================== */
	//Menu & Mega Menu Colors
	$sections[] = array(
        'title' => 'Menu & Mega Menu',
        'id' => 'menu_mega_section',
		'icon' => 'fa fa-bars',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Styling your menu and mega menu colors and effects', 'kameleon'),
        'fields' => array(  
        	array(
			    'id'          => 'header_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Header Menu Font', 'kameleon'),
			    'google'      => true, 
			    'font-backup' => false,
			    'subsets' 	  => false,
			    'line-height' => true,
			    'text-decoration' => true,
			    'text-transform' => true,
			    'letter-spacing' => true,
			    'line-height'   => false, 
			    'color' => false,
			    'output'      => array('h2.site-description'),
			    'units'       => array('px','em'),			    
			    'subtitle'    => esc_html__('Header font', 'kameleon'),
			    'default'     => array(
			        'color'       => '#777', 
			        'font-style'  => '400', 
			        'font-family' => 'Ubuntu', 
			        'google'      => true,
			        'font-size'   => '15px', 			        
			        'text-align' => 'left',
			        'text-decoration' => 'none',
			    	'text-transform' => 'uppercase',
			    	'letter-spacing' => '2px'			        
			    ),
			),
			array(
			    'id'          => 'dropmenu_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Drop Down Menu Font', 'kameleon'),
			    'google'      => true, 
			    'font-backup' => false,
			    'subsets' 	  => false,
			    'color' => false,
			    'line-height' => true,
			    'text-decoration' => true,
			    'text-transform' => true,
			    'letter-spacing' => true,
			    'output'      => array('h2.site-description'),
			    'units'       => array('px','em'),		
			    'subtitle'    => esc_html__('Custom font for the drop down menu links.', 'kameleon'),
			    'default'     => array(
			        'color'       => '#777', 
			        'font-style'  => '400', 
			        'font-family' => 'Ubuntu', 
			        'google'      => true,
			        'font-size'   => '13px', 
			        'line-height'   => '39px', 
			        'text-align' => 'left',
			        'text-decoration' => 'none',
			    	'text-transform' => 'capitalize',
			    	'letter-spacing' => '0px'			        
			    ),
			),

			array(
			    'id'          => 'megamenutitle_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Mega Menu Title Font', 'kameleon'),
			    'google'      => true, 
			    'font-backup' => false,
			    'subsets' 	  => false,
			    'line-height' => true,
			    'color' => false,
			    'text-decoration' => true,
			    'text-transform' => true,
			    'letter-spacing' => true,
			    'output'      => array('h2.site-description'),
			    'units'       => array('px','em'),
			    'subtitle'    => esc_html__('Custom font for the drop mega menu Column titles.', 'kameleon'),
			    'default'     => array(
			        'color'       => '#ddd', 
			        'font-style'  => '200', 
			        'font-family' => 'Ubuntu', 
			        'google'      => true,
			        'font-size'   => '16px', 
			        'line-height'   => '1em', 
			        'text-align' => 'left',
			        'text-decoration' => 'none',
			    	'text-transform' => 'uppercase',
			    	'letter-spacing' => '2px'			        
			    ),
			),

			array(
			    'id'          => 'megamenu_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Mega Menu Link Font', 'kameleon'),
			    'google'      => true, 
			    'font-backup' => false,
			    'subsets' 	  => false,
			    'line-height' => true,
			    'color' => false,
			    'text-decoration' => true,
			    'text-transform' => true,
			    'letter-spacing' => true,
			    'output'      => array('h2.site-description'),
			    'units'       => array('px','em'),
			    'subtitle'    => esc_html__('Custom font for the drop mega menu links.', 'kameleon'),
			    'default'     => array(
			        'color'       => '#777', 
			        'font-style'  => '400', 
			        'font-family' => 'Ubuntu', 
			        'google'      => true,
			        'font-size'   => '13px', 
			        'line-height'   => '30px', 
			        'text-align' => 'left',
			        'text-decoration' => 'none',
			    	'text-transform' => 'capitalize',
			    	'letter-spacing' => '0px'			        
			    ),
			),
			
			
        	array(
			    'id' => 'menu_background',
			    'type' => 'color',
			    'title' => esc_html__('Menu Background Color', 'kameleon'), 			    		        
				'default' => '#111',
				'validate' => 'color'
			), 
			array(
			    'id' => 'menu_color',
			    'type' => 'color',
			    'title' => esc_html__('Menu Text Color', 'kameleon'), 			    		        
				'default' => '#999',
				'validate' => 'color'
			),
			array(
			    'id' => 'menu_border_color',
			    'type' => 'color',
			    'title' => esc_html__('Menu Border Color', 'kameleon'), 			    		        
				'default' => '#222',
				'validate' => 'color'
			),
			array(
			    'id' => 'menu_hover_color',
			    'type' => 'color',
			    'title' => esc_html__('Menu Hover Text Color', 'kameleon'), 			    		        
				'default' => $sy_options['color_scheme'],
				'validate' => 'color'
			),
			array(
			    'id' => 'menu_hover_background',
			    'type' => 'color',
			    'title' => esc_html__('Hover Background Color', 'kameleon'), 			    		        
				'default' => '#0a0a0a',
				'validate' => 'color'
			),

			array(
			    'id' => 'menu_mega_background_color',
			    'type' => 'color',
			    'title' => esc_html__('Mega Menu Background Color', 'kameleon'), 			    		        
				'default' => '#121212',
				'validate' => 'color'
			), 

			array(
			    'id' => 'menu_mega_text_color',
			    'type' => 'color',
			    'title' => esc_html__('Mega Menu Text Color', 'kameleon'), 			    		        
				'default' => '#999',
				'validate' => 'color'
			), 
			
			array(
			    'id' => 'menu_mega_text_hover_color',
			    'type' => 'color',
			    'title' => esc_html__('Mega Menu Text Hover Color', 'kameleon'), 			    		        
				'default' => $sy_options['color_scheme'],
				'validate' => 'color'
			), 

			array(
			    'id' => 'menu_mega_title_color',
			    'type' => 'color',
			    'title' => esc_html__('Mega Menu Title Color', 'kameleon'), 			    		        
				'default' => '#ddd',
				'validate' => 'color'
			),  

			array(
			    'id' => 'menu_mega_border_color',
			    'type' => 'color',
			    'title' => esc_html__('Mega Menu Column Border', 'kameleon'), 			    		        
				'default' => '#333',
				'validate' => 'color'
			),  
			
        )
    );
?>