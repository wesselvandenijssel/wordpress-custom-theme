<?php 
//CSS Path
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

/**
 * Sideload an image and set it as the featured image.
 * 
 * Upload an image, attach it to a post, and set it as the featured image (the post thumbnail).
 * Additional functionality: ability to pass $post_data to override values in wp_insert_attachment
 * 
 * @param string $url (required) The URL of the image to download
 * @param int $post_id (required) The post ID the media is to be associated with
 * @param array $post_data (optional) Array of key => values for wp_posts table (ex: 'post_title' => 'foobar', 'post_status' => 'draft')
 * @return int|object The ID of the attachment or a WP_Error on failure
 */
 
function my_attach_external_image( $url = null, $post_id = null, $post_data = array() ) {
    if ( !$url || !$post_id ) return new WP_Error('missing', "Need a valid URL and post ID...");
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
    // Download file to temp location, returns full server path to temp file, ex; /home/user/public_html/mysite/wp-content/26192277_640.tmp
    $tmp = download_url( $url );
 
    // If error storing temporarily, unlink
    if ( is_wp_error( $tmp ) ) {
        @unlink($file_array['tmp_name']);   // clean up
        $file_array['tmp_name'] = '';
        return $tmp; // output wp_error
    }
 
    preg_match('/[^\?]+\.(jpg|JPG|jpe|JPE|jpeg|JPEG|gif|GIF|png|PNG)/', $url, $matches);    // fix file filename for query strings
    $url_filename = basename($matches[0]);                                                  // extract filename from url for title
    $url_type = wp_check_filetype($url_filename);                                           // determine file type (ext and mime/type)
 
    // assemble file data (should be built like $_FILES since wp_handle_sideload() will be using)
    $file_array['tmp_name'] = $tmp;                                                         // full server path to temp file

        $file_array['name'] = $url_filename;
 
    // set additional wp_posts columns
    if ( empty( $post_data['post_title'] ) ) {
        $post_data['post_title'] = basename($url_filename, "." . $url_type['ext']);         // just use the original filename (no extension)
    }
 
    // make sure gets tied to parent
    if ( empty( $post_data['post_parent'] ) ) {
        $post_data['post_parent'] = $post_id;
    }
 
    // required libraries for media_handle_sideload
    require_once(ABSPATH . 'wp-admin/includes/file.php');
    require_once(ABSPATH . 'wp-admin/includes/media.php');
    require_once(ABSPATH . 'wp-admin/includes/image.php');
 
    // do the validation and storage stuff
    $att_id = media_handle_sideload( $file_array, $post_id, null, $post_data );             // $post_data can override the items saved to wp_posts table, like post_mime_type, guid, post_parent, post_title, post_content, post_status
 
    // If error storing permanently, unlink
    if ( is_wp_error($att_id) ) {
        @unlink($file_array['tmp_name']);   // clean up
        return $att_id; // output wp_error
    }
 
    // set as post thumbnail if desired
        set_post_thumbnail($post_id, $att_id);
 
    return $att_id;
}