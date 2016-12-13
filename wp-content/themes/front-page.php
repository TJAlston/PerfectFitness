<?php

get_header();

if (have_posts()) :
  while (have_posts()) : the_post();
?>

<article class="post page">

  <?php

  if( has_children() OR $post->post_parent > 0) { ?>

  <nav class="site-nav children-links clearfix'>

    <span class="parent-link">
    <a href class='parent-title'="<?php echo get_the_permalink(get_top_ancestor_id()); ?>">
    <?php echo get_the_title(get_top_ancestor_id()); ?></a>
    </span>

    <ul>
      <?php

      $args = array(
      'child_of' => get_top_ancestor_id(),
      'title_li' => ''
      /* gets rid of header PAGES*/

      );?>

      <?php wp_list_pages($args); ?>
    </ul>

  </nav>

<?php } ?>

  <?php the_content(); ?>

</article>

  <?php endwhile;

  else :
    echo '<p> No content found</p>';

  endif;


//opinion posts loop beings here

$importantPosts = new WP_Query('cat=11&posts_per_page=2&orderby=title');

  if ($importantPosts->have_posts()) :

    while ($importantPosts->have_posts()) : $importantPosts->the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>

  <?php endwhile;

  else :

  endif;

get_footer();
 ?>
