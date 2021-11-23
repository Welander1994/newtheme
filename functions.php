<?php

if (is_user_logged_in()) {
    show_admin_bar(true);
}

	
add_theme_support( 'post-thumbnails' );

function additional_custom_assets() {
    wp_enqueue_style( 'uniquestylesheetid', get_template_directory_uri() . '/tailwind.css' ); 
    wp_enqueue_script( 'uniquescript', get_template_directory_uri() . '/javascript.js' ); 
}
add_action( 'wp_enqueue_scripts', 'additional_custom_assets' );


function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
  
    if(empty($first_img)){ //Defines a default image
      $first_img = "/images/default.jpg";
    }
    return $first_img;
  }

