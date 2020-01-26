<?php

class WPBakeryShortCode_Bit14_Counter_Lists extends WPBakeryShortCode {
	function __construct(){

		add_action( 'init', array( $this, 'mapping' ) );
		add_shortcode('counter-lists',array($this,'shortcode_html'));

	}

	function mapping(){

		// Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        // Map the block with vc_map()
        vc_map(
            array(
                'name' => __('Counters', 'bit14'),
                'base' => 'counter-lists',
                'description' => __('Counters', 'bit14'), 
                'category' => __('Bit14 Elements', 'bit14'),   
                'icon' => plugin_dir_url(__DIR__) . 'assets/images/counter.png',           
                'params' => array(

                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Element ID', 'bit14' ),
                        'param_name' => 'id',
                        'description' => __( 'Element ID', 'bit14' ),
                    ),

                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Extra Class Name', 'bit14' ),
                        'param_name' => 'class',
                        'description' => __( 'Extra Class Name', 'bit14' ),
                    ),

                    array(
                        'type' => 'dropdown',
                        'heading' => __( 'Counter type', 'bit14' ),
                        'param_name' => 'countertype',
                        'description' => __( 'Select counter type.(if "progress meter" selected, numbers should be between 1-100)', 'bit14' ),
                        'value' => array(
                                "Numbers"   =>  'numbers',
                                "Progress Meter"   =>  'progress'
                            )
                    ),

                    array(
                        'type' => 'colorpicker',
                        'heading' => __( 'Border Foreground', 'bit14' ),
                        'param_name' => 'brdrfg',
                        'description' => __( 'Highlighted border color', 'bit14' ),
                        'value' => '#2c9579',
                        'dependency' => array(
                            'element' => 'countertype',
                            'value' => 'progress',
                        ),
                    ),

                    array(
                        'type' => 'colorpicker',
                        'heading' => __( 'Border Background', 'bit14' ),
                        'param_name' => 'brdrbg',
                        'description' => __( 'Border color', 'bit14' ),
                        'value' => '#4c4c4c',
                        'dependency' => array(
                            'element' => 'countertype',
                            'value' => 'progress',
                        ),
                    ),

                    array(
                        'type' => 'colorpicker',
                        'heading' => __( 'Counter Background', 'bit14' ),
                        'param_name' => 'circlebg',
                        'description' => __( 'Background color of circle', 'bit14' ),
                        'value' => '#2b2c2c',
                        'dependency' => array(
                            'element' => 'countertype',
                            'value' => 'progress',
                        ),
                    ),

                    array(
                        'type' => 'dropdown',
                        'heading' => __( 'Counters in a row', 'bit14' ),
                        'param_name' => 'number',
                        'description' => __( 'How many counters should be displayed in one row.', 'bit14' ),
                        'value' =>  array ( 1 , 2 , 3 , 4)
                    ),

                    array(
                        'type' => 'param_group',
                        //'heading' => __( 'Counter', 'bit14' ),
                        'param_name' => 'counters',
                        'description' => __( 'Enter values for counters', 'bit14' ),
                        'value' => '',
                        'params' => array(

                            array(
                                'type' => 'dropdown',
                                'heading' => __( 'Show icon', 'bit14' ),
                                'param_name' => 'is_icon',
                                'description' => __( 'Show/Hide icon.', 'bit14' ),
                                'value' => array(
                                        "Show"   =>  'show',
                                        "Hide"   =>  'hide'
                                    )
                            ),
                            array(
                                'type' => 'iconpicker',
                                'heading' => __( 'Icon', 'js_composer' ),
                                'param_name' => 'icon',
                                'value' => 'vc_pixel_icon vc_pixel_icon-alert',
                                'settings' => array(
                                    'emptyIcon' => false,
                                    'type' => 'fontawesome',
                                ),
                                'dependency' => array(
                                    'element' => 'icon_type',
                                    'value' => 'fontawesome',
                                ),
                                'dependency' => array(
                                    'element' => 'is_icon',
                                    'value' => 'show',
                                ),
                                'description' => __( 'Select icon from library.', 'js_composer' ),
                            ),
                            array(
                                'type' => 'textfield',
                                'heading' => __( 'Number', 'bit14' ),
                                'param_name' => 'number',
                                'description' => __( 'Enter Number For Counter. (If "progress meter" is selected, numbers must be between 1-100)', 'bit14' ),
                                'admin_label' => true,
                                'value' => '',
                            ),
                            array(
                                'type' => 'textfield',
                                'heading' => __( 'Title', 'bit14' ),
                                'param_name' => 'title',
                                'description' => __( 'Enter Text For Counter.', 'bit14' ),
                                'admin_label' => true,
                                'value' => '',
                            ),
                            array(
                                'type' => 'colorpicker',
                                'heading' => __( 'Color', 'bit14' ),
                                'param_name' => 'color',
                                'description' => __( 'Color theme for counter.', 'bit14' ),
                                'value' => '#ffffff',
                            ),
                        ),
                    ),
                ),
            )
        );
	}

	function shortcode_html($atts, $content = null){

        $counters = vc_param_group_parse_atts( $atts['counters'] );

		extract( shortcode_atts( array(
		    'id'        	=> '',
            'class'         => '',
            'number'        => '',
            'countertype'       => '',
            'brdrfg'       => '',
            'brdrbg'       => '',
		    'circlebg'     	=> '',
		), $atts ) );

		$id    = ( $id    != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
        $class = ( $class != '' ) ? 'counter ' . esc_attr( $class ) : 'counter';
        $number = ( $number != '' ) ? $number : 3;
        $countertype = ( $countertype != '' ) ? $countertype : 'numbers';
		
        $brdrbg = ( $brdrbg != '' ) ? $brdrbg : '#2c9579';
        $brdrfg = ( $brdrfg != '' ) ? $brdrfg : '#4c4c4c';
        $circlebg = ( $circlebg != '' ) ? $circlebg : '#2b2c2c';

        $col = 'col-md-' . (12 / $number);

        $output = '<div class="bit-counters-list">';

            $output .= '<div '.$id.' class="'.$class.' row">';

                foreach ($counters as $key => $counter) {

                    if ( $countertype == "numbers" ) {

                        //Counter TYpe : Numbers
                        
                        $output .= '<div class="counter-item counter-seperated '. $col .'" style="color:'. $counter['color'] . '">';
                            
                            if( isset($counter['is_icon']) ) {
                                if ( $counter['is_icon'] !== "hide" ) {
                                    $counter_is_icon = "show";
                                }else {
                                    $counter_is_icon = "hide";
                                }
                            }else{
                                $counter_is_icon = "show";
                            };
                            
                            if ( $counter_is_icon !== "hide" ) {
                                $output .= '<span class="counter-item-icon"><i class="'.$counter['icon'].'" aria-hidden="true"></i></span>';
                            }
                            
                            if ( isset($counter['number']) && $counter['number'] != "" ){
                                $output .= '<span class="counter-item-number count">'.$counter['number'].'</span>';
                            }

                            if ( isset($counter['title']) && $counter['title'] != "" ){
                                $output .= '<span class="counter-item-title">'.$counter['title'].'</span>';
                            }

                        $output .= '</div>';

                    } else {

                        //Counter TYpe : Progress Meter

                        $output .= '<div class="counter-item '. $col .'" style="color:'. $counter['color'] .'">';

                            $counter_number = ( $counter['number'] > 100 ) ? 100 : ( ($counter['number'] < 0) ? 0 : $counter['number'] ) ;

                            $output .= '<div class="percent-container">';


                            $dashoffset = 565.5 - ( 565.5 * $counter['number'] / 100);
                                $output .= '
                                    <style>
                                        #svg circle {
                                          stroke-dashoffset: 0;
                                          transition: stroke-dashoffset 1s linear;
                                          stroke: '. $brdrfg .';
                                          fill: '. $circlebg .';
                                          stroke-width: 1em;
                                        }
                                        #svg #bar {
                                          stroke: '. $brdrbg .';
                                          fill: transparent;
                                        }
                                        #svg #bar.tobe {
                                            stroke-dashoffset: 565.5 !important;
                                        }
                                    </style>';
                                    $output .= 
                                    '<svg id="svg" width="200" height="200" viewPort="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle>
                                        <circle style=" stroke-dashoffset: '. $dashoffset .' " id="bar" class="tobe" r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0" transform="rotate(-90,100,100)"></circle>
                                    </svg>';

                                    if ( $counter['is_icon'] !== "hide" ) {
                                        
                                        $output .= '<span class="counter-item-icon circularbg"><i class="'.$counter['icon'].'" aria-hidden="true"></i></span>';

                                    } elseif ( isset($counter['number']) && $counter['number'] != "" ){
                                        
                                        $output .= '<span class="counter-item-number circularbg"><span class="count">'.$counter_number.'</span><span>%</span></span>';

                                    }

                            $output .= '</div>';

                            if ( isset($counter['title']) && $counter['title'] != "" ){
                                $output .= '<span class="counter-item-title">'.$counter['title'].'</span>';
                            }

                        $output .= '</div>';

                    }

                }

            $output .= '</div>';
        $output .= '</div>';
		return $output;
	}

}

new WPBakeryShortCode_Bit14_Counter_Lists;