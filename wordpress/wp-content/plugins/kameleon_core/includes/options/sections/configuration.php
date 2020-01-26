<?php 
/* ================================================================== *\
   ==                        S E C T I O N                         ==
   ==============        GLOBAL CONFIGURATION          ============== 
\* ================================================================== */
	
	$sections[] = array(
        'title' => 'Configuration',
		'icon' => 'fa fa-cog',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Global Configuration for the website', 'kameleon'),
        'fields' => array(  
        	array(
		        'id' => 'responsive',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Responsive', 'kameleon'), 
		        'subtitle' => esc_html__('Enable responsive for your website', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 

		    array(
		        'id' => 'color_scheme',
		        'type' => 'color',
		        'title' => esc_html__('Color Scheme', 'kameleon'), 
		        'subtitle' => esc_html__('Global color scheme for website', 'kameleon'),		        
				'default' => '#289fca'
		    ), 
		    
		    array(
			    'id'          => 'sy_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Global Website Typography', 'kameleon'),
			    'google'      => true, 
			    'font-backup' => true,
			    'line-height' => false,
			    'subsets'	  => false,
			    'font-style' => true,	
			    'font-weight' => false,	
			    'output'      => array('h2.site-description'),
			    'units'       => array('px','em'),
			    'subtitle'    => esc_html__('Apply Typography option for the website.', 'kameleon'),
			    'default'     => array(
			        'color'       => '#333', 			        
			        'font-family' => 'Ubuntu', 
			        'font-style' => '400',
			        'font-backup' => 'Arial, Helvetica, sans-serif', 
			        'google'      => true,
			        'font-size'   => '13px', 
			        'text-align' => 'left'
			        
			    ),
			),
			array(
		        'id' => 'link_ajax_effect',
		        'type' => 'switch',
		        'title' => esc_html__('Ajax Smooth Click Effect', 'kameleon'), 		        
		        'subtitle' => esc_html__('Enable smooth ajax effect when clicking a link', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 	

        ),
    );
?>