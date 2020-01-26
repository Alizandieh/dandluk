<?php 
//Configuration Metabox

$elem_array = array(
		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'footer_enable',
				'name' => 'options[footer_enable]',
				'title' => esc_html__('Enable Footer','kameleon'),
				'default' => $sy_options['footer_enable'] ,
				'value' => get_post_meta(get_the_ID(),'footer_enable',true),
				'description' => esc_html__('Enable Footer for this page.','kameleon'),
				'on' => array(
					'text' => 'ON',
					'val' => 1
				),
				'off' => array(
					'text' => 'OFF',
					'val' => 0
				)	
			)
		),
		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'footer_unique',
				'name' => 'options[footer_unique]',
				'title' => esc_html__('Unique Footer Style','kameleon'),
				'default' => 0 ,
				'value' => get_post_meta(get_the_ID(),'footer_unique',true),
				'description' => esc_html__('Enable Unique  Footer for this page.','kameleon'),
				'on' => array(
					'text' => 'ON',
					'val' => 1
				),
				'off' => array(
					'text' => 'OFF',
					'val' => 0
				)	
			)
		),
		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'footer_effect',
				'name' => 'options[footer_effect]',
				'title' => esc_html__('Enable Footer Effect','kameleon'),
				'default' => $sy_options['footer_effect'] ,
				'value' => get_post_meta(get_the_ID(),'footer_effect',true),
				'description' => esc_html__('Creates a like parallax effect for the footer area.','kameleon'),
				'required' => array(
					array('id'=>'footer_enable' , 'value'=>'1'),
					array('id'=>'footer_unique' , 'value'=>'1')
				),				
				'on' => array(
					'text' => 'ON',
					'val' => 1
				),
				'off' => array(
					'text' => 'OFF',
					'val' => 0
				)	
			)
		),

		array(
			'type' => 'selectmodern',
			'values' => array(								
				'id' => 'footer_type',
				'name' => 'options[footer_type]',
				'value' => get_post_meta(get_the_ID(),'footer_type',true),					
				'default' => $sy_options['footer_type'],
				'required' => array(
					array('id'=>'footer_enable' , 'value'=>'1'),
					array('id'=>'footer_unique' , 'value'=>'1')
				),
				'title' => esc_html__('Footer Type','kameleon'),
				'description' => esc_html__('Footer Layout Type!','kameleon'),
				'options' => array(
					'footer_normal' => 'Normal Footer', 
		       		'footer_compact' => 'Compact Footer'
				) 
			)
		),

		array(
			'type' => 'selectmodern',
			'values' => array(								
				'id' => 'footer_width',
				'name' => 'options[footer_width]',
				'required' => array(
					array('id'=>'footer_enable' , 'value'=>'1'),
					array('id'=>'footer_unique' , 'value'=>'1')
				),	
				'value' => get_post_meta(get_the_ID(),'footer_width',true),					
				'default' => $sy_options['footer_width'],
				'title' => esc_html__('Footer Width','kameleon'),
				'description' => esc_html__('Footer width layout!','kameleon'),
				'options' => array(
					'boxed' => 'Boxed', 
		       		'full_width' => 'Full Width'
				) 
			)
		),
		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'pageloader_enable',
				'name' => 'options[pageloader_enable]',
				'title' => esc_html__('Enable Page Pre-Loader','kameleon'),
				'default' => $sy_options['pageloader_enable'] ,
				'value' => get_post_meta(get_the_ID(),'pageloader_enable',true),
				'description' => esc_html__('Enable Page Pre-Loader for this page.','kameleon'),
				'on' => array(
					'text' => 'ON',
					'val' => 1
				),
				'off' => array(
					'text' => 'OFF',
					'val' => 0
				)	
			)
		),
		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'gotop_enable',
				'name' => 'options[gotop_enable]',
				'title' => esc_html__('Go Top Enabled','kameleon'),
				'default' => $sy_options['gotop_enable'] ,
				'value' => get_post_meta(get_the_ID(),'gotop_enable',true),
				'description' => esc_html__('Enable Go Top Button for this page.','kameleon'),
				'on' => array(
					'text' => 'ON',
					'val' => 1
				),
				'off' => array(
					'text' => 'OFF',
					'val' => 0
				)	
			)
		),
		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'slidingbar_active',
				'name' => 'options[slidingbar_active]',
				'title' => esc_html__('Enable Top Sliding Bar','kameleon'),
				'default' => $sy_options['slidingbar_active'] ,
				'value' => get_post_meta(get_the_ID(),'slidingbar_active',true),
				'description' => esc_html__('Enable Page Pre-Loader for this page.','kameleon'),
				'on' => array(
					'text' => 'ON',
					'val' => 1
				),
				'off' => array(
					'text' => 'OFF',
					'val' => 0
				)	
			)
		),
);

