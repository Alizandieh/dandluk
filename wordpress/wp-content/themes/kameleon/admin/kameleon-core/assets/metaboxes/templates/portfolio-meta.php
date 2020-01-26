<?php 
//Configuration Metabox
$portfolioSection = new global_section(
	$values =  array(
		'id' => 'portfolio-options',
		'class' => 'opt-section-container',
	),
	$elements = array(
		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'folio_composer',
				'name' => 'options[folio_composer]',
				'title' => esc_html__('Enable Visual Composer Content','kameleon'),
				'description' => esc_html__('Check ON if you are adding content using Visual Composer Builder.','kameleon'),
				'default' => 0,
				'value' => get_post_meta(get_the_ID(),'folio_composer',true),				
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
				'id' => 'folio_info',
				'name' => 'options[folio_info]',
				'title' => esc_html__('Enable Portfolio Information area','kameleon'),
				'description' => esc_html__('You can choose to hide the information hidden.','kameleon'),
				'default' => 1,
				'value' => get_post_meta(get_the_ID(),'folio_info',true),				
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
				'id' => 'folio_layout',
				'name' => 'options[folio_layout]',
				'value' => get_post_meta(get_the_ID(),'folio_layout',true),					
				'default' => 'bottom',
				'title' => esc_html__('Portfolio Information Position','kameleon'),
				'description' => esc_html__('Choose where to put the portfolio information','kameleon'),
				'options' => array(
					'left' => 'Left', 
		       		'bottom' => 'Bottom',
		       		'right' => 'Right'
				) 
			)
		),

		array(
			'type' => 'text',
			'values' => array(
				'id' => 'folio_link',
				'name' => 'options[folio_link]',
				'default' => '',
				'value' => get_post_meta(get_the_ID(),'folio_link',true),
				'title' => esc_html__('Project Link','kameleon'),
				'description' => '',
			)
		),

		array(
			'type' => 'uploader_multiple',
			'values' => array(
				'id' => 'folio_gallery',
				'name' => 'options[folio_gallery]',
				'default' => '',
				'value' => get_post_meta(get_the_ID(),'folio_gallery',true),
				'title' => esc_html__('Portfolio Gallery','kameleon'),
				'description' => esc_html__('Portfolio Gallery','kameleon'),
			)
		),

		array(
			'type' => 'selectmodern',
			'values' => array(								
				'id' => 'folio_gallery_type',
				'name' => 'options[folio_gallery_type]',
				'value' => get_post_meta(get_the_ID(),'folio_gallery_type',true),					
				'default' => 'none',
				'title' => esc_html__('Portfolio Gallery Style','kameleon'),
				'description' => esc_html__('Choose A Style to be applied for the gallery','kameleon'),
				'options' => array(
					'none' => 'None', 
		       		'normal-slider' => 'Normal Slider',
		       		'thumbnails' => 'Thumbnails'
				) 
			)
		),



		array(
			'type' => 'text',
			'values' => array(
				'id' => 'folio_client',
				'name' => 'options[folio_client]',
				'default' => '',
				'value' => get_post_meta(get_the_ID(),'folio_client',true),
				'title' => esc_html__('Client Name','kameleon'),
				'description' => esc_html__('If more than one separate by coma (,)','kameleon'),
			)
		),
		

		array(
			'type' => 'textarea',
			'values' => array(
				'id' => 'folio_video_embed',
				'name' => 'options[folio_video_embed]',
				'default' => '',
				'value' => get_post_meta(get_the_ID(),'folio_video_embed',true),
				'title' => esc_html__('Portfolio Embed Video','kameleon'),
				'description' => esc_html__('External hosted video (Youtube/Vimeo...) Embed code','kameleon'),
			)
		),

		array(
			'type' => 'selectmodern',
			'values' => array(								
				'id' => 'folio_masonry',
				'name' => 'options[folio_masonry]',
				'value' => get_post_meta(get_the_ID(),'folio_masonry',true),					
				'default' => 'foliomas-normal',
				'title' => esc_html__('Size','kameleon'),
				'description' => esc_html__('Choose portfolio item size','kameleon'),
				'options' => array(
					'foliomas-normal' => 'Normal', 
		       		'foliomas-wide' => 'Wide',
		       		'foliomas-big' => 'Big'
				) 
			)
		),
		array(
			'type' => 'switcher',
			'values' => array(
				'id' => 'folio_social',
				'name' => 'options[folio_social]',
				'title' => esc_html__('Enable Social Share','kameleon'),
				'default' => 1 ,
				'value' => get_post_meta(get_the_ID(),'folio_social',true),
				'description' => esc_html__('Enable social share.','kameleon'),
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
						array('id'=>'folio_social' , 'value'=>'1')
					),
					'value' => get_post_meta(get_the_ID(),'ss_type',true),					
					'default' => $sy_options['portfolio-ss_type'],
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
				'id' => 'folio_related',
				'name' => 'options[folio_related]',
				'title' => esc_html__('Enable Relared Projects','kameleon'),
				'default' => 0 ,
				'value' => get_post_meta(get_the_ID(),'folio_related',true),
				'description' => esc_html__('Enable related projects.','kameleon'),
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

	)
);

$portfolioSection->render();


?>		