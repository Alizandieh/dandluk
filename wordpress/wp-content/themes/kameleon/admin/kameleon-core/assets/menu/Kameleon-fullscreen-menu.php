<?php
/*
    Mega Menu Walker for Kameleon Theme
*/
class Kameleon_Fullscreen_Menu extends Walker_Nav_Menu{
    private $curItem;
    // add classes to ul sub-menus
    function start_lvl( &$output,  $depth = 0, $args = array() ) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            ( $display_depth % 2  ? 'menu-odd ' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu dl-submenu' : '' ),
            'menu-depth-' . $display_depth
            );
        $class_names = implode( ' ', $classes );
        // checking for the time of the menu
        //Build HTML       
        $output .= $indent . '<ul class="' . $class_names.'">'; 
                 
    }
      
    //End sub-menus shit div 
    function end_lvl(&$output, $depth = 0, $args = array() ) {
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $output .= $indent ."</ul>\n";
    }

    // add main/sub classes to li's and links
     function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // depth dependent classes
        $depth_classes = array(
            ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
            ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names =  esc_attr( $class_names ) ;
        
        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
      

        $item_output = sprintf( '%1$s<a%2$s data-hover="'.esc_attr($item->title).'">%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );
        $output .= $indent .'<li  id="menu-item-'. $item->ID . '" class="'.$class_names.'" >'.' '.apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );         
    }
    
    function end_el(&$output, $item, $depth = 0, $args = array()) {
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
        $output .= $indent ."</li>\n";  
    }
}



?>