if(is_plugin_active('revslider/revslider.php')) {
	$rev = new RevSlider();
	$rev_sliders = $rev->getArrSlidersShort();

	array_push($elem_array,array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'slider_enable',
				'name' => 'options[slider_enable]',
				'title' => esc_html__('Enable Slider','kameleon'),
				'default' => 0,
				'value' => get_post_meta(get_the_ID(),'slider_enable',true),
				'description' => esc_html__('Enable Slider for this page.','kameleon'),
				'on' => array(
					'text' => 'ON',
					'val' => 1
				),
				'off' => array(
					'text' => 'OFF',
					'val' => 0
				)	
			)
		),
		
		array(
			'type' => 'selectmodern',
			'values' => array(								
				'id' => 'slider_rev',
				'name' => 'options[slider_rev]',
				'required' => array(
					array('id'=>'slider_enable' , 'value'=>'1')
				),	
				'value' => get_post_meta(get_the_ID(),'slider_rev',true),					
				'default' => 'none',
				'title' => esc_html__('Choose Slider','kameleon'),
				'description' => esc_html__('Choose a revolution Slider','kameleon'),
				'options' => $rev_sliders,
			)
		),

		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'slider_above_header',
				'name' => 'options[slider_above_header]',
				'required' => array(
					array('id'=>'slider_enable' , 'value'=>'1')
				),	
				'title' => esc_html__('Slider Above Header','kameleon'),
				'default' => 0,
				'value' => get_post_meta(get_the_ID(),'slider_above_header',true),
				'description' => esc_html__('Slider above Header!.','kameleon'),
				'on' => array(
					'text' => 'ON',
					'val' => 1
				),
				'off' => array(
					'text' => 'OFF',
					'val' => 0
				)	
			)
		)
	);
}


array_push($elem_array,array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'unique_responsive_width',
				'name' => 'options[unique_responsive_width]',
				'title' => esc_html__('Unique Responsive Screen Width','kameleon'),
				'default' => 0,
				'value' => get_post_meta(get_the_ID(),'unique_responsive_width',true),
				'description' => esc_html__('Enable unique responsive visual composer with.','kameleon'),
				'on' => array(
					'text' => 'ON',
					'val' => 1
				),
				'off' => array(
					'text' => 'OFF',
					'val' => 0
				)	
			)
		),
		array(
			'type' => 'slider',
			'values' => array(
				'id' => 'sy_responsive_width',
				'name' => 'options[sy_responsive_width]',
				'required' => array(
					array('id'=>'unique_responsive_width' , 'value'=>'1'),										
				),
				'title' => esc_html__('Responsive Screen Width','kameleon'),
				'description' => esc_html__('Set responsive screen width in (px).','kameleon'),				
				'value' => get_post_meta(get_the_ID(),'sy_responsive_width',true),
				'default' => $sy_options['sy_responsive_width'],
				'min' => 150,
				'max' => 1920,				
			)
		)
);

$configSection = new global_section(
	$values =  array(
		'id' => 'config-options',
		'class' => 'opt-section-container opt-section-container-active',
	),
	$elements = $elem_array
);

$configSection->render();
?>