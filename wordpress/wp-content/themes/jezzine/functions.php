<?php
require_once get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php';
// function load_scripts(){
// 	wp_enqueue_script('bootstrap-js', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array('jquery'), '4.3.1', true );
// 	wp_enqueue_style('bootstrap-css', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array(), '4.3.1', 'all' );
// 	wp_enqueue_style('bootstrap-css', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array(), '1.0', 'all' );
// }
// add_action('wp_enqueue_scripts', 'load_scripts' );
register_nav_menus(
	array(
		'main_menu' => 'Main Menu',
		'footer_menu' => 'Footer Menu'
	)
);
function limit_content_chr($content, $limit = 100)
{
	return mb_strimwidth(strip_tags($content), 0, $limit, '...');
}

add_theme_support('post-thumbnails');
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
function bootstrap_pagination(\WP_Query $wp_query = null, $echo = true,
	$params = []
) {
	if (null === $wp_query) {
		global $wp_query;
	}

	$add_args = [];

	//add query (GET) parameters to generated page URLs
	/*if (isset($_GET[ 'sort' ])) {
        $add_args[ 'sort' ] = (string)$_GET[ 'sort' ];
    }*/

	$pages = paginate_links(
			array_merge([
				// 'base'         => str_replace(
				// 	999999999,
				// 	'%#%',
				// 	esc_url(get_pagenum_link(999999999))
				// ),
				'format'       => '?paged=%#%',
				'current'      => max(1, get_query_var('paged')),
				'total'        => $wp_query->max_num_pages,
				'type'         => 'array',
				'show_all'     => false,
				'end_size'     => 2,
				'mid_size'     => 1,
				'prev_next'    => true,
				'prev_text'    => __('الصفحة السابقة'),
				'next_text'    => __('الصفحة التالية'),
				'add_args'     => $add_args,
				'add_fragment' => ''
			], $params)
		);

	if (is_array($pages)) {
		//$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
		$pagination = '<ul class="pagination justify-content-center">';

		foreach ($pages as $page) {
			$pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
		}

		$pagination .= '</ul></div>';

		if ($echo) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}

	return null;
}

function twenty_twenty_one_widgets_init()
{

	register_sidebar(
		array(
			'name'          => esc_html__('Footer 1', 'twentytwentyone'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
			//'before_widget' => '<section id="%1$s" class="widget %2$s">',
			//'after_widget'  => '</section>',
			//'before_title'  => '<h2 class="widget-title">',
			//'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer 2', 'twentytwentyone'),
			'id'            => 'sidebar-2',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 class="">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer 3', 'twentytwentyone'),
			'id'            => 'sidebar-3',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 class="">',
			'after_title'   => '</h5>',
		)
	);
}
add_action('widgets_init', 'twenty_twenty_one_widgets_init');
?>