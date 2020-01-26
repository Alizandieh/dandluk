<?php 
//Post Metabox
$postSection = new global_section(
		$values =  array(
			'id' => 'post-options',
			'class' => 'opt-section-container',
		),
		$elements = array(			
			array(
				'type' => 'message',
				'values' => array(																		
					'description' => esc_html__('For Video Post Format','kameleon'),
				)
			),
			array(
				'type' => 'uploader',
				'values' => array(
					'id' => 'video_mp4',
					'name' => 'options[video_mp4]',
					'default' => '',
					'value' => get_post_meta(get_the_ID(),'video_mp4',true),
					'title' => esc_html__('Self Hosted MP4','kameleon'),
					'description' => esc_html__('Self hosted mp4 video format','kameleon'),
				)
			),

			array(
				'type' => 'uploader',
				'values' => array(
					'id' => 'video_webm',
					'name' => 'options[video_webm]',
					'default' => '',
					'value' => get_post_meta(get_the_ID(),'video_webm',true),
					'title' => esc_html__('Self Hosted WebM','kameleon'),
					'description' => esc_html__('Self hosted webm video format','kameleon'),
				)
			),

			array(
				'type' => 'textarea',
				'values' => array(
					'id' => 'video_embed',
					'name' => 'options[video_embed]',
					'default' => '',
					'value' => get_post_meta(get_the_ID(),'video_embed',true),
					'title' => esc_html__('External Embed Video','kameleon'),
					'description' => esc_html__('External hosted video (Youtube/Vimeo...) Embed code','kameleon'),
				)
			),

			array(
				'type' => 'message',
				'values' => array(																		
					'description' => esc_html__('For Audio Post Format','kameleon'),
				)
			),

			array(
				'type' => 'uploader',
				'values' => array(
					'id' => 'video_mp3',
					'name' => 'options[video_mp3]',
					'default' => '',
					'value' => get_post_meta(get_the_ID(),'video_mp3',true),
					'title' => esc_html__('Self Hosted Audidp MP3','kameleon'),
					'description' => esc_html__('Self hosted mp3 audio format','kameleon'),
				)
			),

			array(
				'type' => 'textarea',
				'values' => array(
					'id' => 'audio_embed',
					'name' => 'options[audio_embed]',
					'default' => '',
					'value' => get_post_meta(get_the_ID(),'audio_embed',true),
					'title' => esc_html__('External Embed Audio','kameleon'),
					'description' => esc_html__('External hosted audio (SoundCloud) Embed code','kameleon'),
				)
			),

			array(
				'type' => 'message',
				'values' => array(																		
					'description' => esc_html__('For Quote Post Format','kameleon'),
				)
			),

			array(
				'type' => 'text',
				'values' => array(
					'id' => 'quote_author',
					'name' => 'options[quote_author]',
					'default' => '',
					'value' => get_post_meta(get_the_ID(),'quote_author',true),
					'title' => esc_html__('Quote Athor Name','kameleon'),
					'description' => '',
				)
			),

			array(
				'type' => 'switcher',
				'values' => array(
					'id' => 'about_author',
					'name' => 'options[about_author]',
					'title' => esc_html__('Enable About Author area','kameleon'),
					'description' => '',
					'default' => $sy_options['about_author'],
					'value' => get_post_meta(get_the_ID(),'about_author',true),				
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
					'id' => 'social_share',
					'name' => 'options[social_share]',
					'title' => esc_html__('Enable Social Share links','kameleon'),
					'description' => '',
					'default' => $sy_options['social_share'],
					'value' => get_post_meta(get_the_ID(),'social_share',true),				
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
					'id' => 'ss_type',
					'name' => 'options[ss_type]',
					'required' => array(
						array('id'=>'social_share' , 'value'=>'1')
					),
					'value' => get_post_meta(get_the_ID(),'ss_type',true),					
					'default' => $sy_options['post-ss_type'],
					'title' => esc_html__('Social Share Style','kameleon'),
					'description' => '',
					'options' => array(
						'wide' => 'Wide', 
			        	'modern' => 'Modern'
					) 
				)
			),

			array(
				'type' => 'switcher',
				'values' => array(
					'id' => 'related_posts',
					'name' => 'options[related_posts]',
					'title' => esc_html__('Enable Related posts','kameleon'),
					'description' => '',
					'default' => $sy_options['related_posts'],
					'value' => get_post_meta(get_the_ID(),'related_posts',true),				
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
					'id' => 'comment_layout',
					'name' => 'options[comment_layout]',
					'value' => get_post_meta(get_the_ID(),'comment_layout',true),					
					'default' => $sy_options['comment_layout'],
					'title' => esc_html__('Choose Comment Layout','kameleon'),
					'description' => '',
					'options' => array(
						1 => 'Simple',
			        	2 => 'Bubble',
			        	3 => 'Modern',
			        	4 => 'Whatever',
			        	5 => 'Wide'
					) 
				)
			),			

		)
);

$postSection->render();

?>				