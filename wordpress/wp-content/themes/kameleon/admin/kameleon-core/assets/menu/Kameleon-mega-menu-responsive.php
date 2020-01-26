<?php
/*
	Responsive Menu Walker for Kameleon Theme
*/
class Kameleon_Mega_Menu_Responsive extends Walker_Nav_Menu{
    private $curItem;
	// add classes to ul sub-menus
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        // depth dependent classes
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
            );
        $class_names = implode( ' ', $classes );
        // checking for the time of the menu
        //Build HTML     

         if (in_array('menu-item-has-children', $this->curItem->classes)){ 
            $expander = '<i class="Defaults-km-icon-chevron-right" onclick="showDropDownMenu(this,event);"></i>';
            $menu_has_children = "is-parent";
        }else{
            $expander = "";
            $menu_has_children = "no-parent";
        }

        $output .= '<div data-situation="hidden" style="display: none;" class="child-responsive-menu ' . $class_names.' '.$menu_has_children.'">'; 
                 
    }
      
    //End sub-menus shit div 
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= "</div>\n";
    }

    // add main/sub classes to li's and links
     function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0) {
        global $wp_query;
        $this->curItem = $item;
        //Checking if the parent item is a Mega menu type 
        $parent_item_id = $item->menu_item_parent;
        $indent = $depth*10;
        if($depth == 1)
            $parent =   (array) wp_setup_nav_menu_item( get_post( $parent_item_id ) );
        


        // depth dependent classes
        $depth_classes = array(
            ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
            ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
      
        // passed classes
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
        
        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
        
        $moreAttributes = "";
        if (in_array('menu-item-has-children', $item->classes)){ 
            $expander = '<i class="Defaults-km-icon-chevron-right" onclick="showDropDownMenu(this,event);"></i>';
            $menu_has_children = "is-parent";
            $moreAttributes = 'onclick="preventLink(event);"';
        }else{
            $expander = "";
            $menu_has_children = "no-parent";
        }
        $item_output = sprintf( '%1$s<a%2$s '.$moreAttributes.' ><span style="margin-left:'.$indent.'px;"></span>%3$s%4$s%5$s'.$expander.'</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );
   

     
        $output .= '<div class="'.$menu_has_children.'"   >'.' '.apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args ); 
       
        
    }
	
    function end_el(&$output, $item, $depth = 0, $args = array()) {
        $output .= "</div>\n"; 
    }
}



?>