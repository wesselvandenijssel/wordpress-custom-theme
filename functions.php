<?php 

function wesselvandenijssel_register_styles(){

    wp_enqueue_style('wesselvandenijssel-style', get_template_directory_uri() . "/assets/css/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'wesselvandenijssel_register_styles');

?>