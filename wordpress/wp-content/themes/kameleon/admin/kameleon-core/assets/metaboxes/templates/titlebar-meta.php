<?php 
$postType = 'global';

$titlebar_style_meta = array(	'style1' => 'Page Title + Path',	'style2' => 'Path + Page Title',	'style3' => 'Center');

if(in_array($postype, $post_types_np )){
	$postType = get_post_type( get_the_ID() );
	$titlebar_style_meta['style4'] = 'Page Title + Next/Previous ';
	$titlebar_style_meta['style5'] = 'Next/Previous + Page Title'; 
	$titlebar_style_meta['style6'] = 'Page Title + Next/Previous (center)';
}

if(in_array($postype, $post_types_np ) && $postype !="product"){
	$titlebar_style_meta['style7'] = 'Title + Info (center)';
}


//Elements Array 
$elementsArray = array(		
		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'titlebar_active',
				'name' => 'options[titlebar_active]',
				'title' => esc_html__('Enable Page Title Bar','kameleon'),
				'default' => $sy_options[$postType.'-titlebar_active'] ,
				'value' => get_post_meta(get_the_ID(),'titlebar_active',true),
				'description' => esc_html__('Enable Titlebar on this page.','kameleon'),
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
				'id' => 'titlebar_unique',
				'name' => 'options[titlebar_unique]',
				'required' => array(
					array('id'=>'titlebar_active' , 'value'=>'1'),					
				),
				'title' => esc_html__('Unique Titlebar Style','kameleon'),
				'default' => 0,
				'value' => get_post_meta(get_the_ID(),'titlebar_unique',true),
				'description' => esc_html__('Set unique Style for Titlebar in This page.','kameleon'),
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
				'id' => 'titlebar_style',
				'name' => 'options[titlebar_style]',
				'required' => array(
					array('id'=>'titlebar_active' , 'value'=>'1'),					
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
				),
				'value' => get_post_meta(get_the_ID(),'titlebar_style',true),					
				'default' => $sy_options[$postType.'-titlebar_style'],
				'title' => esc_html__('Titlebar style','kameleon'),
				'description' => esc_html__('Choose a style for the titlebar page!','kameleon'),
				'options' => $titlebar_style_meta
			),
		),
		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'path_active',
				'name' => 'options[path_active]',
				'required' => array(
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
					array('id'=>'titlebar_active' , 'value'=>'1'),										
					array('id'=>'titlebar_style' , 'value'=>'style1,style2,style3'),					
				),
				'title' => esc_html__('Show Page Path','kameleon'),
				'default' => $sy_options[$postType.'-path_active'] ,
				'value' => get_post_meta(get_the_ID(),'path_active',true),
				'description' => esc_html__('Show the path of the actual page on the titlebar.','kameleon'),
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
	
	if(in_array($postype, $post_types_np ) && $postype !="product"){
		array_push( $elementsArray ,	array(
				'type' => 'switcher',
				'values' => array(
					'id' => 'featured_enabled',
					'name' => 'options[featured_enabled]',
					'required' => array(
						array('id'=>'titlebar_active' , 'value'=>'1'),					
						array('id'=>'titlebar_unique' , 'value'=>'1'),					
					),
					'title' => esc_html__('Use Featured Image','kameleon'),
					'default' => $sy_options[$postType.'-featured_enabled'] ,
					'value' => get_post_meta(get_the_ID(),'featured_enabled',true),
					'description' => esc_html__('Choose the post featured image as Title bar background image.','kameleon'),
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
					'id' => 'modern_look',
					'name' => 'options[modern_look]',
					'required' => array(
						array('id'=>'titlebar_active' , 'value'=>'1'),					
						array('id'=>'titlebar_unique' , 'value'=>'1')						
					),
					'title' => esc_html__('Enable Full Modern','kameleon'),
					'default' => $sy_options[$postType.'-modern_look'] ,
					'value' => get_post_meta(get_the_ID(),'modern_look',true),
					'description' => esc_html__('Enable fullwidth modern look for this post.','kameleon'),
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

	array_push( $elementsArray ,	
		array(
			'type' => 'background',
			'values' => array(												
				'id' => 'titlebar_background',
				'name' => 'options[titlebar_background]',
				'required' => array(
					array('id'=>'titlebar_active' , 'value'=>'1'),					
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
				),
				'title' => esc_html__('Titlebar Background','kameleon'),
				'description' => esc_html__('Titlebar Background!','kameleon'),
				'value' => get_post_meta(get_the_ID(),'titlebar_background',true),	
				'default' => array(
					'background-color' =>  $sy_options[$postType.'-titlebar_background']['background-color'],
					'background-image' =>  $sy_options[$postType.'-titlebar_background']['background-image'],
					'background-repeat' =>  $sy_options[$postType.'-titlebar_background']['background-repeat'],
					'background-position' =>  $sy_options[$postType.'-titlebar_background']['background-position'],
					'background-size' => $sy_options[$postType.'-titlebar_background']['background-size'],
					'background-attachment' =>  $sy_options[$postType.'-titlebar_background']['background-attachment'],		
				),
				
			)
		),		
		array(
			'type' => 'parallax',
			'values' => array(												
				'id' => 'titlebar_background_parallax',
				'name' => 'options[titlebar_background_parallax]',
				'required' => array(
					array('id'=>'titlebar_active' , 'value'=>'1'),					
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
				),
				'title' => esc_html__('Parallax Effect','kameleon'),
				'description' => esc_html__('Titlebar Background parallax effect!','kameleon'),
				'value' => get_post_meta(get_the_ID(),'titlebar_background_parallax',true),	
				'default' => array(
					'parallax-active' =>  'yes',
					'parallax-speed' =>   0.5,
				),
				
			)
		),	
		array(
			'type' => 'slider',
			'values' => array(
				'id' => 'titlebar_height',
				'name' => 'options[titlebar_height]',
				'required' => array(
					array('id'=>'titlebar_active' , 'value'=>'1'),					
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
				),
				'title' => esc_html__('Height','kameleon'),
				'description' => esc_html__('Height (px).','kameleon'),				
				'value' => get_post_meta(get_the_ID(),'titlebar_height',true),
				'default' => $sy_options[$postType.'-titlebar_height'],
				'min' => 70,
				'max' => 1000,				
			)
		),
		array(
			'type' => 'colorpicker',
			'values' => array(
				'id' => 'titlebar_border_color',
				'name' => 'options[titlebar_border_color]',
				'required' => array(
					array('id'=>'titlebar_active' , 'value'=>'1'),					
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
				),
				'default' => $sy_options[$postType.'-titlebar_border_color'],
				'value' => get_post_meta(get_the_ID(),'titlebar_border_color',true),
				'title' => esc_html__('Border Color','kameleon'),
				'description' => esc_html__('Color fo the page title border.','kameleon'),
			)
		),
		array(
			'type' => 'slider',
			'values' => array(				
				'id' => 'titlebar_border_thickness',
				'name' => 'options[titlebar_border_thickness]',
				'required' => array(
					array('id'=>'titlebar_active' , 'value'=>'1'),					
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
				),
				'title' => esc_html__('Border Thickness','kameleon'),
				'description' => esc_html__('Border Thickness (px).','kameleon'),				
				'value' => get_post_meta(get_the_ID(),'titlebar_border_thickness',true),
				'default' => $sy_options[$postType.'-titlebar_border_thickness'],
				'min' => 0,
				'max' => 10,
					
				
			)
		),
		array(
			'type' => 'font',
			'values' => array(												
				'id' => 'titlebar_title_font',
				'name' => 'options[titlebar_title_font]',
				'required' => array(
					array('id'=>'titlebar_active' , 'value'=>'1'),					
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
				),
				'title' => esc_html__('Title Font','kameleon'),
				'description' => esc_html__('Title text font settings','kameleon'),
				'value' => get_post_meta(get_the_ID(),'titlebar_title_font',true),	
				'default' => array(
					'font-color' =>  '#444',
					'font-size' => 18,
					'font-weight' => 'normal',
					'font-style' => 'initial',
					'font-spacing' =>  0,
					'font-transform' =>  'initial',
				),				
			)
		),
		array(
			'type' => 'font',
			'values' => array(												
				'id' => 'titlebar_path_font',
				'name' => 'options[titlebar_path_font]',
				'required' => array(
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
					array('id'=>'titlebar_active' , 'value'=>'1'),					
					array('id'=>'path_active' , 'value'=>'1'),	
					array('id'=>'titlebar_style' , 'value'=>'style1,style2,style3'),					
				),
				'title' => esc_html__('Path Font','kameleon'),
				'description' => esc_html__('Path text font settings','kameleon'),
				'value' => get_post_meta(get_the_ID(),'titlebar_path_font',true),	
				'default' => array(
					'font-color' =>  '#777',
					'font-size' => 13,
					'font-weight' => 'normal',
					'font-style' => 'italic',
					'font-spacing' =>  0,
					'font-transform' =>  'initial',
				),				
			)
		),
		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'custom_info_active',
				'name' => 'options[custom_info_active]',
				'required' => array(
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
					array('id'=>'titlebar_active' , 'value'=>'1'),										
					array('id'=>'path_active' , 'value'=>'0'),										
					array('id'=>'titlebar_style' , 'value'=>'style1,style2,style3'),					
				),
				'title' => esc_html__('Custom Subtitle','kameleon'),
				'default' => 0,
				'value' => get_post_meta(get_the_ID(),'custom_info_active',true),
				'description' => esc_html__('Add Some info about the page','kameleon'),
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
			'type' => 'textarea',
			'values' => array(								
				'id' => 'custom_info_text',
				'name' => 'options[custom_info_text]',
				'required' => array(
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
					array('id'=>'titlebar_active' , 'value'=>'1'),										
					array('id'=>'custom_info_active' , 'value'=>'1'),										
					array('id'=>'path_active' , 'value'=>'0'),										
					array('id'=>'titlebar_style' , 'value'=>'style1,style2,style3'),					
				),
				'value' => get_post_meta(get_the_ID(),'custom_info_text',true),					
				'default' => '',
				'title' => esc_html__('Custom Subtitle','kameleon'),
				'description' => esc_html__('Add Custom Text Subtitle!','kameleon')		
			),
		),
		array(
			'type' => 'font',
			'values' => array(												
				'id' => 'titlebar_custominfo_font',
				'name' => 'options[titlebar_custominfo_font]',
				'required' => array(
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
					array('id'=>'titlebar_active' , 'value'=>'1'),										
					array('id'=>'custom_info_active' , 'value'=>'1'),										
					array('id'=>'path_active' , 'value'=>'0'),										
					array('id'=>'titlebar_style' , 'value'=>'style1,style2,style3'),					
				),
				'title' => esc_html__('Custom Subtitle Font','kameleon'),
				'description' => esc_html__('Custom Subtitle text font settings','kameleon'),
				'value' => get_post_meta(get_the_ID(),'titlebar_custominfo_font',true),	
				'default' => array(
					'font-color' =>  '#777',
					'font-size' => 13,
					'font-weight' => 'normal',
					'font-style' => 'italic',
					'font-spacing' =>  0,
					'font-transform' =>  'initial',
				),				
			)
		)	
	);

if(in_array($postype, $post_types_np ) && $postype !="product"){
	array_push($elementsArray,
		array(
			'type' => 'font',
			'values' => array(												
				'id' => 'titlebar_info_font',
				'name' => 'options[titlebar_info_font]',
				'required' => array(
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
					array('id'=>'titlebar_active' , 'value'=>'1'),									
					array('id'=>'modern_look' , 'value'=>'1'),									
					array('id'=>'titlebar_style' , 'value'=>'style7'),					
				),
				'title' => esc_html__('Info Font','kameleon'),
				'description' => esc_html__('Info text font settings','kameleon'),
				'value' => get_post_meta(get_the_ID(),'titlebar_info_font',true),	
				'default' => array(
					'font-color' =>  '#777',
					'font-size' => 16,
					'font-weight' => 'normal',
					'font-style' => 'initial',
					'font-spacing' =>  1,
					'font-transform' =>  'initial',
				),				
			)
		)
	);
}



if(in_array($postype, $post_types_np )){	
	array_push($elementsArray,
		array(
			'type' => 'message',
			'values' => array(																		
				'required' => array(
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
					array('id'=>'titlebar_active' , 'value'=>'1'),					
					array('id'=>'titlebar_style' , 'value'=>'style4,style5,style6'),					
				),
				'description' => esc_html__('Next / Previous Settings','kameleon'),
			)
		),
		//arrowType
		array(
			'type' => 'colorpicker',
			'values' => array(
				'id' => 'titlebar_arrowcolor',
				'name' => 'options[titlebar_arrowcolor]',
				'required' => array(
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
					array('id'=>'titlebar_active' , 'value'=>'1'),					
					array('id'=>'titlebar_style' , 'value'=>'style4,style5,style6'),					
				),
				'default' => $sy_options[$postType.'-titlebar_arrowcolor'],
				'value' => get_post_meta(get_the_ID(),'titlebar_arrowcolor',true),
				'title' => esc_html__('Arrow Color','kameleon'),
				'description' => esc_html__('Choose a color for the Next / Previous arrows.','kameleon'),
			)
		),
		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'titlebar_thumbnail_enabled',
				'name' => 'options[titlebar_thumbnail_enabled]',
				'required' => array(
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
					array('id'=>'titlebar_active' , 'value'=>'1'),					
					array('id'=>'titlebar_style' , 'value'=>'style4,style5,style6'),					
				),
				'title' => esc_html__('Enable Thumbnail','kameleon'),
				'default' => $sy_options[$postType.'-titlebar_thumbnail_enabled'] ,
				'value' => get_post_meta(get_the_ID(),'titlebar_thumbnail_enabled',true),
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
			'type' => 'slider',
			'values' => array(				
				'id' => 'titlebar_thumbnail_size',
				'name' => 'options[titlebar_thumbnail_size]',
				'required' => array(
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
					array('id'=>'titlebar_active' , 'value'=>'1'),					
					array('id'=>'titlebar_style' , 'value'=>'style4,style5,style6'),					
				),
				'title' => esc_html__('Thumbnail Size','kameleon'),
				'description' => esc_html__('choose the thumbnail size(px).','kameleon'),				
				'value' => get_post_meta(get_the_ID(),'titlebar_thumbnail_size',true),
				'default' => $sy_options[$postType.'-titlebar_thumbnail_size'],
				'min' => 0,
				'max' => 150,
					
				
			)
		),
		array(
			'type' => 'slider',
			'values' => array(				
				'id' => 'titlebar_thumbnail_radius',
				'name' => 'options[titlebar_thumbnail_radius]',
				'required' => array(
					array('id'=>'titlebar_unique' , 'value'=>'1'),					
					array('id'=>'titlebar_active' , 'value'=>'1'),					
					array('id'=>'titlebar_style' , 'value'=>'style4,style5,style6'),					
				),
				'title' => esc_html__('Thumbnail Radius','kameleon'),
				'description' => esc_html__('Apply a radius for the post thumbnail(px).','kameleon'),				
				'value' => get_post_meta(get_the_ID(),'titlebar_thumbnail_radius',true),
				'default' => $sy_options[$postType.'-titlebar_thumbnail_radius'],
				'min' => 0,
				'max' => 500,
					
				
			)
		)
	);
	
}






//Titlebar  Metabox 
$titlebarSection = new global_section(
	$values =  array(
		'id' => 'titlebar-options',
		'class' => 'opt-section-container',
	),
	$elements = $elementsArray
	
);



$titlebarSection->render();

?>