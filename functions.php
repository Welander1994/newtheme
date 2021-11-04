<?php

if (is_user_logged_in()) {
    show_admin_bar(true);
}

function additional_custom_styles() {

    /*Enqueue The Styles*/
    wp_enqueue_style( 'uniquestylesheetid', get_template_directory_uri() . '/tailwind.css' ); 
}
add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

