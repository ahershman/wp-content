<?php
/*
 * Template Name: blog-summary
 * Description: Summary blog page
 */
get_header(); 

?>

<div id="content">

<?php $my_query = new WP_Query('posts_per_page=10'); ?>

<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
  <div class="content-image">
		<?php 
		 		if ( has_post_thumbnail() ){	 
			 	 		the_post_thumbnail('thumbnail'); 
				 }
		 		/*else echo "&nbsp;"; */
		  ?>

	</div><!-- content-image -->
	<div class="content-text">
		<h1><?php the_title(); ?></h1>
		<!--<h4>Posted on <?php the_time('F jS, Y') ?></h4> -->
		<p><?php the_excerpt(); ?></p> 
   
	</div><!-- content-text -->
<?php endwhile; ?>

</div ><!-- content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?> 

