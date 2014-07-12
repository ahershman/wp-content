
<?php get_header(); ?>



<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php
		$customfieldsArray = get_post_custom();
		$iFramePath = $customfieldsArray['iframe'];
	?>
	<div class="content-image">
		<?php 
		 		// content of div
				if($iFramePath) {
					 print $iFramePath[0];
					 //adjust height of slippy div iframe based on thumnail height
					 
					 $tn = get_the_post_thumbnail();
					 
					//extract height string from html img tag 
					 preg_match('/height="[0-9]+"/', $tn, $match); 
					 
					 $len = strlen($match[0]);
					 $height = (int)substr($match[0],8,$len-9); //extract height number
					 
					 print "<!-- $match[0] $height -->\n"; // debug code!
					 print '<style type="text/css">'.".slippy {height:${height}px;}</style>\n";		
				 }
				
		 		elseif ( has_post_thumbnail() ){	 
			 	 		the_post_thumbnail(); 
				 }
		 		else echo "&nbsp;";
		  ?>

	</div><!-- content-image -->
	<div class="content-text">
		<script>
			var x = geth();
			document.getElementById("content").lastChild.style.minHeight = x;
		</script>


		<h1><?php the_title(); ?></h1>
		<!--<h4>Posted on <?php the_time('F jS, Y') ?></h4> -->
		<p><?php the_content(__('(more...)')); ?></p> 
   
	</div><!-- content-text -->
    
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

</div ><!-- content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?> 

