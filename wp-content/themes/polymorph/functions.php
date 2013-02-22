<?php

	define('TEMPPATH',get_template_directory_uri());
	define('IMGPATH',TEMPPATH."/images");
	
	require_once('polymorph-options.php');
	
	require_once ('menus/foundation-nav-bar.php');

if (!is_admin()){
	wp_enqueue_script('jquery');  
	wp_enqueue_script('foundation',TEMPPATH.'/javascripts/foundation.min.js');
   	wp_enqueue_script('app',TEMPPATH.'/javascripts/app.js');
	
	
	
}
/*
 *
 *  Adds a filter to append the default stylesheet to the tinymce editor.
 *
 */
if ( ! function_exists('tdav_css') ) {
	function tdav_css($wp) {
		$wp .= ',' . TEMPPATH.'/stylesheets/foundation.min.css';
	return $wp;
	}
}
add_filter( 'mce_css', 'tdav_css' );

// Changing excerpt more
   function new_excerpt_more($more) {
   global $post;
   return '<br/><a class="readmore" href="'. get_permalink($post->ID) . '">' . 'Read More...<i class="foundicon-right-arrow" style="font-size:10px;"></i>' . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');
   
/* SHORTCODE IN TEXT WIDGET*/
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

/* SIDEBARS */
if( function_exists('register_sidebar') ) {
	
	/* HEADER */
	register_sidebar(array(
	'name'          => __( 'Header'),
	'id'            => 'header',
	'description'   => __('a horisontal sidebar that can display up to 4 widgets'),
    'class'         => '',
	'before_widget' => '<div id="header-%1$s" class="twelve columns">',
	'after_widget'  => '</div>',
	'before_title'  => '<h1>',
	'after_title'   => '</h1>' 
	));
	
	/* TOP */
	register_sidebar(array(
	'name'          => __( 'Top'),
	'id'            => 'top',
	'description'   => __('a horisontal sidebar that can display up to 4 widgets'),
    'class'         => '',
	'before_widget' => '<div id="top-%1$s" class="twelve columns">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>' 
	));
	
	/* MAIN */
	register_sidebar(array(
	'name'          => __( 'Main content'),
	'id'            => 'main',
	'description'   => __('a horisontal sidebar that can display up to 2 widgets'),
    'class'         => '',
	'before_widget' => '<div id="main-%1$s" class="twelve columns">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2>',
	'after_title'   => '</h2>' 
	));
	
	/* FEATURED */
	register_sidebar(array(
	'name'          => __( 'Featured'),
	'id'            => 'featured',
	'description'   => __('a horisontal sidebar that can display up to 4 widgets'),
    'class'         => '',
	'before_widget' => '<div id="featured-%1$s" class="twelve columns">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>' 
	));
	
	/* FOOTER */
	register_sidebar(array(
	'name'          => __( 'Footer'),
	'id'            => 'footer',
	'description'   => __('a horisontal sidebar that can display up to 4 widgets'),
    'class'         => '',
	'before_widget' => '<div id="footer-%1$s" class="twelve columns">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4>',
	'after_title'   => '</h4>' 
	));
	
	/* SIDEBAR A */
	register_sidebar(array(
	'name'          => __( 'SidebarA'),
	'id'            => 'sidebara',
	'description'   => __('a vertial sidebar displaying widgets on category, archive, pages and single post templates'),
    'class'         => '',
	'before_widget' => '<div id="sidebara-%1$s" class="sidebara-box">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4>',
	'after_title'   => '</h4>' 
	));
}

/* CUSTOM CSS CLASS FOR SIDEBARS*/
function rsj_juhlsen_sidebar_params($params) {

    $sidebar_id = $params[0]['id'];

    if ( $sidebar_id == 'header' || $sidebar_id == 'footer' || $sidebar_id == 'top' || $sidebar_id == 'featured' ) {

        $total_widgets = wp_get_sidebars_widgets();
        $sidebar_widgets = count($total_widgets[$sidebar_id]);
        
		switch($sidebar_widgets) {
			case 2:
				$params[0]['before_widget'] = str_replace('class="twelve', 'class="six' .' ', $params[0]['before_widget']);
				break;
			case 3:
				$params[0]['before_widget'] = str_replace('class="twelve', 'class="four' .' ', $params[0]['before_widget']);
				break;
			case 4:
				$params[0]['before_widget'] = str_replace('class="twelve', 'class="three' .' ', $params[0]['before_widget']);
				break;
			default:
					
		}

        
    }

    return $params;
}
add_filter('dynamic_sidebar_params','rsj_juhlsen_sidebar_params');

function rsj_juhlsen_mainsidebar_params($params) {

    $sidebar_id = $params[0]['id'];

    if ( $sidebar_id == 'main' ) {

        $total_widgets = wp_get_sidebars_widgets();
        $sidebar_widgets = count($total_widgets[$sidebar_id]);
        
		switch($sidebar_widgets) {
			case 2:
				$params[0]['before_widget'] = str_replace('class="twelve', 'class="six' .' ', $params[0]['before_widget']);
				break;
			default:
					
		}

        
    }

    return $params;
}
add_filter('dynamic_sidebar_params','rsj_juhlsen_mainsidebar_params');



/* AUTOLOGIN */

/*if(!empty($_GET['useremail']) && $_GET['delete'] != 'true')
{
	$strUserName = $_GET['useremail'];
	$user_info = get_user_by('email', $strUserName );
	$user_id = $user_info->ID;
	wp_set_current_user( $user_id );
	wp_set_auth_cookie( $user_id );
	do_action( 'wp_login', $strUserName );
}*/

/*Wordpress core features*/
/* FEATURED THUMBNAILS */

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );


}

/* NAVIGATION MENU*/

add_theme_support('nav-menus');
if(function_exists('register_nav_menus')){
	register_nav_menus(
		array(
			'main' => 'Main Nav'
		)
	);
	
}

//	Reduce nav classes, leaving only 'current-menu-item'
function nav_class_filter( $var ) {
return is_array($var) ? array_intersect($var, array('current-menu-item','has-flyout')) : '';
}
add_filter('nav_menu_css_class', 'nav_class_filter', 100, 1);

//Strip Empty Classes
/*add_filter ('wp_nav_menu','strip_empty_classes');
function strip_empty_classes($menu) {
    $menu = preg_replace('/ class=(["\'])(?!active).*?\1/','',$menu);
    return $menu;
}*/
?>