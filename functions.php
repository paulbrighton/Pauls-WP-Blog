<?php

// Import php files from lib folder
require_once('lib/customize.php');
require_once('lib/helpers.php');
require_once('lib/enqueue-assets.php');
require_once('lib/sidebars.php');
require_once('lib/theme-support.php');
require_once('lib/navigation.php');
require_once('lib/comment-callback.php');
require_once('lib/images.php');
require_once('lib/translations.php');
require_once('lib/metaboxes.php');
require_once('lib/portfolio-cpt.php');

remove_filter( 'the_content', 'wpautop' );

function my_acf_add_local_field_groups() {
  remove_filter('acf_the_content', 'wpautop' );
}
add_action('acf/init', 'my_acf_add_local_field_groups');

add_filter( 'get_the_archive_title', 'wpsite_archive_title_remove_prefix' );
function wpsite_archive_title_remove_prefix( $title ) {
if ( is_post_type_archive() ) {
$title = post_type_archive_title( '', false );
}
return $title;
}

// add_filter('widget_posts_args', 'widget_posts_args_add_custom_type'); 
// function widget_posts_args_add_custom_type($params) {
//    $params['post_type'] = array('post','portfolio');
//    return $params;
// }
// add_filter('acf/settings/remove_wp_meta_box', '__return_false');

add_filter('acf/settings/remove_wp_meta_box', '__return_false');
