<?php 
$elementsArray = array(
		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'unique_layout',
				'name' => 'options[unique_layout]',
				'title' => esc_html__('Unique Layout','kameleon'),
				'default' => 0,
				'value' => get_post_meta(get_the_ID(),'unique_layout',true),
				'description' => esc_html__('Unique layout on this page.','kameleon'),
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
				'id' => 'content_background',
				'name' => 'options[content_background]',
				'required' => array(
					array('id'=>'unique_layout' , 'value'=>'1'),
				),	
				'default' => $sy_options['content_background'],
				'value' => get_post_meta(get_the_ID(),'content_background',true),
				'title' => esc_html__('Content Background Color','kameleon'),
				'description' => esc_html__('Background Color for the content area.','kameleon'),
			)
		),

		array(
			'type' => 'selectmodern',
			'values' => array(								
				'id' => 'layout',
				'name' => 'options[layout]',
				'required' => array(
					array('id'=>'unique_layout' , 'value'=>'1'),
				),	
				'value' => get_post_meta(get_the_ID(),'layout',true),					
				'default' => $sy_options['layout'],
				'title' => esc_html__('Page Layout','kameleon'),
				'description' => esc_html__('Choose the page layout!','kameleon'),
				'options' => array(
					'boxed' => 'Boxed', 
			        'full_width' => 'Full Width'
				) 
			)
		),

		
		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'full_width',
				'name' => 'options[full_width]',
				'required' => array(
					array('id'=>'unique_layout' , 'value'=>'1'),
				),	
				'title' => esc_html__('Content 100% Width','kameleon'),
				'default' => $sy_options['full_width'],
				'value' => get_post_meta(get_the_ID(),'full_width',true),
				'description' => esc_html__('Enable 100% content width for layout.','kameleon'),
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
			'type' => 'background',
			'values' => array(												
				'id' => 'layout_background',
				'name' => 'options[layout_background]',
				'required' => array(
					array('id'=>'unique_layout' , 'value'=>'1'),
					array('id'=>'layout' , 'value'=>'boxed'),
				),	
				'title' => esc_html__('Container Background','kameleon'),
				'description' => esc_html__('Apply background for the boxed Layout','kameleon'),
				'value' => get_post_meta(get_the_ID(),'layout_background',true),	
				'default' => array(
					'background-color' =>  $sy_options['layout_background']['background-color'],
					'background-image' =>  $sy_options['layout_background']['background-image'],
					'background-repeat' =>  $sy_options['layout_background']['background-repeat'],
					'background-position' =>  $sy_options['layout_background']['background-position'],
					'background-size' => $sy_options['layout_background']['background-size'],
					'background-attachment' =>  $sy_options['layout_background']['background-attachment'],		
				),
				
			)
		),

		array(
			'type' => 'slider',
			'values' => array(				
				'id' => 'boxed_margin',
				'name' => 'options[boxed_margin]',
				'required' => array(
					array('id'=>'unique_layout' , 'value'=>'1'),
					array('id'=>'layout' , 'value'=>'boxed'),
				),	
				'title' => esc_html__('Boxed Layout Margin','kameleon'),
				'description' => esc_html__('Apply a Top & Bottom margins for the boxed layout.','kameleon'),
				'value' => get_post_meta(get_the_ID(),'boxed_margin',true),
				'default' => $sy_options['boxed_margin'],
				'min' => 0,
				'max' => 250,
				
				
			)
		),

		array(
			'type' => 'distance',
			'values' => array(												
				'id' => 'boxed_border',
				'name' => 'options[boxed_border]',
				'required' => array(
					array('id'=>'unique_layout' , 'value'=>'1'),
					array('id'=>'layout' , 'value'=>'boxed'),
				),	
				'selector' => 'border',
				'title' => esc_html__('Boxed Layout Border','kameleon'),
				'description' => esc_html__('Apply border for the boxed layout!','kameleon'),
				'value' => get_post_meta(get_the_ID(),'boxed_border',true),	
				'left' => false,
				'right' => false,	
				'bottom' => false,
				'default' => array(
					'top' => $sy_options['boxed_border']['border-top'],
					'bottom' => $sy_options['boxed_border']['border-bottom'],
					'left' => $sy_options['boxed_border']['border-left'],
					'right' => $sy_options['boxed_border']['border-right'],
					'border-color' => $sy_options['boxed_border']['border-color'],
					'border-style' => $sy_options['boxed_border']['border-style'],
				),
				
			)
		),

		array(
			'type' => 'message',
			'values' => array(																		
				'description' => esc_html__('Window Frame Styling','kameleon'),
			)
		),

		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'frame_enable',
				'name' => 'options[frame_enable]',
				'title' => esc_html__('Enable Window Frame','kameleon'),
				'default' => $sy_options['frame_enable'],
				'value' => get_post_meta(get_the_ID(),'frame_enable',true),
				'description' => esc_html__('Enable the window frame fro more cool effect.','kameleon'),
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
				'id' => 'frame_color',
				'name' => 'options[frame_color]',
				'required' => array(
					array('id'=>'frame_enable' , 'value'=>'1'),					
				),	
				'default' => $sy_options['frame_color'],
				'value' => get_post_meta(get_the_ID(),'frame_color',true),
				'title' => esc_html__('Window Frame Color','kameleon'),
				'description' => esc_html__('Color of the window frame.','kameleon'),
			)
		),	
		array(
			'type' => 'slider',
			'values' => array(
				'id' => 'frame_size',
				'name' => 'options[frame_size]',
				'required' => array(
					array('id'=>'frame_enable' , 'value'=>'1'),					
				),	
				'title' => esc_html__('Frame Window Size','kameleon'),
				'description' => esc_html__('Size (px).','kameleon'),
				'value' => get_post_meta(get_the_ID(),'frame_size',true),
				'default' => $sy_options['frame_size'],
				'min' => 3,
				'max' => 100,
				
			)
		),
		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'w_cart_enabled',
				'name' => 'options[w_cart_enabled]',
				'title' => esc_html__('Enable WooCommerce Cart Edge','kameleon'),
				'default' => 1,
				'value' => get_post_meta(get_the_ID(),'w_cart_enabled',true),
				'description' => esc_html__('Include the WooCommerce Edge Show cart','kameleon'),
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


