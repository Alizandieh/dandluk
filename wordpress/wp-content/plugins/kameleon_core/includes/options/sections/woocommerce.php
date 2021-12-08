<?php 

/* ================================================================== *\
   ==                        S E C T I O N                         ==
   ==============        W O O C O M M E R C E         ============== 
\* ================================================================== */

$sections[] = array(
        'id' => 'woocommerce_section',
        'title' => 'WooCommerce',
		'icon' => 'fa fa-shopping-cart',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('WooCommerce Shop Settings', 'kameleon'),
        'fields' => array(      
        	array(		        
        		'id' =>'product_home_page' ,
		        'type' => 'text',
		        'title' => esc_html__('Products Home Page', 'kameleon'), 		        
		        'subtitle' => esc_html__('Enter the home page for the products list', 'kameleon'), 		        
		        'default' => ''
		    ),  
        	array(
		        'id' => 'sidebar_woocommerce_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Sidebar Woocommerce Shop Page', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ),
		    	
        	array(
        		'id' => 'sidebar_woocommerce_position',
		        'type' => 'button_set',
		    	'required' => array('sidebar_woocommerce_active', '=' , '1'),
		        'title' => esc_html__('Woocommerce Shop Sidebar Position', 'kameleon'), 
		        'options' => array(
			        'left' => 'Left', 
			        'right' => 'Right'
			     ), 
		        'default' => 'right',	
        	),

        	//Product List Style
        	array(
	       		'id' => 'w_product_style',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('WooCommerce Product Loop List Style', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('WooCommerce Product Loop List Styling and Colors ', 'kameleon'),
	        ), 

			array(
	        	'id' => 'w_loop_pname_size',
			    'type' => 'slider',			    
		        'display_value' => 'text',
			    'title' => esc_html__('Product Name Font Size', 'kameleon'),			   
			    'default'  => '15',
				'min'      => '0',
				'step'     => '1',
				'max'      => '30',	
	        ),

			array(
			    'id' => 'w_loop_pname_color',
			    'type' => 'color',		
			    'title' => esc_html__('Product Name Color', 'kameleon'),			    
				'default' => '#444',
				'validate' => 'color'
			),

			array(
	        	'id' => 'w_loop_psubname_size',
			    'type' => 'slider',			    
		        'display_value' => 'text',
			    'title' => esc_html__('Product Sub Title Font Size', 'kameleon'),			   
			    'default'  => '13',
				'min'      => '0',
				'step'     => '1',
				'max'      => '20',	
	        ),

			array(
			    'id' => 'w_loop_psubname_color',
			    'type' => 'color',		
			    'title' => esc_html__('Product Subtitle Color', 'kameleon'),			    
				'default' => '#999',
				'validate' => 'color'
			),

			array(
			    'id' => 'w_loop_pborder_color',
			    'type' => 'color',		
			    'title' => esc_html__('Product Border Color', 'kameleon'),			    
				'default' => '#eee',
				'validate' => 'color'
			),

			array(
			    'id' => 'w_loop_pbutton_background',
			    'type' => 'color',		
			    'title' => esc_html__('Product "Add" Buttons Background', 'kameleon'),			    
				'default' => '#222',
				'validate' => 'color'
			),	

			array(
			    'id' => 'w_loop_pbutton_color',
			    'type' => 'color',		
			    'title' => esc_html__('Product "Add" Buttons Color', 'kameleon'),			    
				'default' => '#fff',
				'validate' => 'color'
			),	

			array(
			    'id' => 'w_loop_pbutton_border_color',
			    'type' => 'color',		
			    'title' => esc_html__('Product "Add" Buttons Border Color', 'kameleon'),			    
				'default' => '#333',
				'validate' => 'color'
			),				

		)
	);	
	

	/*	--------------------------------
		----  P A G I N A T I O N   ----
	 	--------------------------------*/
	$sections[] = array(
        'title' => 'Pagination',
        'id' => 'woocommerce_pagination_section',        
		'icon' => 'fa fa-ellipsis-h',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('WooCommerce Pagination Styling & Colors', 'kameleon'),
        'subsection' => true,
        'fields' => array(
        	//Pagination Settings
        	array(
	       		'id' => 'w_pagination_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('WooCommerce Products Pagination', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('WooCommerce Products Pagination Styling ', 'kameleon'),
	        ), 

        	array(
			    'id'       => 'w_pagination_style',
			    'type'     => 'image_select',
			    'title'    => esc_html__('WooCommerce Products Pagination Style', 'kameleon'), 
			    'subtitle' => esc_html__('Choose the pagination style for the woocommerce page shop page', 'kameleon'),
			    'options'  => array(
			        'pagination_circle' => array(
							'alt' => 'Pagination Circle Style',
							'img' => KM_PLUGIN_URL .'kameleon_core/assets/images/circle.jpg',
					),
					'pagination_square' => array(
							'alt' => 'Pagination Square Style',
							'img' => KM_PLUGIN_URL .'kameleon_core/assets/images/square.jpg',
					),
					'pagination_rhombus' => array(
							'alt' => 'Pagination Rhombus Style',
							'img' => KM_PLUGIN_URL .'kameleon_core/assets/images/rhombus.jpg',
					),
					'pagination_line_top' => array(
							'alt' => 'Page Line Top Style',
							'img' => KM_PLUGIN_URL .'kameleon_core/assets/images/top.jpg',
					),
					'pagination_line_bottom' => array(
							'alt' => 'Page Line Bottom Style',
							'img' => KM_PLUGIN_URL .'kameleon_core/assets/images/bottom.jpg',
					),
					'pagination_line_center' => array(
							'alt' => 'Page Line Center Style',
							'img' => KM_PLUGIN_URL .'kameleon_core/assets/images/center.jpg',
					),

			    ),
			    'default' => 'pagination_circle'
			),

        	array(
		        'id' => 'w_pagination_align',
		        'type' => 'select',
		        'title' => esc_html__('Pagination Links Align', 'kameleon'), 		       
		        'options' => array(
		        	'left' => 'Left',
		        	'center' => 'Center',
		        	'right' => 'Right'
		        ),
				
				'default' => 'center'
		    ),

        	array(
	        	'id' => 'w_pagination_font_size',
			    'type' => 'slider',			    
		        'display_value' => 'text',
			    'title' => esc_html__('Font Size', 'kameleon'),			   
			    'default'  => '14',
				'min'      => '0',
				'step'     => '1',
				'max'      => '22',	
	        ),

        	array(
	        	'id' => 'w_pagination_link_size',
			    'type' => 'slider',			    
		        'display_value' => 'text',
			    'title' => esc_html__('Button Link Size', 'kameleon'),			   
			    'default'  => '35',
				'min'      => '0',
				'step'     => '1',
				'max'      => '50',	
	        ),

	        array(
	        	'id' => 'w_pagination_link_margin',
			    'type' => 'slider',			    
		        'display_value' => 'text',
			    'title' => esc_html__('Button Link Margins', 'kameleon'),			   
			    'default'  => '5',
				'min'      => '0',
				'step'     => '1',
				'max'      => '30',	
	        ),


        	array(
	        	'id' => 'w_pagination_border_width',
			    'type' => 'slider',
			    'required' => array('w_pagination_style','!=','pagination_rhombus'),
		        'display_value' => 'text',
			    'title' => esc_html__('Border Width', 'kameleon'),			   
			    'default'  => '1',
				'min'      => '0',
				'step'     => '1',
				'max'      => '10',	
	        ),

	        array(
			    'id' => 'w_pagination_border_color',
			    'type' => 'color',
			    'required' => array('w_pagination_style','!=','pagination_rhombus'),
			    'title' => esc_html__('Border Color', 'kameleon'),			    
				'default' => '#f5f5f5',
				'validate' => 'color'
			), 

	        array(
			    'id' => 'w_pagination_activated_color',
			    'type' => 'color',
			    'required' => array( 
			    		array('w_pagination_style','!=','pagination_line_top'), 
			    		array('w_pagination_style','!=','pagination_line_bottom'),
			    		array('w_pagination_style','!=','pagination_line_center')
			    ),
			    'title' => esc_html__('Activated Link Text Color(current page)', 'kameleon'),			    
				'default' => '#fff',
				'validate' => 'color'
			),

			array(
			    'id' => 'w_pagination_deactivated_bg_color',
			    'type' => 'color',
			    'required' => array( 
			    		array('w_pagination_style','!=','pagination_line_top'), 
			    		array('w_pagination_style','!=','pagination_line_bottom'),
			    		array('w_pagination_style','!=','pagination_line_center')			    		
			    ),
			    'title' => esc_html__('Deactivated Link Background Color', 'kameleon'),			    
				'default' => '#fff',
				'validate' => 'color'
			), 
			array(
			    'id' => 'w_pagination_deactivated_color',
			    'type' => 'color',
			    'required' => array( 
			    		array('w_pagination_style','!=','pagination_line_top'), 
			    		array('w_pagination_style','!=','pagination_line_bottom'),
			    		array('w_pagination_style','!=','pagination_line_center')			    		
			    ),
			    'title' => esc_html__('Deactivated Link Text Color', 'kameleon'),			    
				'default' => '#333',
				'validate' => 'color'
			), 

        )
    );


	/*	--------------------------------
		- S I N G L E   P R O D U C T  -
	 	--------------------------------*/
	$sections[] = array(
        'title' => 'Single Product',
        'id' => 'woocommerce_single_section',                
		'icon' => 'fa fa-product-hunt',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('WooCommerce Single Product Styling & Colors', 'kameleon'),
        'subsection' => true,
        'fields' => array(
        	//From Here 
			//Single Product Page Styling			
        	array(
	       		'id' => 'w_psingleproduct_style',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('WooCommerce Single Product Page Styling', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('WooCommerce Single Product Page Styling and Colors ', 'kameleon'),
	        ), 
	        array(
        		'id' => 'w_psingleproduct_layout',
		        'type' => 'button_set',
		        'title' => esc_html__('Single Product Style Layout', 'kameleon'), 
		        'options' => array(
			        'normal' => 'Normal', 
			        'modern' => 'Modern'
			     ), 
		        'default' => 'normal',	
        	),
        

        	array(
			    'id' => 'w_psingleproduct_modern_imagebg',
			    'type' => 'color',	
		    	'required' => array('w_psingleproduct_layout', '=' , 'modern'),			    	
			    'title' => esc_html__('Modern Image Section Background Color', 'kameleon'),			    
				'default' => '#EDEDED',
				'validate' => 'color'
			),

        	array(
			    'id' => 'w_psingleproduct_modern_infobg',
			    'type' => 'color',	
		    	'required' => array('w_psingleproduct_layout', '=' , 'modern'),			    	
			    'title' => esc_html__('Modern Info Section Background Color', 'kameleon'),			    
				'default' => '#fafafa',
				'validate' => 'color'
			),

        	array(
	        	'id' => 'w_single_pname_size',
			    'type' => 'slider',			    
		        'display_value' => 'text',
			    'title' => esc_html__('Product Name Font Size', 'kameleon'),			   
			    'default'  => '26',
				'min'      => '0',
				'step'     => '1',
				'max'      => '38',	
	        ),

	        array(
			    'id' => 'w_single_pname_color',
			    'type' => 'color',		
			    'title' => esc_html__('Product Name Color', 'kameleon'),			    
				'default' => '#444',
				'validate' => 'color'
			),	

	        array(
	        	'id' => 'w_single_psubname_size',
			    'type' => 'slider',			    
		        'display_value' => 'text',
			    'title' => esc_html__('Sub Title Font Size', 'kameleon'),			   
			    'default'  => '17',
				'min'      => '0',
				'step'     => '1',
				'max'      => '27',	
	        ),

	        array(
			    'id' => 'w_single_psubname_color',
			    'type' => 'color',		
			    'title' => esc_html__('Sub Title Color', 'kameleon'),			    
				'default' => '#999',
				'validate' => 'color'
			),	

	        array(
	        	'id' => 'w_single_pprice_size',
			    'type' => 'slider',			    
		        'display_value' => 'text',
			    'title' => esc_html__('Price Font Size', 'kameleon'),			   
			    'default'  => '22',
				'min'      => '0',
				'step'     => '1',
				'max'      => '38',	
	        ),

	         array(
			    'id' => 'w_single_pprice_color',
			    'type' => 'color',		
			    'title' => esc_html__('Price Color', 'kameleon'),			    
				'default' => '#333',
				'validate' => 'color'
			),


	        array(
	        	'id' => 'w_single_pshortdescription_size',
			    'type' => 'slider',			    
		        'display_value' => 'text',
			    'title' => esc_html__('Short Description Text Font Size', 'kameleon'),			   
			    'default'  => '17',
				'min'      => '0',
				'step'     => '1',
				'max'      => '27',	
	        ),

	        array(
			    'id' => 'w_single_pshortdescription_color',
			    'type' => 'color',		
			    'title' => esc_html__('Short Description Color', 'kameleon'),			    
				'default' => '#777',
				'validate' => 'color'
			),

			array(
	        	'id' => 'w_single_pfulldescription_size',
			    'type' => 'slider',			    
		        'display_value' => 'text',
			    'title' => esc_html__('Full Description Text Font Size', 'kameleon'),			   
			    'default'  => '15',
				'min'      => '0',
				'step'     => '1',
				'max'      => '27',	
	        ),

	        array(
			    'id' => 'w_single_pfulldescription_color',
			    'type' => 'color',		
			    'title' => esc_html__('Full Description Color', 'kameleon'),			    
				'default' => '#777',
				'validate' => 'color'
			),	
        )
    );

	/*	--------------------------------
		- 	S I N G L E   P R O D U C T   E L E M E N T S -
	 	--------------------------------*/
	$sections[] = array(
        'title' => 'Single Product Elements',
		'icon' => 'fa fa-object-ungroup',
        'id' => 'woocommerce_singleelements_section',        		
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('WooCommerce Single Product Elements Styling & Colors', 'kameleon'),
        'subsection' => true,
        'fields' => array(
        	//Single Product Page Button Styling
        	array(
	       		'id' => 'w_psingleproduct_button',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Single Product Page Buttons Styling', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Add to Cart button styling ', 'kameleon'),
	        ), 

        	array(
	        	'id' => 'w_single_pheightbutton_size',
			    'type' => 'slider',			    
		        'display_value' => 'text',
			    'title' => esc_html__('Button Height (px)', 'kameleon'),			   
			    'default'  => '50',
				'min'      => '35',
				'step'     => '1',
				'max'      => '70',	
	        ),

	        array(
	        	'id' => 'w_single_pbutton_fontsize',
			    'type' => 'slider',			    
		        'display_value' => 'text',
			    'title' => esc_html__('Button Font Size (px)', 'kameleon'),			   
			    'default'  => '13',
				'min'      => '0',
				'step'     => '1',
				'max'      => '22',	
	        ),

	        array(
			    'id' => 'w_single_pbutton_bgcolor',
			    'type' => 'color',		
			    'title' => esc_html__('Button Background Color', 'kameleon'),			    
				'default' => '#222',
				'validate' => 'color'
			),	

			array(
			    'id' => 'w_single_pbutton_textcolor',
			    'type' => 'color',		
			    'title' => esc_html__('Button Text Color', 'kameleon'),			    
				'default' => '#fff',
				'validate' => 'color'
			),	

			array(
	        	'id' => 'w_single_pbutton_border_thickness',
			    'type' => 'slider',			    
		        'display_value' => 'text',
			    'title' => esc_html__('Button Border Width', 'kameleon'),			   
			    'default'  => '1',
				'min'      => '1',
				'step'     => '1',
				'max'      => '4',	
	        ),

	        array(
			    'id' => 'w_single_pbutton_border_color',
			    'type' => 'color',		
			    'title' => esc_html__('Button Border Color', 'kameleon'),			    
				'default' => 'transparent',
				'validate' => 'color'
			),	

			array(
	        	'id' => 'w_single_pbutton_border_radius',
			    'type' => 'slider',			    
		        'display_value' => 'text',
			    'title' => esc_html__('Button Border Radius', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '20',	
	        ),


			//Single Product Margins & Borders 
        	array(
	       		'id' => 'w_psingleproduct_margin',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Single Product Element Margins & Borders', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Margins & Borders for different product page elements  ', 'kameleon'),
	        ), 	

	        array(
			    'id' => 'w_single_pelements_border',
			    'type' => 'color',		
			    'title' => esc_html__('Elements Border Color', 'kameleon'),			    
				'default' => '#eee',
				'validate' => 'color'
			),	

			array(
			    'id'=> 'w_single_pname_margins',
			    'type'=> 'spacing',
			    'mode'=> 'margin',
			    'units' => array('px'),			    
			    'left'=> false,
			    'right'=> false,			  
			    'title'=> esc_html__('Product Name Margins', 'kameleon'),
			    'default'=> array(
			        'margin-top'     => '0px', 
			        'margin-bottom'  => '10px', 
			        'units'          => 'px', 
			    )
			),

			array(
			    'id'=> 'w_single_psubtitle_margins',
			    'type'=> 'spacing',
			    'mode'=> 'margin',
			    'units' => array('px'),			    
			    'left'=> false,
			    'right'=> false,			  
			    'title'=> esc_html__('Product Subtitle Margins', 'kameleon'),
			    'default'=> array(
			        'margin-top'     => '0px', 
			        'margin-bottom'  => '5px', 
			        'units'          => 'px', 
			    )
			),

			array(
			    'id'=> 'w_single_pprice_margins',
			    'type'=> 'spacing',
			    'mode'=> 'margin',
			    'units' => array('px'),			    
			    'left'=> false,
			    'right'=> false,			  
			    'title'=> esc_html__('Product Price Margins', 'kameleon'),
			    'default'=> array(
			        'margin-top'     => '0px', 
			        'margin-bottom'  => '0px', 
			        'units'          => 'px', 
			    )
			),

			array(
			    'id'=> 'w_single_pshortdescription_margins',
			    'type'=> 'spacing',
			    'mode'=> 'margin',
			    'units' => array('px'),			    
			    'left'=> false,
			    'right'=> false,			  
			    'title'=> esc_html__('Product Short Description Margins', 'kameleon'),
			    'default'=> array(
			        'margin-top'     => '15px', 
			        'margin-bottom'  => '10px', 
			        'units'          => 'px', 
			    )
			),

			array(
			    'id'=> 'w_single_paction_margins',
			    'type'=> 'spacing',
			    'mode'=> 'margin',
			    'units' => array('px'),			    
			    'left'=> false,
			    'right'=> false,			  
			    'title'=> esc_html__('Product Action Buttons Margins', 'kameleon'),
			    'default'=> array(
			        'margin-top'     => '0px', 
			        'margin-bottom'  => '20px', 
			        'units'          => 'px', 
			    )
			),
			array(
			    'id'=>'w_cc_register_message',
			    'type' => 'textarea',
			    'title' => esc_html__('Message For New Users', 'kameleon'), 
			    'subtitle' => esc_html__('A message that will be shown on register page for new users', 'kameleon'),
			    'validate' => 'html_custom',
			    'default' => esc_html__('A message that will be shown on register page for new users', 'kameleon'),
			    'allowed_html' => array(
			        'a' => array(
			            'href' => array(),
			            'title' => array(),
			            'target' => array()
			        ),
			        'br' => array(),
			        'em' => array(),
			        'strong' => array()
			    )
			),
        )
    );

    /*	--------------------------------
		--   C A R T   S T Y L I N G  --
	 	--------------------------------*/
	$sections[] = array(
        'title' => 'Hover Cart',
		'icon' => 'fa fa-credit-card',
        'id' => 'woocommerce_hovervart_section',        		
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('WooCommerce Hover Cart Styling & Colors', 'kameleon'),
        'subsection' => true,
        'fields' => array(
        	//Ajax Cart Design
        	array(
	       		'id' => 'w_cart_ajax',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('WooCommerce Hover Cart', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('WooCommerce Cart Styling and Colors ', 'kameleon'),
	        ), 

        	array(
		        'id' => 'w_cart_enabled',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Woocommerce Hover Cart', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),
		    
		    //Hover Cart Edge	
        	array(
		        'id' => 'w_cart_position',
		        'type' => 'select',
		        'title' => esc_html__('WooCommerce Cart Position (edge)', 'kameleon'), 		       
		        'options' => array(
		        	'right' => 'Fixed at Right',
		        	'left' => 'Fixed at Left'
		        ),
				
				'default' => 'right'
		    ),

        	 
        	array(
			    'id' => 'w_cart_background_color',
			    'type' => 'color',		
			    'title' => esc_html__('Cart Background Color (edge)', 'kameleon'),			    
				'default' => '#222',
				'validate' => 'color'
			), 

			array(
			    'id' => 'w_cart_pname_color',
			    'type' => 'color',		
			    'title' => esc_html__('Cart Product Name Color (edge)', 'kameleon'),			    
				'default' => '#fff',
				'validate' => 'color'
			), 

			array(
			    'id' => 'w_cart_pprice_color',
			    'type' => 'color',		
			    'title' => esc_html__('Cart Product Price Color (edge)', 'kameleon'),			    
				'default' => '#ddd',
				'validate' => 'color'
			), 

			array(
			    'id' => 'w_cart_border_color',
			    'type' => 'color',		
			    'title' => esc_html__('Cart Border Color (edge)', 'kameleon'),			    
				'default' => '#333',
				'validate' => 'color'
			), 

			array(
			    'id' => 'w_cart_total_background',
			    'type' => 'color',		
			    'title' => esc_html__('Cart Total Area Background (edge)', 'kameleon'),			    
				'default' => '#1e1e1e',
				'validate' => 'color'
			),

			 //Hover Cart Header	        	         
        	array(
			    'id' => 'w_cart_background_color_header',
			    'type' => 'color',		
			    'title' => esc_html__('Cart Background Color (header)', 'kameleon'),			    
				'default' => '#fff',
				'validate' => 'color'
			), 

			array(
			    'id' => 'w_cart_pname_color_header',
			    'type' => 'color',		
			    'title' => esc_html__('Cart Product Name Color (header)', 'kameleon'),			    
				'default' => '#444',
				'validate' => 'color'
			), 

			array(
			    'id' => 'w_cart_pprice_color_header',
			    'type' => 'color',		
			    'title' => esc_html__('Cart Product Price Color (header)', 'kameleon'),			    
				'default' => '#666',
				'validate' => 'color'
			), 

			array(
			    'id' => 'w_cart_border_color_header',
			    'type' => 'color',		
			    'title' => esc_html__('Cart Border Color (header)', 'kameleon'),			    
				'default' => '#eee',
				'validate' => 'color'
			), 

			array(
			    'id' => 'w_cart_total_background_header',
			    'type' => 'color',		
			    'title' => esc_html__('Cart Total Area Background (header)', 'kameleon'),			    
				'default' => '#fbfbfb',
				'validate' => 'color'
			),
        )
    );


	/*	--------------------------------
		- 	O T H E R   P A G E S   S T Y L I N G -
	 	--------------------------------*/
	/*$sections[] = array(
        'title' => 'Other Pages',
		'icon' => 'fa fa-columns',
        'id' => 'woocommerce_other_pages_section',        		
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('WooCommerce Different Pages Styling', 'kameleon'),
        'subsection' => true,
        'fields' => array(
        	//WooCommece Checkout and Cart Pages 
        	array(
	       		'id' => 'w_cartcheckout_button',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Checkout, Cart & Account Pages Global Styling', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Apply the global styling for these pages as (Background Colors,  Buttons Color Scheme, Text Color, Input Styling)', 'kameleon'),
	        ), 	       			
        )
    );*/


	//--------------------------------------
	//Previous Next Settings
	//--------------------------------------
	$sections[] = array(
        'title' => 'Next / Previous Styling',
		'icon' => 'fa fa-arrows-h',
        'id' => 'woocommerce_NextPrevious_section',        		
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Next / Previous area styling', 'kameleon'),
        'subsection' => true,
        'fields' => array(        	
        	array(
	       		'id' => 'woocommerce_next_previous_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Next / Previous Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('WooCommerce Next / Previous Styling ', 'kameleon'),
	        ), 			
			array(
		        'id' => 'product-pn_enabled',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Next & Previous WooCommerce', 'kameleon'), 
		        'subtitle' => esc_html__('Enable Next / Previous', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),

			array(
		        'id' => 'product-pn_stype',
		        'type' => 'select',
		        'title' => esc_html__('Next / Previous Styling', 'kameleon'), 		       
		        'options' => array(
		        	'type_1'	=> 'Edge Buttons',
		        	'type_2' 	=> 'Basic'
		        ),				
				'default' => 'type_1'
		    ),

		    //---------------- Type 1
		    //Syling for the Edge Buttons
		    //----------------
			array(
			    'id' => 'product-pn_type1_background',
			    'type' => 'color',
			    'required' => array('product-pn_stype','=','type_1'),
			    'title' => esc_html__('Button Background Color (edge)', 'kameleon'),			    
				'default' => '#222',
				'validate' => 'color'
			),
			array(
	        	'id' => 'product-pn_type1_height',
			    'required' => array('product-pn_stype','=','type_1'),
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Button Height', 'kameleon'),			   
			    'default'  => '40',
				'min'      => '0',
				'step'     => '1',
				'max'      => '150',	
	        ), 		 
	        array(
	        	'id' => 'product-pn_type1_width',
			    'required' => array('product-pn_stype','=','type_1'),
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Button Width', 'kameleon'),			   
			    'default'  => '40',
				'min'      => '0',
				'step'     => '1',
				'max'      => '150',	
	        ), 		    	
			array(
			    'id' => 'product-pn_type1_color',
			    'type' => 'color',
			    'required' => array('product-pn_stype','=','type_1'),
			    'title' => esc_html__('Arrow & Text Color (edge)', 'kameleon'),			    
				'default' => '#fff',
				'validate' => 'color'
			), 		    	
			array(
	        	'id' => 'product-pn_type1_fontsize',
			    'required' => array('product-pn_stype','=','type_1'),
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Font Size (edge)', 'kameleon'),			   
			    'default'  => '14',
				'min'      => '0',
				'step'     => '1',
				'max'      => '22',	
	        ), 		
	        array(
	        	'id' => 'product-pn_type1_arrowsize',
			    'required' => array('product-pn_stype','=','type_1'),
			    'type' => 'slider',
		        'display_value' => 'text',
			    'title' => esc_html__('Arrow Size (edge)', 'kameleon'),			   
			    'default'  => '20',
				'min'      => '0',
				'step'     => '1',
				'max'      => '44',	
	        ), 
			array(
		        'id' => 'product-pn_type1_thumbnail_enabled',
			    'required' => array('product-pn_stype','=','type_1'),
		        'type' => 'switch',
		        'title' => esc_html__('Enable WooCommerce Thumbnail (edge)', 'kameleon'), 
		        'subtitle' => esc_html__('Include WooCommerce Thumbnail', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),

			array(
	        	'id' => 'product-pn_type1_thumbnail_size',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'required' => array('product-pn_stype','=','type_1'),
			    'title' => esc_html__('Thumbnail Size (edge)', 'kameleon'),			   
			    'default'  => '40',
				'min'      => '0',
				'step'     => '1',
				'max'      => '150',	
	        ), 	
		    array(
	        	'id' => 'product-pn_type1_thumbnail_radius',
			    'type' => 'slider',
			    'required' => array('product-pn_stype','=','type_1'),
		        'display_value' => 'text',
			    'title' => esc_html__('Thumbnail Radius Size (edge)', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ), 		

	        

	        //---------------- Type 2
		    //Syling for Basic Style
		    //----------------
		    
		    array(
		        'id' => 'product-pn_type2_arrowtype',
			    'required' => array('product-pn_stype','=','type_2'),
		        'type' => 'select',
		        'title' => esc_html__('Arrow Style (basic)', 'kameleon'), 		       
		        'options' => $arrowStyle,				
				'default' => 'style1'
		    ),
			array(
			    'id' => 'product-pn_type2_arrowcolor',
			    'type' => 'color',
			    'required' => array('product-pn_stype','=','type_2'),
			    'title' => esc_html__('Arrow Color (basic)', 'kameleon'),			    
				'default' => '#bbb',
				'validate' => 'color'
			),
			array(
	        	'id' => 'product-pn_type2_arrowsize',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'required' => array('product-pn_stype','=','type_2'),
			    'title' => esc_html__('Arrow Size (basic)', 'kameleon'),			   
			    'default'  => '50',
				'min'      => '0',
				'step'     => '1',
				'max'      => '180',	
	        ), 	

	        array(
	        	'id' => 'product-pn_type2_arrowLeftMarginTop',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'required' => array('product-pn_stype','=','type_2'),
			    'title' => esc_html__('Left Arrow Margin Top (basic)', 'kameleon'),			   
			    'default'  => '4',
				'min'      => '-50',
				'step'     => '1',
				'max'      => '50',	
	        ), 

	        array(
	        	'id' => 'product-pn_type2_arrowRightMarginTop',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'required' => array('product-pn_stype','=','type_2'),
			    'title' => esc_html__('Right Arrow Margin Top (basic)', 'kameleon'),			   
			    'default'  => '-5',
				'min'      => '-50',
				'step'     => '1',
				'max'      => '50',	
	        ), 	

	        array(
		        'id' => 'product-pn_type2_title_enabled',
			    'required' => array('product-pn_stype','=','type_2'),
		        'type' => 'switch',
		        'title' => esc_html__('Show WooCommerce Title (basic)', 'kameleon'), 
		        'subtitle' => esc_html__('Include WooCommerce Title', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ),

		    array(
		        'id' => 'product-pn_type2_np_name_enabled',
			    'required' => array(
			    	array('product-pn_stype','=','type_2'),
			    	array('product-pn_type2_title_enabled','=','1'),
			    ),
		        'type' => 'switch',
		        'title' => esc_html__('Replace Title With Next / Previous Text', 'kameleon'), 
		        'subtitle' => esc_html__('Choose if you want instead of product title you will have Next Post', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),
		    
			array(
			    'id' => 'product-pn_type2_fontcolor',
			    'type' => 'color',
			    'required' => array(
			    	array('product-pn_stype','=','type_2'),
			    	array('product-pn_type2_title_enabled','=','1'),
			    ),
			    'title' => esc_html__('Text Color (basic)', 'kameleon'),			    
				'default' => '#777',
				'validate' => 'color'
			),
			array(
	        	'id' => 'product-pn_type2_fontsize',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'required' => array(
			    	array('product-pn_stype','=','type_2'),
			    	array('product-pn_type2_title_enabled','=','1'),
			    ),
			    'title' => esc_html__('Text Size (basic)', 'kameleon'),			   
			    'default'  => '15',
				'min'      => '0',
				'step'     => '1',
				'max'      => '35',	
	        ), 	
			array(
		        'id' => 'product-pn_type2_thumbnail_enabled',
			    'required' => array('product-pn_stype','=','type_2'),
		        'type' => 'switch',
		        'title' => esc_html__('Enable WooCommerce Thumbnail (basic)', 'kameleon'), 
		        'subtitle' => esc_html__('Include WooCommerce Thumbnail', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),
			array(
	        	'id' => 'product-pn_type2_thumbnail_size',
			    'type' => 'slider',
		        'display_value' => 'text',
			    'required' => array(
			    	array('product-pn_stype','=','type_2'),
			    	array('product-pn_type2_thumbnail_enabled','=','1'),
			    ),
			    'title' => esc_html__('Thumbnail Size (basic)', 'kameleon'),			   
			    'default'  => '30',
				'min'      => '0',
				'step'     => '1',
				'max'      => '150',	
	        ), 	
		    array(
	        	'id' => 'product-pn_type2_thumbnail_radius',
			    'type' => 'slider',
			    'required' => array(
			    	array('product-pn_stype','=','type_2'),
			    	array('product-pn_type2_thumbnail_enabled','=','1'),
			    ),
		        'display_value' => 'text',
			    'title' => esc_html__('Thumbnail Radius Size (basic)', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ), 	

		    array(
		        'id' => 'product-pn_type2_background',
		        'type' => 'background',
			    'required' => array('product-pn_stype','=','type_2'),
		        'title' => esc_html__('Wrapper Background (basic)', 'kameleon'), 		        
		        'preview' =>false,		        
				'default'  => array(
			        'background-color' => 'transparent',
			        'background-image' => '',
					'background-repeat' => '',
					'background-position' => '',
					'background-size' => '',
					'background-attachment' => '',
			    )						
		    ),  

		    array(
	        	'id' => 'product-pn_type2_height',
			    'type' => 'slider',
			    'required' => array('product-pn_stype','=','type_2'),
		        'display_value' => 'text',
			    'title' => esc_html__('Area Height (basic)', 'kameleon'),			   
			    'default'  => '30',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ), 


		    array(
			    'id'=> 'product-pn_type2_margins',
			    'type'=> 'spacing',
			    'required' => array('product-pn_stype','=','type_2'),
			    'mode'=> 'margin',
			    'units' => array('px'),			    
			    'left'=> false,
			    'right'=> false,			  
			    'title'=> esc_html__('Wrapper Margin Options (basic)', 'kameleon'),
			    'default'=> array(
			        'margin-top'     => '0px', 
			        'margin-bottom'  => '40px', 
			        'units'          => 'px', 
			    )
			),

			array(
			    'id'=> 'product-pn_type2_paddings',
			    'type'=> 'spacing',
			    'required' => array('product-pn_stype','=','type_2'),
			    'mode'=> 'padding',
			    'units' => array('px'),			    
			    'title'=> esc_html__('Wrapper Padding Options (basic)', 'kameleon'),
			    'default'=> array(
			        'padding-top'     => '0px', 
			        'padding-bottom'  => '0px', 
			        'padding-left'  => '0px', 
			        'padding-right'  => '0px', 
			        'units'          => 'px', 
			    )
			),
	         		
			array( 
			    'id'       => 'product-pn_type2_borders',
			    'type'     => 'border',
			    'all' => false,
			    'required' => array('product-pn_stype','=','type_2'),
			    'title'    => esc_html__('Wrapper Border Options (basic)', 'kameleon'),
			    'default'  => array(
			        'border-color'  => 'transparent', 
			        'border-style'  => 'solid', 
			        'border-top'    => '0px', 
			        'border-right'  => '0px', 
			        'border-bottom' => '0px', 
			        'border-left'   => '0px'
			    )
			),
			array(
		        'id' => 'product-pn_type2_gohome',
			    'required' => array('product-pn_stype','=','type_2'),
		        'type' => 'switch',
		        'title' => esc_html__('Enable Go Home Icon', 'kameleon'), 
		        'subtitle' => esc_html__('Enable Go To Product Home ', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),	
			
			array(
		        'id' => 'product-pn_type2_full',
			    'required' => array('product-pn_stype','=','type_2'),
		        'type' => 'switch',
		        'title' => esc_html__('Enable Full Width (basic)', 'kameleon'), 
		        'subtitle' => esc_html__('Enable full width section width for the basic style ', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ),	
			 array(
        		'id' => 'product-pn_type2_position',
		        'type' => 'button_set',
		        'title' => esc_html__('Position', 'kameleon'), 
		        'subtitle' => esc_html__('Choose ths position for the Previous/Next Section', 'kameleon'),
		        'options' => array(
			        'top' => 'Top', 
			        'bottom' => 'Bottom'
			     ), 
		        'default' => 'bottom',	
        	),	 	
        )
    );

	$sections[] = array(
		'id' => 'woocommerce_titlebar_section', 		
        'title' => 'Title Bar',
        'subsection' => true,
		'icon' => 'dashicons-before dashicons-slides',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('WooCommerce Title Bar Settings', 'kameleon'),
        'fields' => array(
        	array(
	       		'id' => 'shop-titlebar_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Main Shop Title Bar Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Title Bar Setting for main Shop page.', 'kameleon'),
	        ), 
        	array(
		        'id' => 'shop-titlebar_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Title Bar', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 
		    array(
		        'id' => 'shop-titlebar_unique',
		        'type' => 'switch',
			    'required' => array('shop-titlebar_active','=','1'),		        
		        'title' => esc_html__('Unique Title Bar Design', 'kameleon'), 		       
		        'subtitle' => esc_html__('Apply Unique styling for the title bar on main shop', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 
        	array(
	        	'id' => 'shop-titlebar_height',
			    'type' => 'slider',
			    'required' => array(
			    	array('shop-titlebar_active','=','1'),		        
			    	array('shop-titlebar_unique','=','1')		        
			    ),
		        'display_value' => 'text',
			    'title' => esc_html__('Title Bar Height(px)', 'kameleon'),			   
			    'default'  => '70',
				'min'      => '70',
				'step'     => '1',
				'max'      => '1000',	
	        ),
        	array(
		        'id' => 'shop-titlebar_background',
		        'type' => 'background',
		        'required' => array(
			    	array('shop-titlebar_active','=','1'),		        
			    	array('shop-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Background', 'kameleon'), 		       
		        'preview' =>false,		        
				'default'  => array(
			        'background-color' => '#f7f7f7',
			        'background-image' => '',
					'background-repeat' => '',
					'background-position' => '',
					'background-size' => '',
					'background-attachment' => '',
			    )						
		    ),		    	
		    array(
	        	'id' => 'shop-titlebar_border_thickness',
			    'type' => 'slider',
			    'required' => array(
			    	array('shop-titlebar_active','=','1'),		        
			    	array('shop-titlebar_unique','=','1')		        
			    ),
		        'display_value' => 'text',
			    'title' => esc_html__('Border (px)', 'kameleon'), 			    			   
			    'default'  => '1',
				'min'      => '0',
				'step'     => '1',
				'max'      => '10',	
	        ),
		    array(
			    'id' => 'shop-titlebar_border_color',
			    'type' => 'color',
			    'required' => array(
			    	array('shop-titlebar_active','=','1'),		        
			    	array('shop-titlebar_unique','=','1')		        
			    ),
			    'title' => esc_html__('Border Color', 'kameleon'),			    
				'default' => '#eee',
				'validate' => 'color'
			),  
        	array(
		        'id' => 'shop-path_active',
		        'type' => 'switch',
		        'required' => array(
			    	array('shop-titlebar_active','=','1'),		        
			    	array('shop-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Show Page Path', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 
        	array(
		        'id' => 'shop-titlebar_style',
		        'type' => 'select',
		        'required' => array(
			    	array('shop-titlebar_active','=','1'),		        
			    	array('shop-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Title Bar Style', 'kameleon'), 		       
		        'options' => $titlebar_style,
				'default' => 'style1'
		    ),         	
        	array(
			    'id'          => 'shop-titlebar_title_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Title Font Settings', 'kameleon'),
			    'required' => array(array('shop-titlebar_active','=','1'),array('shop-titlebar_unique','=','1')),			    
			    'google'      => false, 'font-backup' => false,'subsets'=> false,'font-family' => false,'letter-spacing' => true,'font-weight' => true,'font-style' => true,
			    'text-align' => false,'line-height' => false,'text-decoration' => false,'color' => true,'text-transform' => true,'units'=> array('px'),			   
			    'default'     => array(
			        'color' => '#777',
				    'text-transform' => 'none',
				    'letter-spacing' => '0px',
				    'font-size'   => '18px', 
			    ),
			),
			array(
			    'id'          => 'shop-titlebar_path_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Path Font Settings', 'kameleon'),
			    'required' => array(array('shop-titlebar_active','=','1'),array('shop-titlebar_unique','=','1')),
			    'google'      => false, 'font-backup' => false,'subsets'=> false,'font-family' => false,'letter-spacing' => true,'font-weight' => true,'font-style' => true,
			    'text-align' => false,'line-height' => false,'text-decoration' => false,'color' => true,'text-transform' => true,'units'=> array('px'),			   
			    'default'     => array(
			        'color' => '#aaa',
				    'text-transform' => 'none',
				    'letter-spacing' => '0px',
				    'font-size'   => '12px', 
			    ),
			),



	        //Single Product Page Title Bar
	        array(
	       		'id' => 'product-titlebar_settings',
	       		'type' => 'raw',		
	       		'title' =>esc_html__('Single Post Title Bar Settings', 'kameleon'),
	       		'full_width' => true,	   
			    'desc' => esc_html__('Title Bar Setting for single product pages. You can have a unique one for evey single product', 'kameleon'),
	        ), 
        	array(
		        'id' => 'product-titlebar_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Title Bar', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 
		    array(
		        'id' => 'product-titlebar_unique',
		        'type' => 'switch',
			    'required' => array('product-titlebar_active','=','1'),		        
		        'title' => esc_html__('Unique Title Bar Design', 'kameleon'), 		       
		        'subtitle' => esc_html__('Apply Unique styling for the title bar on products', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 0
		    ), 
        	array(
	        	'id' => 'product-titlebar_height',
			    'type' => 'slider',
			    'required' => array(
			    	array('product-titlebar_active','=','1'),		        
			    	array('product-titlebar_unique','=','1')		        
			    ),
		        'display_value' => 'text',
			    'title' => esc_html__('Title Bar Height(px)', 'kameleon'),   
			    'default'  => '70',
				'min'      => '70',
				'step'     => '1',
				'max'      => '1000',	
	        ),
        	array(
		        'id' => 'product-titlebar_background',
		        'type' => 'background',
		        'required' => array(
			    	array('product-titlebar_active','=','1'),		        
			    	array('product-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Background', 'kameleon'), 		       
		        'preview' =>false,		        
				'default'  => array(
			        'background-color' => '#f7f7f7',
			        'background-image' => '',
					'background-repeat' => '',
					'background-position' => '',
					'background-size' => '',
					'background-attachment' => '',
			    )						
		    ),		    	
		    array(
	        	'id' => 'product-titlebar_border_thickness',
			    'type' => 'slider',
			    'required' => array(
			    	array('product-titlebar_active','=','1'),		        
			    	array('product-titlebar_unique','=','1')		        
			    ),
		        'display_value' => 'text',
			    'title' => esc_html__('Border (px)', 'kameleon'), 			    			   
			    'default'  => '1',
				'min'      => '0',
				'step'     => '1',
				'max'      => '10',	
	        ),
		    array(
			    'id' => 'product-titlebar_border_color',
			    'type' => 'color',
			    'required' => array(
			    	array('product-titlebar_active','=','1'),		        
			    	array('product-titlebar_unique','=','1')		        
			    ),
			    'title' => esc_html__('Border Color', 'kameleon'),			    
				'default' => '#eee',
				'validate' => 'color'
			),          	
        	array(
		        'id' => 'product-titlebar_style',
		        'type' => 'select',
		        'required' => array(
			    	array('product-titlebar_active','=','1'),		        
			    	array('product-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Title Bar Style', 'kameleon'), 		       
		        'options' => $single_titlebar_style,
				'default' => 'style1'
		    ),         	
        	array(
			    'id'          => 'product-titlebar_title_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Title Font Settings', 'kameleon'),
			    'required' => array(array('product-titlebar_active','=','1'),array('product-titlebar_unique','=','1')),			    
			    'google'      => false, 'font-backup' => false,'subsets'=> false,'font-family' => false,'letter-spacing' => true,'font-weight' => true,'font-style' => true,
			    'text-align' => false,'line-height' => false,'text-decoration' => false,'color' => true,'text-transform' => true,'units'=> array('px'),			   
			    'default'     => array(
			        'color' => '#777',
				    'text-transform' => 'none',
				    'letter-spacing' => '0px',
				    'font-size'   => '18px', 
			    ),
			),
			
	        array(
		        'id' => 'product-path_active',
		        'type' => 'switch',
		        'required' => array(
			    	array('product-titlebar_active','=','1'),	
			    	array('product-titlebar_style','!=','style4'),		        
			    	array('product-titlebar_style','!=','style5'),		        
			    	array('product-titlebar_style','!=','style6'),		        
			    	array('product-titlebar_unique','=','1')		        
			    ),
		        'title' => esc_html__('Show Page Path', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ), 
		    array(
			    'id'          => 'product-titlebar_path_font',
			    'type'        => 'typography', 
			    'title'       => esc_html__('Path Font Settings', 'kameleon'),
			    'required' => array(array('product-titlebar_active','=','1'),	
			    	array('product-titlebar_style','!=','style4'),		        
			    	array('product-titlebar_style','!=','style5'),		        
			    	array('product-titlebar_style','!=','style6'),		        
			    	array('product-titlebar_unique','=','1')),
			    'google'      => false, 'font-backup' => false,'subsets'=> false,'font-family' => false,'letter-spacing' => true,'font-weight' => true,'font-style' => true,
			    'text-align' => false,'line-height' => false,'text-decoration' => false,'color' => true,'text-transform' => true,'units'=> array('px'),			   
			    'default'     => array(
			        'color' => '#aaa',
				    'text-transform' => 'none',
				    'letter-spacing' => '0px',
				    'font-size'   => '12px', 
			    ),
			),        	

	        //Post Next / Previous 
		    array(
			    'id' => 'product-titlebar_arrowcolor',
			    'type' => 'color',
			    'required' => array(
			    	array('product-titlebar_style','!=','style1'),		        
			    	array('product-titlebar_style','!=','style2'),		        
			    	array('product-titlebar_style','!=','style3')		        
			    ),
			    'title' => esc_html__('Arrow Color', 'kameleon'),			    
				'default' => '#bbb',
				'validate' => 'color'
			),

			array(
		        'id' => 'product-titlebar_thumbnail_enabled',			   
		        'type' => 'switch',
		        'required' => array(
			    	array('product-titlebar_style','!=','style1'),		        
			    	array('product-titlebar_style','!=','style2'),		        
			    	array('product-titlebar_style','!=','style3')		        
			    ),
		        'title' => esc_html__('Enable Post Thumbnail', 'kameleon'), 
		        'subtitle' => esc_html__('Include Post Thumbnail', 'kameleon'),
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),

			array(
	        	'id' => 'product-titlebar_thumbnail_size',
			    'type' => 'slider',
		        'display_value' => 'text',
		        'required' => array(
			    	array('product-titlebar_style','!=','style1'),		        
			    	array('product-titlebar_style','!=','style2'),		        
			    	array('product-titlebar_style','!=','style3')		        
			    ),
			    'title' => esc_html__('Thumbnail Size (edge)', 'kameleon'),			   
			    'default'  => '30',
				'min'      => '0',
				'step'     => '1',
				'max'      => '150',	
	        ), 	
		    array(
	        	'id' => 'product-titlebar_thumbnail_radius',
			    'type' => 'slider',			 
			    'required' => array(
			    	array('product-titlebar_style','!=','style1'),		        
			    	array('product-titlebar_style','!=','style2'),		        
			    	array('product-titlebar_style','!=','style3')		        
			    ),  
		        'display_value' => 'text',
			    'title' => esc_html__('Thumbnail Radius Size', 'kameleon'),			   
			    'default'  => '0',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ), 	
        )
 );


	//Social Share Box
	$sections[] = array(
        'title' => 'Social Share Box',
        'id' => 'product_socialbox_section', 
		'icon' => 'fa fa-share-alt',
		'icon_class' => 'icon-large',
        'desc' =>esc_html__('Post Social Share Box', 'kameleon'),
        'subsection' => true,
        'fields' => array(
        	array(
		        'id' => 'social_woocommerce_active',
		        'type' => 'switch',
		        'title' => esc_html__('Enable Social Share Box', 'kameleon'), 		       
		        'options' => array(1 => esc_html__('On', 'kameleon'), 0 => esc_html__('Off', 'kameleon')),
				'default' => 1
		    ),	      	
        	array(
	        	'id' => 'product-ss_size',
			    'type' => 'slider',			 			     
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Size', 'kameleon'),			   
			    'default'  => '18',
				'min'      => '15',
				'step'     => '1',
				'max'      => '100',	
	        ), 
	        array(
	        	'id' => 'product-ss_backsize',
			    'type' => 'slider',			 			     
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Size', 'kameleon'),			   
			    'default'  => '35',
				'min'      => '20',
				'step'     => '1',
				'max'      => '100',	
	        ), 
	        array(
	        	'id' => 'product-ss_margins',
			    'type' => 'slider',			 			     
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Margins', 'kameleon'),			   
			    'default'  => '9',
				'min'      => '0',
				'step'     => '1',
				'max'      => '100',	
	        ), 
	        array(
	        	'id' => 'product-ss_borderradius',
			    'type' => 'slider',			 			     
		        'display_value' => 'text',
			    'title' => esc_html__('Icon Radius', 'kameleon'),			   
			    'default'  => '500',
				'min'      => '0',
				'step'     => '1',
				'max'      => '500',	
	        ), 
	        array(
		        'id' => 'product-ss_style',
		        'type' => 'select',
		        'title' => esc_html__('Icon Style', 'kameleon'), 		        		       
		        'options' => array(
		        	'hoverColorScheme'=> esc_html__("Hover Color Scheme",'kameleon'),
                	'hoverBackScheme'=> esc_html__("Hover Background Scheme",'kameleon'),
                	'hoverShowBottom'=> esc_html__("Show From Background Bottom",'kameleon'),
                	'hoverShowLeft'=> esc_html__("Show From Background Left",'kameleon'),
                	'hoverShowTop'=> esc_html__("Show From Background Top",'kameleon'),
                	'hoverShowRight'=> esc_html__("Show From Background Right",'kameleon'),
                	'hoverShowScale'=> esc_html__("Show From Background Scaled",'kameleon'),
                	'hoverShowTada'=> esc_html__("Show From Background Tada",'kameleon'),
		        ),				
				'default' => 'hoverShowTada'
		    ),
		    array(
			    'id' => 'product-ss_backcolor',
			    'type' => 'color',			    
			    'title' => esc_html__('Icon Background Color', 'kameleon'),	
			    "subtitle" => esc_html__( "Only for some effects", "kameleon" ),  		    
				'default' => '#f1f1f1',
				'validate' => 'color'
			), 
			array(
			    'id' => 'product-ss_iconcolor',
			    'type' => 'color',			    
			    'title' => esc_html__('Icon Color', 'kameleon'),	
			    "subtitle" => esc_html__( "Only for some effects", "kameleon" ),  		    
				'default' => '#888',
				'validate' => 'color'
			), 
			array(
			    'id' => 'product-ss_iconhovercolor',
			    'type' => 'color',			    
			    'title' => esc_html__('Icon Hover Color', 'kameleon'),	
			    "subtitle" => esc_html__( "Only for some effects", "kameleon" ),  		    
				'default' => '#fff',
				'validate' => 'color'
			), 
			array(
			    'id'       => 'product-ss_socialarray',
			    'type'     => 'select',
			    'multi'    => true,			    
			    'title'    => __('Social Site', 'kameleon'), 			   
			    'options'  => kameleon_socialshare_array_list(),
			    'default'  => array('facebook','twitter','google','linkedin','pinterest','reddit')
			),
	        

			array(
        		'id' => 'product-ss_align',
		        'type' => 'button_set',		        
		        'title' => esc_html__('Icon Alignment', 'kameleon'), 		   
		        'options' => array(
			        'left' => 'Left', 
			        'center' => 'Center',
			        'right' => 'Right'
			     ), 
		        'default' => 'left',	
        	),


       )
	);
?>