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

add_filter('acf/settings/remove_wp_meta_box', '__return_false');

function add_file_types_to_uploads($file_types){
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg';
  $file_types = array_merge($file_types, $new_filetypes );
  return $file_types;
  }
  add_filter('upload_mimes', 'add_file_types_to_uploads');

function new_excerpt_more( $more ) {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_image_size( 'post-thumbnail size', 960, 540 );

add_action('wp_head', 'fouc_protect_against');
/**
 * Combat FOUC in WordPress
 * @link https://stackoverflow.com/questions/3221561/eliminate-flash-of-unstyled-content
 */
function fouc_protect_against () {
    ?>
        <style type="text/css">
            .hidden {display:none;}
        </style>
        <script type="text/javascript">
         jQuery('html').addClass('hidden');
	            
	 jQuery(document).ready(function($) {		            
	    $('html').removeClass('hidden');	            
	 });  
        </script>
    <?php

}