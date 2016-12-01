<?php

function learningWordPress_resources() {

  wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', learningWordPress_resources);


// Navigation menus
register_nav_menus(array(
  'primary' => __('Primary Menu'),
  'footer' => __('Footer Menu')
));


// Get top ancestor
function get_top_ancestor_id() {
  global $post;

/*if viewing a parent page it'll return its own value. If its a child it'll return the latter.*/
  if ($post->post_parent) {
    $ancestors = array_reverse(get_post_ancestors($post->ID));
    return $ancestors[0];
  }
  return $post->ID;
}
