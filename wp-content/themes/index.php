<?php

get_header();

if (have_posts()) :
  while (have_posts()) : the_post();
?>

<article class="post">
  <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <!-- Format display that codes the date F (spell out month) jS(j-day without leading 0 - S suffix of day ie 4th) Y (year) g:i a'(exact time published)-->

  <p class="post-info"><?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in <?php
  $categories = get_the_category();
  $separator = ", ";
  $output = '';

  if ($categories) {

    foreach ($categories as $category) {
      $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator; $category->cat_name . $separator;
    }

    echo trim($output, $separator);
  }
  //trim gets rid of the extra comma at the end of the categories section
   ?></p>

  <?php the_post_thumbnail(); ?>
  
  <?php the_content(); ?>
</article>

  <?php endwhile;

  else :
    echo '<p> No content found</p>';

  endif;

get_footer();
 ?>
