<?php 
/* ================================================================== *\
   ==                  	    S E C T I O N                          ==
   ==============             TYPOGRAPHY    		   ============== 
\* ================================================================== */
	//Social Links
	$sections[] = array(
        'title' => 'Typography',
		'icon' => 'fa fa-font',
		'icon_class' => 'icon-large',
		'id' => 'kameleon_custom_typography',
        'desc' =>esc_html__('Apply custom typography for your website', 'kameleon'),
        'fields' => array(  
        	array(
		        'id' => 'custom_typography',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Custom typography', 'kameleon'), 		        
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ),

			array(
			    'id'          => 'footerwidgettitle_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Footer Widget Title', 'kameleon'),
			    'google'      => true, 
			    'font-backup' => false,
			    'subsets' 	  => false,
			    'line-height' => true,
			    'color' => false,
			    'text-decoration' => true,
			    'text-transform' => true,
			    'letter-spacing' => true,
			    'font-size'   => false, 
			    'output'      => array('h2.site-description'),
			    'units'       => array('px','em'),
			    'required' 	  => array('custom_typography', '=' , '1'), 			    			    
			    'subtitle'    => esc_html__('Custom font for the footer widget titles you can chang the font size on the footer section.', 'kameleon'),
			    'default'     => array(
			        'color'       => '#ddd', 
			        'font-style'  => '200', 
			        'font-family' => 'Ubuntu', 
			        'google'      => true,
			        'line-height'   => 'none', 
			        'text-align' => 'left',
			        'text-decoration' => 'none',
			    	'text-transform' => 'uppercase',
			    	'letter-spacing' => '3px'			        
			    ),
			),
			array(
			    'id'          => 'sidebarwidgettitle_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Sidebar Widget Title', 'kameleon'),
			    'google'      => true, 
			    'font-backup' => false,
			    'subsets' 	  => false,
			    'line-height' => true,
			    'color' => false,
			    'text-decoration' => true,
			    'text-transform' => true,
			    'letter-spacing' => true,
			    'font-size'   => false, 
			    'output'      => array('h2.site-description'),
			    'units'       => array('px','em'),
			    'required' 	  => array('custom_typography', '=' , '1'), 			    			    
			    'subtitle'    => esc_html__('Custom font for the Sidebar widget titles you can chang the font size on the Sidebar section.', 'kameleon'),
			    'default'     => array(
			        'color'       => '#ddd', 
			        'font-style'  => '200', 
			        'font-family' => 'Ubuntu', 
			        'google'      => true,
			        'line-height'   => 'none', 
			        'text-align' => 'left',
			        'text-decoration' => 'none',
			    	'text-transform' => 'uppercase',
			    	'letter-spacing' => '3px'			        
			    ),
			)	

		)
	);

?>