<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

// Register top Navition Menu

function register_menu() {
	register_nav_menu('top-menu', __('Top Menu'));
}
add_action('init', 'register_menu');

// View Featured Images in Admin
add_image_size('featured_preview', 55, 55, true);

// GET FEATURED IMAGE
function ST4_get_featured_image($post_ID) {
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($post_thumbnail_id) {
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'featured_preview');
        return $post_thumbnail_img[0];
    }
}

// ADD NEW COLUMN
function ST4_columns_head($defaults) {
    $defaults['featured_image'] = 'Featured Image';
    return $defaults;
}
 
// SHOW THE FEATURED IMAGE
function ST4_columns_content($column_name, $post_ID) {
    if ($column_name == 'featured_image') {
        $post_featured_image = ST4_get_featured_image($post_ID);
        if ($post_featured_image) {
            // HAS A FEATURED IMAGE
            echo '<img src="' . $post_featured_image . '" />';
        }
else {
// NO FEATURED IMAGE, SHOW THE DEFAULT ONE
echo '<img src="' . get_bloginfo( 'template_url' ) . '/assets/img/featured_default.jpg"/>';
}
    }
}


add_filter('manage_posts_columns', 'ST4_columns_head');
add_action('manage_posts_custom_column', 'ST4_columns_content', 10, 2);