<?php

// if statement allows the funtion to be overwritten in the child theme
if(!function_exists('_themename_post_meta')) {
  function _themename_post_meta() {
    /* translators: %s: Post Date */
    printf(
      esc_html__('Posted on %s', '_themename'),
      '<span>' . '<a href="' . esc_url(get_permalink()) . '">' . '<time datetime="' . esc_attr(get_the_date("c")) . '">' .  esc_html(get_the_date()) . '</time>' . '</a>' . '</span>'
    );
    
   /* translators: %s: Post Author */
    printf(
      esc_html__(' By %s', '_themename'),
      '<span>' . '<a href="' . esc_url(get_author_posts_url(get_the_author_meta("ID"))) . '">' . esc_html(get_the_author()) . '</a>' . '</span>'
    );
  }
}

function _themename_readmore_link() {
  echo '<a class="c-post__readmore" href="' . esc_url(get_permalink()) . '" title="' . the_title_attribute(['echo' => false]) . '">';
  printf(
    wp_kses(
       /* translators: %s: Post Title */
    __('Read More <span class="u-screen-reader-text">About %s</span>', '_themename'),
      [
        'span' => [
          'class' => []
        ]
      ]
    ),
    get_the_title()
  );
  echo '</a>';
}

function _themename_meta($id, $key, $default) {
  $value = get_post_meta( $id, $key, true);
  if(!$value && $default) {
    return $default;
  }
  return $value;
 }