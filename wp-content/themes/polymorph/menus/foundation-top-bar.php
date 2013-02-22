<?php

class Walker_Top_Bar extends Walker_Nav_Menu {  
  
    
  
    // Displays start of a level. E.g '<ul>'  
    // @see Walker::start_lvl()  
    function start_lvl(&$output, $depth=0, $args=array()) {  
        $output .= "\n<ul class='dropdown'>\n";  
    }  
  
    // Displays end of a level. E.g '</ul>'  
    // @see Walker::end_lvl()  
    function end_lvl(&$output, $depth=0, $args=array()) {  
        $output .= "</ul>\n";  
    }  
  
    // Displays start of an element. E.g '<li> Item Name'  
    // @see Walker::start_el()  
    function start_el(&$output, $item, $depth=0, $args=array()) {  
        global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $item->classes ) ? array() : (array) $item->classes;

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names2 = ' class="'. esc_attr( $class_names ) . '"';

           $output .= $indent . '<li' .$class_names2.'>';

           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

          
           $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';
			
           if($depth != 0)
           {
             	$description = "";
					 
			 	$item_output = $args->before;
	            $item_output .= '<h5><a'. $attributes .'>';
	            $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
	            $item_output .= $description.$args->link_after;
	            $item_output .= '</a></h5>';
	            $item_output .= $args->after;
           }else{
	           	$item_output = $args->before;
	            $item_output .= '<a'. $attributes .'>';
	            $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
	            $item_output .= $description.$args->link_after;
	            $item_output .= '</a>';
	            $item_output .= $args->after;
	           }
		   
		   

            

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args ); 
    }  
  
    // Displays end of an element. E.g '</li>'  
    // @see Walker::end_el()  
    function end_el(&$output, $item, $depth=0, $args=array()) {
    	if($depth <= 0 && $item->menu_order == 1)
		{
			$output .= "</li>\n<li class='toggle-topbar'><a href='#'></a></li>"; 
		}
		else{
			
		}
        $output .= "</li>\n";  
    }  
}  
?>