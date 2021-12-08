<?php 
//Inttro Metabox
$introSection = new global_section(
		$values =  array(
			'id' => 'intro-options',
			'class' => 'opt-section-container',
		),
		$elements = array(
			
			array(
				'type' => 'message',
				'values' => array(																		
					'description' => esc_html__('Page Intro is a full width image with sliding effect! Try it Now','kameleon'),
				)
			),

			array(
				'type' => 'switcher',
				'values' => array(
					'id' => 'enable_intro',
					'name' => 'options[enable_intro]',
					'title' => esc_html__('Enable Page Intro','kameleon'),
					'default' => 0 ,
					'value' => get_post_meta(get_the_ID(),'enable_intro',true),
					'description' => esc_html__('Enable page image intro.','kameleon'),
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
					'id' => 'intro_style',
					'name' => 'options[intro_style]',
					'required' => array(
						array('id'=>'enable_intro' , 'value'=>'1'),
					),	
					'value' => get_post_meta(get_the_ID(),'intro_style',true),					
					'default' => 'intro-effect-push',
					'title' => esc_html__('Intro Style','kameleon'),
					'description' => esc_html__('Apply the intro style effect','kameleon'),
					'options' => array(
						'intro-effect-push' => 'Push', 
			       		'intro-effect-fadeout' => 'Fade Out',
			       		'intro-effect-sliced' => 'Sliced'
					) 
				)
			),

			array(
				'type' => 'switcher',
				'values' => array(
					'id' => 'intro_featured_en',
					'name' => 'options[intro_featured_en]',
					'required' => array(
						array('id'=>'enable_intro' , 'value'=>'1'),
					),	
					'title' => esc_html__('Use Featured Image','kameleon'),
					'default' => 1 ,
					'value' => get_post_meta(get_the_ID(),'intro_featured_en',true),
					'description' => esc_html__('Use this page / post featured image as background image intro.','kameleon'),
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
				'type' => 'uploader',
				'values' => array(
					'id' => 'intro_image',
					'name' => 'options[intro_image]',
					'required' => array(
						array('id'=>'enable_intro' , 'value'=>'1'),
						array('id'=>'intro_featured_en' , 'value'=>'0'),
					),	
					'default' => '',
					'value' => get_post_meta(get_the_ID(),'intro_image',true),
					'title' => esc_html__('Intro Backgound Image','kameleon'),
					'description' => esc_html__('Upload the inro image (only works if featured image is OFF)','kameleon'),
				)
			),

			array(
				'type' => 'selectmodern',
				'values' => array(								
					'id' => 'intro_text_pos',
					'name' => 'options[intro_text_pos]',
					'value' => get_post_meta(get_the_ID(),'intro_text_pos',true),	
					'required' => array(
						array('id'=>'enable_intro' , 'value'=>'1'),
					),					
					'default' => 'center',
					'title' => esc_html__('Intro Text Position','kameleon'),
					'description' => esc_html__('The position of the inrto text','kameleon'),
					'options' => array(
						'center' => 'Center', 
			       		'top' => 'Top',
			       		'bottom' => 'Bottom'
					) 
				)
			),

		)

);



$introSection->render();

echo '<div class="kmb-elem-attr" style="border:0px; display:none;" id="intro-page-s">
				<div class="kmb-elem-attr-name-desc" style="width:100%">
					<h4>'.esc_html__('Intro Text','kameleon').'</h4>
					<span>'.esc_html__('Write some text for the intro area','kameleon').'</span>
				</div>';				
					wp_editor( get_post_meta(get_the_ID(),'intro_text',true) , 'intro_text', array(
					    'wpautop'       => true,
					    'media_buttons' => false,
					    'textarea_name' => 'options[intro_text]',
					    'textarea_rows' => 5,
					    'teeny'         => true
					) );
	
echo '</div>';


?>