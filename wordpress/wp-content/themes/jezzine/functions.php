<?php
require_once get_template_directory() .'/includes/class-wp-bootstrap-navwalker.php';
// function load_scripts(){
// 	wp_enqueue_script('bootstrap-js', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array('jquery'), '4.3.1', true );
// 	wp_enqueue_style('bootstrap-css', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array(), '4.3.1', 'all' );
// 	wp_enqueue_style('bootstrap-css', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array(), '1.0', 'all' );
// }
// add_action('wp_enqueue_scripts', 'load_scripts' );
register_nav_menus(
	array(
		'main_menu' => 'Main Menu',
	)
);

// add_filter('nav_menu_css_class' , 'my_nav_special_class' , 10 , 2);
// 	function my_nav_special_class($atts, $item){
// 	if(in_array('menu-item-has-children',$atts)){ //example: you can check value of $item to decide something...
// 			$atts['class'] = "px-3 px-md-2 nav-link";
// 	}
// 			return $atts;
// 	}
// function add_link_atts($atts) {
// 	$atts['class'] = "px-3 px-md-2 nav-link";
// 	return $atts;
//   }
//   add_filter( 'nav_menu_link_attributes', 'add_link_atts');
  
?>