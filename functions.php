<?php
// this is for add the menu option in wp
register_nav_menus(

    array('primary-menu' =>'Top Menu')
);
// This code for add the feature image option in wp
add_theme_support('post-thumbnails');

// this code for add the header logo option in wp
add_theme_support('custom-header');

// this function for add the widget option in wp

register_sidebar(
    array( 'name' => "sidebar location",
    'id' => 'sidebar')
);

// this function add the custom image in background

add_theme_support('custom-background');

// ADD THE SHORT DISCRIPTION IN PAGE OPTION 

add_post_type_support('page', 'excerpt');

?>