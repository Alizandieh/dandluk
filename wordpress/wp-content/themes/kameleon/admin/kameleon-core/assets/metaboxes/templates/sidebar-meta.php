<?php 
//Sidebar  Metabox 
$default_enabled = 0;
$default_position = 'right';
if(get_post_type( get_the_ID() ) == "post"){
	$default_enabled = $sy_options['sidebar_post_active'];
	$default_position = $sy_options['sidebar_post_positon'];
}


$sidebarSection = new global_section(
		$values =  array(
			'id' => 'sidebar-options',
			'class' => 'opt-section-container',
		),
		$elements = array(
			
			array(
				'type' => 'switcher',
				'values' => array(
					'id' => 'sidebar_active',
					'name' => 'options[sidebar_active]',
					'title' => esc_html__('Enable Sidebar','kameleon'),
					'default' => $default_enabled ,
					'value' => get_post_meta(get_the_ID(),'sidebar_active',true),
					'description' => esc_html__('Enable SideBar on this page.','kameleon'),
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
					'id' => 'sidebar_id',
					'name' => 'options[sidebar_id]',
					'required' => array(
						array('id'=>'sidebar_active' , 'value'=>'1'),					
					),	
					'default' => 'kameleon-sidebar-1',
					'value' => get_post_meta(get_the_ID(),'sidebar_id',true),					
					'title' => esc_html__('Sidebar','kameleon'),
					'description' => esc_html__('Choose the sidebar for this page','kameleon'),
					'options' => kameleon_getSideBarArray()
				)
			),


			array(
				'type' => 'selectmodern',
				'values' => array(								
					'id' => 'sidebar_position',
					'name' => 'options[sidebar_position]',
					'required' => array(
						array('id'=>'sidebar_active' , 'value'=>'1'),					
					),	
					'default' => $default_position,
					'value' => get_post_meta(get_the_ID(),'sidebar_position',true),					
					'title' => esc_html__('Sidebar Position','kameleon'),
					'description' => esc_html__('If you have enabled the sidebar choose a position for it!','kameleon'),
					'options' => array(
						'left' => 'Left',
						'right' => 'Right',
					) 
				)
			),

			array(
				'type' => 'switcher',
				'values' => array(
					'id' => 'sidebar_unique',
					'name' => 'options[sidebar_unique]',
					'required' => array(
						array('id'=>'sidebar_active' , 'value'=>'1'),					
					),	
					'title' => esc_html__('Sidebar Unique Styling','kameleon'),
					'default' => 0,
					'value' => get_post_meta(get_the_ID(),'sidebar_unique',true),
					'description' => esc_html__('Have unique styling for the Sidebar in this page!','kameleon'),
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
					'id' => 'sidebar_fullheight',
					'name' => 'options[sidebar_fullheight]',
					'required' => array(
						array('id'=>'sidebar_active' , 'value'=>'1'),					
						array('id'=>'sidebar_unique' , 'value'=>'1'),					
					),	
					'title' => esc_html__('Enable Full Height','kameleon'),
					'default' =>  0,
					'value' => get_post_meta(get_the_ID(),'sidebar_fullheight',true),
					'description' => esc_html__('Enable full page height sidebar.','kameleon'),
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
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'sidebar_background',
					'name' => 'options[sidebar_background]',
					'required' => array(
						array('id'=>'sidebar_active' , 'value'=>'1'),					
						array('id'=>'sidebar_unique' , 'value'=>'1'),					
					),	
					'default' => $sy_options['sidebar_background'],
					'value' => get_post_meta(get_the_ID(),'sidebar_background',true),
					'title' => esc_html__('Background Color','kameleon'),
					'description' => esc_html__('Sidebar Background Color.','kameleon'),
				)
			),

			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'sidebar_color',
					'name' => 'options[sidebar_color]',
					'required' => array(
						array('id'=>'sidebar_active' , 'value'=>'1'),					
						array('id'=>'sidebar_unique' , 'value'=>'1'),					
					),	
					'default' => $sy_options['sidebar_color'],
					'value' => get_post_meta(get_the_ID(),'sidebar_color',true),
					'title' => esc_html__('Text Color','kameleon'),
					'description' => esc_html__('Sidebar Text Color.','kameleon'),
				)
			),

			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'sidebar_title_color',
					'name' => 'options[sidebar_title_color]',
					'required' => array(
						array('id'=>'sidebar_active' , 'value'=>'1'),					
						array('id'=>'sidebar_unique' , 'value'=>'1'),					
					),	
					'default' => $sy_options['sidebar_title_color'],
					'value' => get_post_meta(get_the_ID(),'sidebar_color',true),
					'title' => esc_html__('Title Color','kameleon'),
					'description' => esc_html__('Sidebar Title Color.','kameleon'),
				)
			),



			array(
				'type' => 'distance',
				'values' => array(																	
					'id' => 'sidebar_margin',
					'name' => 'options[sidebar_margin]',
					'required' => array(
						array('id'=>'sidebar_active' , 'value'=>'1'),					
						array('id'=>'sidebar_unique' , 'value'=>'1'),					
					),	
					'selector' => 'margin',
					'title' => esc_html__('Sidebar Margins','kameleon'),
					'description' => esc_html__('Apply Top / Bottom Margins!','kameleon'),
					'value' => get_post_meta(get_the_ID(),'sidebar_margin',true),						
					'left' => false,
					'right' => false,
					'default' => array(
						'top' => $sy_options['sidebar_margin']['margin-top'],
						'bottom' => $sy_options['sidebar_margin']['margin-bottom'],
					),
					
				)
			),

			array(
				'type' => 'distance',
				'values' => array(												
					'id' => 'sidebar_padding',	
					'name' => 'options[sidebar_padding]',
					'required' => array(
						array('id'=>'sidebar_active' , 'value'=>'1'),					
						array('id'=>'sidebar_unique' , 'value'=>'1'),					
					),	
					'title' => esc_html__('Sidebar Paddings','kameleon'),
					'selector' => 'padding',
					'description' => esc_html__('Apply Paddings!','kameleon'),
					'value' => get_post_meta(get_the_ID(),'sidebar_padding',true),		
					'default' => array(
						'top' => $sy_options['sidebar_padding']['padding-top'],
						'bottom' => $sy_options['sidebar_padding']['padding-bottom'],
						'left' => $sy_options['sidebar_padding']['padding-left'],
						'right' => $sy_options['sidebar_padding']['padding-right'],
					),
					
				)
			),

			
			
			array(
				'type' => 'distance',
				'values' => array(												
					'id' => 'sidebar_border',
					'name' => 'options[sidebar_border]',
					'required' => array(
						array('id'=>'sidebar_active' , 'value'=>'1'),					
						array('id'=>'sidebar_unique' , 'value'=>'1'),					
					),	
					'selector' => 'border',
					'title' => esc_html__('Sidebar Borders','kameleon'),
					'description' => esc_html__('Apply Sidebar borders!','kameleon'),
					'value' => get_post_meta(get_the_ID(),'sidebar_border',true),	
					'default' => array(
						'top' => $sy_options['sidebar_border']['border-top'],
						'bottom' => $sy_options['sidebar_border']['border-bottom'],
						'left' => $sy_options['sidebar_border']['border-left'],
						'right' => $sy_options['sidebar_border']['border-right'],
						'border-color' => $sy_options['sidebar_border']['border-color'],
						'border-style' => $sy_options['sidebar_border']['border-style'],

					),
					
				)
			),

			


		)
);

$sidebarSection->render();

?>