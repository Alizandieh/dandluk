<?php 
//Sticky Header Metabox 
$stickyHeaderSection = new global_section(
		$values =  array(
			'id' => 'stickyheader-options',
			'class' => 'opt-section-container',
		),
		$elements = array(			
			array(
				'type' => 'switcher',
				'values' => array(
					'id' => 'hv_sticky',
					'name' => 'options[hv_sticky]',
					'title' => esc_html__('Enable Sticky Header','kameleon'),
					'default' => 1 ,
					'value' => get_post_meta(get_the_ID(),'hv_sticky',true),
					'description' => esc_html__('Enable Sticky Header.','kameleon'),
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
					'id' => 'sticky_header_unique',
					'name' => 'options[sticky_header_unique]',
					'title' => esc_html__('Unique Sticky Header','kameleon'),
					'required' => array(
						array('id'=>'hv_sticky' , 'value'=>'1'),
					),		
					'default' => 0 ,
					'value' => get_post_meta(get_the_ID(),'sticky_header_unique',true),
					'description' => esc_html__('On / to apply the bottom style for this page.','kameleon'),
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
					'id' => 'sticky_logo',
					'name' => 'options[sticky_logo]',
					'required' => array(
						array('id'=>'hv_sticky' , 'value'=>'1'),
						array('id'=>'sticky_header_unique' , 'value'=>'1'),
					),		
					'value' => get_post_meta(get_the_ID(),'sticky_logo',true),					
					'default' => $sy_options['sticky_logo'],
					'title' => esc_html__('Logo Type','kameleon'),
					'description' => esc_html__('Choose what logo to apply for this sticky header!','kameleon'),
					'options' => array(
						'normal' => 'Normal',
						'transparent' => 'Transparent'						
					) 
				)
			),


			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'sticky_background',
					'name' => 'options[sticky_background]',
					'required' => array(
						array('id'=>'hv_sticky' , 'value'=>'1'),
						array('id'=>'sticky_header_unique' , 'value'=>'1'),
					),	
					'default' => $sy_options['sticky_background']['rgba'],
					'value' => get_post_meta(get_the_ID(),'sticky_background',true),
					'title' => esc_html__('Background Color','kameleon'),
					'description' => esc_html__('Sticky header Background Color.','kameleon'),
				)
			),



			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'sticky_border_color',
					'name' => 'options[sticky_border_color]',
					'required' => array(
						array('id'=>'hv_sticky' , 'value'=>'1'),
						array('id'=>'sticky_header_unique' , 'value'=>'1'),
					),	
					'default' => $sy_options['sticky_border_color'],
					'value' => get_post_meta(get_the_ID(),'sticky_border_color',true),
					'title' => esc_html__('Border Color','kameleon'),
					'description' => esc_html__('Sticky header Border Color.','kameleon'),
				)
			),

			
			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'sticky_color',
					'name' => 'options[sticky_color]',
					'required' => array(
						array('id'=>'hv_sticky' , 'value'=>'1'),
						array('id'=>'sticky_header_unique' , 'value'=>'1'),
					),	
					'default' => $sy_options['sticky_color'],
					'value' => get_post_meta(get_the_ID(),'sticky_color',true),
					'title' => esc_html__('Text Color','kameleon'),
					'description' => esc_html__('Sticky header Text Color.','kameleon'),
				)
			),

			
		)
);


$stickyHeaderSection->render();
?>