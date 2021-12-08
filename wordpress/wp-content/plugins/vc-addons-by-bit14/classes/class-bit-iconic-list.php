<?php

class WPBakeryShortCode_Bit14_Iconic_List extends WPBakeryShortCode {

	function __construct(){
		add_action( 'init', array( $this, 'mapping' ) );
		add_shortcode('iconic-list',array($this,'shortcode_html'));

        wp_enqueue_style( 'bit14-icomoon-icons', plugins_url('vc-addons-by-bit14/assets/') . 'font/style.css' );

        add_filter( 'vc_iconpicker-type-icomoon', 'vc_iconpicker_type_icomoon' );
        function vc_iconpicker_type_icomoon( $icons ) {
            $iconssolid_icons = array(
                array('icon-Index_03' => 'design'),
                array('icon-Index_05' => 'development'),
                array('icon-Index_08' => 'writing'),
                array('icon-Index_14' => 'stradegy'),
                array('icon-Index_17' => 'marketing'),
                array('icon-Index_20' => 'geek'),
            );
            return array_merge( $icons, $iconssolid_icons );
        }
    }


	function mapping(){

		// Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        // Map the block with vc_map()
        vc_map( 
            array(
                'name' => __('Iconic List', 'bit14'),
                'base' => 'iconic-list',
                'description' => __('Iconic List', 'bit14'),
                'category' => __('Bit14 Elements', 'bit14'),
                'icon' => plugin_dir_url(__DIR__) . 'assets/images/iconic-list.png',           
                'params' => array(
                    array(
                        'type'          =>  'textfield',
                        'class'         =>  'iconiclist_id',
                        'heading'       =>  __( 'ID', 'bit14' ),
                        'description'   =>  'ID for your list',
                        'param_name'    =>  'id',
                    ),
                    array(
                        'type'          =>  'textfield',
                        'class'         =>  'iconiclist_class',
                        'heading'       =>  __( 'class', 'bit14' ),
                        'description'   =>  'Class for your list',
                        'param_name'    =>  'class',
                    ),
                    array(
                        'type'          =>  'dropdown',
                        'class'         =>  'iconiclist_type',
                        'heading'       =>  __( 'List type', 'bit14' ),
                        'description'   =>  'Select the type of list to be displayed',
                        'param_name'    =>  'type',
                        'value'         =>  array(
                            'Horizontal'    =>  1,
                            'Vertical'      =>  2
                        )
                    ),
                    array(
                        'type'          =>  'dropdown',
                        'class'         =>  'iconiclist_quantity',
                        'heading'       =>  __( 'List item(s) in a row', 'bit14' ),
                        'description'   =>  'Number of list item(s) to be displayed in one row',
                        'param_name'    =>  'quantity',
                        'value'         =>  array(
                            'One'           =>  1,
                            'Two'           =>  2,
                            'Three'         =>  3
                        )
                    ),
                    array(
                        'type' => 'colorpicker',
                        'heading' => __( 'Background Color', 'bit14' ),
                        'param_name' => 'bg_color',
                        'description' => __( 'Color for background.', 'bit14' ),
                        'value' => '#ffffff',
                    ),
                    array(
                        'type' => 'colorpicker',
                        'heading' => __( 'Hover', 'bit14' ),
                        'param_name' => 'hover_color',
                        'description' => __( 'Color for background hover.', 'bit14' ),
                        'value' => '#ffffff',
                    ),
                    array(
                        'type'          =>  'param_group',
                        'value'         =>  '',
                        'param_name'    =>  'items',
                        'params'        =>  array(

                            array(
                                'type' => 'dropdown',
                                'heading' => __( 'Show icon', 'bit14' ),
                                'param_name' => 'is_icon',
                                'description' => __( 'Show/Hide icon.', 'bit14' ),
                                'value' => array(
                                    "Font Awesome"   =>  'fontawesome',
                                    "Bit14 icons"    =>  'icomoon'
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
                                    'element' => 'is_icon',
                                    'value' => 'fontawesome',
                                ),
                                'description' => __( 'Select icon from library.', 'js_composer' ),
                            ),
                            array(
                                'type' => 'iconpicker',
                                'heading' => __( 'Icon', 'js_composer' ),
                                'param_name' => 'custom_icon',
                                'settings' => array(
                                    'emptyIcon' => false,
                                    'type' => 'icomoon',
                                ),
                                'dependency' => array(
                                    'element' => 'is_icon',
                                    'value' => 'icomoon',
                                ),
                                'description' => __( 'Select icon from library.', 'js_composer' ),
                            ),
                            array(
                                'type'          =>  'textfield',
                                'class'         =>  'iconiclist_title',
                                'heading'       =>  __( 'Title', 'bit14' ),
                                'description'   =>  'Title of your list item',
                                'param_name'    =>  'title',
                            ),
                            array(
                                'type'          =>  'textarea',
                                'class'         =>  'iconiclist_description',
                                'heading'       =>  __( 'Description', 'bit14' ),
                                'description'   =>  'Description of your list item',
                                'param_name'    =>  'description',
                            ),
                            array(
                                'type'          =>  'textfield',
                                'class'         =>  'iconiclist_content_link',
                                'heading'       =>  __( 'Content Link', 'bit14' ),
                                'description'   =>  'Link On your content',
                                'param_name'    =>  'content_link',
                            ),
                            array(
                                'type'          =>  'textfield',
                                'class'         =>  'iconiclist_id',
                                'heading'       =>  __( 'ID', 'bit14' ),
                                'description'   =>  'ID for your list item',
                                'param_name'    =>  'id',
                            ),
                            array(
                                'type'          =>  'textfield',
                                'class'         =>  'iconiclist_class',
                                'heading'       =>  __( 'class', 'bit14' ),
                                'description'   =>  'Class for your list item',
                                'param_name'    =>  'class',
                            ),
                            array(
                                'type'          =>  'textfield',
                                'class'         =>  'iconiclist_button_text',
                                'heading'       =>  __( 'Button Text', 'bit14' ),
                                'description'   =>  'Text on button',
                                'param_name'    =>  'button_text',
                            ),
                            array(
                                'type'          =>  'textfield',
                                'class'         =>  'iconiclist_button_link',
                                'heading'       =>  __( 'Button Link', 'bit14' ),
                                'description'   =>  'Link on button',
                                'param_name'    =>  'button_link',
                            ),
                        )
                    )
                )
            )
        );

        vc_map_update( "icon_type" , array(__( 'icomoon', 'js_composer' ) => 'icomoon'));

	}

