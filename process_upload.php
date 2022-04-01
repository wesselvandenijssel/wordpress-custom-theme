<?php

// WordPress environment
require( dirname(__FILE__) . '/../../../wp-load.php' );

$wordpress_upload_dir = wp_upload_dir();
// $wordpress_upload_dir['path'] is the full server path to wp-content/uploads/2017/05, for multisite works good as well
// $wordpress_upload_dir['url'] the absolute URL to the same folder, actually we do not need it, just to show the link to file
$i = 1; // number of tries when the file with the same name is already exists

$profilepicture = $_FILES['profilepicture'];
$new_file_path = $wordpress_upload_dir['path'] . '/' . $profilepicture['name'];
$new_file_mime = mime_content_type( $profilepicture['tmp_name'] );

if( empty( $profilepicture ) )
	die( 'File is not selected.' );

if( $profilepicture['error'] )
	die( $profilepicture['error'] );
	
if( $profilepicture['size'] > wp_max_upload_size() )
	die( 'It is too large than expected.' );
	
if( !in_array( $new_file_mime, get_allowed_mime_types() ) )
	die( 'WordPress doesn\'t allow this type of uploads.' );
	
while( file_exists( $new_file_path ) ) {
	$i++;
	$new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $profilepicture['name'];
}

// looks like everything is OK
if( move_uploaded_file( $profilepicture['tmp_name'], $new_file_path ) ) {
	
	$date = date('Y-m-d H:i:s');
    $title = $_POST['name'];
    $text = $_POST['textarea'];
    // $category = $_POST['category'];
    // $thumpnail = $_POST['file'];
    echo "test";
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

    my_attach_external_image( null, $post_id, $new);

// $attach_id = wp_insert_attachment( $attachment_data, $getImageFile, $post_id );
    if( $post_id ){
        echo "Post successfully published!";
    } else {
        echo "Something went wrong, try again.";
    };

	$upload_id = wp_insert_attachment( array(
		'guid'           => $new_file_path, 
		'post_mime_type' => $new_file_mime,
		'post_title'     => preg_replace( '/\.[^.]+$/', '', $profilepicture['name'] ),
		'post_content'   => '',
		'post_status'    => 'inherit'
	), $new_file_path, $post_id );
	// wp_generate_attachment_metadata() won't work if you do not include this file
	require_once( ABSPATH . 'wp-admin/includes/image.php' );

	// Generate and save the attachment metas into the database
	wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );

	// Show the uploaded file in browser
	wp_redirect( home_url() );
	set_post_thumbnail(  $post_id, $upload_id );
}