//Adding GO button
if( $postype == "page"){
	array_push( $elementsArray ,
		array(
			'type' => 'message',
			'values' => array(																		
				'description' => esc_html__('Dot Navigation','kameleon'),
			)
		),

		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'dot_nav_enabled',
				'name' => 'options[dot_nav_enabled]',
				'title' => esc_html__('Enable Dot Navigation','kameleon'),
				'default' => 0,
				'value' => get_post_meta(get_the_ID(),'dot_nav_enabled',true),
				'description' => esc_html__('Enable dot navigation for this page.','kameleon'),
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
				'id' => 'dot_nav_colorscheme',
				'name' => 'options[dot_nav_colorscheme]',
				'required' => array(
					array('id'=>'dot_nav_enabled' , 'value'=>'1'),					
				),	
				'default' => "#666",
				'value' => get_post_meta(get_the_ID(),'dot_nav_colorscheme',true),
				'title' => esc_html__('Dot Color Scheme','kameleon'),
				'description' => esc_html__('Choose the color for the dots.','kameleon'),
			)
		),	
		array(
			'type' => 'colorpicker',
			'values' => array(
				'id' => 'dot_nav_activecolorscheme',
				'name' => 'options[dot_nav_activecolorscheme]',
				'required' => array(
					array('id'=>'dot_nav_enabled' , 'value'=>'1'),					
				),	
				'default' => "#289fca",
				'value' => get_post_meta(get_the_ID(),'dot_nav_activecolorscheme',true),
				'title' => esc_html__('Active Dot Color Scheme','kameleon'),
				'description' => esc_html__('Choose the color for the actvie dots.','kameleon'),
			)
		),	
		array(
			'type' => 'slider',
			'values' => array(
				'id' => 'dot_nav_size',
				'name' => 'options[dot_nav_size]',
				'required' => array(
					array('id'=>'dot_nav_enabled' , 'value'=>'1'),					
				),	
				'title' => esc_html__('Dots Size','kameleon'),
				'description' => esc_html__('Size (px).','kameleon'),
				'value' => get_post_meta(get_the_ID(),'dot_nav_size',true),
				'default' => 10,
				'min' => 7,
				'max' => 50,
				
			)
		),
		array(
			'type' => 'selectmodern',
			'values' => array(								
				'id' => 'dot_nav_style',
				'name' => 'options[dot_nav_style]',
				'required' => array(
					array('id'=>'dot_nav_enabled' , 'value'=>'1')
				),	
				'value' => get_post_meta(get_the_ID(),'dot_nav_style',true),					
				'default' => 'style1',
				'title' => esc_html__('Dots Style','kameleon'),
				'description' => esc_html__('Dots navigation style','kameleon'),
				'options' => array(
					'style1' => 'Style 1', 
		       		'style2' => 'Style 2'
				) 
			)
		),
		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'dot_nav_circle',
				'name' => 'options[dot_nav_circle]',
				'title' => esc_html__('Circle Dot Navigation','kameleon'),
				'required' => array(
					array('id'=>'dot_nav_enabled' , 'value'=>'1')
				),	
				'default' => 1,
				'value' => get_post_meta(get_the_ID(),'dot_nav_circle',true),
				'description' => '',
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
				'id' => 'dot_nav_position',
				'name' => 'options[dot_nav_position]',
				'required' => array(
					array('id'=>'dot_nav_enabled' , 'value'=>'1')
				),	
				'value' => get_post_meta(get_the_ID(),'dot_nav_position',true),					
				'default' => 'right',
				'title' => esc_html__('Navigation Position','kameleon'),
				'description' => esc_html__('Choose the position to put the navigation on!','kameleon'),
				'options' => array(
					'right' => 'Right', 
		       		'left' => 'Left'
				) 
			)
		)


	);
} 


$layoutSection = new global_section(
	$values =  array(
		'id' => 'layout-options',
		'class' => 'opt-section-container',
	),
	$elements = $elementsArray
);

$layoutSection->render();

?>