	function shortcode_html($atts, $content = null){

        extract( shortcode_atts( array(
            'id'            =>  '',
            'class'         =>  '',
            'type'          =>  '',
            'quantity'      =>  '',
            'bg_color'      =>  '',
            'hover_color'   =>  '',

        ), $atts ) );

        $id = ( $id != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
        $class = ( $class != '' ) ? 'list ' . esc_attr( $class ) : 'list';
        $type = ( $type != '' ) ? ( $type == 1 ) ? 'horizontal' : 'vertical' : '';
        $shape = ( $type == "vertical" ) ? 'listitem-circle' : '';
        $quantity = ( $quantity != '' ) ? esc_attr( $quantity ) : '';
        $bg_color = ( $bg_color != '' ) ? $bg_color : '#ffffff';
        $hover_color = ( $hover_color != '' ) ? $hover_color : '#ffffff';

        $col = ( $quantity !== '' ) ? 'col-sm-' . 12 / $quantity : 'col-sm-12' ;

        $html = "<div ". $id ." class='". $class . ' row '  . $type ."'>";

            $items = vc_param_group_parse_atts( $atts['items'] );
            foreach( $items as $item) {

                
                $id = ( isset($item['id']) && $item['id'] != '' ) ? 'id="' . esc_attr( $item['id'] ) . '"' : '';
                $class = ( isset($item['class']) && $item['class'] != '' ) ? 'list-item ' . esc_attr( $item['class'] ) :  'list-item';
                $icon = ( isset($item['icon']) && $item['icon'] != '' ) ? esc_attr($item['icon'], "large") : '';

                $custom_icon = ( isset($item['custom_icon']) && $item['custom_icon'] != '' ) ? esc_attr($item['custom_icon'], "large") : '';

                $is_icon = ( isset($item['is_icon']) && $item['is_icon'] == 'fontawesome' ) ? $icon : $custom_icon;

                $title = ( isset($item['title']) && $item['title'] != '' ) ? $item['title'] : '';
                $description = ( isset($item['description']) && $item['description'] != '' ) ? $item['description'] : '';
                
                
                $content_link_open = ( isset($item['content_link']) && $item['content_link'] != '' ) ? '<a href="'. $item['content_link'] .'">' : '';
                $content_link_close = ( isset($item['content_link']) && $item['content_link'] != '' ) ? '</a>' : '';



                $button = ( isset($item['button_text']) && $item['button_text'] !== "" && isset($item['button_link']) && $item['button_link'] !== "" ) ? '<a class="button btn-default" href="'. $item['button_link'] .'">'. $item['button_text'] .'</a>' : '';

                $description_p_horizontal = ( $type == "horizontal" ) ? '<p>'. $description .'</p>' : '';
                $description_p_vertical = ( $type == "vertical" ) ? '<p>'. $description .'</p>' : '';

                $html .= 
                '<div  class=" ' . $col .' " >
                    <div ' . $id . ' class="'. $class . ' '. $shape .' bit-iconic-list-item" data-bg-color="' . $bg_color . '" data-hover-color="' . $hover_color . '" style="background: ' . $bg_color . '" >
                        <div class="bit-iconic-list-inner">
                            <span class="icon ' . $is_icon .'"></span>
                            <div class="content">
                                '. $content_link_open .'
                                    <h4>'. $title .'</h4>
                                   '. $description_p_horizontal .'
                                '. $content_link_close .'
                                ' . $button . '
                            </div>
                        </div>
                    </div>
                    '. $description_p_vertical . '
                </div>' ;
            }

        $html .= "</div>";

        $output = $html;
        return $output;
    }
}

new WPBakeryShortCode_Bit14_Iconic_List;