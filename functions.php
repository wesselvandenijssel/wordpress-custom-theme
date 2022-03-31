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


//Navigation Menu
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
));

function posts_nav() {
 
    if( is_singular() )
        return;

    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li class="next_page">%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="next_page">%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
}

// Max Word Length
add_filter( 'excerpt_length', function($length) {
    return 20;
}, PHP_INT_MAX );

// Form Submit
if (isset($_POST["submit"])){
    $date = date('Y-m-d H:i:s');
    $title = $_POST['name'];
    $text = $_POST['textarea'];
    // $category = $_POST['category'];
    $thumpnail = $_POST['file'];
    $new = array(
        'post_title' => $title,
        'post_content' => $text,
        'post_date' => $date,
        'category' => 'default_category',
        // 'post_image' => $thumpnail,
        'post_status' => 'publish',
        'comment_status' => 'closed'
    );

    $post_id = wp_insert_post( $new );
    
    $wp_filetype = wp_check_filetype( $getImageFile, null );

$attachment_data = array(
    'post_mime_type' => $wp_filetype['type'],
    'post_title' => sanitize_file_name( $getImageFile ),
    'post_content' => '',
    'post_status' => 'inherit'
);

$attach_id = wp_insert_attachment( $attachment_data, $getImageFile, $post_id );
    if( $post_id ){
        echo "Post successfully published!";
    } else {
        echo "Something went wrong, try again.";
    }
    return;
}