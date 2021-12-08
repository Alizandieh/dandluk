<?php 
//Next / Previous Metabox
$postTypeNP = get_post_type( get_the_ID() );
$pn_style_meta = array('type_1'	=> 'Edge Buttons','type_2' 	=> 'Basic');

$nextPreviousSection = new global_section(
		$values =  array(
			'id' => 'nextprevious-options',
			'class' => 'opt-section-container',
		),
		$elements = array(
			array(
				'type' => 'switcher',
				'values' => array(
					'id' => $postTypeNP.'-pn_enabled',
					'name' => 'options['.$postTypeNP.'-pn_enabled]',
					'title' => esc_html__('Enable Next / Previous','kameleon'),
					'default' => $sy_options[$postTypeNP.'-pn_enabled'] ,
					'value' => get_post_meta(get_the_ID(),$postTypeNP.'-pn_enabled',true),
					'description' => esc_html__('Enable next / previous section for this page.','kameleon'),
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
					'id' => $postTypeNP.'-pn_stype',
					'name' => 'options['.$postTypeNP.'-pn_stype]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
					),	
					'value' => get_post_meta(get_the_ID(),$postTypeNP.'-pn_stype',true),					
					'default' => $sy_options[$postTypeNP.'-pn_stype'],
					'title' => esc_html__('Next / Previous style','kameleon'),
					'description' => esc_html__('Choose a style for Next / Previous section!','kameleon'),
					'options' => $pn_style_meta
				)
			),
			array(
				'type' => 'switcher',
				'values' => array(
					'id' => 'nextprevious_unique',
					'name' => 'options[nextprevious_unique]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
					),	
					'title' => esc_html__('Unique Styling','kameleon'),
					'default' => 0 ,
					'value' => get_post_meta(get_the_ID(),'nextprevious_unique',true),
					'description' => esc_html__('Unique next / previous section for this page.','kameleon'),
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
			//Type 1 Edge Buttons Styling			
			array(
				'id' => 'edge_np_styling',
				'type' => 'message',
				'values' => array(		
				'required' => array(
					array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
					array('id'=>'nextprevious_unique' , 'value'=>'1'),					
					array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_1'),					
				),																	
					'description' => esc_html__('Next / Previous Styling for "Edge" Style ','kameleon'),
				)
			),	
			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'pn_type1_background',
					'name' => 'options[pn_type1_background]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_1'),					
					),		
					'default' => $sy_options[$postTypeNP.'-pn_type1_background'],
					'value' => get_post_meta(get_the_ID(),'pn_type1_background',true),
					'title' => esc_html__('Button Background Color','kameleon'),
					'description' => esc_html__('Choose a color for the button background.','kameleon'),
				)
			),
			array(
				'type' => 'slider',
				'values' => array(				
					'id' => 'pn_type1_height',
					'name' => 'options[pn_type1_height]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_1'),					
					),		
					'title' => esc_html__('Button Height','kameleon'),
					'description' => esc_html__('Choose the height for the edge buttons (px) .','kameleon'),
					'value' => get_post_meta(get_the_ID(),'pn_type1_height',true),
					'default' => $sy_options[$postTypeNP.'-pn_type1_height'],
					'min' => 0,
					'max' => 150,
				)
			),
			array(
				'type' => 'slider',
				'values' => array(				
					'id' => 'pn_type1_width',
					'name' => 'options[pn_type1_width]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_1'),					
					),		
					'title' => esc_html__('Button Width','kameleon'),
					'description' => esc_html__('Choose the width for the edge buttons (px) .','kameleon'),
					'value' => get_post_meta(get_the_ID(),'pn_type1_width',true),
					'default' => $sy_options[$postTypeNP.'-pn_type1_width'],
					'min' => 0,
					'max' => 150,
				)
			),
			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'pn_type1_color',
					'name' => 'options[pn_type1_color]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_1'),					
					),		
					'default' => $sy_options[$postTypeNP.'-pn_type1_color'],
					'value' => get_post_meta(get_the_ID(),'pn_type1_color',true),
					'title' => esc_html__('Button Text Color','kameleon'),
					'description' => esc_html__('Choose a color for the button text & arrows.','kameleon'),
				)
			),
			array(
				'type' => 'slider',
				'values' => array(				
					'id' => 'pn_type1_fontsize',
					'name' => 'options[pn_type1_fontsize]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_1'),					
					),		
					'title' => esc_html__('Font Size','kameleon'),
					'description' => '',
					'value' => get_post_meta(get_the_ID(),'pn_type1_fontsize',true),
					'default' => $sy_options[$postTypeNP.'-pn_type1_fontsize'],
					'min' => 0,
					'max' => 22,
				)
			),
			array(
				'type' => 'slider',
				'values' => array(				
					'id' => 'pn_type1_arrowsize',
					'name' => 'options[pn_type1_arrowsize]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_1'),					
					),		
					'title' => esc_html__('Arrow Size (px)','kameleon'),
					'description' => '',
					'value' => get_post_meta(get_the_ID(),'pn_type1_arrowsize',true),
					'default' => $sy_options[$postTypeNP.'-pn_type1_arrowsize'],
					'min' => 0,
					'max' => 44,
				)
			),
			
			
			array(
				'type' => 'switcher',
				'values' => array(
					'id' => 'pn_type1_thumbnail_enabled',
					'name' => 'options[pn_type1_thumbnail_enabled]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_1'),					
					),		
					'title' => esc_html__('Enable Thumbnail','kameleon'),
					'default' => $sy_options[$postTypeNP.'-pn_type1_thumbnail_enabled'] ,
					'value' => get_post_meta(get_the_ID(),'pn_type1_thumbnail_enabled',true),
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
					'id' => 'pn_type1_thumbnail_size',
					'name' => 'options[pn_type1_thumbnail_size]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_1'),	
						array('id'=>'pn_type1_thumbnail_enabled' , 'value'=>'1'),				
					),		
					'title' => esc_html__('Thumbnail Image Size (px)','kameleon'),
					'description' => '',
					'value' => get_post_meta(get_the_ID(),'pn_type1_thumbnail_size',true),
					'default' => $sy_options[$postTypeNP.'-pn_type1_thumbnail_size'],
					'min' => 40,
					'max' => 150,
				)
			),
			array(
				'type' => 'slider',
				'values' => array(				
					'id' => 'pn_type1_thumbnail_radius',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_1'),	
						array('id'=>'pn_type1_thumbnail_enabled' , 'value'=>'1'),								
					),		
					'name' => 'options[pn_type1_thumbnail_radius]',
					'title' => esc_html__('Thumbnail Radius (px)','kameleon'),
					'description' => '',
					'value' => get_post_meta(get_the_ID(),'pn_type1_thumbnail_radius',true),
					'default' => $sy_options[$postTypeNP.'-pn_type1_thumbnail_radius'],
					'min' => 0,
					'max' => 500,
				)
			),

			//Type 2 Basic Styling
			array(
				'id' => 'basic_np_style',
				'type' => 'message',
				'values' => array(		
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_2'),					
					),																		
					'description' => esc_html__('Next / Previous Styling for "Basic" Style ','kameleon'),
				)
			),
			
			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'pn_type2_arrowcolor',
					'name' => 'options[pn_type2_arrowcolor]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_2'),					
					),		
					'default' => $sy_options[$postTypeNP.'-pn_type2_arrowcolor'],
					'value' => get_post_meta(get_the_ID(),'pn_type2_arrowcolor',true),
					'title' => esc_html__('Arrow Color','kameleon'),
					'description' => esc_html__('Choose a color for arrows.','kameleon'),
				)
			),
			array(
				'type' => 'slider',
				'values' => array(				
					'id' => 'pn_type2_fontsize',
					'name' => 'options[pn_type2_fontsize]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_2'),					
					),		
					'title' => esc_html__('Font Size (px)','kameleon'),
					'description' => '',
					'value' => get_post_meta(get_the_ID(),'pn_type2_fontsize',true),
					'default' => $sy_options[$postTypeNP.'-pn_type2_fontsize'],
					'min' => 0,
					'max' => 35,
				)
			),
			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'pn_type2_fontcolor',
					'name' => 'options[pn_type2_fontcolor]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_2'),					
					),		
					'default' => $sy_options[$postTypeNP.'-pn_type2_fontcolor'],
					'value' => get_post_meta(get_the_ID(),'pn_type2_fontcolor',true),
					'title' => esc_html__('Font Color','kameleon'),
					'description' => esc_html__('Choose a color for text.','kameleon'),
				)
			),
			array(
				'type' => 'background',
				'values' => array(												
					'id' => 'pn_type2_background',
					'name' => 'options[pn_type2_background]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_2'),					
					),		
					'title' => esc_html__('Section Background','kameleon'),
					'description' => esc_html__('Section Background!','kameleon'),
					'value' => get_post_meta(get_the_ID(),'pn_type2_background',true),	
					'default' => array(
						'background-color' =>  $sy_options[$postTypeNP.'-pn_type2_background']['background-color'],
						'background-image' =>  $sy_options[$postTypeNP.'-pn_type2_background']['background-image'],
						'background-repeat' =>  $sy_options[$postTypeNP.'-pn_type2_background']['background-repeat'],
						'background-position' =>  $sy_options[$postTypeNP.'-pn_type2_background']['background-position'],
						'background-size' => $sy_options[$postTypeNP.'-pn_type2_background']['background-size'],
						'background-attachment' =>  $sy_options[$postTypeNP.'-pn_type2_background']['background-attachment'],		
					),
					
				)
			),
			array(
				'type' => 'slider',
				'values' => array(				
					'id' => 'pn_type2_height',
					'name' => 'options[pn_type2_height]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_2'),					
					),		
					'title' => esc_html__('Section Height (px)','kameleon'),
					'description' => '',
					'value' => get_post_meta(get_the_ID(),'pn_type2_height',true),
					'default' => $sy_options[$postTypeNP.'-pn_type2_height'],
					'min' => 0,
					'max' => 500,
				)
			),		
			array(
				'type' => 'distance',
				'values' => array(																	
					'id' => 'pn_type2_margins',
					'name' => 'options[pn_type2_margins]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_2'),					
					),		
					'selector' => 'margin',
					'title' => esc_html__('Section Margins','kameleon'),
					'description' => esc_html__('Apply Top / Bottom Margins!','kameleon'),
					'value' => get_post_meta(get_the_ID(),'pn_type2_margins',true),						
					'left' => false,
					'right' => false,
					'default' => array(
						'top' => $sy_options[$postTypeNP.'-pn_type2_margins']['margin-top'],
						'bottom' => $sy_options[$postTypeNP.'-pn_type2_margins']['margin-bottom'],
					),
					
				)
			),
			array(
				'type' => 'distance',
				'values' => array(																	
					'id' => 'pn_type2_paddings',
					'name' => 'options[pn_type2_paddings]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_2'),					
					),		
					'selector' => 'padding',
					'title' => esc_html__('Section Paddings','kameleon'),
					'description' => esc_html__('Apply Top / Bottom Paddings!','kameleon'),
					'value' => get_post_meta(get_the_ID(),'pn_type2_paddings',true),						
					'default' => array(
						'top' => $sy_options[$postTypeNP.'-pn_type2_paddings']['padding-top'],
						'right' => $sy_options[$postTypeNP.'-pn_type2_paddings']['padding-right'],
						'bottom' => $sy_options[$postTypeNP.'-pn_type2_paddings']['padding-bottom'],
						'left' => $sy_options[$postTypeNP.'-pn_type2_paddings']['padding-left'],
					),
					
				)
			),
			array(
				'type' => 'distance',
				'values' => array(												
					'id' => 'pn_type2_borders',
					'name' => 'options[pn_type2_borders]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_2'),					
					),		
					'selector' => 'border',
					'title' => esc_html__('Section Borders','kameleon'),
					'description' => esc_html__('Apply Section borders!','kameleon'),
					'value' => get_post_meta(get_the_ID(),'pn_type2_borders',true),	
					'default' => array(
						'top' => $sy_options[$postTypeNP.'-pn_type2_borders']['border-top'],
						'bottom' => $sy_options[$postTypeNP.'-pn_type2_borders']['border-bottom'],
						'left' => $sy_options[$postTypeNP.'-pn_type2_borders']['border-left'],
						'right' => $sy_options[$postTypeNP.'-pn_type2_borders']['border-right'],
						'border-color' => $sy_options[$postTypeNP.'-pn_type2_borders']['border-color'],
						'border-style' => $sy_options[$postTypeNP.'-pn_type2_borders']['border-style'],
					),					
				)
			),
			array(
				'type' => 'switcher',
				'values' => array(
					'id' => 'pn_type2_thumbnail_enabled',
					'name' => 'options[pn_type2_thumbnail_enabled]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_2'),										
					),		
					'title' => esc_html__('Enable Thumbnail','kameleon'),
					'default' => $sy_options[$postTypeNP.'-pn_type2_thumbnail_enabled'] ,
					'value' => get_post_meta(get_the_ID(),'pn_type2_thumbnail_enabled',true),
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
					'id' => 'pn_type2_thumbnail_size',
					'name' => 'options[pn_type2_thumbnail_size]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_2'),	
						array('id'=>'pn_type2_thumbnail_enabled' , 'value'=>'1'),				
					),		
					'title' => esc_html__('Thumbnail Image Size (px)','kameleon'),
					'description' => '',
					'value' => get_post_meta(get_the_ID(),'pn_type2_thumbnail_size',true),
					'default' => $sy_options[$postTypeNP.'-pn_type2_thumbnail_size'],
					'min' => 0,
					'max' => 150,
				)
			),
			array(
				'type' => 'slider',
				'values' => array(				
					'id' => 'pn_type2_thumbnail_radius',
					'name' => 'options[pn_type2_thumbnail_radius]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_2'),	
						array('id'=>'pn_type2_thumbnail_enabled' , 'value'=>'1'),				
					),		
					'title' => esc_html__('Thumbnail Radius (px)','kameleon'),
					'description' => '',
					'value' => get_post_meta(get_the_ID(),'pn_type2_thumbnail_radius',true),
					'default' => $sy_options[$postTypeNP.'-pn_type2_thumbnail_radius'],
					'min' => 0,
					'max' => 500,
				)
			),
			array(
				'type' => 'switcher',
				'values' => array(
					'id' => 'pn_type2_title_enabled',
					'name' => 'options[pn_type2_title_enabled]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_2'),					
					),		
					'title' => esc_html__('Enable Title','kameleon'),
					'default' => $sy_options[$postTypeNP.'-pn_type2_title_enabled'] ,
					'value' => get_post_meta(get_the_ID(),'pn_type2_title_enabled',true),
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
				'type' => 'switcher',
				'values' => array(
					'id' => 'pn_type2_np_name_enabled',
					'name' => 'options[pn_type2_np_name_enabled]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_2'),	
						array('id'=>'pn_type2_title_enabled' , 'value'=>'1'),					
					),		
					'title' => esc_html__('Replace Title With Next / Previous Text','kameleon'),
					'default' => $sy_options[$postTypeNP.'-pn_type2_np_name_enabled'] ,
					'value' => get_post_meta(get_the_ID(),'pn_type2_np_name_enabled',true),
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
				'type' => 'switcher',
				'values' => array(
					'id' => 'pn_type2_full',
					'name' => 'options[pn_type2_full]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_2'),					
					),		
					'title' => esc_html__('Enable Full Width','kameleon'),
					'default' => $sy_options[$postTypeNP.'-pn_type2_full'] ,
					'value' => get_post_meta(get_the_ID(),'pn_type2_full',true),
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
				'type' => 'switcher',
				'values' => array(
					'id' => 'pn_type2_gohome',
					'name' => 'options[pn_type2_gohome]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_2'),	
					),		
					'title' => esc_html__('Enable Go Home Button','kameleon'),
					'default' => $sy_options[$postTypeNP.'-pn_type2_gohome'] ,
					'value' => get_post_meta(get_the_ID(),'pn_type2_gohome',true),
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
					'id' => 'pn_type2_position',
					'name' => 'options[pn_type2_position]',
					'required' => array(
						array('id'=>$postTypeNP.'-pn_enabled' , 'value'=>'1'),					
						array('id'=>'nextprevious_unique' , 'value'=>'1'),					
						array('id'=>$postTypeNP.'-pn_stype' , 'value'=>'type_2'),					
					),	
					'value' => get_post_meta(get_the_ID(),'pn_type2_position',true),					
					'default' => $sy_options[$postTypeNP.'-pn_type2_position'],
					'title' => esc_html__('Position','kameleon'),
					'description' => esc_html__('Choose ths position for the Previous/Next Section','kameleon'),
					'options' => array(
						'top' => 'Top', 
				        'bottom' => 'Bottom'
					) 
				)
			),

			
			

	)
);

$nextPreviousSection->render();

?>