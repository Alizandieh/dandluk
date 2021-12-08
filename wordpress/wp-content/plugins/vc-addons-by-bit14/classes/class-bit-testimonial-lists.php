<?php

class WPBakeryShortCode_Bit14_Testimonial_Lists extends WPBakeryShortCode {
	
	function __construct(){

		add_action( 'init', array( $this, 'mapping' ) );
		add_shortcode('testimonial-lists',array($this,'shortcode_html'));

	}

	function mapping(){

		// Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        // Map the block with vc_map()
        vc_map( 
            array(
                'name' => __('Testimonials', 'bit14'),
                'base' => 'testimonial-lists',
                'description' => __('Testimonials', 'bit14'), 
                'category' => __('Bit14 Elements', 'bit14'),   
                'icon' => plugin_dir_url(__DIR__) . 'assets/images/testimonial-lists.png',           
                'params' => array(

                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Element ID', 'bit14' ),
                        'param_name' => 'id',
                        'description' => __( 'Element ID', 'bit14' ),
                        'group' => 'General'
                    ),

                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Extra Class Name', 'bit14' ),
                        'param_name' => 'class',
                        'description' => __( 'Extra Class Name', 'bit14' ),
                        'group' => 'General'
                    ),

                    array(
                        'type' => 'dropdown',
                        'heading' => __( 'Theme Style', 'bit14' ),
                        'param_name' => 'theme_style',
                        'description' => __( 'Theme Style', 'bit14' ),
                        'group' => 'General',
                        'value' => array(
                                'Theme Style 1' => 'testimonial-style-one',
                                'Theme Style 2' => 'testimonial-style-two',
                                'Theme Style 3' => 'testimonial-style-three',
                        ),
                        'description' => '<img class="bit14-testimonial-style">',
                    ),

                    array(
                        'type' => 'dropdown',
                        'heading' => __( 'Slider', 'bit14' ),
                        'param_name' => 'is_slider',
                        'value' => array('No','Yes'),
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'checkbox',
                        'heading' => __('Prev/Next Arrows?','bit14'),
                        'param_name' => 'is_arrows',
                        'value' => '1',
                        'group' => 'General',
                        'dependency' => array('element' => 'is_slider','value'=>'Yes'),
                    ),

                    array(
                        'type' => 'checkbox',
                        'heading' => __( 'Dynamic adaptive height', 'bit14' ),
                        'param_name' => 'adaptive_height',
                        'value' => '1',
                        'group' => 'General',
                        'dependency' => array('element' => 'is_slider','value'=>'Yes'),
                    ),

                    array(
                        'type' => 'checkbox',
                        'heading' => __('Dotted Navigation?','bit14'),
                        'param_name' => 'is_dots',
                        'value' => '1',
                        'group' => 'General',
                        'dependency' => array('element' => 'is_slider','value'=>'Yes'),
                    ),

                    array(
                        'type' => 'checkbox',
                        'heading' => __('Autoplay?','bit14'),
                        'param_name' => 'is_autoplay',
                        'value' => '1',
                        'group' => 'General',
                        'dependency' => array('element' => 'is_slider','value'=>'Yes'),
                    ),

                    array(
                        'type' => 'dropdown',
                        'heading' => __('Autoplay Speed?','bit14'),
                        'param_name' => 'autoplay_speed',
                        'value' => array('500','1000','1500','2000','2500','3000','4000','5000','6000','7000'),
                        'group' => 'General',
                        'dependency' => array('element' => 'is_slider','value'=>'Yes'),
                    ),

                    array(
                        'type' => 'checkbox',
                        'heading' => __('Pause on Hover?','bit14'),
                        'param_name' => 'is_pause_onhover',
                        'value' => '1',
                        'group' => 'General',
                        'dependency' => array('element' => 'is_slider','value'=>'Yes'),
                    ),

                    array(
                        'type' => 'checkbox',
                        'heading' => __('Fade?','bit14'),
                        'param_name' => 'is_fade',
                        'value' => '1',
                        'group' => 'General',
                        'dependency' => array('element' => 'is_slider','value'=>'Yes'),
                    ),

                    array(
                        'type' => 'dropdown',
                        'heading' => __('Slides in a row','bit14'),
                        'param_name' => 'desktop_num_slides',
                        'value' => array(1,2,3,4),
                        'group' => 'Desktop',
                        //'dependency' => array('element' => 'is_slider','value'=>'Yes'),
                    ),

                    array(
                        'type' => 'dropdown',
                        'heading' => __('Slides to move','bit14'),
                        'param_name' => 'desktop_num_slides_move',
                        'value' => array(1,2,3,4),
                        'group' => 'Desktop',
                        'dependency' => array('element' => 'is_slider','value'=>'Yes'),
                    ),

                    array(
                        'type' => 'dropdown',
                        'heading' => __('Slides in a row','bit14'),
                        'param_name' => 'tablet_num_slides',
                        'value' => array(1,2,3,4),
                        'group' => 'Tablet',
                        //'dependency' => array('element' => 'is_slider','value'=>'Yes'),
                    ),

                    array(
                        'type' => 'dropdown',
                        'heading' => __('Slides to move','bit14'),
                        'param_name' => 'tablet_num_slides_move',
                        'value' => array(1,2,3,4),
                        'group' => 'Tablet',
                        'dependency' => array('element' => 'is_slider','value'=>'Yes'),
                    ),

                    array(
                        'type' => 'dropdown',
                        'heading' => __('Slides in a row','bit14'),
                        'param_name' => 'mobile_num_slides',
                        'value' => array(1,2,3,4),
                        'group' => 'Mobile',
                        //'dependency' => array('element' => 'is_slider','value'=>'Yes'),
                    ),

                    array(
                        'type' => 'dropdown',
                        'heading' => __('Slides to move','bit14'),
                        'param_name' => 'mobile_num_slides_move',
                        'value' => array(1,2,3,4),
                        'group' => 'Mobile',
                        'dependency' => array('element' => 'is_slider','value'=>'Yes'),
                    ),

                    array(
                        'type' => 'param_group',
                        'heading' => __( 'Testimonial', 'bit14' ),
                        'param_name' => 'testimonials',
                        'value' => '',
                        'group' => 'Testimonials',
                        'params' => array(

                            array(
                                'type' => 'textfield',
                                'heading' => __( 'Author Name', 'bit14' ),
                                'param_name' => 'author_name',
                                'description' => __( 'Enter Author Name For Testimonial.', 'bit14' ),
                                'admin_label' => true,
                                'value' => '',
                            ),
                            array(
                                'type' => 'attach_image',
                                'heading' => __( 'Author Image', 'bit14' ),
                                'param_name' => 'author_image',
                            ),
                            array(
                                'type' => 'textfield',
                                'heading' => __( 'Author Details', 'bit14' ),
                                'param_name' => 'author_details',
                                'description' => __( 'Enter Details of the author like company name, position, URL etc..', 'bit14' ),
                                'value' => '',
                            ),
                            array(
                                'type' => 'textarea',
                                'heading' => __( 'Text', 'bit14' ),
                                'param_name' => 'testimonial',
                                'description' => __( 'What your client/customer has to say.', 'bit14' ),
                            ),
                        ),
                    ),
                ),
            )
        );
	}

	function shortcode_html($atts, $content = null){

        $testimonials = vc_param_group_parse_atts( $atts['testimonials'] );

		extract( shortcode_atts( array(
		    'id'        	            => '',
            'class'                     => '',
            'theme_style'               => '',
		    'is_slider'                 => '',
            'is_arrows'                 => '',
            'is_dots'                   => '',
            'is_autoplay'               => '',
            'autoplay_speed'            => '',
            'is_pause_onhover'          => '',
            'is_fade'                   => '',
            'desktop_num_slides'        => '',
            'desktop_num_slides_move'   => '',
            'tablet_num_slides'         => '',
            'tablet_num_slides_move'    => '',
            'mobile_num_slides'         => '',
            'mobile_num_slides_move'    => '',
            'adaptive_height'           => ''
        ), $atts ) );

		$id    = ( $id    != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
        $class = ( $class != '' ) ? 'testimonial ' . esc_attr( $class ) : 'testimonial';
		$class .= $is_slider ? ' bit14-slider' : '';
        $style_class = $theme_style != "" ? ' '.$theme_style : ' testimonial-style-one';
        $data_attributes = ( $is_arrows ) ? 'data-arrows="true"' : 'data-arrows="false"';
        $data_attributes .= ( $is_dots ) ? ' data-dots="true"' : ' data-dots="false"';
        $data_attributes .= ( $adaptive_height ) ? ' data-adaptive-height="true"' : ' data-adaptive-height="false"';
        $data_attributes .= ( $is_autoplay ) ? ' data-autoplay="true"' : ' data-autoplay="false"';
        $data_attributes .= ( $autoplay_speed ) ? ' data-autoplay-speed="'.$autoplay_speed.'"' : ' data-autoplay-speed="3000"';
        $data_attributes .= ( $is_pause_onhover ) ? ' data-pause-onhover="true"' : ' data-pause-onhover="false"';
        $data_attributes .= ( $is_fade ) ? ' data-fade="true"' : ' data-fade="false"';
        $data_attributes .= ( $desktop_num_slides ) ? ' data-display-columns="'.$desktop_num_slides.'"' : ' data-display-columns="3"';
        $data_attributes .= ( $desktop_num_slides_move ) ? ' data-scroll-columns="'.$desktop_num_slides_move.'"' : ' data-scroll-columns="3"';
        $data_attributes .= ( $tablet_num_slides ) ? ' data-tablet-display-columns="'.$tablet_num_slides.'"' : ' data-tablet-display-columns="2"';
        $data_attributes .= ( $tablet_num_slides_move ) ? ' data-tablet-scroll-columns="'.$tablet_num_slides_move.'"' : ' data-tablet-scroll-columns="3"';
        $data_attributes .= ( $mobile_num_slides ) ? ' data-mobile-display-columns="'.$mobile_num_slides.'"' : ' data-mobile-display-columns="1"';
        $data_attributes .= ( $mobile_num_slides_move ) ? ' data-mobile-scroll-columns="'.$mobile_num_slides_move.'"' : ' data-mobile-scroll-columns="3"';

        $col = 'col-md-'.(12/$desktop_num_slides).' col-sm-'.(12/$tablet_num_slides).' col-xs-'.(12/$mobile_num_slides);

        $output = '<div id="bit-testimonials" class="'.$style_class.'">';

            $output .= '<div '.$id.' class="'.$class.' row" '.$data_attributes.'>';

                foreach ($testimonials as $key => $testimonial) {

                    if (!empty($testimonial)) {

                        $output .= '<div class="bit-testimonial '. $col .'">';
                        
                            $output .= '<div class="bit-testimonial-container">';
                            
                                if ( isset($testimonial['author_image']) && $testimonial['author_image'] != "" ){

                                    $author_image = wp_get_attachment_image($testimonial['author_image'],'medium');
                                    $output .= '<div class="testimonial-author-image">'.$author_image.'</div>';
                                }

                                $output .= '<div class="testimonial-content-container">';

                                    if ( $theme_style != 'testimonial-style-three' ){
                                        if ( isset($testimonial['testimonial']) && $testimonial['testimonial'] != "" ){
                                            $output .= '<p class="testimonial-text">'.$testimonial['testimonial'].'</p>';
                                        }
                                    }

                                    $output .= '<div class="testimonial-author-meta">';
                                        if ( isset($testimonial['author_name']) && $testimonial['author_name'] != "" ){
                                            $output .= '<span class="testimonial-author-name">'.$testimonial['author_name'].'</span>';
                                        }
                                        if ( isset($testimonial['author_details']) && $testimonial['author_details'] != "" ){
                                            $output .= '<span class="testimonial-author-details">'.$testimonial['author_details'].'</span>';
                                        }
                                    $output .= '</div>';

                                    if ( $theme_style == "testimonial-style-three" ){
                                        $output .= '<p class="testimonial-text">'.$testimonial['testimonial'].'</p>';
                                    }
                                    
                                $output .= '</div>';
                            
                            $output .= '</div>';
                        
                        $output .= '</div>';

                    }
                }

            $output .= '</div>';

        $output .= '</div>';
		  
		return $output;
	}
}

new WPBakeryShortCode_Bit14_Testimonial_Lists;