<?php get_header(); ?>
<div id="wrapper">
<div id="main">
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id = "content-image">Content image div
</div>
<div id = "content-text">
  <h1><?php the_title(); ?></h1>
  <!--<h4>Posted on <?php the_time('F jS, Y') ?></h4> -->
  <p><?php the_content(__('(more...)')); ?></p>
  <hr> <?php endwhile; else: ?>
</div>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div.
<?php get_sidebar(); ?>
</div>
<!-- <?php get_footer(); ?> -->
</div>