<?php 
//WooCommerce Single Product Metabox
$sy_options  = kameleon_get_options_name();
$woocommerceSection = new global_section(
		$values =  array(
			'id' => 'woocommerce-options',
			'class' => 'opt-section-container',
		),
		$elements = array(
			
			array(
				'type' => 'text',
				'values' => array(
					'id' => 'product_subtitle',
					'name' => 'options[product_subtitle]',
					'default' => '',
					'value' => get_post_meta(get_the_ID(),'product_subtitle',true),
					'title' => esc_html__('Product Subtitle','kameleon'),
					'description' => esc_html__('Add a a second title for this product','kameleon'),
				)
			),
			array(
				'type' => 'switcher',
				'values' => array(
					'id' => 'w_psingleproduct_layout_unique',
					'name' => 'options[w_psingleproduct_layout_unique]',
					'title' => esc_html__('Unique Product Page Styling','kameleon'),
					'default' => 0 ,
					'value' => get_post_meta(get_the_ID(),'w_psingleproduct_layout_unique',true),
					'description' => esc_html__('Change the styling of this product page.','kameleon'),
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
					'id' => 'social_woocommerce_active',
					'name' => 'options[social_woocommerce_active]',
					'title' => esc_html__('Enable Social Share Box','kameleon'),
					'default' => $sy_options['social_woocommerce_active'] ,
					'value' => get_post_meta(get_the_ID(),'social_woocommerce_active',true),
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
					'id' => 'w_psingleproduct_layout',
					'name' => 'options[w_psingleproduct_layout]',
					'required' => array(
						array('id'=>'w_psingleproduct_layout_unique' , 'value'=>'1'),											
					),	
					'title' => esc_html__('Modern Product Layout','kameleon'),
					'default' => $sy_options['w_psingleproduct_layout'] ,
					'value' => get_post_meta(get_the_ID(),'w_psingleproduct_layout',true),
					'description' => esc_html__('Apply the Modern Product Look.','kameleon'),
					'on' => array(
						'text' => 'ON',
						'val' => 'modern'
					),
					'off' => array(
						'text' => 'OFF',
						'val' => 'normal'
					)	
				)
			),

			

			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'w_psingleproduct_modern_imagebg',
					'name' => 'options[w_psingleproduct_modern_imagebg]',
					'required' => array(
						array('id'=>'w_psingleproduct_layout_unique' , 'value'=>'1'),											
						array('id'=>'w_psingleproduct_layout' , 'value'=>'modern'),											
					),	
					'default' => '#EDEDED',
					'value' => get_post_meta(get_the_ID(),'w_psingleproduct_modern_imagebg',true),
					'title' => esc_html__('Background Color for image section','kameleon'),
					'description' => esc_html__('Choose the background color for the product image section','kameleon'),
				)
			),
			//WooCommerce Single Product Info Colors
			array(
				'type' => 'message',
				'values' => array(		
					'required' => array(
						array('id'=>'w_psingleproduct_layout_unique' , 'value'=>'1'),											
						array('id'=>'w_psingleproduct_layout' , 'value'=>'modern'),											
					),																	
					'description' => esc_html__('Product Info Section Background and Text Colors','kameleon'),
				)
			),
			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'w_psingleproduct_modern_infobg',
					'name' => 'options[w_psingleproduct_modern_infobg]',
					'required' => array(
						array('id'=>'w_psingleproduct_layout_unique' , 'value'=>'1'),											
						array('id'=>'w_psingleproduct_layout' , 'value'=>'modern'),											
					),	
					'default' => '#fafafa',
					'value' => get_post_meta(get_the_ID(),'w_psingleproduct_modern_infobg',true),
					'title' => esc_html__('Background Color Info section','kameleon'),
					'description' => esc_html__('Choose the background color for the product information section','kameleon'),
				)
			),
			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'w_single_pname_color',
					'name' => 'options[w_single_pname_color]',
					'required' => array(
						array('id'=>'w_psingleproduct_layout_unique' , 'value'=>'1'),											
						array('id'=>'w_psingleproduct_layout' , 'value'=>'modern'),											
					),		
					'default' => $sy_options['w_single_pname_color'],
					'value' => get_post_meta(get_the_ID(),'w_single_pname_color',true),
					'title' => esc_html__('Product Name Color','kameleon'),
					'description' => esc_html__('Choose the text color for the product name title','kameleon'),
				)
			),
			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'w_single_psubname_color',
					'name' => 'options[w_single_psubname_color]',
					'required' => array(
						array('id'=>'w_psingleproduct_layout_unique' , 'value'=>'1'),											
						array('id'=>'w_psingleproduct_layout' , 'value'=>'modern'),											
					),	
					'default' => $sy_options['w_single_psubname_color'],
					'value' => get_post_meta(get_the_ID(),'w_single_psubname_color',true),
					'title' => esc_html__('Product Sub Title Color','kameleon'),
					'description' => esc_html__('Choose the text color for the product sub title','kameleon'),
				)
			),
			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'w_single_pprice_color',
					'name' => 'options[w_single_pprice_color]',
					'required' => array(
						array('id'=>'w_psingleproduct_layout_unique' , 'value'=>'1'),											
						array('id'=>'w_psingleproduct_layout' , 'value'=>'modern'),											
					),	
					'default' => $sy_options['w_single_pprice_color'],
					'value' => get_post_meta(get_the_ID(),'w_single_pprice_color',true),
					'title' => esc_html__('Product Price Color','kameleon'),
					'description' => esc_html__('Choose the text color for the product price','kameleon'),
				)
			),
			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'w_single_pshortdescription_color',
					'required' => array(
						array('id'=>'w_psingleproduct_layout_unique' , 'value'=>'1'),											
						array('id'=>'w_psingleproduct_layout' , 'value'=>'modern'),											
					),	
					'name' => 'options[w_single_pshortdescription_color]',
					'default' => $sy_options['w_single_pshortdescription_color'],
					'value' => get_post_meta(get_the_ID(),'w_single_pshortdescription_color',true),
					'title' => esc_html__('Product Short Description Color','kameleon'),
					'description' => esc_html__('Choose the text color for the product short description','kameleon'),
				)
			),
			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'w_single_pbutton_bgcolor',
					'name' => 'options[w_single_pbutton_bgcolor]',
					'required' => array(
						array('id'=>'w_psingleproduct_layout_unique' , 'value'=>'1'),											
						array('id'=>'w_psingleproduct_layout' , 'value'=>'modern'),											
					),	
					'default' => $sy_options['w_single_pbutton_bgcolor'],
					'value' => get_post_meta(get_the_ID(),'w_single_pbutton_bgcolor',true),
					'title' => esc_html__('Product Action Buttons Background','kameleon'),
					'description' => esc_html__('Choose the background color for the product (add to cart & wishlist) buttons','kameleon'),
				)
			),
			array(
				'type' => 'colorpicker',
				'values' => array(
					'id' => 'w_single_pbutton_border_color',
					'name' => 'options[w_single_pbutton_border_color]',
					'required' => array(
						array('id'=>'w_psingleproduct_layout_unique' , 'value'=>'1'),											
						array('id'=>'w_psingleproduct_layout' , 'value'=>'modern'),											
					),	
					'default' => $sy_options['w_single_pbutton_border_color'],
					'value' => get_post_meta(get_the_ID(),'w_single_pbutton_border_color',true),
					'title' => esc_html__('Product Action Buttons Border Color','kameleon'),
					'description' => esc_html__('Choose the border color for the product (add to cart & wishlist) buttons','kameleon'),
				)
			),			
		)
	);	
	$woocommerceSection->render();
?>