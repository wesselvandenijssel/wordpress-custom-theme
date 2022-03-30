<?php 

function wesselvandenijssel_register_styles(){

    wp_enqueue_style('wesselvandenijssel-style', get_template_directory_uri() . "/assets/css/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'wesselvandenijssel_register_styles');

// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus(

		array(

			'top-menu' => 'Top Menu Location',
			'mobile-menu' => 'Mobile Menu Location',
			'footer-menu' => 'Footer Menu Location',

		)

);


// Custom Image Sizes
add_image_size('blog-large', 800, 600, false);
add_image_size('blog-small', 300, 200, true);


// Register Sidebars
function my_sidebars()
{


			register_sidebar(

						array(

								'name' => 'Page Sidebar',
								'id' => 'page-sidebar',
								'before_title' => '<h3 class="widget-title">',
								'after_title' => '</h3>'

						)

			);


			register_sidebar(

						array(

								'name' => 'Blog Sidebar',
								'id' => 'blog-sidebar',
								'before_title' => '<h3 class="widget-title">',
								'after_title' => '</h3>'

						)

			);



}
add_action('widgets_init','my_sidebars');


function my_first_post_type()
{

	$args = array(


		'labels' => array(

					'name' => 'Cars',
					'singular_name' => 'Car',
		),
		'hierarchical' => true,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
		//'rewrite' => array('slug' => 'cars'),	

	);


	register_post_type('cars', $args);


}
add_action('init', 'my_first_post_type');

//Navigation Menu
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
))
?>