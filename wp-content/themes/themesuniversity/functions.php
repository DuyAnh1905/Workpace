<?php
if(! function_exists( 'them_style' )){
    function them_style()
    {
	    wp_enqueue_style( 'bootstrap',"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  );
	    wp_enqueue_style( 'font-google', "https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
	    wp_enqueue_style( 'index-university', get_theme_file_uri('/build/index.css') );
		wp_enqueue_style( 'index-university-Mobile', get_theme_file_uri('style.css') );
	    wp_enqueue_style( 'index-university_extra', get_theme_file_uri('/build/style-index.css') );
        wp_enqueue_script( 'bundle-script', get_theme_file_uri('build/index.js'), array('jquery'),'1.0' ,true);
    }
}
add_action( 'wp_enqueue_scripts', 'them_style' );

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Menu chính của trang', 'university' ),
	    	'footer_menu_1'  => __( 'Footer Menu vị trí 1', 'university' ),
            'footer_menu_2'  => __( 'Footer Menu vị trí 2', 'university' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}
function my_theme_setup(){
    add_theme_support('post-thumbnails');
}


add_action('after_setup_theme', 'my_theme_setup');
if (!function_exists('glw_custom_pagination')) {
    function glw_custom_pagination(WP_Query $wp_query = null, $echo = true)
    {
        if ($wp_query === null) {
            global $wp_query;
        }
        $pages = paginate_links(array(
            'base' => str_replace(9999999999, '%#%', esc_url(get_pagenum_link(9999999999))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
            'type' => 'array',
            'show_all' => false,
            'end_size' => 2,
            'mid_size' => 1,
            'prev_next' => true,
            'prev_text' => '<i class="zmdi zmdi-chevron-left"><</i>',
            'next_text' => '<i class="zmdi zmdi-chevron-right">></i>',
            'add_args' => false,
            'add_fragment' => ''
        ));

        if (is_array($pages)) {
            $pagination = '<div class="rt-pagination pt-68 text-center"><ul class="clearfix">';
            foreach ($pages as $page) {
                $pagination .= '<li' . (strpos($page, 'current') !== false ? ' class="active"' : '') . '>';
                if (strpos($page, 'current') !== false) {
                    if (get_query_var('paged') > 1) {
                        $pagination .= '<a>' . get_query_var('paged') . '</a>';
                    } else {
                        $pagination .= '<a>' . 1 . '</a>';
                    }
                } else {
                    $pagination .= str_replace('class="page-numbers"', '', $page);
                }
                $pagination .= '</li>';
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
    
}

function university_post_types() {

    register_post_type('event', array(
    'public' => true,
      'show_in_rest' => true,
      'supports' => array('title', 'editor','thumbnail'),
      'rewrite' => array('slug' => 'events'),
      'has_archive' => true,
      
      'labels' => array(
        'name' => 'Events',
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event',
        'all_items' => 'All Events',
        'singular_name' => 'Event'
      ),
  
      'menu_icon' => 'dashicons-calendar'
  
    ));
  
  }
  
  add_action('init', 'university_post_types');