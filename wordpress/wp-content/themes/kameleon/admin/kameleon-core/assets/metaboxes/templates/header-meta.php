<?php 

//Header Metabox
$headerSection = new global_section(
		$values =  array(
			'id' => 'header-options',
			'class' => 'opt-section-container',
		),
		$elements = array(
			array(
				'type' => 'switcher',
				'values' => array(
					'id' => 'header_active',
					'name' => 'options[header_active]',
					'title' => esc_html__('Enable Header','kameleon'),
					'value' => get_post_meta(get_the_ID(),'header_active',true),
					'default' => $sy_options['header_active'],
					'description' => esc_html__('Enable Header On This Page.','kameleon'),
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
					'id' => 'onepage',
					'name' => 'options[onepage]',
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1')
					),	
					'title' => esc_html__('One Page Menu','kameleon'),
					'default' => 0 ,
					'value' => get_post_meta(get_the_ID(),'onepage',true),
					'description' => esc_html__('Apply One Page Menu.','kameleon'),
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
					'id' => 'header_unique',
					'name' => 'options[header_unique]',
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1')
					),	
					'title' => esc_html__('Unique Header','kameleon'),
					'default' => 0 ,
					'value' => get_post_meta(get_the_ID(),'header_unique',true),
					'description' => esc_html__('Apply a unique header style on this page.','kameleon'),
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
					'id' => 'hv_transparent',
					'name' => 'options[hv_transparent]',
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1'),
						array('id'=>'header_unique' , 'value'=>'1')
					),	
					'title' => esc_html__('Fixed Header','kameleon'),
					'value' => get_post_meta(get_the_ID(),'hv_transparent',true),
					'default' => 0,
					'description' => esc_html__('Choose if the header is fixed from the begining.','kameleon'),
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
					'id' => 'swa_enabled',
					'name' => 'options[swa_enabled]',
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1'),
						array('id'=>'header_unique' , 'value'=>'1')
					),	
					'title' => esc_html__('Enable Slide Widget Area','kameleon'),
					'value' => get_post_meta(get_the_ID(),'swa_enabled',true),
					'default' => 0,
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
					'id' => 'hv_width',
					'name' => 'options[hv_width]',
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1'),
						array('id'=>'header_unique' , 'value'=>'1')
					),	
					'value' => get_post_meta(get_the_ID(),'hv_width',true),					
					'default' => 'boxed-header',
					'title' => esc_html__('Header Width','kameleon'),
					'description' => esc_html__('Header width layout!','kameleon'),
					'options' => array(
						'boxed-header' => 'Boxed', 
			       		'full-header' => 'Full Width'
					) 
				)
			),

			array(
				'type' => 'selectmodern',
				'values' => array(								
					'id' => 'header_v',
					'name' => 'options[header_v]',
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1'),
						array('id'=>'header_unique' , 'value'=>'1')
					),	
					'value' => get_post_meta(get_the_ID(),'header_v',true),					
					'default' => $sy_options['header_v'],
					'title' => esc_html__('Header Version','kameleon'),
					'description' => esc_html__('You have 10 header choices. Choose the one that pleases you the most. You can change on every page you want!','kameleon'),
					'options' => array(
						'header_v1' => esc_html__('1 - Simple Header','kameleon'),				
						'header_v2' => esc_html__('2 - Header Logo Right','kameleon'),			
						'header_v3' => esc_html__('3 - Center Header','kameleon'),				
						'header_v4' => esc_html__('4 - Center Header','kameleon'),				
						'header_v5' => esc_html__('5 - Side Header Show/Hide','kameleon'),		
						'header_v6' => esc_html__('6 - Side Header Fixed','kameleon'),			
						'header_v7' => esc_html__('7 - Centered Links','kameleon'),			
						'header_v8' => esc_html__('8 - Header Side Slide Normal','kameleon'),	
						'header_v9' => esc_html__('9 - Header Side Slide Center','kameleon'),	
						'header_v10' =>esc_html__('10 - Header FullScreen Normal','kameleon'),
					) 
				)
			),

			array(
				'type' => 'message',
				'values' => array(																		
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1'),
						array('id'=>'header_unique' , 'value'=>'1')
					),	
					'description' => esc_html__('These setting will be applied only for some headers style (Not for the side ones)! ','kameleon'),
				)
			),			
			array(
				'type' => 'selectmodern',
				'values' => array(								
					'id' => 'hv_logo_type',
					'name' => 'options[hv_logo_type]',
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1'),
						array('id'=>'header_unique' , 'value'=>'1')
					),	
					'value' => get_post_meta(get_the_ID(),'hv_logo_type',true),					
					'default' => 'normal',
					'title' => esc_html__('Logo Type','kameleon'),
					'description' => esc_html__('Choose what logo to apply for this header!','kameleon'),
					'options' => array(
						'normal' => 'Normal',
						'transparent' => 'Transparent'						
					) 
				)
			),
			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'hv_background',
					'name' => 'options[hv_background]',
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1'),
						array('id'=>'header_unique' , 'value'=>'1')
					),	
					'default' => '#fff',
					'value' => get_post_meta(get_the_ID(),'hv_background',true),
					'title' => esc_html__('Header Background Color','kameleon'),
					'description' => esc_html__('Header Background Color.','kameleon'),
				)
			),

			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'hv_border_color',
					'name' => 'options[hv_border_color]',
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1'),
						array('id'=>'header_unique' , 'value'=>'1')
					),	
					'default' => '#eee',
					'value' => get_post_meta(get_the_ID(),'hv_border_color',true),
					'title' => esc_html__('Header Border Color','kameleon'),
					'description' => esc_html__('Color fo the header border.','kameleon'),
				)
			),

			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'hv_text_color',
					'name' => 'options[hv_text_color]',
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1'),
						array('id'=>'header_unique' , 'value'=>'1')
					),	
					'default' => '#777',
					'value' => get_post_meta(get_the_ID(),'hv_text_color',true),
					'title' => esc_html__('Header Text Color','kameleon'),
					'description' => esc_html__('Color fo the header text.','kameleon'),
				)
			),

			
			array(
				'type' => 'switcher',
				'values' => array(
					'id' => 'cart_enabled_header',
					'name' => 'options[cart_enabled_header]',
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1'),
						array('id'=>'header_unique' , 'value'=>'1')
					),	
					'title' => esc_html__('Enable Cart on Header','kameleon'),
					'value' => get_post_meta(get_the_ID(),'cart_enabled_header',true),
					'default' => 0,
					'description' => esc_html__('Include the WooCommerce cart icon on header','kameleon'),
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
					'id' => 'h_top',
					'name' => 'options[h_top]',
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1'),
						array('id'=>'header_unique' , 'value'=>'1')
					),	
					'title' => esc_html__('Enable Top Header','kameleon'),
					'default' => 1 ,
					'value' => get_post_meta(get_the_ID(),'h_top',true),
					'description' => esc_html__('Enable the top header information on this page.','kameleon'),
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
					'id' => 'h_top_unique',
					'name' => 'options[h_top_unique]',
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1'),
						array('id'=>'header_unique' , 'value'=>'1'),
						array('id'=>'h_top' , 'value'=>'1'),
					),	
					'title' => esc_html__('Unique Top Header Style','kameleon'),
					'default' => 0,
					'value' => get_post_meta(get_the_ID(),'h_top_unique',true),
					'description' => esc_html__('Apply unique style for the top header area.','kameleon'),
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
					'id' => 'h_top_background',
					'name' => 'options[h_top_background]',
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1'),
						array('id'=>'header_unique' , 'value'=>'1'),
						array('id'=>'h_top' , 'value'=>'1'),
						array('id'=>'h_top_unique' , 'value'=>'1'),
					),	
					'default' => 'transparent',
					'value' => get_post_meta(get_the_ID(),'h_top_background',true),
					'title' => esc_html__('Top Header Background','kameleon'),
					'description' => esc_html__('Top header background.','kameleon'),
				)
			),


			array(
				'type' => 'selectmodern',
				'values' => array(								
					'id' => 'h_top_scheme',
					'name' => 'options[h_top_scheme]',
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1'),
						array('id'=>'header_unique' , 'value'=>'1'),
						array('id'=>'h_top' , 'value'=>'1'),
						array('id'=>'h_top_unique' , 'value'=>'1'),
					),	
					'value' => get_post_meta(get_the_ID(),'h_top_scheme',true),					
					'default' => 'light',
					'title' => esc_html__('Top Color Scheme','kameleon'),
					'description' => esc_html__('Choose the color scheme for the rop header!','kameleon'),
					'options' => array(
						'light' => 'Light',
						'dark' => 'Dark'						
					) 
				)
			),

			//Search On Single Pages
			array(
				'type' => 'message',
				'values' => array(																		
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1'),
						array('id'=>'header_unique' , 'value'=>'1')
					),	
					'description' => esc_html__('Search Section Settings ','kameleon'),
				)
			),	
			array(
				'type' => 'switcher',
				'values' => array(
					'id' => 'search_enabled',
					'name' => 'options[search_enabled]',
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1'),
						array('id'=>'header_unique' , 'value'=>'1')
					),	
					'title' => esc_html__('Enable Search','kameleon'),
					'value' => get_post_meta(get_the_ID(),'search_enabled',true),
					'default' => 1,
					'description' => esc_html__('Enable or Disable the search on this page','kameleon'),
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
					'id' => 'search_style',
					'name' => 'options[search_style]',
					'required' => array(
						array('id'=>'header_active' , 'value'=>'1'),
						array('id'=>'header_unique' , 'value'=>'1'),
						array('id'=>'search_enabled' , 'value'=>'1')
					),	
					'value' => get_post_meta(get_the_ID(),'search_style',true),					
					'default' => 'wide',
					'title' => esc_html__('Search Style','kameleon'),
					'description' => esc_html__('Choose the search style & type','kameleon'),
					'options' => array(
						'wide' => 'Wide Search', 
			        	'small' => 'Small Input', 
			        	'dropdown' => 'Drop Down', 
			        	'fullscreen' => 'Full Screen', 
			        	'topfixed' => 'Top Fixed', 						
					) 
				)
			),



		
		)
	);	
	$headerSection->render();

?>