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

<span class="banner">
  <?php the_post_thumbnail('banner-image'); ?>
</span>

<?php if ( is_search() OR is_archive() ) { ?>

<p>
  <?php echo get_the_excerpt(); ?>
  <a href="<?php the_permalink(); ?>"> Read more&raquo; </a>
</p>

<?php } else {
  if ($post->post_excerpt) { ?>
<p>
  <?php echo get_the_excerpt(); ?>
  <a href="<?php the_permalink(); ?>"> Read more&raquo;
  </a>
  <?php } else {
    the_content();
  }
} ?>
  <!-- <?php the_content(); ?> -->
</article>
