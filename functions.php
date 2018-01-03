<?php

// Register Custom Navigation Walker
require_once('functions/wp_bootstrap_navwalker.php');
require_once('functions/gallery.php');

//breadcrumbs
include (TEMPLATEPATH . '/functions/breadcrumbs.php');

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Main Sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

//remove wp version number
function startertheme_remove_version() {
return '';
}
add_filter('the_generator', 'startertheme_remove_version');

//featured images
add_theme_support( 'post-thumbnails' );

// Contact Form Include Shortcode
function contactForm_shortcode() {
ob_start();
include (TEMPLATEPATH . '/inc/contactForm.php');
$return_string = ob_get_clean();
return $return_string;
}
add_shortcode( 'contactForm', 'contactForm_shortcode' );

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

// Contact Form Include Shortcode
function employeeForm_shortcode() {
ob_start();
include (TEMPLATEPATH . '/inc/employeeForm.php');
$return_string = ob_get_clean();
return $return_string;
}
add_shortcode( 'employeeForm', 'employeeForm_shortcode' );


add_filter('widget_text','execute_php',100);
function execute_php($html){
	if(strpos($html,"<"."?php")!==false){
		ob_start();
		eval("?".">".$html);
		$html=ob_get_contents();
		ob_end_clean();
	}
		return $html;
	}

?>